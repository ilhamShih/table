<?php

header("Content-Type:text/html;charset=UTF-8");
require_once("model/config.php");

function __autoload($c) 
{
	if(file_exists("controller/".$c.".php"))
	{
		require_once "controller/".$c.".php";
	}
	elseif(file_exists("model/".$c.".php"))
	{
		require_once "model/".$c.".php";
	}
	
}
    $class = 'story';	
   
	if(class_exists($class)) {
		
		$obj = new $class;
		$obj->get_body($class);
		
	}else {
	    
		exit("<p>Нет данные для входа</p>");
	}
?>

