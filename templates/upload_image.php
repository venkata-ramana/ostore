
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
             <caption id="caption"><h1 align="center">Upload Image </h1></caption>
            <tr>
        <td style="color: #339900;font-family:comic sans ms;font-size:14pt">Select Image :</td><td>
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
          
          
          
         if(is_uploaded_file($_FILES['file1']['tmp_name']))
          {
        function getrandomfilename()
        {
            $s="abcdefghijklmopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
          return substr(str_shuffle($s),0,7);  
        }
             
          $filename1=getrandomfilename();
          $path=pathinfo($file_name);
       
         
 move_uploaded_file($tmp_name,"images/".$filename1.".".$path['extension']);
       
            $db=mysql_connect("localhost", "root","");
  $m="images/".$filename1.".".$path['extension'];
   mysql_select_db("ostore",$db);


   $query1="INSERT INTO `ostore`.`products` (
`picture`
)
VALUES (
'$m'
);
";
  $re= mysql_query($query1,$db);
  echo "<h2>Your Uploaded image has saved in Gallery</h2> <br/>";
  


          ?>
            <img src=<?="images/".$filename1.".".$path['extension']?> height="100px" width="100px"/>
        <?php
        
         }
        
        }
         ?>      
           
        </td></tr></table>
    </body>
</html>  