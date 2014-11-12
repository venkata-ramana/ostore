<html>
    <head>
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
    
              <form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
<td align="center"> <a href="userlogin.php" style='text-decoration:none'text ='black'><font size="5" font style ="font-family:algeria"><font color="red"><blink><center>Click Here to login</center></blink></font></a></td>
        <table id="table" align="center" cellpadding="3" cellspacing="3" >
             <caption id="caption"><h1 align="center">User Registration </h1></caption>
            <tr>
                <td align="right">
                    <label>User ID :</label>
                </td>
                 <td>
                            <input type="text" name="user_id" /></td>
               </tr>
                <tr><td align="right">  <label>User Name :</label> </td>
                        <td>
                            <input type="text" name="user_name" required/></td></tr>
              <tr><td align="right" valign="top"><br/><label>Password :</label></td>
        <td> 
           <input type="password" name="pwd" required/>
        </td></tr>
                </tr>
                <tr>  <td align="right"> <label>Location :</label></td>
                <td><input type="text" name="location" required/></td> </tr>
                <tr>  <td align="right"> <label>Gender :</label></td>
                    <td> <select name="gen">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                      </td> </tr>
                <tr>  <td align="right"> <label>Security Key :</label></td>
                <td><input type="text" name="sk" required/></td> </tr>
                <tr>  <td align="right"> <label>Address :</label></td>
                    <td valign="middle">       <textarea rows="5" required cols="10" id="addr" name="address" style="resize:none" required>
                        </textarea></td> </tr>
                
                <tr><td align="right"><label>Profile Picture :</label></td>
                    <td> <input type="file" required name="files1" value="" />
        </td>
</tr>
       
<tr> <td align="right"><input type="submit" value="submit" style="font-family: comic sans ms;color:#339900"/></td></tr>
        </table>
                         <input type="hidden" name="SUBMIT_OK" value="TRUE"/>
              </form>
       
    </body>
<?php
      if(isset($_POST['SUBMIT_OK'])&&($_POST['SUBMIT_OK']=="TRUE"))
{
$a=$_POST['user_id'];
 $b=$_POST['user_name'];
 $c=$_POST['pwd'];
 $d=$_POST['location'];
  $e=$_POST['gen'];
 $f=$_POST['address'];
 $h=$_POST['sk'];
   
    
    
                
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
  
       
    $profile="projectfiles/".$filename1.".".$path['extension'];

    
    
    
   $db=mysql_connect("localhost", "root","");
   mysql_select_db("ostore",$db);
  $query1="INSERT INTO `ostore`.`users` (`user_id`, `user_name`, `pwd`, `location`, `gen`, `picture`,`address`,`sk`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f','$h','$profile')";
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
