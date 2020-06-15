<?php
function update($filter,$data,$collection){

    require_once __DIR__."/manager.php";

    $db=new \MongoDB\Driver\BulkWrite;

    $db->update($filter,$data);

    $manager->executeBulkWrite($collection,$db);
}