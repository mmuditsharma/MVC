<?php
class View{
    public function view($filename,$data=[],$s=false,
    $hf=true,){
        $filename=str_replace('.','/',$filename);
        $path="apps/views/$filename.php";
        if(file_exists($path)){
            extract($data);
            include"apps/views/layout/top.php";
        if($hf)
            include"apps/views/layout/header.php";
        if($s)
            include"apps/views/layout/slider.php";
            include $path;
        if($hf)
            include"apps/views/layout/footer.php";
            include"apps/views/layout/bottom.php";
        }
    }
}