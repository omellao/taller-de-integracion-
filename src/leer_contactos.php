<?php    
    require_once "class_new/Crud.php";
    
    $newData = new Crud();
    $noseKago = $newData->insertData();

    $resp = array();

    foreach ($noseKago as $item){
        $resp ["users"][]= $item;
    }
    exit (json_encode($resp));
?>