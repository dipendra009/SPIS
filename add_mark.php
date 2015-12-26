<?php
	include_once('db.php');

	###############################################################################
		###############		finding subject and it's code ###############
	################################################################################
	
		$subject = $_POST['subject'];
		$sql = "select sub_code from subjects  WHERE name = '".$_POST['subject']."'";
		$result = mysql_query($sql);
		$s_code = mysql_fetch_array($result);
		$sub_code = $s_code['sub_code'];
		
		$marks = $_POST['marks'];
		$marks_type = $_POST['marks_type'];
		$marks_of=$marks."_".$marks_type;


	
	$sql = "SELECT 	".$marks_of." FROM Subjects where name = '".$_POST['subject']."'";
	$result= mysql_query($sql);
	$f_mark = mysql_fetch_array($result);
	$full_mark=$f_mark[$marks_of];
	$pass_mark = 0.4*$f_mark[$marks_of];
	
	
	$sql = 'SELECT * FROM Students ORDER BY crn ASC';
	$result = mysql_query($sql);
	
	
?>
<link href="style.css" rel="stylesheet" type="text/css">

<br></br>
<div align="center" style="margin-left:10%;margin-right:10%"  class="abc">
	<span class="sub_head" > <?php echo $subject; ?></span>  
    <br><br><br><br>
	<span style="float:left" > Type : <?php if($marks=='th'){echo "Theory";}	else echo "Practical";?></span>
    <span style="float:right" >Full Mark : <?php echo $full_mark;?></span>
    <br>
	<span style="float:left">Category : <?php if($marks_type=='int'){echo "Assessment";}	else echo "Final";?> </span>
    <span style="float:right">Pass Mark : <?php echo $pass_mark;?> </span>
    
   
      
</div>

</br>
</br>



<?php

##########################################################
###############  adding records #####################
########################################################
    if(isset($_POST['submit_add']))
	{
		?>
		
		
	<form action="index.php?page=action" method="post">
    <table width="80%" border="1"  cellspacing="5" cellpadding="5" id="records" align="center">


  <tr>
    <th>CRN</th>
    <th>Student Name</th>
    
    <th>Marks Obtained</th>
  </tr>
 
 
  <?php
  	
	

  	while($data = mysql_fetch_array($result))
	{?>
  <tr>
     <td><?php echo $data['crn'];?></td>
    <td><?php echo $data['name'];?></td>
    <?php  $roll['crn'] = $data['crn']?>
    
    <td><input name="<?php echo $data['crn']; ?>" type="text" maxlength="3">
    	
        <input name="subject" type="hidden" value="<?php echo $subject;?>">
        <input name="marks_of" type="hidden" value="<?php echo $marks_of;?>">
        <input name="sub_code" type="hidden" value="<?php echo $sub_code;?>">
       
        

    </td>
  </tr>
 <?php
 	}
 ?>
    
    
</table>
<br>
<div style="float:right;margin-right:10%">
<input name="add_mark" type="submit" value="Submit">

</form>

</br>
<br></br>


	<?php
    }?>
    
    
    
    
    
   
    <?php
	
	#################################################################
	##########				Editing marks    ########################
	################################################################
	
	
 if(isset($_POST['submit_edit']))
	{
		?>
		
		
<form action="index.php?page=action" method="post">
    <table width="80%" border="1"  cellspacing="5" cellpadding="5" id="records" align="center">


  <tr>
    <th>CRN</th>
    <th>Student Name</th>
    
    <th>Marks Obtained</th>
  </tr>
 
 
  <?php
  
  	
	$i=0;

  	while($data = mysql_fetch_array($result))
	{
		
  		$s = "SELECT ".$marks_of." FROM marks WHERE sub_code = '".$sub_code."' AND crn = '".$data['crn']."'";
		
  		$ress = mysql_query($s);
		$rrrr = mysql_fetch_array($ress);
		?>
  <tr>
     <td><?php echo $data['crn'];?></td>
    <td><?php echo $data['name'];?></td>
    <?php  $roll['crn'] = $data['crn']?>
    
    <td><input name="<?php echo $i++; ?>" type="text" maxlength="3" value="<?php echo $rrrr[$marks_of];?>" >
    	
        <input name="subject" type="hidden" value="<?php echo $subject;?>">
        <input name="marks_of" type="hidden" value="<?php echo $marks_of;?>">
        <input name="sub_code" type="hidden" value="<?php echo $sub_code;?>">
       
        

    </td>
  </tr>
 <?php
 	}
 ?>
    
    
</table>
<br>
<div style="float:right;margin-right:10%">
<input name="edit_mark" type="submit" value="Submit">

</form>

</br>
<br></br>


	<?php
    }?>
    
    
    
    
 

