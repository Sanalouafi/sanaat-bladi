<?php

include __DIR__.'/../../connexion/connexion.php';

function loginUser()
{   
    $sql = "SELECT * FROM utilisateur WHERE email = ?";
    return $sql;
}