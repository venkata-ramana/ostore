<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Online Shopping...!!</title>
    <link href="1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
<style>
body
{
background-image:url(bg.jpg);
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
            <a href="">
                <img src="check/1.jpg" alt="Welcome to Online Shopping." />
            </a>
            <img src="check/2.jpg" alt="100%genuine Products" />
            <img src="check/3.jpg" alt="Best Collection" />
            <img src="check/4.jpg" alt="Reliable Prices" />
            <img src="check/5.jpg" alt="1 warrenty products"/>
        </div>
    </div>
<?
$db=mysql_connect("localhost","root","");
mysql_select_db("ostore",$db);
$query="select * from products order by price DESC LIMIT 5";
$query1="select * from products LIMIT 5";
$re=mysql_query($query,$db);
print"<table align=center>";
print"<tr><td><h1><a href=>Popular Mobiles</a></h1></td></tr></table>";
print"<table align=center><tr>";
while($rows=mysql_fetch_row($re))
{
	echo"<td><div class=bg><img src=".$rows['6']." width=100 height=150 alt=noimage><p class=price>Price : ".$rows['3']."</p></div></td>";
}
print"</tr></table>";

print"<table align=center>";
print"<tr><td><h1><a href=>Popular Laptops</a></h1></td></tr></table>";
$re1=mysql_query($query1,$db);
print"<table align=center><tr>";
while($rows=mysql_fetch_row($re1))
{
	echo"<td><div class=bg><img src=".$rows['6']." width=100 height=150 alt=noimage><p class=price>Price : ".$rows['3']."</p></div></td>";
}
print"</tr></table>";

print"<table align=center>";
print"<tr><td><h1><a href=>Popular Desktops</a></h1></td></tr></table>";
$re1=mysql_query($query1,$db);
print"<table align=center><tr>";
while($rows=mysql_fetch_row($re1))
{
	echo"<td><div class=bg><img src=".$rows['6']." width=100 height=150 alt=noimage><p class=price>Price : ".$rows['3']."</p></div></td>";
}
print"</tr></table>";

print"<table align=center>";
print"<tr><td><h1><a href=>Latest Gadgets</a></h1></td></tr></table>";
$re1=mysql_query($query1,$db);
print"<table align=center><tr>";
while($rows=mysql_fetch_row($re1))
{
	echo"<td><div class=bg><img src=".$rows['6']." width=100 height=150 alt=noimage><p class=price>Price : ".$rows['3']."</p></div></td>";
}
print"</tr></table>";
?>

	
	
	<tr><td>
	
	</td></tr></table>
</body>
</html>
