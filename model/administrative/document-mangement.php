<?php

function insertNewDocuments(
$db,
$archive,
$docu_name,
$docu_department,
$docu_type_id
){
    $docu_createdAt = time();
    $sql =  "INSERT INTO `administrative_documents`
        (`docu_id`, `archive`, `docu_name`, `docu_createdAt`, `docu_department`, `docu_type_id`)
        VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')";
    $db->query($sql);
}


?>