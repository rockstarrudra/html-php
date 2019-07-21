<?php
$y="";
$x="";
$ans="";
if(isset($_POST["add"]))
	{
	$x=$_POST["txtNo"];
	$y=$_POST["txtNo1"];
	if($_POST["add"])
	{$ans=$x+$y;}
	}
if(isset($_POST["sub"]))
	{
	$x=$_POST["txtNo"];
	$y=$_POST["txtNo1"];
	if($_POST["sub"])
	{$ans=$x-$y;}
	}
if(isset($_POST["mul"]))
	{
	$x=$_POST["txtNo"];
	$y=$_POST["txtNo1"];
	if($_POST["mul"])
	{$ans=$x*$y;}
	}
if(isset($_POST["div"]))
	{
	$x=$_POST["txtNo"];
	$y=$_POST["txtNo1"];
	if($_POST["div"])
	{$ans=$x/$y;}
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
<th><input type="submit" value="Addition" name="add"></th>
<th><input type="submit" value="multiplication" name="mul"></th>
<th><input type="submit" value="subtraction" name="sub" ></th>
<th><input type="submit" value="Division" name="divi"></th>
</tr>

<tr>
<td>Ans</td>
<td> <input type="text" name="txtAns" value="<?php echo $ans; ?>"></td>
</tr>
</table>
</form>
