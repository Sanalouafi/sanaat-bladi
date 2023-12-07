<?php

include __DIR__.'/../connexion/connexion.php';

function showCategorie()
{   
    $sql = "SELECT * FROM categorie";
    return $sql;
}
function addCategorie(){
    $sql= "INSERT INTO categorie (nom) VALUES (?)";
    return $sql;

}


function editCategorie($id){
    $sql= "SELECT * FROM `categorie` WHERE id =$id";
    return $sql;

}
function updateCategorie($nom,$id){
    $sql= "UPDATE `categorie` SET `nom`='$nom' WHERE id = $id";
    return $sql;

}
function search(){
    $sql = "SELECT * FROM categorie WHERE nom LIKE ?";
return $sql;
}



?>