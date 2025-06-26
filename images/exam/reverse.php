<?php
if(isset($_POST["submit"])){
	$usernumber=$_POST["num"];
	$originalnumber=$usernumber;
	$reversenumber=0;
	$sum=0;
	while($usernumber>0){
		$digit=$usernumber%10;
		$reversenumber=($reversenumber*10)+$digit;
		$sum+=$digit;
		$usernumber=(int)($usernumber/10);
	}
	echo "originalnumber is:$originalnumber<br>";
	echo "reversenumber is:$reversenumber<br>";
	echo "sum of digits is:$sum<br>";


}
		
?>