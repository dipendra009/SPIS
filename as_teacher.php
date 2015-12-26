
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
<br>

<link href="style.css" rel="stylesheet" type="text/css">

<form action="index.php?page=display" method="post">

<table width="90%" border="0" class="abc" align="center" cellpadding="5" cellspacing="30">
  <tr>
  
  <td style="font-weight:bold"> Result Of : </td>
    <td >
Faculty

<select  />
            	<option value = "Computer" >Computer</option>
                <option value = "clectronics">Electronics</option>
                <option value="civil">Civil</option>
</select>
</td>

<td>

   	Year : 
    <select name="year" >
		<option value="061" >061</option>
    	<option value="062">062</option>
    	<option value="063">063</option>
    	<option value="064">064</option>
    	<option value="065">065</option>
    	<option value="066">066</option>
	</select>
</td>


    <td >
Semester

<select>
	<option>I</option>
    <option>II</option>
    <option>III</option>
    <option>IV</option>
    <option>V</option>
    <option>VI</option>
    <option>VII</option>
    <option>VIII</option>

</select>
</p></td></tr>

<tr>
<td style="font-weight:bold"> Choose Options :  </td>
<td>
<p>
  <label>
  <input type="radio" name="type" value="subject_wise" />
    Any Subject </label>
  </td><!--<td>
  <label>
  <input type="radio" name="type" value="many" />
    More Than One Subject </label></td>-->
	<td>
  <label>
  <input type="radio" name="type" value="total" />
    Total Marks </label></td>
	</tr>
  <br />


    <td ><input name="input" type="submit" value="FORWARD"></td>
  </tr>
</table>
</form>







