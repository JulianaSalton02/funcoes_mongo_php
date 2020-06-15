<?php
require_once __DIR__."/../../core/mongo/insert.php";

$obj=['cpf'=>$_POST['cpf'],'nome'=>$_POST['nome'],'email'=>$_POST['email']];

$collection='ecommerce.usuarios';

insert($obj,$collection);

echo "<script>location.href='usuario'</script>";