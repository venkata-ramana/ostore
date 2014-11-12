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
            <center><font color="Red">My Users</font></center>
        </h1>
        <fieldset>
    <legend>User Details :</legend>
    <?php
     $db=mysql_connect("localhost", "root","");

   mysql_select_db("ostore",$db);
           $query1="SELECT * FROM `users` ";

  $re=mysql_query($query1, $db);

       
        while ($rows=mysql_fetch_row($re))
               {
            ?> 
    <fieldset>
        <legend><?=$rows['0']?></legend>
    <label style="font-family: comic sans ms;"><br/>
                   <label style="font-family: comic sans ms;"><b>Name of the User:</b></label><label><?=$rows['1']?><br/></label>
                                      <label style="font-family: comic sans ms;"><b>password :</b></label><label><?=$rows['3']?><br/></label>
                                      <label style="font-family: comic sans ms;"><b>Location:</b></label><label><?=$rows['11']?></label></br>
               <label style="font-family: comic sans ms;"><b>Gender :</b></label><label><?=$rows['4']?><br/></label>
               <label style="font-family: comic sans ms;"><b>Address :</b></label><label><?=$rows['10']?>, <?=$rows['11']?><br/></label>                
               
                </label><br/>
        
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
