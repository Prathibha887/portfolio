<html>
<body>
<?php
if(!isset($_POST["submit"])){
	?>
<form method="post" >
Enter array elemments:<input type="text" name="array"><br>
enter position insert(based on index):<input type="text" name="pos"><br>
enter item insert:<input type="text" name="item"><br>
<input type="submit" name="submit">
</form>
<?php
}
else{
	$array=explode(',',$_POST["array"]);
	$pos=$_POST["pos"];
	$item=$_POST["item"];
	array_splice($array,$pos,3,$item);
	echo "updated array:";
	echo implode(',',$array);
}

?>
</body>
</html>