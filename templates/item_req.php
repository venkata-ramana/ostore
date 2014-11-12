<html>
    <head>

    <style>
        h1
        {
            color:blue;
            font-family: comic sans ms;
        }
		.down
		{
		width:150px;
		height:50px;
		border-radius:#f1f1f1;
		color:blue;
		}
    </style>
    </head>
    <body>
                <h1>
            <center><font color="Red">User Payments</font></center>
        </h1>

       
    <?php
     $db=mysql_connect("localhost", "root","");

   mysql_select_db("ostore",$db);
           $query1="SELECT * FROM `purchases` order by selled_on DESC";

  $re=mysql_query($query1, $db);

       print"<center><a href=download.php><h2>Download</h2></a></center>";
        while ($rows=mysql_fetch_row($re))
               {
            ?> 
    <fieldset>
        <legend>Payment ID:<?=$rows['0']?></legend>
 <label style="font-family: comic sans ms;"><b>Customer Name:</b></label><label><b><?=$rows['3']?></b><br/></label>
    <label style="font-family: comic sans ms;">
                   <label style="font-family: comic sans ms;"><b>Customer AC No:</b></label><label><?=$rows['2']?><br/></label>
                                      <label style="font-family: comic sans ms;"><b>Expiry Date :</b></label><label><?=$rows['4']?>/<?=$rows['5']?><br/></label>
                   <label style="font-family: comic sans ms;"><b>CVV No:</b></label><label><?=$rows['6']?></label><br/>
               <label style="font-family: comic sans ms;"><b>Pin Code:</b></label><label><?=$rows['7']?><br/></label>
               <label style="font-family: comic sans ms;"><b>Total Shopping :</b></label><label><?=$rows['1']?><br/></label>                
                </label>
        </fieldset>
    <?php
}
            ?>
    
   
    
            
</td>

</tr>
        </table>
 </body>
</html>
