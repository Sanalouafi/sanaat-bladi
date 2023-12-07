<?php

include __DIR__.'/../connexion/connexion.php';

function showProduit()
{   
    $sql = "SELECT * FROM categorie as c INNER JOIN produit as p on c.id=p.categorie_id INNER JOIN materiel as m on p.materiel_id=m.id";
    return $sql;
}
function addProduit(){
    $sql= "INSERT INTO produit (nom,description,prix,photo,categorie_id,materiel_id) VALUES (?,?,?,?,?,?)";
    return $sql;

}


function editProduit($id){
    $sql= "SELECT * FROM categorie as c INNER JOIN produit as p on c.id=p.categorie_id INNER JOIN materiel as m on p.materiel_id=m.id WHERE p.id =$id";
    return $sql;

}
function updateProduit($nom,$description,$prix,$photo,$categorie,$materiel,$id){
    $sql= "UPDATE `produit` SET nom='$nom',description='$description',prix=$prix,photo='$photo',categorie_id=$categorie,materiel_id=$materiel WHERE id = $id";
    return $sql;

}




?>