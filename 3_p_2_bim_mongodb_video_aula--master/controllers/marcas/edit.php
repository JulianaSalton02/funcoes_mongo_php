<?php
require_once __DIR__."/../../core/mongo/find.php";

$id=new \MongoDB\BSON\ObjectId($_GET['id']);
$filter=['_id'=>$id];
$options=[];
$collection='ecommerce.marcas';

$data=find($filter,$options,$collection);

require_once __DIR__."/../../views/marcas/edit.php";
