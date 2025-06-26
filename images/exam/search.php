<html>
<body>
<?php
if(isset($_POST["submit"])){
	$con=mysqli_connect("localhost","root","","exam");
	if(!$con)
		die("Connection Failed".mysqli_connect_error());
	$accno=$_POST["accno"];
	$title=$_POST["title"];
	$sql="select * from library where accno=$accno and title='$title'";
	$res=mysqli_query($con,$sql);
	if(!$res){
		die("ERROR".mysqli_error($con));
	}
		else
		{
			echo "<table border='1'>";
	echo "<tr><th>Accession No</th><th>Title</th><th>Author</th><th>Price</th></tr>";
	while($lib=mysqli_fetch_array($res)){
		echo "<tr><td>".$lib[0]."</td><td>".$lib[1]."</td><td>".$lib[2]."</td><td>".$lib[3]."</td></tr>";
	}
	echo "</table>";
		}
	echo "<br><a href=\"lib.php\">Go Back To Home</a>";
	mysqli_close($con);
}
else{
	?>
	<form method="post" action="search.php">
	Accession  No:<input type="text" name="accno"><br>
	Title:<input type="text" name="title"><br>
	
	<input type="submit" name="submit">
	</form>
<?php
}
?>
</body>
</html>

	