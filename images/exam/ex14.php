<html>
<body>
<form method="post">
enter number<input type="date" name="dob"><br>
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST["submit"])){
	$today=strtotime('TODAY');
	$dob=strtotime($_POST['dob']);
	$day=floor(($today-$dob)/(60*60*24));
	$year=floor(($day/365));
	$mon=floor(($day-($year*365))/30);
	echo "you are $year and $mon old";
}
?>
</body>
</html>
