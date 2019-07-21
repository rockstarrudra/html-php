<?php
$ans="";
if (isset($_POST["btnSubmit"]))
{
	echo "hi";
	if(isset($_POST["cmb"]))
	{

		$ans="Cricket ";
	}
	if(isset($_POST["cmb2"]))
	{
		$ans.="Hockey";
	}
	if(isset($_POST["cmb3"]))
	{
		$ans.="csgo";
	}
	if(isset($_POST["cmb4"]))
	{
		$ans.="Swimming";
	}
}
?>
<form name="frm1" method="POST">
<table border="2" width="40%"  height="30%" cellspacing="10" cellpadding="10">

<tr>
<td>Hobbies</td>
<td>
<input type="checkbox" 	name="cmb" value="Cricket"> Cricket
<input type="checkbox" 	name="cmb2" value="Hockey">Hockey
<input type="checkbox"  name="cmb3" value="csgo">csgo
<input type="checkbox"  name="cmb4" value="Swimming">Swimming
</td>
</tr>

<tr>	
<th colspan="2"><input type="submit" name="btnSubmit" value="Show Hobbies"></th>
</tr>

<tr>
<td>Ans</td>
<td> <input type="text" name="txtAns" value="<?php echo $ans; ?>"> </td>
</tr>
</table>
</form>