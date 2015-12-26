
<br><br>
 <div align="left" style="font-weight:bold;margin-left:10%" class="abc" >Choose option</div>


<form action="index.php?page=add_mark" method="post">
<?php
include_once('db.php');
if(isset($_POST['add']) || isset($_POST['edit']))
{
	if(isset($_POST['add']))
	{	
	$submit_type = add;
	}
	else
	{
		$submit_type = edit;
	}
	
	$sql = "SELECT name FROM Subjects";
	$result = mysql_query($sql);
	
	print_r($d);
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
    <br><br>
    <div> Marks :
      
       
          <label>
          <br>
            <input type="radio" name="marks" value="th" id="RadioGroup1_0" />
            Theory</label>
          <label>
            <input type="radio" name="marks" value="prac" id="RadioGroup1_1" />
            Practical</label>
          <br />
            <br>
            <input type="radio" name="marks_type" value="int" id="RadioGroup1_0" />
            Assessment</label>
          <label>
            <input type="radio" name="marks_type" value="final" id="RadioGroup1_1" />
            Final</label>
          <br />

     
    &nbsp;&nbsp;
    <br>
    <input  type="submit" name="submit_<?php echo $submit_type;?>" value = "Submit" style="width:150" >
    </div>
    
<?php
}
?>
</form>



<?php
if(isset($_POST['delete']))
{?>

<form action="index.php?page=action" method="post"><div class="abc" style="margin-left:11%">
		<label   >Please Enter the CRN of the student to be deleted : </label>
		<input name="crn" type="text" style="margin-left:50" />
        <br /><br>Marks-Info <input name="delete_info" type="radio" value="1" checked />&nbsp;&nbsp;&nbsp;&nbsp;
        Mark-Info With Student-Info<input name="delete_info" type="radio" value="2" />
        <input name="submit_delete" type="submit" value="Delete Record" style="margin-left:75"/>

</div></form>
<br></br>
<?php
}
?>

