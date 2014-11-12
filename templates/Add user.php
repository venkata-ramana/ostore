<?php

if(isset($_POST['SUBMIT_OK'])&&($_POST['SUBMIT_OK']=="TRUE"))
{

    $username=$_POST['first_name']." ".$_POST['last_name'];
    $login_id=$_POST['login_id'];
    $dob=explode("/",$_POST['dob']);
    
    if(!checkdate($dob[1],$dob[0],$dob[2]))
    {
        echo "Invalid Date of Birth";
    }
    else
    {
        $dob=$_POST['dob'];
    }
    
   
    $c=$_POST['country'];
    $addr=$_POST['addr'];
    
    
    echo "<h1 align='center'>Registration Details</h1>";
    echo "<h2 align='center'>Username : $username </h2>";
    echo "<h2 align='center'>Login ID : $login_id </h2>";
    echo "<h2 align='center'>Date of Birth : $dob </h2>";
    echo "<h2 align='center'>Country : $c </h2>";
    echo "<h2 align='center'>Address : $addr </h2>";
    echo "<h1 align='center'>Registration Completed...</h1>";
}
?>
<head>
    <style>
        
        .lb_txt
        {
             color: #339900;
                word-spacing:1px;
                font-weight: 600;
                font-family: COMIC SANS ms;
                font-size:14pt
        }

            #caption{
                font-family: "Comic Sans MS";
                font-size: 10pt;
                color: #e4b80a;
                font-weight: 600;
            }
       .radio
       {
           color:#339900;
           font-size:12pt;
           font-family: comic sans ms;
       }
    </style>
    
<script>
function validate(form1)
{
    
  first_name=form1.first_name.value;
 
  last_name=form1.last_name.value;
  
  login_id=form1.login_id.value;
  
  dob=form1.dob.value;
  
  country="";
  country=form1.country.value;
  addr=form1.addr.value;
  
  //alert("check");
  if(first_name!=""&&last_name!=""&&login_id!=""&&dob!=""&&gender!=""&&country!=""&&addr!="")
  {
 
 return true;
  }
  else
      {
alert("Please Fill all the Details");     
return false;        
      }
  
  
}
</script>
</head>


<body bgcolor="#ddd">
    
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" onsubmit="return validate(this)">
    <table cellpadding="3" cellspacing="3" align="center" >
        <caption id="caption"><h1>Add item</h1></caption>
        <tr>
    <td align="right"><label class="lb_txt">Name of the item : </label></td><td><input type="text" id="first_name" name="first_name" required/></td>
    <td>&nbsp;</td>
        </tr>
        <tr>
     <td align="right"><label class="lb_txt">Name of the product : </label></td><td><input type="text" required id="last_name" name="last_name"/></td><td>&nbsp;</td>
        </tr>
        <tr>
            <td align="right"><label class="lb_txt">Login Id : </label></td><td><input type="text" required id="login_id" name="login_id"/></td><td>&nbsp;</td>
        </tr>
        <tr>
     <td align="right"><label class="lb_txt">Date of adding : </label></td><td><input type="text" required id="dob" name="dob"/></td>
      <td><label style="font-size:12pt;font-family: comic sans ms;color: #339900">(DD/MM/YYYY)</label></td>
        </tr>
              
        <tr>
            <td align="right" valign="top">
                <label class="lb_txt">Description : </label>
            </td>
            
            <td>
            <textarea rows="5" cols="15" id="addr" name="addr" style="resize:none" required></textarea>
            </td>
            
        </tr>
        <tr>
            <td colspan="3" align="center"><input type="submit" value="Register" style="color: #339900;font-family:comic sans ms"/></td>
        </tr>
    </table>
     
        <input type="hidden" name="SUBMIT_OK" value="TRUE"/>
        
    </form>
</body>