<?php
spl_autoload_register('myAutoLoader');
function myAutoLoader($className){
    $filename = "classes/".$className.".php";
	if(is_readable($filename)){
		require $filename;
	}else{
		throw new Exception("unable to load $className.");		
    }
}
?>