<?
include"header.php";
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Online Shopping..!!</title>
		<meta name="description" content="Blueprint: Slide and Push Menus" />
		<meta name="keywords" content="sliding menu, pushing menu, navigation, responsive, menu, css, jquery" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom.js"></script>
<style>
hr
{
border:2px solid grey;
}
body
{
background-image:url(Header/bg.jpg);
}
</style>
<link rel="stylesheet" href="home1.css">
    
</head>
	<body class="cbp-spmenu-push">
			
		<nav class="cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-top" id="cbp-spmenu-s3">
			<h3>Mobiles</h3>
			<a href="items.php?type=mobile&Company=Samsung">Samsung</a>
			<a href="items.php?type=mobile&Company=Motorola">Motorola</a>
			<a href="items.php?type=mobile&Company=Sony">Sony</a>
			<a href="items.php?type=mobile&Company=Apple">Apple</a>
			<a href="items.php?type=mobile&Company=Xolo">Xolo</a>
			<a href="items.php?type=mobile&Company=Celkon">Celkon</a>
			<a href="items.php?type=mobile&Company=Karbon">Karbon</a>
						
		</nav>

		<nav class="cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-top" id="cbp-spmenu-s4">
			<h3>Laptops</h3>
			<a href="items.php?type=laptop&Company=Sony">Sony</a>
			<a href="items.php?type=laptop&Company=Dell">Dell</a>
			<a href="items.php?type=laptop&Company=Samsung">Samusung</a>
			<a href="items.php?type=laptop&Company=Apple">Apple</a>
			<a href="items.php?type=laptop&Company=HP">HP</a>
			<a href="items.php?type=laptop&Company=Toshiba">Toshiba</a>
			<a href="items.php?type=laptop&Company=Acer">Acer</a>
			
		</nav>

		<nav class="cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-top" id="cbp-spmenu-s5">
			<h3>Computers</h3>
			<a href="items.php?type=desktop&Company=Sony">Sony</a>
			<a href="items.php?type=desktop&Company=Dell">Dell</a>
			<a href="items.php?type=desktop&Company=Samsung">Samusung</a>
			<a href="items.php?type=desktop&Company=Apple">Apple</a>
			<a href="items.php?type=desktop&Company=HP">HP</a>
			<a href="items.php?type=desktop&Company=Toshiba">Toshiba</a>
			<a href="items.php?type=desktop&Company=Acer">Acer</a>
			
		</nav>

		<nav class="cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-top" id="cbp-spmenu-s6">
			<h3>Tablets</h3>
			<a href="items.php?type=tablet&Company=Samsung">Samsung</a>
			<a href="items.php?type=tablet&Company=Apple">Apple</a>
			<a href="items.php?type=tablet&Company=Nexus">Nexus</a>
			
		</nav>
		
		<div class="container">
						<hr>
<table border="0" align="left" width="100%">
<tr><td width="25%">
			<div class="main">
				<section>
						<button id="showTop" >Mobiles</button>
					<button id="showTop1" >Laptops</button>
					<button id="showTop2" >Desktops</button>
					<button id="showTop3" >Tablets</button>
					</section>
				
			</div>
			</td><td width="75%">

<?php
	session_start();
     $db=mysql_connect("localhost", "root","");$pid=$_GET['p_id'];
   mysql_select_db("ostore",$db);
           $query1="SELECT * FROM `products` where p_id='$pid'";
print"<table align=center>";
$re1=mysql_query($query1,$db);
print"<table align=center><tr>";
print"<div class=bgf>";
while($rows=mysql_fetch_row($re1))
{
	echo"<div class=bg1><img src=projectfiles/".$rows['6']." width=200 height=350 alt=noimage><div class=price1><p class=head>Key Features</p><p>".$rows['7']."</p><p>".$rows['8']."</p><p>".$rows['9']."</p><p>".$rows['10']."</p><p>".$rows['11']."</p><p>".$rows['12']."</p><p>".$rows['13']."</p><p class=head>Price</p><p class=pri>".$rows['4']."/-"."</p><span><a href=sc.php?p_id=".$rows[0]."&p_price=".$rows['4']."&p_name=".$rows['2']."&p_desc=".$rows['3']."&p_pic=".$rows['6']."><img src=buy.png></a></span></div></div>";
}
print"</div>";
print"</tr></table>";

  ?>
 


			</td></tr>
			</table>
		</div>
		
		<script src="js/classie.js"></script>
		<script>
			var 
				menuTop = document.getElementById( 'cbp-spmenu-s3' ),
				showTop = document.getElementById( 'showTop' ),

				menuTop1 = document.getElementById( 'cbp-spmenu-s4' ),
				showTop1 = document.getElementById( 'showTop1' ),

				menuTop2 = document.getElementById( 'cbp-spmenu-s5' ),
				showTop2 = document.getElementById( 'showTop2' ),

				menuTop3 = document.getElementById( 'cbp-spmenu-s6' ),
				showTop3 = document.getElementById( 'showTop3' ),

				body = document.body;

			
			showTop.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuTop, 'cbp-spmenu-open' );
				disableOther( 'showTop' );
			};
			showTop1.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuTop1, 'cbp-spmenu-open' );
				disableOther( 'showTop1' );
			};
			showTop2.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuTop2, 'cbp-spmenu-open' );
				disableOther( 'showTop2' );
			};
			showTop3.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuTop3, 'cbp-spmenu-open' );
				disableOther( 'showTop3' );
			};
			
		</script>
	</body>
</html>
