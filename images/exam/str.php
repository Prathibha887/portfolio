<html> 
<body> 
<?php 
if(!isset($_GET['submit'])) 
{ 
?> 
<form method=GET" align="center"> 
<strong><h2> Implementing String Functions</h2></strong> 
Enter a string 
<br> 
<input type="text" name="str"> 
<br><br> 
Enter your choice 
<br> 
<select name="choice"> 
<option value="1">Reverse the String</option> 
<option value="2">Find the length</option> 
<option value="3">Display subString</option> 
<option value="4">Convert to Uppercase</option> 
<option value="5">Convert to Lowercase</option> 
<option value="6">Count number of words</option> 
<option value="7">convert first character of each word to uppercase </option> 
</select> 
<br><br> 
<input type="submit" name="submit" value="submit"> 
</form> 
<?php 
} 
else 
{ 
$s=$_GET['str']; 
$ch=$_GET['choice']; 
switch($ch) 
{ 
case 1: echo "<strong>Reverse String</strong>:",strrev($s); 
break; 
case 2: echo "<strong>Length of the string</strong>:",strlen($s); 
break; 
case 3: echo "<strong>Substring is </strong>:",substr($s,3,3); 
break; 
case 4: echo "<strong>String in upper case</strong>:",strtoupper($s); 
break; 
case 5: echo "<strong>String in lowercase</strong>:",strtolower($s); 
break; 
case 6: echo "<strong>Number of words in the string</strong>:",str_word_count($s); 
break; 
case 7: echo "<strong>Convert the first character of each word in a string to 
uppercase</strong>:",ucwords($s);; 
break; 
default:"invalid  choice"; 
} 
} 
?> 
</body> 
</html>