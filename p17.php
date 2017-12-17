<?php
$x="";
$y="";
$ans="";
$i=0;
$odd="";
$even="";
if(isset($_POST["btnSubmit"]))
{
$x=$_POST["txtNo"];
	for($i=0;$i<=$x;$i++)
	{
		if($i%2==0)
		{
			$even.="\n$i is even";
		}
		else
		{
			$odd.="\n$i is odd";
		}

	}   
}
?>
<form name="frm1" method="POST">
<table border="2" width="40%"  height="30%" cellspacing="10" cellpadding="10">

<tr>
<td colspan="1">No</td>
<td><input type="text" name="txtNo" value="<?php echo $x;?>"></td>
</tr>

<tr>
<th colspan="2"><input type="submit" value="Ans" name="btnSubmit"></th>
</tr>

<tr>
<td> <textarea name="txtAns" rows="10" ><?php echo $odd;?></textarea> </td>
<td> <textarea name="txtAns" rows="10"><?php echo $even;?></textarea> </td>
</tr>