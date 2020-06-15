<?php
require_once __DIR__."/../../core/mongo/findall.php";

$collection='ecommerce.marcas';

$data=findAll($collection);


require_once __DIR__."/../../views/marcas/marcas.php";
