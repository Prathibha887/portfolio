<html>
<body>
<form method="post">
Number:<input type="text" name="num"><br>
Choice:<br>
<select name="choice">
<option value="1">Rev</option>
<option value="2">length</option>
<option value="3">sub</option>
<option value="4">upper</option>
<option value="5">lower</option>
<option value="6">count</option>
<option value="7">word</option></select>
<br>
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST["submit"])){
	$s=$_POST["num"];
	$ch=$_POST["choice"];
	switch($ch){
		case 1:echo "Reve",strrev($s);
		break;
		case 2:echo "len",strlen($s);
		break;
		case 3:echo "sub",substr($s,3,3);
		break;
		case 4:echo "up",strtoupper($s);
		break;
		case 5:echo "down",strtolower($s);
		break;
		case 6:echo "coun",str_word_count($s);
		break;
		case 7:echo "first",ucwords($s);
		break;
		default:"invaliid";
}}
?>
</body>
</html>
		