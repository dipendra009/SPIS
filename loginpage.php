<div >
<div ><span >&nbsp;</span></div>

<link rel="stylesheet" href="style.css" type="text/css"> 

<table width="100%" border="0" cellspacing="0" cellpadding="0" >
  <tr>
    <td align="center">
   <a href="index.php?page=as_student">Result of particular Student </a>
   <br><br>
   <a href="index.php?page=as_teacher">Result of particular Batch </a>
    
    	
   			
    </td>
    
    
    <td width="35%">
    
    	<table border="1" cellpadding="0" cellspacing="0" width="90%">
   			 <tr>
    			<td>
    
    
<form action="index.php?page=action" method="post" name="login_form"   >
<div style="width:100%;height:auto">  <!--main div start-->



<div class = "ChngAcc_div">
    	
        <div class="menubar">      &nbsp;&nbsp;LOGIN AS ADMIN</div>
        
</div>


<div ><span >&nbsp;</span></div>

<div class = "ChngAcc_div">
    	
        <div class = "login_label" >	 Username		&nbsp;&nbsp;	</div>
        <div class ="login_input"><input name="username" type="text" id="username" /></div>
        
</div>

<div ><span id="username_error" class="error" style="float:right"></span></div>

<div class = "ChngAcc_div">
    	
        <div class = "login_label">	Password		&nbsp;&nbsp;	</div>
        <div class ="login_input"><input name="password" type="password" id="password" /></div>
        
</div>

<div ><span id="password_error" class="error" style="float:right"></span></div>




<div><span id="loginas_error" class="error"></span></div>





<div class = "ChngAcc_div">
    	
        <div align="center">
          <input type="submit" name="login"  value="Login" />
        </div>
        
</div>

<div class = "ChngAcc_div">
    	
      <div align="center"><a href="index.php?page=change_password">Change Your Password</a></div>  
</div>

</div><!--/*main div end*/-->
</form>

		</td>
    </tr>
  </table>

   
     </td>
  </tr>
</table>
<div ><span >&nbsp;</span></div>

</div>
<script>

function validate()
{
	
	///////////  validating username  //////////////////////////
	if(document.getElementById('username').value=='')
		{
		document.getElementById('username_error').innerHTML = 'Username no submitted';
		document.getElementById('username').focus();
		flag = 1;
	}
	
	
	else if(document.getElementById('username').value.length<5 || document.getElementById('username').value.length>25)
	{
		document.getElementById('username_error').innerHTML = 'Invalid Username length';
		document.getElementById('username').focus();
		flag = 1;
	}
	
	
	
	if(document.getElementById('password').value=='' )
	{
		document.getElementById('password_error').innerHTML = 'Password not submitted';
		document.getElementById('password').focus();
		flag = 1;
	}
	
	else if(document.getElementById('password').value.length<6 || document.getElementById('password').value.length>25)
	{
		document.getElementById('password_error').innerHTML = 'Invalid password length';
		document.getElementById('password').focus();
		flag = 1;
	}
	
	
	if(document.getElementById('login_as').value=='select' )
	{
		document.getElementById('loginas_error').innerHTML = 'Select any one of the login type';
		document.getElementById('login_as').focus();
		flag = 1;
	}
	
	
	if(flag == 1)
	{
		return false;
	}
	else return true;
	

}


</script>
