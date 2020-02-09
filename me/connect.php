
<?php  
function connect(){
	$server = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'pr';
	return new mysqli ($server,$user,$pass,$db);
}?>
