
<?php
include_once('db.php');
?>

<?php
##########################################################################
####################### Any Subject ###################################
#######################################################################


if($_POST['type']=="subject_wise" && isset($_POST['input']))
{
?>
 <div align="left" style="font-weight:bold;margin-left:10%" class="abc" >Choose option</div>


<link href="style.css" rel="stylesheet" type="text/css">

<form action="" method="post">

<table width="90%" border="0" class="abc" align="center" cellpadding="5" cellspacing="30">
  <tr>
<?php

	
	$sql = "SELECT name FROM Subjects";
	$result = mysql_query($sql);
	
	
?>
	
    <div class="abc" style="margin-left:11%;margin-top:30"> Choose Subject : 
    <select name="subject">
	<?php
		while($data=mysql_fetch_array($result))
		
		{?>
			<option >
			<?php echo $data['name'];?>
            </option>
		<?php
        }
	?>
    	
        
    </select>
	</div>
	</tr>
	<br>
	<br>
	
	<div  style="margin-left:10%;margin-top:20">Mark :
    
	
       <span>
          <label>
          &nbsp;&nbsp;&nbsp;
            <input type="checkbox" name="th_int" value="true" />
            Theory Assessment</label>
            &nbsp;&nbsp;&nbsp;
            <input type="checkbox" name="th_final" value="true" />
            Theory Final</label></label>
          	&nbsp;&nbsp;&nbsp;
         
            <input type="checkbox" name="prac_int" value="true" />
             Practical Assessment</label>&nbsp;&nbsp;&nbsp;
          <label>
		  
            <input type="checkbox" name="prac_final" value="true"  />
            Practical Final</label>
          </span>
		   </div>

     
    &nbsp;&nbsp;
	<tr align="center">
    <td>
    <input  type="submit" name="submit_subject" value = "Submit" style="width:150" >
    </td>
	</div>
	</tr>
	</table>
    

</form>


<?php
}
if(isset($_POST['submit_subject']))
{
?>
<link href="style.css" rel="stylesheet" type="text/css">
	<div align="center" style="margin-left:10%;margin-right:10%;margin-to:10%"  class="abc">
	  <br><br>
	<span class="sub_head" > <?php echo $_POST['subject']; ?></span>  </div>



<table width="80%" align="center" border="1" style="margin-bottom:50;margin-top:50" cellpadding="5" cellspacing="5" id="records">
  <tr>
    <th>Roll No.</th>
    <th>Student Name</th>
   
<?php

$subject = $_POST['subject'];
		$sql = "select * from subjects  WHERE name = '".$_POST['subject']."'";
		$result = mysql_query($sql);
		$sub= mysql_fetch_array($result);
		$sub_code = $sub['sub_code'];
		$total =0;
		 if(isset($_POST['th_int']))
		{
			$var11 = "th_int";
			$var1fm = $sub[$var11];
			$totalfm += $var1fm;
			$var1pm = $var1fm*.4;
			if($var1fm >0 )
			{
			$var1 = "th_int";
			?> <th><?php
			echo "Theory Assmt.";
			echo "<br>FM : ".$var1fm."    PM : ".$var1pm;	
			?></th>
	
			<?php
			}
			
					
		}
		
		  if(isset($_POST['th_final']))
		{
			$var21 = "th_final";
			$var2fm = $sub[$var21];
			$totalfm += $var2fm;
			$var2pm = $var2fm*.4;
			if($var2fm >0)
			{
			$var2 = "th_final";
			
			?> <th><?php
			echo "Theory Final";
			echo "<br>FM : ".$var2fm."    PM : ".$var2pm;	
			?></th>
	
			<?php
			}
			
					
		}
		 if(isset($_POST['prac_int']))
		{
			$var31 = "prac_int";
			$var3fm = $sub[$var31];
			$totalfm += $var3fm;
			$var3pm = $var3fm*.4;
			if($var3fm >0)
			{
			$var3 = "prac_int";
			?> <th><?php
			echo "Practical Assmt.";
			echo "<br>FM : ".$var3fm."    PM : ".$var3pm;	
			?></th>
	
			<?php
			}
			
					
		}
		 if(isset($_POST['prac_final']))
		{
			$var41 = "prac_final";
			$var4fm = $sub[$var41];
			$totalfm += $var4fm;
			$var4pm = $var4fm*.4;
			if($var4fm >0)
			{
			$var4 = "prac_final";
			?> <th><?php
			echo "Practical Final.";
			echo "<br>FM : ".$var4fm."    PM : ".$var4pm;	
			?></th>
	
			<?php
			}
			
					
		}
		 
		
			
			
			?> <th><?php
			echo "Total  ";
			echo "<br>FM : ".$totalfm;
			?></th>
	
		
			
					
		
  </tr>
 

<br><br>
		
		
<?php
$sql = "SELECT * FROM marks WHERE sub_code = '".$sub_code."'";

$res = mysql_query($sql);




	
	


	while($mark = mysql_fetch_array($res))
	
	{
		?>
		<tr>
		<?php
		
		$cr = $mark['crn'];
		?>
		<td><?php echo $cr;?></td>
		<?php
		$sql = "SELECT name FROM Students WHERE crn = '".$cr."'" ;
		$result = mysql_query($sql);
		$std = mysql_fetch_array($result);
		$total = 0;
		?>
		<td><?php echo $std['name'];?></td>
		<?php
		if(isset($var1))
		{
		$total += $mark[$var1];
		?>
		<td   ><?php echo $mark[$var1]; if($mark[$var1]<$var1pm){ $i=0; echo '*';}?></td>
		<?php
		}
		if(isset($var2))
		{
		
		$total += $mark[$var2];
		?>
		<td><?php echo $mark[$var2];if($mark[$var2]<$var2pm){ $i=0; echo '*';}?></td>
		<?php
		}
		if(isset($var3))
		{
		
		$total += $mark[$var3];
		?>
		<td><?php echo $mark[$var3]; if($mark[$var3]<$var3pm){ $i=0; echo '*';}?></td>
		<?php
		}
		if(isset($var4))
		{
		
		$total += $mark[$var4];
		?>
		<td><?php echo $mark[$var4]; if($mark[$var4]<$var4pm) { $i=0;echo '*';}?></td>
		<?php
		}
		?>
	
		<td><?php echo $total; if(isset($i))  echo '*';?></td>
		
		
		</tr>	
		<?php
	}
}
?>
	</table>
	
	<?php

