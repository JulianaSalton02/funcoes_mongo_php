<?php
class Model{
    public $item;
    private $con;

    function __construct($manager){

        $this->con=new \MongoDB\Driver\Manager($manager);


    }

    function schema(){
        $array= (array) $this->item;
        return $array;
    }

    function insert($collection){
        $tb=new \MongoDB\Driver\BulkWrite;
        $tb->insert($this->schema());
        $result=$this->con->executeBulkWrite($collection,$tb);
        return $result;
    }

    function findAll($collection){
        $db=new \MongoDB\Driver\Query([]);

        $result=$this->con->executeQuery($collection,$db);

        return $result;
    }

    function find($criteria,$collection){
        $db=new \MongoDB\Driver\Query($criteria);
        $result=$this->con->executeQuery($collection,$db);

        return $result;
    }
    function update($criteria,$collection){
        $tb=new \MongoDB\Driver\BulkWrite;
        $tb->update($criteria,$this->schema());

        $result=$this->con->executeBulkWrite($collection,$tb);

        return $result;
    }
    function ID($id){

        $result=new \MongoDB\BSON\ObjectId($id);
        return $result;
    }
    function findID($collection,$field,$id){
        $_id=$this->ID($id);
        $db=new \MongoDB\Driver\Query([$field=>$_id]);

        $result=$this->con->executeQuery($collection,$db);

        foreach($result as $cursor){
            foreach($cursor as $key=>$value){
                $this->item->$key=$value;
            }
        }
    }
}