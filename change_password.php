<link rel="stylesheet" href="style.css" type="text/css">

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
	
	
	
	if(document.getElementById('old_password').value=='' )
	{
		document.getElementById('oldpassword_error').innerHTML = 'Old password not submitted';
		document.getElementById('old_password').focus();
		flag = 1;
	}
	
	
	
	if(document.getElementById('new_password').value=='' )
	{
		document.getElementById('newpassword_error').innerHTML = 'Password not submitted';
		document.getElementById('new_password').focus();
		flag = 1;
	}
	
	if(document.getElementById('cpassword').value==''  )
	{
		document.getElementById('cpassword_error').innerHTML = 'Confirm password not submitted';
		document.getElementById('cpassword').focus();
		flag = 1;
	}
	
	
	else if(document.getElementById('new_password').value!= document.getElementById('cpassword').value)
	{
		document.getElementById('cpassword_error').innerHTML = 'Password do not match';
		document.getElementById('cpassword').focus();
		flag = 1;
	}
	
	
	
	else if(document.getElementById('new_password').value.length<6 || document.getElementById('new_password').value.length>25|| document.getElementById('cpassword').value.length<6 || document.getElementById('cpassword').value.length>25  )
	{
		document.getElementById('cpassword_error').innerHTML = 'Invalid password length';
		document.getElementById('username').focus();
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

<form action="index.php?page=action" method="post" name="chngacc_form" onsubmit="return validate()">


<div style="width:100%"  >  <!--main div start-->

<table  bgcolor="#F6F6F6" width="50%" border="1" bordercolor="#87A91E" cellspacing="0px" cellpadding="0px" style="margin:30px;margin-left:15px" >

<tr><td>
<div class = "ChngAcc_div">
    	
        <div class="menubar">      Change Your Password		</div>
        
</div>


<div><span>&nbsp;</span></div>



<div class = "ChngAcc_div">
    	
        <div class = "ChngAcc_label">		Username			</div>
        <div class ="ChngAcc_input"><input name="username" type="text" id="username" /></div>        
</div>

<div ><span id="username_error" class="error" ></span></div>


<div class = "ChngAcc_div">
    	
        <div class = "ChngAcc_label">	Old Password			</div>
        <div class ="ChngAcc_input"><input name="old_password" type="password" id="old_password" /></div>
        
</div>

<div><span id="oldpassword_error" class="error" ></span></div>

<div class = "ChngAcc_div">	
    	
        <div class = "ChngAcc_label">	New Password			</div>
        <div class ="ChngAcc_input"><input name="new_password" type="password" id="new_password"/></div>
        
</div>

<div><span id="newpassword_error" class="error"  ></span></div>


<div class = "ChngAcc_div">
    	
        <div class = "ChngAcc_label">	Confirm Password			</div>
        <div class ="ChngAcc_input"><input name="cpassword" type="password"  id="cpassword"/></div>
        
</div>

<div><span id="cpassword_error" class="error" ></span></div>


<div class = "ChngAcc_div">
    	
        <div class = "ChngAcc_label">	Login as  			</div>
        <div class ="ChngAcc_input">
        	<select name="login_as" id="login_as"/>
            	<option value="select">Select any one</option>
                <option value="admin">Administrator</option>
                <option value="teacher">Teacher</option>
                <option value="student">Student</option>
            </select>
        </div>
        
</div>

<div><span id="loginas_error" class="error"></span></div>


<div class = "ChngAcc_div">
    	
        <div align="center">
          <input name="change" type="submit" value="Change"/>
        </div>
        
</div>

<div class = "ChngAcc_div">
    	
        <div align="center">	
          <span id="error_display" class = "error" ></span>
        </div>
        
</div>


</td>
</tr>
</table>

</div><!--/*main div end*/-->
</form>





