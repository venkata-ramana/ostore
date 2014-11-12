
<?php 
session_start();
$p_id=$_GET['p_id'];
$db=mysql_connect("localhost","root","");
mysql_select_db("ostore",$db);
$query="DELETE FROM cart where p_id='$p_id'";
$re= mysql_query($query,$db);
 if($re)
 {
 echo"SuccessFull.....";
header("location:payment.php");
 }
 else
 {
echo"unSuccessful......"; 
 
header("location:payment.php");}

