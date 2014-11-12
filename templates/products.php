<html>
    <head><link rel="stylesheet" href="css/components.css">
        <style>
           #table
            {
                width:100%;
                height:300px;
               
            }
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
    <?
	$db=mysql_connect("localhost","root","");
	mysql_select_db("ostore",$db);
	?>
              <form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
  
        <table id="table" align="center" cellpadding="3" cellspacing="3" >
             <caption id="caption"><h1 align="center">Products </h1></caption>
            <tr>
                <td align="right">
                <tr>  <td align="right"> <label>Type :</label></td>
                    <td><select name="ptype" class="form-control">
                            <?
							$query="select distinct c_name from category";
							$re=mysql_query($query,$db);
							while($row=mysql_fetch_row($re))
							{
							print"<option>$row[0]</option>";
							}
							?>
							</select></td> </tr> 
							
							<tr>  <td align="right"> <label>Company :</label></td>
                <td><input type="text" class="form-control" name="Comp" required/></td> </tr>

							<tr><td align="right">  <label>Model :</label> </td>
                        <td>
                            <input type="text" name="Model" class="form-control" required/></td></tr>
              <tr><td align="right" valign="top"><br/><label>Price :</label></td>
        <td valign="middle"> 
           <input type="text" name="Price" class="form-control" required/> 
        </td></tr>
                </tr>
                <tr><td align="right"><label>Picture :</label></td>
                    <td> <input type="file" class="form-control" required name="files1" value="" />
        </td>
</tr>
       
                <tr>  <td align="right"> <label>Desceription :</label></td>
                <td><input type="text" class="form-control" name="Desc1" required/></td> </tr>
				   <tr>  <td align="right"> <label>Desceription :</label></td>
                <td><input type="text" class="form-control" name="Desc2" required/></td> </tr>
				   <tr>  <td align="right"> <label>Desceription :</label></td>
                <td><input type="text" class="form-control" name="Desc3" required/></td> </tr>
				   <tr>  <td align="right"> <label>Desceription :</label></td>
                <td><input type="text" class="form-control" name="Desc4" required/></td> </tr>
				   <tr>  <td align="right"> <label>Desceription :</label></td>
                <td><input type="text" class="form-control" name="Desc5" /></td> </tr>
				   <tr>  <td align="right"> <label>Desceription :</label></td>
                <td><input type="text" class="form-control" name="Desc6" /></td> </tr>
				   <tr>  <td align="right"> <label>Desceription :</label></td>
                <td><input type="text" class="form-control" name="Desc7" /></td> </tr>
           <tr>  <td align="right"> <label>Quantity :</label></td>
                <td><input type="text" class="form-control" name="Quantity" required/></td> </tr>       
        
<tr> <td align="right"><input type="submit" value="submit" style="font-family: comic sans ms;color:#339900"/></td></tr>
        </table>
                         <input type="hidden" name="SUBMIT_OK" value="TRUE"/>
              </form>
       
    </body>
<?php
      if(isset($_POST['SUBMIT_OK'])&&($_POST['SUBMIT_OK']=="TRUE"))
{
$a=$_POST['ptype'];
 $b=$_POST['Model'];
 $c=$_POST['Price'];
 $d=$_POST['Desc1'];
  $e=$_POST['Desc2'];
  $f=$_POST['Desc3'];
 $g=$_POST['Desc4'];
 $h=$_POST['Desc5'];
 $i=$_POST['Desc6'];
 $j=$_POST['Desc7'];
 $k=$_POST['Quantity'];
 $z=$_POST['Comp']; 
    
    
                
 $file_name=$_FILES['files1']['name'];
         $tmp_name=$_FILES['files1']['tmp_name'];
         $file_size=$_FILES['files1']['size'];
         $file_type=$_FILES['files1']['type'];
          
          
          
         
        function getrandomfilename()
        {
            $s="abcdefghijklmopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
          return substr(str_shuffle($s),0,7);  
        }
             
          $filename1=getrandomfilename();
          $path=pathinfo($file_name);
       
    move_uploaded_file($tmp_name,"projectfiles/".$filename1.".".$path['extension']);
  
    $profile=$filename1.".".$path['extension'];    
   $db=mysql_connect("localhost", "root","");
   mysql_select_db("ostore",$db);
  $query1="INSERT INTO `ostore`.`products` (`Type`,`Company`, `Model`, `price`, `p_upload`, `picture`, `Desc1`,`Desc2`, `Desc3`,`Desc4`, `Desc5`,`Desc6`, `Desc7`, `Quantity`) VALUES ('$a','$z', '$b', '$c',CURRENT_TIMESTAMP, '$profile', '$d', '$e','$f','$g','$h','$i','$j','$k')";
   $re= mysql_query($query1,$db);
   if($re)
   {
       echo "<center><h1>sucessfully registerd.</center></h1>";
    }
         else
         {
             echo "error";
         }
         }

         ?>
</html>
