<html>
<body>
<form method="post">
Number of rows:<input type="text" name="rows"><br>
number of cols<input type="text" name="cols">
<h1>Matrix A</h1>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
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
<h1>Matrix B</h1>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{   $rows=$_POST["rows"];
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
<input type="submit" name="add">
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST["MatrixA"]) && isset($_POST["MatrixB"])){
	$matrixA=$_POST["MatrixA"];
	$matrixB=$_POST["MatrixB"];
	$rows=count($matrixA);
	$cols=count($matrixA[0]);
	$sum=array();
	for($i=0;$i<$rows;$i++)
	{
	for($j=0;$j<$cols;$j++)
	{	
$sum[$i][$j]=$matrixA[$i][$j]+$matrixB[$i][$j];
	}
	}
	echo "add:";
	echo "<table border='2'>";
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
