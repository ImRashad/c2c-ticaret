<?php  

try {

	$db=new PDO("mysql:host=localhost;dbname=c2c;charset=utf8",'root','0998098979');

	//echo "basarili..";
	
} catch (PDOException $e) {
	echo $e->getMessage();
}

?>