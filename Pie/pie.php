<!doctype html>
<html>
	<head>
		<title>Pie Chart</title>
		<script src="Chart.js"></script>
	<style>
	td
	{
		font-family:comic sans ms;

	font-size:14pt;
	color:red;
	}
	</style>
	</head>
<?
print"<form method=post>";
$db=mysql_connect("localhost","root","");
mysql_select_db("ostore",$db);
$query="select distinct Type from products";
print"<table border=0 align=center>";
$re=mysql_query($query,$db);
	print"<tr><td align=right>Type of the Product :</td>";
	print"<td><select name=Typ>";
	while($rows=mysql_fetch_row($re))
		{
	print"<option>$rows[0]</option>";
		}
		print"</select></td>";

$query1="select distinct Company from products";
$re=mysql_query($query1,$db);
		print"<tr><td align=right>Name of the Company:</td>";
	print"<td><select name=Comp>";
	while($rows=mysql_fetch_row($re))
		{
	print"<option>$rows[0]</option>";
		}
		print"</select></td></tr>";

$query2="select distinct Model from products";
$re=mysql_query($query2,$db);

		print"<tr><td align=right>Model of the Product:</td>";
	print"<td><select name=Mod>";
	while($rows=mysql_fetch_row($re))
		{
	print"<option>$rows[0]</option>";
		}
		print"</select></td></tr>";
		print"<tr><td colspan=2 align=center><button type=submit name=submit>Check</button><td></tr>";
print"</form>";
?>
<?
if(isset($_POST['submit']))
{
	
	$T=$_POST['Typ'];
	$C=$_POST['Comp'];
	$M=$_POST['Mod'];

$db=mysql_connect("localhost","root","");
mysql_select_db("ostore",$db);
$query3="select p_id from products where Type='$T' and Model='$M' and Company='$C'";
$re3=mysql_query($query3,$db);
	while($row=mysql_fetch_row($re3))
		{	
		
	$pid=$row[0];
		}	

$query4="select sum(quantity) from purchases where p_id='$pid'";
$re4=mysql_query($query4,$db);
	while($row=mysql_fetch_row($re4))
		{	
	$a=$row[0];
		}	
	}
?>
<?$b=100?>

	<body>
	<tr><td colspan="2" align="center">
		<div id="canvas-holder">
			<canvas id="chart-area" width="300" height="300"/>
		</div>
</td></tr></table>
	<script>
var a,b,c,d,e;
a=<?=$a?>;
b=<?=$b?>;

var pieData = [
				{
					value: a,
					color:"#46BFBD",
					highlight: "#5AD3D1",
					label: "Sold Items"
				},
				{
					value: b,
					color: "#F7464A",
					highlight: "#FF5A5E",
					label: "Total Items"
				},
				
			];

			window.onload = function(){
				var ctx = document.getElementById("chart-area").getContext("2d");
				window.myPie = new Chart(ctx).Pie(pieData);				
				
			};



	</script>

	</body>

</html>
