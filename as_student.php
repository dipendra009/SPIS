

<div  class="session">
 <?php
 @session_start();
 ob_start();
 	if(!empty($_SESSION['name']))
	{
 	echo "Hi! ".$_SESSION['name'];
	}
 ?>
</div>
<form action="index.php?page=marksheet" method="post">

<table width="80%" border="0" cellspacing="5" cellpadding="5" align="center" class="abc">

  <tr>
    
    
    
    
  <td width="37%">
  	CRN : 
   			<input type="text" name="crn"></input>
  </td>
    
    <td width="31%">
    	Semester : 
		<select name="semester">
			<option value="I">I</option>
    		<option value="II">II</option>
    		<option value="III">III</option>
    		<option value="IV">IV</option>
    		<option value="V">V</option>
    		<option value="VI">VI</option>
    		<option value="VII">VII</option>
    		<option value="VIII">VIII</option>

	</select>
    </td>
    
    <td width="32%"><input type="submit" name="marksheet" value="Result" style="width:150"></input></td>
    
    </tr>
    <tr ><td></td>&nbsp;<td></td>&nbsp;<td>&nbsp;</td></tr>
    <tr >&nbsp;</tr>
   
</table>
</form>