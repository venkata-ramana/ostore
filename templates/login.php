


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title></title>
        <script>
    function validate()
{
    var id=document.forms[0].login_id.value;
    var pwd1=document.forms[0].pwd.value;
  var d=new Date();
  d.setHours(d.getHours()+1);  
  document.cookie="user="+id+";expires="+d.toGMTString()+";path=/;domain=localhost";   
    if(id==""||pwd1=="")
        {
            document.getElementById('error_msg').innerHTML="Please Fill Login Id and Password";         
           return false;
        }
    
     
        
     
        
 return true;
} 
 function onfocus1()
     {
         
          document.getElementById('li').value ="";
      if(document.getElementById('error_msg').value!=""||document.getElementById('err').value!="")
          {
              document.getElementById('error_msg').value ="";
              document.getElementById('err').value ="";
             
              
          }
     }
     function onfocus2()
     {
         
          document.getElementById('pwd').value ="";
     }
    </script>
        <style>
    
        label
            {
                color: purple;
                font-weight: bold;
                font-family:Comic sans MS;
                font-size:14pt;
            }
            #button
            {
               color:blue;
               background:orange;
               font-size:11pt;
               font-family:comic sans ms;
               border-bottom-color: #788708;
               border-top-color:#788708;
           
            }
        </style>
    </head>
    <body bgcolor="#ffffdd">
      <center>  <h2><a href="userlogin.php">User login</a></h2></center>
        <br/>
        <center>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post" onsubmit="return validate()">
              <table bgcolor="#D5EDB3" width="100%">
             <tr>
                 <td style="font-family:comic sans ms;font-size:25pt;color: Red;letter-spacing:2pt;font-weight: bold" align="center" >Administrator Login</td>
                    <td align="right"><label>Login ID : </label>
                    <input name="login_id" id="li" type="text" onfocus="onfocus1()" />
                    <label>Password : </label>
                    <input name="pwd" id="pwd" type="password" onfocus="onfocus2()"/></td>
                    <td align="center"><input type="submit" value="Login" id="button"/>
              </td>
             </tr>
             <tr><td></td><td align="right"><br/>
    <label style="font-size:12pt;color:red" id="error_msg">&nbsp;</label>
<?php
    if(isset($_POST['login_id'])&&isset($_POST['pwd']))
{
    $id=$_POST['login_id'];
    $pwd=$_POST['pwd'];
    
if($id=="admin"&&$pwd=="admin")
    {
        setcookie("logged_user",$id,time()+60*60);
        setcookie("is_login","1",time()+60*60);
        header("Location:admin.php");
    }
    else
    {
   ?>
   <label style='color:red;font-size:12pt' id="err">Invalid Login Details</label> 
    <?php
    
    }
}
?>
                        </td>

                </tr>
            </table>
            </form>
          
        </center>
        
    </body>
</html>
