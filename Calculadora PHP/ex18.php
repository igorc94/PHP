<?php
$varA = $_POST['a'];
$varB = $_POST['b'];
$triggerA = 0;
$triggerB = 0;
$res = 0;

if($varA != "" and ctype_digit($varA))
{
	$triggerA = 1;
}
if($varB != "" and ctype_digit($varB))
{
	$triggerB = 1;
}

if($triggerB == 1 and $triggerA == 1)
{
	$res = $varA+$varB;
	echo "Primeiro numero = $varA";
	echo "<br>";
	echo "Segundo numero = $varB";
	echo "<br>";

	echo "O resultado da sua conta é $res";
}
else
{
	echo "Me fala como eu vou somar dois null?";
}

?>