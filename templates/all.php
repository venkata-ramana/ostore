<html>
    <head>

    <style>
        h1
        {
            color:blue;
            font-family: comic sans ms;
        }
    </style>
	<link rel="stylesheet" href="home.css">
    </head>
    <body>
            
    <?php
	session_start();
     $db=mysql_connect("localhost", "root","");
$Comp="Motorola";
if(isset($_SESSION['Company']))
$Comp=$_SESSION['Company'];
   mysql_select_db("ostore",$db);
           $query1="SELECT * FROM `products` where Company='$Comp'";
print"<table align=center>";
$re1=mysql_query($query1,$db);
print"<table align=center><tr>";
print"<div class=bgf>";
while($rows=mysql_fetch_row($re1))
{
	echo"<div class=bg><img src=projectfiles/".$rows['6']." width=100 height=150 alt=noimage><p class=price>Price : ".$rows['3']."</p></div>";
}
print"</div>";
print"</tr></table>";

  ?>
 </body>
</html>
