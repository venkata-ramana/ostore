<html>
    <head>

    <style>
        h1
        {
            color:blue;
            font-family: comic sans ms;
        }
    </style>
    </head>
    <body>
                <h1>
            <center><font color="Red">My Products</font></center>
        </h1>
    <?php
    $db=mysql_connect("localhost", "root","");

   mysql_select_db("ostore",$db);
           $query1="SELECT picture FROM `products` ";

  $re=mysql_query($query1, $db);

       
        while ($rows=mysql_fetch_row($re))
               {
?>  
    
    <?php
}
            ?>
        <fieldset>
    <legend>Product Details :</legend>
    <?php
     $db=mysql_connect("localhost", "root","");

   mysql_select_db("ostore",$db);
           $query1="SELECT * FROM `products` ";

  $re=mysql_query($query1, $db);

       
        while ($rows=mysql_fetch_row($re))
               {
            ?> 
    <fieldset>
        <legend><?=$rows['0']?></legend>
    <label style="font-family: comic sans ms;"><br/>
                   <label style="font-family: comic sans ms;"><b>Name of the Product:</b></label><label><?=$rows['1']?><br/></label>
                                      <label style="font-family: comic sans ms;"><b>Description :</b></label><label><?=$rows['2']?><br/></label>
                   <label style="font-family: comic sans ms;"><b>price:</b></label><label><?=$rows['3']?><br/></label>
               <label style="font-family: comic sans ms;"><b>Category :</b></label><label><?=$rows['4']?><br/></label>
              <span id="1"> <label style="font-family: comic sans ms;"><b>picture :</b></label><label><?=$rows['5']?><br/></label>
                </label>
        </fieldset>
    <?php
}
            ?>
    
   
    </fieldset>
            
</td>

</tr>
        </table>
 </body>
</html>