########################################################################
##################### More Than One Subjects ####################
#######################################################################
if($_POST['type']=="many" && isset($_POST['input']))
{
?>
<div align="left" style="font-weight:bold;margin-left:10%" class="abc" >Choose option</div>


<link href="style.css" rel="stylesheet" type="text/css">

<form action="index.php?page=display1" method="post">

<table width="90%" border="0" class="abc" align="center" cellpadding="5" cellspacing="30">
  <tr>
<?php

	
	$sql = "SELECT name FROM Subjects ORDER BY name";
	$result = mysql_query($sql);
	
	
?>
	
    <div  style="margin-left:10%;margin-top:20;font:bolder"> Mark :</div>
	<div  style="margin-left:20%;margin-top:20">
    
	
       <span>
	<?php
		$sub = array();
		$i=0;
		while($data=mysql_fetch_array($result))
		
		{
		
		
		?>
		  <label>
          &nbsp;&nbsp;&nbsp;
            <input type="checkbox" name= <?php echo $data['name'];?> value=" <?php echo $data['name'];?>" />
           
            &nbsp;&nbsp;
			
			<?php echo $data['name'];?>
          
			 </label>
		<?php
		echo"<br><br>";
        }
	?>
	 <label>
          &nbsp;&nbsp;&nbsp;
            <input type="checkbox" name= "all" value="true" />
           
            &nbsp;&nbsp; All
			
			
          
			 </label>
    	 </span>
		   </div>
        
    
	</tr>
	
	<tr align="center">
    <td>
    <input  type="submit" name="submit_many" value = "Submit" style="width:150" >
    </td>
	
	</tr>
	</table>
    

</form>
<?php
}


########################################################################
##################### Total ####################
#######################################################################
if((($_POST['type']=="total" && isset($_POST['input'])))||(isset($_POST['submit_total'])))


