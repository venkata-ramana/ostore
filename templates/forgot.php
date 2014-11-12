<html>
    <head>
        <style>
		body
		{
		background-image:url(b.gif);
		}
         button
		 {
		 width:180px;
		 height:30px;
		 background-color:pink;
		 border-radius:8px;
		 outline:0;
		 }
			button:active
			{
			background-color:cyan;
			}
		 p
		 {
		 color:blue;
		 font-weight:bold;
		 font-size:13pt;
		 }
        </style>
		<link rel="stylesheet" href="css/components.css">
    </head>
    <body>
    
              <form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
  <table id="table" border="0" align="center"  >
                   <h2 align="center">Forgot My Password</h2>
				   <tr><td align="right"> <p> Enter Date of Birth :</p></td>             
                  <td><input type="text" class="form-control" maxlength="10" name="dob" placeholder="YYYY/MM/DD" /></td></tr>
 <tr><td align="right"> <p> Enter Phone Number :</p></td>             
                  <td><input type="text" class="form-control" maxlength="10" name="phn" /></td></tr>
				   <tr><td align="right"> <p> Enter E-mail:</p></td>             
                  <td><input type="text" class="form-control" maxlength="20" name="email" /></td></tr>
				  <tr><td>.</td></tr>

                                <tr> <td></td><td><button type="submit" name="submit">Get Password</button></td></tr>
        </table>
                       
                                       </form>
       
    </body>
<?php
      if(isset($_POST['submit']))
{
$a=$_POST['dob'];
$b=$_POST['phn'];
$c=$_POST['email'];
$db=mysql_connect("localhost", "root","");
   mysql_select_db("ostore",$db);
  $query1="SELECT * FROM `users` WHERE Phone_Number='$b' and Email='$c' and `Birthday`='$a' ";
   $re= mysql_query($query1,$db);
   while ($row = mysql_fetch_row($re))
       {
       echo "<center><p>Your Password Is :  $row[3]</p></center>";
		}
		if($re)
			echo"";
		else
			echo"<p>Please check the data you have entered...</p>";

}
         ?>
    <br/>
    <br/>
   

                    <td align="center"> <a href="userlogin.php" style='text-decoration:none'text ='black'><font size="5" font style ="font-family:algeria"><font color="red"><center>Go to Login</center></font></a></td>

</html>