<?php

require_once __DIR__."/../../core/mongo/update.php";

$id=new \MongoDB\BSON\ObjectId($_POST['id']);

$filter=['_id'=>$id];
$obj=['marca'=>$_POST['marca'],'descricao'=>$_POST['descricao']];
$collection='ecommerce.marcas';

update($filter,faz(),$collection);

echo "<script>location.href='marcas'</script>";

function faz(){
    obj=[];
foreach($_POST as $key=>$value){
    $obj[]=[$key=>$value];
    }

    return $obj;
}