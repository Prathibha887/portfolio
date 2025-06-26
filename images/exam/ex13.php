<html>
<body>
<form method="post">
enter number<input type="text" name="num"><br>
<input type="submit" name="submit">
</form>
<?php
function fibonacci($n){
	if($n<=1){
		return $n;
	}
	else{
		return (fibonacci($n-1)+(fibonacci($n-2)));
	}
}
?>
<?php
if(isset($_POST["submit"])){
	$num=$_POST["num"];
	for($i=0;$i<$num;$i++){
		echo fibonacci($i)."<br>";
	}
}
?>
</body>
</html>
		