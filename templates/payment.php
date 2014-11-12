<style>
table
{
border:3px solid blue;
border-radius:15px;
}
td
{
border:1px solid red;
}
button
{
width:150;
height:30;
background-color:gold;
border-radius:10px;
text-align:center;	
}
div.a
{
width:300;
height:30;
background-color:gold;
border-radius:10px;
text-align:center;
}
button:hover{background-color:red;}
a:hover{color:white}
a
{
font-family:comic sans ms;
font-weight:bold;
margin:5px;
text-decoration:none;
font-size:14pt;
font-color:green;
text-align:center;
}
a:hover
{
color:green;
}
p
{
font-size:14pt;
color:green;
font-weight:bold;

}
</style>

<link rel="stylesheet" href="css/components.css">
<script>
function cal(a,b)
{
var sum=0;

for(i=1;i<=a;i++)
sum+=b;

	document.getElementById('tot').innerHTML=sum;
document.getElementById('tota').value=sum;
document.getElementById('quant').value=a;
}
</script>
</head>
<center><h1>Welcome to Cart</h1>
<div class="a"><a href="items.php?type=mobile&Company=Motorola">Add more items to the cart</a></div></center></br>
<?php 

session_start();
$user=$_SESSION['login_user'];
$db=mysql_connect("localhost","root","");

mysql_select_db("ostore",$db);

$query="select * from cart where user='$user'";

 $re= mysql_query($query,$db);
 
print"<table width=80% align=center>";
print"<tr bgcolor=red><td>Product ID</td><td>Product Name</td><td>Product Price</td><td>Product Description</td><td>Quantity</td><td>Product Picture</td><td>remove</td></tr>";
$total=0;
while ($rows=mysql_fetch_row($re))
{
$total+=$rows[2];
print"<tr><td>$rows[1]</td><td>$rows[3]</td><td>$rows[2]</td><td>$rows[4]</td><td><select name=quantity class=form-control onchange=cal(this.value,$total)><option value=1>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></td><td><a href=details.php?p_id=$rows[1]><img src=projectfiles/$rows[5] alt=$rows[5] width=100 height=120></a></td><td><a href=remove.php?p_id=$rows[1]>delete</a></td></tr>";

}

?>
<?
if(isset($_POST['quantity']))
{
$a=$_POST['quantity'];
echo "$a";
}

print"<tr bgcolor=red><td colspan=5><center>Total Price</center></td><td colspan=2><center><font color=white size=4pt><span id=tot>$total</span></center></td></tr>";
print"</table>";
print"<table border=0 align=center>";
print"<form method=post action=payment1.php>";
print"<tr><td>Quanity : </td><td><input type=text name=quant id=quant value=1 readonly></td><tr>";
print"<tr><td>Total Amount : </td><td><input type=text name=price id=tota value=$total readonly></td></tr>";
print"<tr><td colspan=2 align=center><button type=submit name=submit>Pay Online</button></td></tr></table>";
print"</form>";
print"</center>";
?>



