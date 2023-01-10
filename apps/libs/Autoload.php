<?php
class Autoload{
    public function __construct(){
        $robj=req();
        $controller=$robj->controller;
        $method=$robj->method;
        $para=$robj->para;
        $path="apps/controller/$controller.php";
        if(file_exists($path)){
            require_once $path;
            $cobj=new $controller();
         if(method_exists($cobj,$method))
             $cobj->$method($para);
            else{
                if(method_exists($cobj,'index'))
                    $cobj->index();
                    else
                        echo"<h1><center style='color:red'>404 Method not found</center></h1>";
                     
                }
        }
        else{
         echo"<h1><center style='color:red'>404 controller not found</center></h1>";
            }
    }
}