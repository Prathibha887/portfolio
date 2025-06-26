<html>
<body>
<?php
echo"<h1>Student Details</h2>";
	$con=mysqli_connect("localhost","root","","exam");
	if(!$con)
		die("Connection Failed".mysqli_connect_error());
	$sql="select *from  student";
	$res=mysqli_query($con,$sql);
	if(!$res)
		die("Error".mysqli_error($con));
	else
		echo "<table border='1'>";
	echo "<tr><th>Register No</th><th>Name</th><th>Class</th><th>Gender</th><th>PHP</th><th>C</th><th>Java</th><th>Total</th><th>Average</th><th>Grade</th></tr>";
	while($userdata=mysqli_fetch_array($res)){
		echo "<tr><td>".$userdata[0]."</td><td>".$userdata[1]."</td><td>".$userdata[2]."</td><td>".$userdata[3]."</td><td>".$userdata[4]."</td><td>".$userdata[5]."</td><td>".$userdata[6]."</td>";
		$tot=$userdata[4]+$userdata[5]+$userdata[6];
		$avg=$tot/3.0;
		if($userdata[4]<35||$userdata[5]<35||$userdata[6]<35){
		$grade="fail";
		}
		else if($avg>=80){	
		$grade="distinction";
		}
		else if($avg>=60){
		$grade="First";
		}else  if($avg>=50){
		$grade="Second";
		}
		else
		{
		$grade="pass";
		}
		echo "<td>$tot</td><td>$avg</td><td>$grade</td></tr>";
	}
	echo "</table>";
	
	echo "<a href=\"main.html\">Go Back To HOme</a>";
	mysqli_close($con);
	?>
	</body>
	</html>
	
	