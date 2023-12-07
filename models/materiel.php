<?php

include __DIR__.'/../connexion/connexion.php';

function showMateriel()
{   
    $sql = "SELECT * FROM materiel";
    return $sql;
}
function addMateriel(){
    $sql= "INSERT INTO materiel (nom) VALUES (?)";
    return $sql;

}


function editMateriel($id){
    $sql= "SELECT * FROM `materiel` WHERE id =$id";
    return $sql;

}
function updateMateriel($nom,$id){
    $sql= "UPDATE `materiel` SET `nom`='$nom' WHERE id = $id";
    return $sql;

}




?>