<?php
function getGCD($a,$b){
	if($b==0){
		return $a;
	}
	else{
		return getGCD($b,$a%$b);
	}
}
function getLCM($a,$b)
{
	return ($a*$b)/getGCD($a,$b);
}
?>

<html>
<body>
<form method="post" >
Entet  2 Numbers:<input type="text" name="num1"><br>
<input type="text" name="num2"><br>
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST["submit"])){
	$num1=(int)$_POST["num1"];
	$num2=(int)$_POST["num2"];
    echo "you entered $num1,$num2";
	echo "gcf of($num1,$num2):".getGCD($num1,$num2);
	echo "LCM of($num1,$num2):".getLCM($num1,$num2);
}
	?>
</body>
</html>