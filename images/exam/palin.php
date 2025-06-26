<?php
if(isset($_POST["submit"])){
	$usernumber=$_POST["num"];
	$originalnumber=$usernumber;
	$reversenumber=0;
	while($usernumber>0){
		$digit=$usernumber%10;
		$reversenumber=($reversenumber*10)+$digit;
		$usernumber=(int)($usernumber/10);
	}
	if($originalnumber==$reversenumber){
		echo "$originalnumber is a paliindrome number";
	}
	else{
		echo "$originalnumber is  not a paliindrome number";
	
	}
}
		
?>