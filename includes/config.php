<?php
session_start();

$config = array(
	'title' => 'Сайт про животных',
	'vkLink' => 'https://vk.com/id69026689',
	'db' => $arrayName = array(
		'server' => 'localhost',
		'username' => 'root',
		'password' => 'root',
		'name' => 'testt'
		 )
	 );

require "db.php";



?>