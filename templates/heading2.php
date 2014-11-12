<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <style>
#footer
{
 
}
#menu
{
    
    width:300px;
    float: left;
    text-align:center;
    height:200px;
}

#menu a
{
    width:300px;
    height:50px;
    background-color: blue;
    color:#ffffca;
    
    text-align:center;
    font-family: "Comic Sans MS";
    font-size: 20px;
    float: left;
   
    text-decoration: none;
    border:1px solid #daa716;
}

#menu a:hover
{
        background-color: #3d4b00;
    color:#99cc00;
}

#content
{
   
    border:1px solid #fffca;
    width:70%;
 
}
</style>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Admin home pages</title>
        <script language="javascript">

function ShowTime()
{
var d=new Date();

var hours=d.getHours();
var mins=d.getMinutes();
var seconds=d.getSeconds();

document.getElementById('displayTime').innerHTML="User Login Time : "+hours+" : "+mins+" : "+seconds;
t=setTimeout("ShowTime()",1000);
}


</script>
    </head>
    <body bgcolor="#ffffff">
 <?php
 if(isset($_COOKIE['logged_user'])&&!empty($_COOKIE['logged_user']))
    {

?>   
  <table bgcolor="blue" width="100%" height="80px" >
  <tr><td align="left" style="font-size:18pt;color:white;font-family:Lucida Calligraphy">Welcome Mr. <?=$_COOKIE['logged_user']?>
      <td><body onload="ShowTime()">
  
  <td align="right">
<font color="yellow" size="5px" id="displayTime">&nbsp;</font>
      </td>
  
</body>
</td>
 
  
  <?php
}

?>

</body>
</html>