<?php
require_once __DIR__."/../../core/mongo/findall.php";

$col='ecommerce.usuarios';

$data=findAll($col);

require_once __DIR__."/../../views/usuarios/usuarios.php";

