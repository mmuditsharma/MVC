<?php
function dd($data){
    $str="<div style=\"background-color:black;color:white\"><pre>";
    if(is_bool($data)){
        $str.="<span style=\"color:blue\">NULL</span>".($data?'true':'false')."</span>";
    }elseif(is_array($data)or is_object($data)){
        $str.=print_r($data,true);
    }elseif(is_null($data))
    {
        $str.="<span style=\"color:blue\">NULL</span>";
    }
    else{
        $str.=$data;
    }
    $str.="</pre></div>";
    echo $str;
    exit;
}