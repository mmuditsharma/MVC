<?php
// require_once"helper/env.php";
// require_once"helper/req.php";
array_map(fn($f)=>include $f,glob('helper/*.php'));
spl_autoload_register(function($classname){
    $path="apps/libs/$classname.php";
    if(file_exists($path)){
        require_once $path;
    }
}); 
$obj=new Autoload();
?>