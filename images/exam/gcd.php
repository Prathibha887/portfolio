<?php
function getGCF($a,$b){
	if($b==0){
		return $a;
	}
	else{
	return getGCF($b,$a%$b);
	}
}
function getLCM($a,$b){
	return ($a*$b)/getGCF($a,$b);
}
?>
<html>
<body>
<form method="post">
Number:<input type="text" name="num"><br>
<input type="text" name="num2"><br>
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST["submit"])){
	$num1=$_POST["num"];
	$num2=$_POST["num2"];
	echo "u entered :$num1,$num2";
	echo "gcf :".getGCF($num1,$num2);
		echo "<br>gcf :".getLCM($num1,$num2);

}
?>
</body>
</html>