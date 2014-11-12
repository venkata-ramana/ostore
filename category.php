<html>
    <head>
	<link rel="stylesheet" href="css/components.css">
        <style>
          
            label
            {
                color: blue;
                word-spacing:1px;
                font-weight: 600;
                font-family: "Century Gothic";
                font-size:14pt;
                
            }
              #caption{
                font-family: "Century Gothic";
                font-size: 10pt;
                color: red;
                font-weight: 600;
            }
        </style>
    </head>
    <body>
    
              <form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
  <caption id="caption"><h1 align="center">Add Item </h1></caption>
        <table id="table" align="center" >
             
            <tr>
                <td align="right">
                    <label>Category ID :</label></td>
                 <td>
                            <input type="text" class="form-control" name="c_id" required/></td>
               </tr>
        <tr>
                <td align="right">
                    <label>Category Name :</label>
                </td>
                 <td>
                            <input type="text" class="form-control" name="c_name" required/></td>
               </tr>
       
<tr> <td align="right"><input type="submit" value="submit" style="font-family: comic sans ms;color:#339900"/></td></tr>
        </table>
                         <input type="hidden" name="SUBMIT_OK" value="TRUE"/>
              </form>
    </body>
<?php
      if(isset($_POST['SUBMIT_OK']))
{

 $pid=$_POST['c_id'];
 $pname=$_POST['c_name'];

   $db=mysql_connect("localhost", "root","");
   mysql_select_db("ostore",$db);
  $query1="INSERT INTO `ostore`.`category` (`c_id`, `c_name`) VALUES ('$pid', '$pname')";
   $re= mysql_query($query1,$db);
   if($re)
   {
       echo "<center><h1>sucessfully Registred </h1></center>";
    }

         else
         {
             echo "error ";
         }
}
         ?>
</html>
