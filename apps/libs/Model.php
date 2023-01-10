<?php
class Model extends mysqli{
    protected $table,$key='id';
    public function __construct($table)
    {       
        parent::__construct(HOSTNAME,USERNAME,PASSWORD,DB);
        if(!isset($this->table)){
            $this->table=$table;
        }
    }

    public function save($data)
    {
        $cols= array_keys($data);
        $cols= implode(',',$cols);
        $values=implode(',',array_map(fn ($ele)=>"'$ele'",$data));
        $sql="insert into $this->table ($cols) values($values) ";
        if($this->query($sql)){
            return $this->inser_id;
        }
        return false;
    }
    public function update($data,$id){

    }

    public function showAll($cols = "*" , $orderby ='',$order='desc')
    {   
        if(!$orderby){
            $orderby=$this->key;
        }
        $cols=(is_array($cols)) ? implode(',',$cols) : $cols;
        $sql="select $cols from $this->table order by $orderby $order"; 
        return $this->query($sql)->fetch_all(MYSQLI_ASSOC);
    }
    public function show($id,$cols="*"){
        $cols=(is_array($cols)) ? implode(',',$cols) : $cols;
        $sql="select $cols from $this->table where $this->key=$id"; 
        return $this->query($sql)->fetch_assoc();
    }
    public function delete($id){
        $id=(is_array($id)) ? implode(',',$id) : $id;
        $sql="delete from $this->table where $this->key in ($id)"; 
        return $this->query($sql);
    }
}
