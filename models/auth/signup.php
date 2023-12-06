<?php

include __DIR__.'/../../connexion/connexion.php';

function checkEmail()
{   
    $sql = "SELECT * FROM utilisateur WHERE email = ?";
    return $sql;
}
function registerUser(){
    $sql= "INSERT INTO utilisateur (prenom, nom, email, password, role_id) VALUES (?, ?, ?, ?,?)";
    return $sql;

}