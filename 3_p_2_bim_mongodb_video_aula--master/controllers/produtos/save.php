<?php

require_once __DIR__."/../../core/mongo/insert.php";

$obj=["produto"=>$_POST['produto'],'marca'=>$_POST['marca'],'preco'=>$_POST['preco']];
$collection='ecommerce.produtos';

insert($obj,$collection);

echo "<script>location.href='produtos'</script>";
