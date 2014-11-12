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
            <center>Uploaded Images</center>
        </h1>
      
    <?php
    $db=mysql_connect("localhost", "root","");

   mysql_select_db("ostore",$db);
           $query1="SELECT picture FROM `products` ";

  $re=mysql_query($query1, $db);

       
        while ($rows=mysql_fetch_row($re))
               {
?>  
    <a href="<?=$rows[0]?>"><img src="<?=$rows[0]?>" width="125" height="145" alt=""/></a>
    
    <?php


            }
    
        ?>
</td>

</tr>
        </table>
 </body>
</html>