{
?>
<br>
<link href="style.css" rel="stylesheet" type="text/css">
	<div align="center" style="margin-left:10%;margin-right:10%;margin-to:10%"  class="abc">
	  <br><br>
	<span class="sub_head" > <?php echo "Total Marks of ".$_POST['category']." Students"; ?></span>  </div>

<form action="" method="post">

     <div class="abc" style="margin-left:11%;margin-top:30"> Choose Category : 
    <select name="category" >
	
	<option >All</option>
	<option >Pass</option>
	<option >Fail</option>
	<option >Distinction</option>
	</select>
	 &nbsp;&nbsp;&nbsp;&nbsp;<input  type="submit" name="submit_total" value = "Display" style="width:150" >	
   <div> 	
        
    
 

<br><br>


<table width="80%" align="center" border="1" cellpadding="5" cellspacing="5" id="records">
  <tr>
    <th>Student Name</th>
    <th>Roll No.</th>
    <th>Total Marks</th>
   <?php if ((!isset($_POST['category'])) || ($_POST['category']== 'All')) {?> <th>Result</th>
   <?php }?>
  </tr>
  
  
 <?php
 include_once('db.php');
$sql = "SELECT crn,name FROM Students";
$result1 = mysql_query($sql);

 while($std = mysql_fetch_array($result1))
 {
	 
	
				
				
	$crn = $std['crn'];
	$sql1 = "SELECT 			
			m.crn,
			sub.th_int AS total_th_int,
			m.th_int as a_th_int,
			sub.th_final AS total_th_final,
			m.th_final AS a_th_final,
			sub.prac_int AS total_prac_int,
			m.prac_int AS a_prac_int,
			sub.prac_final AS total_prac_final,
			m.prac_final AS a_prac_final
			FROM  marks m 
			INNER JOIN subjects sub ON m.sub_code = sub.sub_code   WHERE m.crn = '".$crn."'";
$res = mysql_query($sql1);
$result = 'Pass';


$total=0;
$fm = 0;
while($data = mysql_fetch_array($res))
{
	$total += ($data['a_th_int'] ) + ($data['a_th_final'] ) + ( $data['a_prac_int'] ) + ($data['a_prac_final']);
	$fm += ($data['total_th_int'] ) + ($data['total_th_final'] ) + ( $data['total_prac_int'] ) + ($data['total_prac_final']);
	
	if(($data['a_th_int']<0.4*$data['total_th_int']  )|| ($data['a_th_final']<0.4*$data['total_th_final'] ) || ( $data['a_prac_int']<0.4*$data['total_prac_int'] ) || ($data['a_prac_final']<0.4*$data['total_prac_final']))
	{
		$result = 'Fail';
	}
	
}
$dist = $fm*.8;		
				
			?>
    
	 
	 
	 
	 
	 
	
  <?php 
  if(($_POST['category']=='Distinction')&& ($result == "Pass")&&($total >= $dist))
  {
  ?>
  <tr>
    
    <td><?php echo $std['crn'];?></td>
    <td><?php echo $std['name'];?></td>
    <td>&nbsp;<?php echo $total;?></td>
    
    
  </tr>
  <?php 
  }
  else if(($_POST['category']=='Pass')&& ($result == "Pass"))
  {
  ?>
  <tr>
    
    <td><?php echo $std['crn'];?></td>
    <td><?php echo $std['name'];?></td>
    <td>&nbsp;<?php echo $total;?></td>
   
    
  </tr>
  <?php 
  }
  else if(($_POST['category']=='Fail')&&( $result == "Fail"))
  {
  ?>
  <tr>
    
    <td><?php echo $std['crn'];?></td>
    <td><?php echo $std['name'];?></td>
    <td>&nbsp;<?php echo $total;?></td>
   
    
    
  </tr>
  <?php 
  }
  else  if ((!isset($_POST['category'])) || ($_POST['category']== 'All')) 
   
    {
  ?>
  <tr>
    
    <td><?php echo $std['crn'];?></td>
    <td><?php echo $std['name'];?></td>
    <td>&nbsp;<?php echo $total;?></td>
    <td>
    	<?php echo $result;?>
 
	</td>
    
    
  </tr>
  <?php 
  }
  
  else 
  {
  	continue;
  }
  
  ?>
 
 <?php
 
 }
 ?>
</table>

<br><br>

<?php
}
?>


