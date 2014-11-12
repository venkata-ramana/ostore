<?
if(isset($_POST['submit']))
{
$qua=$_POST['quant'];
$pri=$_POST['price'];
}
?>
<html>
    <head>
        <style>
           #table
            {
                width:100%;
                height:300px;
               
            }
            label
            {
                color: blue;
                word-spacing:1px;
                font-weight: bold;
                font-family: "comic sans ms";
                font-size:14pt;
                
            }
              #caption{
                font-family: "Century Gothic";
                font-size: 10pt;
                color: red;
                font-weight: 600;
            }
			.text
			{
			font-size:12pt;
			padding:5px 5px;
			font-color:blue;
			border:1px solid blue;
			border-radius:5px;
			}
			.text:focus
			{
			outline:0;
			box-shadow:0 0 20px 1px skyblue;
			}

        </style>
    </head>
    <body>
   <?session_start();
   if($_POST['price']==0)
   {
?><h2 align="center" style="font-family: comic sans ms;font-size:comic sans ms;color:#339900">Cart is Empty....</h2>
<meta http-equiv="refresh" content="2;URL=payment.php"/><?
        
   }

      ?>
         
            
                <form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
    <div align="center">
  <fieldset style="width:850px">
       <legend><font color="PURPLE" face="Comic Sans MS" size="5px">Welcome to Payment gateway..</font></legend>
        <table border="0" id="table" align="center" cellpadding="3" cellspacing="3" >
                 <tr> 
                     <td colspan="3">
                         <img src="citibank.png">
                     </td>
                 </tr>            
            <td align="right"><label>Card Number :</label></td><td>
        <input class="text" type="text" name="acno" maxlength="20" required/></td><td><label><font color="purple">Ex: 4216 8701 1325 2181<br/>(don't including spaces)</font></label></td>
               </tr>
                             <tr>
                <td align="right">
                    <label>Card Holder :</label></td><td>
                
                            <input class="text" type="text" name="acho" value="<?=$_SESSION['login_user']?>"  required/><br/></td>
               </tr>
               
               
               <tr> <td align="right"> <label>Expiry Date :</label></td><td>
               <select class="text" name="expm" required/>
                   <option>MM</option>
                   <option>01</option>
                   <option>02</option>
                   <option>03</option>
                   <option>04</option>
                   <option>05</option>
                   <option>06</option>
                   <option>07</option>
                   <option>08</option>
                   <option>09</option>
                   <option>10</option>
                   <option>11</option>
                   <option>12</option>
                   </select>
<select class="text" name="expy" required/>
                   <option>YYYY</option>
                   <option>2010</option>
                   <option>2011</option>
                   <option>2012</option>
                   <option>2013</option>
                   <option>2014</option>
                   <option>2015</option>
                   <option>2016</option>
                   <option>2017</option>
                   <option>2018</option>
                   <option>2019</option>
                   <option>2020</option>
                   
                   </select>
           </td></tr>
               <tr> <td align="right"> <label>CVV Number :</label></td><td>
                       <input class="text" type="text" name="cvv" maxlength="3" required/><label></td> 
                <td align="center"><img src="cvv.png" width="350px"></td></tr>
                <tr>  <td align="right"> <label>Pin Code :</label></td><td>
                        <input class="text" type="password" name="pin" maxlength="4" required/></td> </tr>
						 <tr>  <td align="right"> <label>Total Shopping Quantiry:</label></td><td>
                        <input class="text" type="text" value="<?=$qua?>" name="quantity" readonly="readonly"></td> </tr>
                <tr>  <td align="right"> <label>Total Shopping Price:</label></td><td>
                        <input class="text" type="text" value="<?=$pri?>" name="total" readonly="readonly"></td> </tr>
                
<tr><td></td> <td align="right"><input type="submit" value="submit" style="font-family: comic sans ms;color:red"/></td></tr>
        </table>
                         <input type="hidden" name="SUBMIT_OK" value="TRUE"/>
  </fieldset>
  
    </body>
<?php
      if(isset($_POST['SUBMIT_OK'])&&($_POST['SUBMIT_OK']=="TRUE"))
{
 $h=$_POST['acno'];
 $a=$_POST['acho'];
 $b=$_POST['expm'];
 $f=$_POST['expy'];
 $c=$_POST['cvv'];
 $d=$_POST['pin'];
 $e=$_POST['total'];
 $g=$_POST['quantity'];
   $db=mysql_connect("localhost", "root","");
   mysql_select_db("ostore",$db);
  $query1="INSERT INTO `ostore`.`purchases` (`p_amount`,`Acc_Number`, `Acc_Holder`, `Exp_Month`, `Exp_Year`, `CVV_Number`, `Pin_Code`, `Quantity`, `selled_on`) VALUES ('$e','$h','$a', '$b', '$f', '$c', '$d','$g',CURRENT_TIMESTAMP)";
   $re= mysql_query($query1,$db);
   if($re)
   {
       echo "<center><h2>Your Order successfully Completed, Order delivered in 2-3 Business days </center></h2>";
    }
         else
         {
             echo "error";
         }
         }

         ?>
    <table>
         <TR>
                  <td align="right"></td>
                    <td align="right"> <a href="cpg.php" style='text-decoration:none'text ='black'><font size="5" font style ="font-family:algeria"><font color="purple">Close the payment Gateway</font></a></td>
                   </tr>
            
    </table>
    
</html>
