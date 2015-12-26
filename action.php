<?php

@session_start();
ob_start();

if(!empty($_POST['username']))
{
	$_SESSION['name']=$_POST['username'];
}
	

	





##########  validating the change password form  #########################

include_once('db.php');

if(isset($_POST['change']))
{	
	$table = choose_table();
	echo $table;
	$sql = "SELECT * FROM ".$table." WHERE name = '".$_POST['username']."' AND pswd =  encode('".$_POST['old_password']."','".$_POST['username']."')";
	$result = mysql_query($sql) or die($result);
	$data = mysql_fetch_array($result);
	if($data!='')
		{
			
			$sql = "UPDATE " .$table. "SET pswd = encode('".$_POST['new_password']."','".$_POST['username']."') where name = '".$_POST['username']."'";
			mysql_query($sql) or die();
			
			echo "Changed password Successfully";
		}
		else
		{
			echo "username or password not valid";
		}
		
}





#####################################################################################################3
###########  validatin login form as administrator  ###############################################<
####################################################################################################

include_once('db.php');
if(isset($_POST['login']))
{
		$table = choose_table();	
		
		$sql="SELECT * FROM admin WHERE username = '".$_POST['username']."' AND pswd = encode('".$_POST['password']."','".$_POST['username']."')";
		$result=mysql_query($sql);
		$data = mysql_fetch_array($result);

		if($data!='')
		{
			/*echo "Welcome".$_POST['username'];*/
			echo"<script>window.location='index.php?page=as_admin'</script>";
		}
		else
		{
			echo "Soryy we could not give the access";

		}

}


function choose_table()
{
	
	if($_POST['login_as']=='student')
		{
			$table = 'student';
		
		}
		else if($_POST['login_as']=='admin')
		{
			$table = 'admin';
			
		}
		else if($_POST['login_as']=='teacher')
		{
			$table = 'teacher';
		
		}
		
		return $table;
	
}
########################################################################################
####################	ENTERINNG MARKS   ################################################
############################################################################################

if(isset($_POST['add_mark']))
{
$subject =  $_POST['subject'];
$marks_of = $_POST['marks_of'];
$sub_code = $_POST['sub_code'];

echo $subject;
echo "<br>";
echo $sub_code;
echo "<br>";
echo $marks_of;

$sql = "SELECT * FROM marks WHERE sub_code = '".$_POST['sub_code']."'";

$res = mysql_query($sql);

$result1 = mysql_fetch_array($res);

echo "<br>";


	$sql = "SELECT * FROM Students";
	$result = mysql_query($sql);

if($result1==NULL)
{
	
	while($data = mysql_fetch_array($result))
	{
		$sql1 = "INSERT INTO marks(sub_code,crn,".$marks_of.") VALUES('".$sub_code."','".$data['crn']."','".$_POST[$data['crn']]."')";
		echo $sql1;
		mysql_query($sql1);
	}
}
else
{
	while($data = mysql_fetch_array($result))
	{
	
		$sql1 = "UPDATE marks SET ".$marks_of."=".$_POST[$data['crn']]." WHERE sub_code = '".$sub_code."' AND crn = '".$data['crn']."'";
		echo $sql1;
		mysql_query($sql1);
	}
}
}
?>




<?php

########################################################################################
####################	EDITING MARKS   ################################################
############################################################################################

if(isset($_POST['edit_mark']))
{
$subject =  $_POST['subject'];
$marks_of = $_POST['marks_of'];
$sub_code = $_POST['sub_code'];

echo $subject;
echo "<br>";
echo $sub_code;
echo "<br>";
echo $marks_of;

$sql = "SELECT * FROM marks WHERE sub_code = '".$_POST['sub_code']."'";

$res = mysql_query($sql);

$result1 = mysql_fetch_array($res);

echo "<br>";

	
	$sql = "SELECT * FROM Students";
	$result = mysql_query($sql);


	while($data = mysql_fetch_array($result))
	{
		$sql1 = "UPDATE marks SET ".$marks_of."=".$_POST[$data['crn']]." WHERE sub_code = '".$sub_code."' AND crn = '".$data['crn']."'";
		echo $sql1;
		mysql_query($sql1);
	}
}

?>


<?php

################################################
############ 	DELETING RECORDS	##############
#################################################

if(isset($_POST['submit_delete']))
{
	
$crn = $_POST['crn'];
$sql = "DELETE FROM marks WHERE crn = '".$crn."'";
$sql1 = "DELETE FROM Students WHERE crn = '".$crn."'";
$ql = "SELECT name FROM Students WHERE crn = '".$crn."'";
$pk = mysql_query($ql);

$pk1 = mysql_fetch_array($pk);

$res = mysql_query($sql);

if($_POST['delete_info']==2)
{
$res1 = mysql_query($sql1);

if($res!=NULL && res1!=NULL)
	{?>
   	<br><br><br><br>
    <div class="abc" align="center" style="font-size:18px">ALL RECORD OF <?php echo $pk1['name'];?>  IS SUCCESSFULLY DELETED !!</div>     	<br><br><br><br>
   <?php
	}
}

else
{
	if($res!=NULL)
	{?>
   	<br><br><br><br>
    <div class="abc" align="center" style="font-size:18px">RECORD OF <?php echo $pk1['name'];?>  IS SUCCESSFULLY DELETED FROM MARKS INFO !!</div>     	<br><br><br><br>
   <?php
	}
}
}

?>







