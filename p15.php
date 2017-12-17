<?php
$ans="";
$ans1="";

$x=5;
for ($i=1; $i<=$x ; $i++) 
	{ 
		$ans.="$i\n";
	}
for ($i=1; $i<=$x ; $i++) 
	{ 
		$ans1.="\n".($i*$i)	;
	}


?>
<form name="frm1" method="POST">
<table border="2" width="40%"  height="30%" cellspacing="10" cellpadding="10">

<tr>
<td rowspan="1">Values</td>
<td rowspan="1">Squares</td>
</tr>

<tr>
<td rowspan="3"> <textarea name="txtAns" ><?php echo $ans;?></textarea> </td>
<td rowspan="3"> <textarea name="txtAns2" ><?php echo $ans1;?></textarea> </td>
</tr>
</table>
</form>