<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Online Shopping...!!</title>
    <link href="Header/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="Header/1/js-image-slider.js" type="text/javascript"></script>
    <link href="Header/generic.css" rel="stylesheet" type="text/css" />
<style>
body
{
background-image:url(Header/bg.jpg);
}
.bg
{
width:185px;
height:220px;
background-color:#fff;
border-radius:10px;
margin:10px;
display:inline-block;
text-align:center;
padding-top:5px;
opacity:1;
}
.bg:hover
{
box-shadow:0px 0px 30px 5px grey;
}
.price
{
width:165px;
height:30px;
color:white;
background-color:gray;
border-radius:10px;
text-align:center;
padding-top:5px;
font-family:comic sans ms;
font-weight:bold;
margin:10px;	
font-size:12pt;
}
.price:hover
{
background-color:green;
color:white;
cursor:pointer;
}
h1
{
width:1024px;
height:30px;
background-color:#fff;
border-radius:10px;
color:blue;
padding-left:20px;
box-shadow:0px 0px 20px 1px grey;
font-weight:normal;
font-family:comic sans ms;
font-size:14pt;
}
a
{
text-decoration:none;
}
</style>
</head>
<body>
    <div id="sliderFrame">
        <div id="slider">
            <a href="userlogin.php">
                <img src="Header/8.jpg" alt="" />
            </a>
            <img src="Header/6.jpg" alt="" />
            <img src="Header/7.jpg" alt="" />
            <img src="Header/6.jpg" alt="Reliable Prices" />
            <img src="Header/7.jpg" alt=""/>
        </div>
    </div>
<?
$db=mysql_connect("localhost","root","");
mysql_select_db("ostore",$db);
$query="select * from products where Type='mobile' order by p_upload DESC limit 5";
$query1="select * from products where Type='laptop' order by p_upload DESC limit 5";
$query2="select * from products where Type='tablet' order by p_upload DESC limit 5";
$query3="select * from products where Type='gadget' order by p_upload DESC limit 5";
$re=mysql_query($query,$db);
print"<table align=center>";
print"<tr><td><h1><a href=userlogin.php>Popular Mobiles</a></h1></td></tr></table>";
print"<table align=center><tr>";
while($rows=mysql_fetch_row($re))
{
	echo"<td><div class=bg><a href=userlogin.php><img src=projectfiles/".$rows['6']." width=100 height=150 alt=noimage><p class=price>Price : ".$rows['4']."</p></div></a></td>";
}
print"</tr></table>";

print"<table align=center>";
print"<tr><td><h1><a href=userlogin.php>Popular Laptops</a></h1></td></tr></table>";
$re1=mysql_query($query1,$db);
print"<table align=center><tr>";
while($rows=mysql_fetch_row($re1))
{
	echo"<td><a href=userlogin.php><div class=bg><img src=projectfiles/".$rows['6']." width=100 height=150 alt=noimage><p class=price>Price : ".$rows['4']."</p></div></a></td>";
}
print"</tr></table>";

print"<table align=center>";
print"<tr><td><h1><a href=userlogin.php>Popular Tablets</a></h1></td></tr></table>";
$re2=mysql_query($query2,$db);
print"<table align=center><tr>";
while($rows=mysql_fetch_row($re2))
{
	echo"<td><a href=userlogin.php><div class=bg><img src=projectfiles/".$rows['6']." width=100 height=150 alt=noimage><p class=price>Price : ".$rows['4']."</p></div></a></td>";
}
print"</tr></table>";

print"<table align=center>";
print"<tr><td><h1><a href=userlogin.php>Latest Gadgets</a></h1></td></tr></table>";
$re3=mysql_query($query3,$db);
print"<table align=center><tr>";
while($rows=mysql_fetch_row($re3))
{
	echo"<td><div class=bg><img src=projectfiles/".$rows['6']." width=100 height=150 alt=noimage><p class=price>Price : ".$rows['3']."</p></div></td>";
}
print"</tr></table>";
?>

	
	
	<tr><td>
	
	</td></tr></table>
</body>
</html>
