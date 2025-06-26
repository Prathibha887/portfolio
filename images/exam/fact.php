<?php
if(isset($_POST["submit"])){
	$fact=1;
	$n=$_POST["num"];
	echo "factorial of $n is:";
	for($i=1;$i<=$n;$i++)
	{
	$fact=$fact*$i;
	}
echo "$fact";	
}
?>