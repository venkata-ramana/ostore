<?php
if(isset($_SESSION['price']))
 {
unset($_SESSION['price']);
unset($_SESSION['user_login']);
}
?>


<html>
    <head>
<script>
alert("destroyed...");
</script>
    </head>
</html>
    
   
<?
header("location:items.php?type=mobile&Company=Motorola");
?>