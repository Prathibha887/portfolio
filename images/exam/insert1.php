<html>
<body>
<?php
if(isset($_POST["submit"])){
	$con=mysqli_connect("localhost","root","","exam");
	if(!$con)
		die("Connection Failed".mysqli_connect_error());
	$accno=$_POST["accno"];
	$title=$_POST["title"];
	$author=$_POST["author"];
	$price=$_POST["price"];
	$sql="insert into library values($accno,'$title','$author',$price)";
	$res=mysqli_query($con,$sql);
	if($res){
		echo" Recored inserted successfully";
	}
	else{
		echo "Error".mysqli_error($con);
	}
	echo "<br><a href=\"lib.php\">Go Back To HOme</a>";
	mysqli_close($con);
}
else{
	?>
	<form method="post" action="insert1.php">
	Accession  No:<input type="text" name="accno"><br>
	Title:<input type="text" name="title"><br>
	Author:<input type="text" name="author"><br>
	Price:<input type="text" name="price"><br>
	<input type="submit" name="submit">
	</form>
<?php
}
?>
</body>
</html>

	