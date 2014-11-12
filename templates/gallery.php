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
       <center> <iframe src="2.png" name="iframe" width="300" height="400" style="border:0;" scrolling="no"></iframe><br/><br/></center>
    <?php
    $db=mysql_connect("localhost", "root","");

   mysql_select_db("ostore",$db);
           $query1="SELECT picture FROM `products` ";

  $re=mysql_query($query1, $db);

       
        while ($rows=mysql_fetch_row($re))
               {
?>  
    <a href="projectfiles/<?=$rows[0]?>" target="iframe"><img src="projectfiles/<?=$rows[0]?>" width="40" height="55" alt=""/></a>
    
    <?php


            }
    
        ?>
</td>

</tr>
        </table>
 </body>
</html>
