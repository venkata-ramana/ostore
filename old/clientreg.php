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
    
    $gen=$_POST['gen'];
    $c=$_POST['country'];
    $addr=$_POST['addr'];
    
    
    echo "<h1 align='center'>Registration Details</h1>";
    echo "<h2 align='center'>Username : $username </h2>";
    echo "<h2 align='center'>Login ID : $login_id </h2>";
    echo "<h2 align='center'>Date of Birth : $dob </h2>";
    echo "<h2 align='center'>Gender : $gen </h2>";
    echo "<h2 align='center'>Country : $c </h2>";
    echo "<h2 align='center'>Address : $addr </h2>";
    
    echo "<h1 align='center'>Registration Completed...</h1>";
}
?>
<head>
    <style>
        
        .lb_txt
        {
          color:Black;
          font-size: 12pt;
          font-weight: Normal;
        }
        
    </style>
    
<script>
function validate(form1)
{
    
  first_name=form1.first_name.value;
 
  last_name=form1.last_name.value;
  
  login_id=form1.login_id.value;
  
  dob=form1.dob.value;
  
  gen=form1.gen;
  
  gender="";
  for(i=0;i<gen.length;i++)
  {
      if(gen[i].checked)
          {
            gender=gen[i].value;  
          }
  }
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


<body bgcolor="#ffffff">
    <br/>
    <br/>
    <br/>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" onsubmit="return validate(this)">
    <table bgcolor="#ffffff" cellpadding="3" cellspacing="3" id="register_panel" align="center">
        <caption><h3><font color="Blue"><blink>New User Registration</blink></h3></caption>
        <tr>
    <td align="right"><label class="lb_txt">First Name : </label></td><td><input type="text" id="first_name" name="first_name" required/></td>
    <td>&nbsp;</td>
        </tr>
        <tr>
     <td align="right"><label class="lb_txt">Last Name : </label></td><td><input type="text" id="last_name" name="last_name" Required/></td><td>&nbsp;</td>
        </tr>
        <tr>
            <td align="right"><label class="lb_txt">Login Id : </label></td><td><input type="text" id="login_id" name="login_id" Required/></td><td>&nbsp;</td>
        </tr>
        <tr>
     <td align="right"><label class="lb_txt">Date of Birth : </label></td><td><input type="text" id="dob" name="dob" Required/></td>
      <td>(DD/MM/YYYY)</td>
        </tr>
        <tr>
     <td align="right"><label class="lb_txt">Gender : </label></td>
     <td><input type="radio" name="gen" value="MALE" Required/>Male
         <input type="radio" name="gen" value="FEMALE"/>Female
     </td><td>&nbsp;</td>
        </tr>
        <tr>
            <td align="right"><label class="lb_txt">Country : </label></td><td>
                
                <select id="country" name="country">
                    <option value="">-----</option>
                    <option value="India">India</option>
                    <option value="United States">US</option>
                    <option value="England">UK</option>
                    <option value="Spain">Spain</option>
                    <option value="Australia">Australia</option>
                </select>
            </td><td>&nbsp;</td>
        </tr>
        <tr>
            <td align="right" valign="top">
                <label class="lb_txt">Address : </label>
            </td>
            
            <td>
            <textarea rows="5" cols="15" id="addr" name="addr" style="resize:none" Required></textarea>
            </td>
            
        </tr>
        <tr>
            <td colspan="3" align="center"><input type="submit" value="Register"/></td>
        </tr>
    </table>
     
        <input type="hidden" name="SUBMIT_OK" value="TRUE"/>
        
    </form>
</body>