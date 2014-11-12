
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
              #caption
              {
                font-family: "Comic Sans MS";
                font-size: 10pt;
                color: #e4b80a;
                font-weight: 600;
            }
        </style>
    </head>
    <body>
      <table align="center">
             <caption id="caption"><h1 align="center">Upload File </h1></caption>
            <tr>
        <td style="color: #339900;font-family:comic sans ms;font-size:14pt">Select File :</td><td>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" >
        <input type="file" name="file1"/>
             <input type="submit" value="upload"/>
         <input type="hidden" name="FILE_UPLOAD" value="OK"/>
        </form>
                
           
       <?php
      if(isset($_POST['FILE_UPLOAD']))
        {
          $file_name=$_FILES['file1']['name'];
          $tmp_name=$_FILES['file1']['tmp_name'];
          $file_size=$_FILES['file1']['size'];
          $file_type=$_FILES['file1']['type'];

          $path=pathinfo($file_name);
       
         
 move_uploaded_file($tmp_name,"images/".$file_name.".".$path['extension']);
       
            $db=mysql_connect("localhost", "root","");
  $m=$file_name;
  echo"$m";
   mysql_select_db("ostore",$db);
$query="LOAD DATA INFILE '$m' INTO TABLE products FIELDS TERMINATED BY ',' LINES TERMINATED BY '\\r\\n' (Type,Company,Model,price,p_upload,Desc1,Desc2,Desc3,Desc4,Desc5,Desc6,Desc7,Quantity);";
  $re= mysql_query($query,$db);
  echo "<h2>Uploading is Successfull...!!</h2> <br/>";
         
         
        
        }
         ?>      
           
        </td></tr></table>
    </body>
</html>  