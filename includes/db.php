<?php



$connection = mysqli_connect(
	$config['db']['server'],
	$config['db']['username'],
	$config['db']['password'],
	$config['db']['name']
);




if (!$connection) {
	echo "Базе карачун";
	echo mysqli_connect_error();
	exit();
} 




?>