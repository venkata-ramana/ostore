<script>
function cart()
{
alert("Alreadry ADDED in CART");
}
</script>
<?php 
session_start();
$user=$_SESSION['login_user'];
$p_id=$_GET['p_id'];
$p_name=$_GET['p_name'];
$p_price=$_GET['p_price'];
$p_desc=$_GET['p_desc'];
$pic=$_GET['p_pic'];
$db=mysql_connect("localhost","root","");
mysql_select_db("ostore",$db);
$query="INSERT INTO `ostore`.`cart` (`user`, `p_id`, `p_price`, `p_name`, `p_desc`, `p_pic`) VALUES ('$user', '$p_id', '$p_price', '$p_name', '$p_desc', '$pic')";
 $re= mysql_query($query,$db);
 if($re)
 {
  header("Location:payment.php");
 }
 else
 {
 print"<body onload=cart()>";
print "<meta http-equiv=refresh content=1;URL=items.php?type=mobile&Company=Motorola>";
 
 }

