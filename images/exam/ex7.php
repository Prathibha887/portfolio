<html>
<body>
<form method="post">
Entet Number:<input type="text" name="num"><br>
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST["submit"])){
	$num=$_POST["num"];
	if($num==1){
		echo "$num is not a prime number";
	}
	else{
		$prime=0;
		for($i=2;$i<$num;$i++)
		{
			if($num%$i==0)
			{
				$prime=1;
				break;
			}
		}
	
	if($prime==0){
		echo "$num is  a prime number";
	}
	else{
		echo "$num is not a prime number";
	}
	}
}
		
?>
</body>
</html>