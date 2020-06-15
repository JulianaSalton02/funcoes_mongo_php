<?php

require_once __DIR__."/../../core/mongo/insert.php";

$obj=['marca'=>$_POST['marca'],'descricao'=>$$_POST['descricao']];

$collection='ecommerce.marcas';

insert($obj,$collection);

echo "<script>location.href='marcas'</script>";
