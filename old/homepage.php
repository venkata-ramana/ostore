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
        <title>Home page of online shopping</title>
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
  <table bgcolor="#ffffFF" width="100%" height="30px" >
  <tr><td align="left" style="font-size:15pt;color:Red;font-family:Lucida Calligraphy">Welcome Mr. <?=$_COOKIE['logged_user']?>
      <td><body onload="ShowTime()">
<font color="red" size="4px" id="displayTime">&nbsp;</font>
</body>
</td>
      <TD><img src="24.png" width="150" height="20"></TD>  
  <TD><a href="userlogout.php" style='text-decoration:none'text ='black'><font size="4px"font style ="font-family:TIMES NEW ROMAN"><font color=Red><blink>Log Out</blink></font></a></td>
    
  <TD bgcolor="Red"><a href="payment.php" style='text-decoration:none'text ='black'><font size="5px"font style ="font-family:times new roman"><font color=Yellow><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CART</b></font></a></td>
  </tr>
  </table>
     
           <title>Online Shopping ---- Home page</title>

<script type="text/javascript" src="dropdowntabfiles/dropdowntabs.js">


</script>

<!-- CSS for Drop Down Tabs Menu #1 -->
<link rel="stylesheet" type="text/css" href="dropdowntabfiles/ddcolortabs.css" />

<!-- CSS for Drop Down Tabs Menu #2 -->
<link rel="stylesheet" type="text/css" href="dropdowntabfiles/bluetabs.css" />

<!-- CSS for Drop Down Tabs Menu #3 -->
<link rel="stylesheet" type="text/css" href="dropdowntabfiles/slidingdoors.css" />


<!-- CSS for Drop Down Tabs Menu #4 -->
<link rel="stylesheet" type="text/css" href="dropdowntabfiles/glowtabs.css" />

<!-- CSS for Drop Down Tabs Menu #5 -->
<link rel="stylesheet" type="text/css" href="dropdowntabfiles/halfmoontabs.css" />

<body>
    
<center>
<center><img src="Head.gif"></center> 
<center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="molo.gif" width="350" height="40"></center>
<div id="glowmenu" class="glowingtabs">
<ul>
<li><a href="home.php" target="iframe" title="Home"><span>Home</span></a></li>
<li><a href="books.php" target="iframe" title="CSS Library" rel="dropmenu1_d"><span>Books</span></a></li>
<li><a href="pens.php" target="iframe" title="Partners" rel="dropmenu2_d"><span>Pens</span></a></li>
<li><a href="Mobiles.php" target="iframe" title="Webmaster Tools"><span>Mobiles</span></a></li>
<li><a href="stationary.php" target="iframe" title="Webmaster Tools"><span>Stationary</span></a></li>
<li><a href="H&C.php" target="iframe" title="Webmaster Tools"><span>Hardware Components</span></a></li>
<li><a href="new.php" target="iframe" title="Webmaster Tools"><span>New Arrivals</span></a></li>
</ul>
</div>
<br style="clear: left;" />
<br class="IEonlybr" />


<!--1st drop down menu -->                                                   
<!--
<div id="dropmenu1_d" class="dropmenudiv_d">
<a href="s&c.php" target="iframe">Science & Technology</a>
<a href="" target="iframe">Computers & Internet</a>
<a href="" target="iframe">Biographies &  autobiohraphies</a>
<a href="" target="iframe">comics</a>
 
</div>
-->

<!--2nd drop down menu                                        
<div id="dropmenu2_d" class="dropmenudiv_d" style="width: 150px;">
<a href="" target="iframe">Fountain Pens</a>
<a href="" target="iframe">Ball Pens</a>
<a href="" target="iframe">Gel Pens</a>
<a href="" target="iframe">Special Pens</a>
</div>
-->
<script type="text/javascript">
//SYNTAX: tabdropdown.init("menu_id", [integer OR "auto"])
tabdropdown.init("glowmenu", "auto")
</script>
<br/>

<table bgcolor="#ffffff">
<tr>
<td><img src="2.png" width="100" height="275"></a></td>
<td><center><iframe name="iframe" width="900" height="1200" src="home.php" target="iframe" align="center"></center></iframe></td>
</tr>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" background="foot.png">
<tr>
<br/>
<br/>
<td><img src="2.png" width="300" height="50"></td>
<td><br><ul><li><font color="white">How do I? <ul> <li class="first-child">Buy a product</a></li><li>Pay for my purchase</a></li> <li>Track my order</a></li> <li>Exchange for a different item</a></li> <li>Return a product</a></li> <li class="last-child">Cancel my order</a></li> </ul> </li></td> 
<td><li><font color="white"> My Account <ul> <li class="first-child">Forgot/change password</a></li> <li>Track my order</a></li></ul> </li></td>
<td><li><font color="white">Policies<ul> <li>T&amp;C</a></li> <li class="last-child">Privacy Policy</a></td></font>
<td><img src="2.png" width="300" height="50"></td>
</tr>
</table>

 
  
  <?php
}

?>

</body>
</html>