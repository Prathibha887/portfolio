<html>
<body>
<form method="post">
Entet First Number:<input type="text" name="num1"><br>
Entet Second Number:<input type="text" name="num2"><br>
Entet third Number:<input type="text" name="num3"><br>
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST["submit"]))
{
	$a=$_POST["num1"];
	$b=$_POST["num2"];
	$c=$_POST["num3"];
	if($a>$b&&$a>$c)
	{
	 echo"$a is largest";
	}
	else if($b>$c)
	{
	 echo"$b is largest";
	}
	else{
		echo "$c is largest";
	}
}	
	?>
</body>
</html>