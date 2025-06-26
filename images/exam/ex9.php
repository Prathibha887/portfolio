<html>
<body>
<form method="post" >
Enter number of rows:<input type="text" name="rows"><br>
enter number columns:<input type="text" name="cols"><br>
<h2>Enter Matrix A elements</h2>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$rows=$_POST["rows"];
	$cols=$_POST["cols"];	
for($i=0;$i<$rows;$i++)
{
	for($j=0;$j<$cols;$j++)
	{
		echo '<input type="number" name="MatrixA['.$i.']['.$j.']">';
	}
	echo "<br>";
}
}
?>
<h2>Enter Matrix B elements</h2>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$rows=$_POST["rows"];
	$cols=$_POST["cols"];	
for($i=0;$i<$rows;$i++)
{
	for($j=0;$j<$cols;$j++)
	{
		echo '<input type="number" name="MatrixB['.$i.']['.$j.']">';
	}
	echo "<br>";
}
}
?>		
	
<input type="submit" value="add">
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["MatrixA"]) &&isset($_POST["MatrixB"])){
	$MatrixA=$_POST["MatrixA"];
	$MatrixB=$_POST["MatrixB"];
	$rows=count($MatrixA);
	$cols=count($MatrixA[0]);
	
	$sum=array();
	for($i=0;$i<$rows;$i++)
{
	for($j=0;$j<$cols;$j++)
	{
		$sum[$i][$j]=$MatrixA[$i][$j]+$MatrixB[$i][$j];
	}
}
echo"Sum of matriices is:";
echo "<table border='1'>";
for($i=0;$i<$rows;$i++)
{
	echo "<tr>";
	for($j=0;$j<$cols;$j++)
	{
echo "<td>".$sum[$i][$j]."</td>";
	}
	echo "</tr>";
}
echo "</table>";
}


?>
</body>
</html>