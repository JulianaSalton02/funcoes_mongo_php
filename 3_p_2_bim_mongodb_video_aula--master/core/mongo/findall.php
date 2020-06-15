<?php

function findAll($collection){

    require_once __DIR__."/manager.php";

    $db=new \MongoDB\Driver\Query([]);

    $cursor=$manager->executeQuery($collection,$db);

    return $cursor;
}