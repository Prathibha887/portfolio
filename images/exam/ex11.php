<html>
<body>
<form method="post" >
Name:<input type="text" name="sname"><br>
Address:<textarea cols="4" rows="10" name="address"></textarea><br>
age:<input type="text" name="age"><br>
Profession:<input type="text" name="profession"><br>
Resident:<input type="radio" name="resident" value="residents" checked="true">Resident
<input type="radio" name="resident" value="nonresidents">Non-Resident<br>
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST["submit"])){
	$name=$_POST["sname"];
	$address=$_POST["address"];
	$age=$_POST["age"];
	$profession=$_POST["profession"];
	$resident=$_POST["resident"];
	if(empty($name)){
		die("ERROR Enter valid name");
	}
	if(empty($address)){
		die("ERROR Enter valid address");
	}
	if(empty($age)){
		die("ERROR Enter valid age");
	}
	else if($age<18||$age>60)
	{
	die("ERROR membership only");
	}	
	if(empty($profession)){
		die("ERROR Enter valid nprofession");
	}
	
if(!empty($name) && !empty($address) && !empty($age) && !empty($profession)){
	echo"<h1>Student details</h1>";
	echo "<p><strong>Name is:</strong>$name</p>";
	echo "<p><strong>address is:</strong>$address</p>";
	echo "<p><strong>age is:</strong>$age</p>";
	echo "<p><strong>resifential is:</strong>$resident</p>";
	echo "<p><strong>Profession is:</strong>$profession</p>";
}
}
?>
</body>
</html>
	