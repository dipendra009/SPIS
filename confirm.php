<?php

##########  validating the change password form  #########################

include_once('db.php');

if(isset($_POST['change']))
{
	echo "hi";
	if($_POST['login_as'] == "admin")
	{
		
		$sql = "SELECT * FROM login_admin WHERE admin_name = '".$_POST['username']."' AND pswd =  encode('".$_POST['old_password']."','".$_POST['username']."')";
		
		$result = mysql_query($sql) or die($result);
		$data = mysql_fetch_array($result);
		if($data!='')
		{
			$sql = "update login_admin SET pswd = encode('".$_POST['new_password']."','".$_POST['username']."') where admin_name = '".$_POST['username']."'";
			mysql_query($sql);
			
			echo "Changed password Successfully";
		}
		else
		{
			echo "username or password not valid";
		}
		
	}

}



#####################################################################################################3
###########  validatin login form as administrator  ###############################################<
####################################################################################################

include_once('db.php');
if(isset($_POST['login']))
{
					
$sql="SELECT * FROM login_admin WHERE admin_name = '".$_POST['username']."' AND pswd = encode('".$_POST['password']."','".$_POST['username']."')";
$result=mysql_query($sql);
$data = mysql_fetch_array($result);

if($data!='')
{
echo "Welcome".$data['admin_name'];
}
else
echo "Soryy we could not give the access";

}


?>





