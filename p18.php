<?php
$y="";
$x="";
$ans="";
if(isset($_POST["btnSubmit"]))
{
$x=$_POST["txtNo"];
$y=$_POST["txtNo1"];

	if($_POST["op"]== "add")
		{
			$ans=$x+$y;
		}
	
	else if($_POST["op"]=="sub")
		{
			$ans=$x-$y;
		}
	else if($_POST["op"]=="mul")
		{
			$ans=$x*$y;
		}
	
	else if($_POST["op"]=="divi")
		{
			$ans=$x/$y;
		}
}
?>
<form name="frm1" method="POST">
<table border="2" width="40%"  height="30%" cellspacing="10" cellpadding="10">
<tr>
<td colspan="1">No</td>
<td><input type="text" name="txtNo" value="<?php echo $x; ?>"></td>
</tr>

<tr>
<td colspan="1">No2</td>
<td><input type="text" name="txtNo1" value="<?php echo $y; ?>"></td>
</tr>


<tr>
<td>Operation</td>
<td><select name="op">
    <option value="add">Addition</option>
    <option value="sub">Subtraction</option>
    <option value="mul">Multiplication</option>
    <option value="divi">Division</option>
    </select>
</td>
</tr>

<tr>
<td><input type="submit" value="Answer" name="btnSubmit"></td>
</tr>


<tr>
<td>Ans</td>
<td> <input type="text" name="txtAns" value="<?php echo $ans; ?>"></td>
</tr>
</table></form>