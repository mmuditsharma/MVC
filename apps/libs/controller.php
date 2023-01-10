<?php
class Controller{
    protected $load;
    public function __construct()
    {
        $this->load=new View();
    }
  public function model($modelname,$obj=''){
    if(!$obj){
        $obj=strtolower($modelname);
    }
    $mname=ucfirst(strtolower($modelname));
    $path="apps/models/$mname.php";
    if(file_exists($path)){
        include $path;
        $this->$obj=new $mname($modelname);
    }
  } 
}