<html>
<body>
<?php
if(isset($_POST["submit"])){
	$con=mysqli_connect("localhost","root","","exam");
	if(!$con)
		die("Connection Failed".mysqli_connect_error());
	$regno=$_POST["regno"];
	$name=$_POST["txtname"];
	$class=$_POST["txtclass"];
	$gender=$_POST["txtgender"];
	$m1=$_POST["txtm1"];
	$m2=$_POST["txtm2"];
	$m3=$_POST["txtm3"];
	$sql="insert into student values($regno,'$name','$class','$gender',$m1,$m2,$m3)";
	$res=mysqli_query($con,$sql);
	if($res){
		echo" Recored inserted successfully";
	}
	else{
		echo "Error".mysqli_error($con);
	}
	echo "<a href=\"main.html\">Go Back To HOme</a>";
	mysqli_close($con);
}
else{
	?>
	<form method="post" action="insert.php">
	Register No:<input type="text" name="regno"><br>
	Name:<input type="text" name="txtname"><br>
	gender:<input type="radio" name="txtgender" value="male">Male
	<input type="radio" name="txtgender" value="female">FeMale<br>
	class:<input type="radio" name="txtclass" value="IBCA">IBCA
	<input type="radio" name="txtclass" value="IIBCA">IIBCA
	<input type="radio" name="txtclass" value="IIIBCA">IIIBCA
	<br>
	Marks in 3 subjects:<input type="text" name="txtm1"><br>
    <input type="text" name="txtm2"><br>
	<input type="text" name="txtm3"><br>
	<br>
	<input type="submit" name="submit">
	</form>
<?php
}
?>
</body>
</html>

	