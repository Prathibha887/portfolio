<html>
<body>
<form method="post">
Entet  First Number:<input type="text" name="num1"><br>
Entet Second Number:<input type="text" name="num2"><br>
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST["submit"]))
{
	$a=$_POST["num1"];
	$b=$_POST["num2"];
	echo "before swapping<br>";
	echo "a=".$a."<br>";
	echo "b=".$b."<br>";
	$c=$a;
	$a=$b;
	$b=$c;
	echo "after swapping<br>";
	echo "a=".$a."<br>";
	echo "b=".$b."<br>";
}	
	?>
</body>
</html>