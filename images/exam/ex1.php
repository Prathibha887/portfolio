<html>
<body>
<form method="post">
Entet Number:<input type="text" name="num"><br>
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST["submit"]))
{
	$n=$_POST["num"];
	if($n%2==0)
	{
	 echo"$n is even";
	}
	else
	{
	 echo"$n is odd";
	}
}	
	?>
</body>
</html>