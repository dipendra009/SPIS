
 <?php
  include_once('db.php');
if(isset($_POST['submit_many']))
{ 
?>
<link href="style.css" rel="stylesheet" type="text/css">
	<div align="center" style="margin-left:10%;margin-right:10%;margin-to:10%"  class="abc">
	  <br><br>
	<span class="sub_head" > Many Subjects </span>  </div>




<table width="80%" align="center" border="1" style="margin-bottom:50;margin-top:50" cellpadding="5" cellspacing="5" id="records">
  <tr>
    <th>Roll No.</th>
    <th>Student Name</th>
   
<?php


		$sql = "SELECT name FROM Subjects ORDER BY name";
		$result = mysql_query($sql);
		print_r($_POST);
		$i=0;
		
		while($data= mysql_fetch_array($result))
		{
			
			$n = $data['name'];
			echo $n;
			 echo $_POST[$i++];
			$sub_name = $_POST[$n];
			echo $i.$sub_name;
			if(isset($sub_name) || isset($_POST['all']))
			{
			$i++;
			$total[$data['name']] = $data['th_int']+$data['th_final']+$data['prac_int']+$data['prac_final'];
			?>
			<th>
			
			<?php echo $data['name']."<br> FM: ".$total[$data['name']]?>
			</th>
		<?php }
		}
		
		?>			
		
  </tr>
  </table>

<?php
}
?>






 

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
	?>
	</table>

<br>
