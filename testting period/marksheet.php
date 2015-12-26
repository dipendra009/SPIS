<?php
include_once('db.php');
	

if(isset($_POST['marksheet']))
{
	include_once('db.php');
	$crn = $_POST['crn'];
	echo $crn;
	
	
	

$sql = "select * from subjects";
$res_sub = mysql_query($sql);
	
	
	
	
	
	
}

?>

<table width="200" border="1" cellspacing="5" cellpadding="5" id="records" align="center">
  <tr >
    <th colspan="2">Subjects</th>

    <th colspan="2">Full arks</th>
   
    <th colspan="2">Pass Marks</th>
    
    <th colspan="2">Marks Obtained</th>
   
    <th rowspan="2">Total</th>
    <th rowspan="2">Remarks</th>
  </tr>
  <tr>
     <th>Code</th>
    <th>Title</th>
    <th>Asst.</th>
    <th>Final</th>
     <th>Asst.</th>
    <th>Final</th>
     <th>Asst.</th>
    <th>Final</th>
  </tr>
  
  <?php
  while($data = mysql_fetch_array($res_sub))
  {
   if($data['th_int']!=0 || $data['th_final']!=0)
   {?>
  <tr>
    <td><?php echo $data['sub_code'];?></td>
    <td>&nbsp;<?php echo $data['name'];?></td>
    <td>&nbsp;<?php  echo $data['th_int'];?></td>
    <td>&nbsp;<?php echo $data['th_final'];?></td>
    <td>&nbsp;<?php echo $data['th_int']*0.40;?></td>
    <td>&nbsp;<?php echo $data['th_final']*0.40;?></td>
    <td>&nbsp;<?php ?></td>
    <td>&nbsp;<?php ?></td>
    <td>&nbsp;<?php ?></td>
    <td>&nbsp;<?php ?></td>
  
  </tr>
  
  
  <?php
   }
  if($data['prac_int']!=0 || $data['prac_final']!=0)
  {?>
	 <tr>
    <td><?php echo $data['sub_code'];?></td>
    <td>&nbsp;<?php echo $data['name']." PRACTICAL";?></td>
    <td>&nbsp;<?php echo $data['prac_int']; ?></td>
    <td>&nbsp;<?php echo $data['prac_final'];?></td>
    <td>&nbsp;<?php echo $data['prac_int']*0.40;?></td>
    <td>&nbsp;<?php echo $data['prac_final']*0.40;?></td>
    <td>&nbsp;<?php ?></td>
    <td>&nbsp;<?php ?></td>
    <td>&nbsp;<?php ?></td>
    <td>&nbsp;<?php ?></td>
  
  </tr>  
  <?PHP 
  }

  }
  ?>
  
  
</table>
