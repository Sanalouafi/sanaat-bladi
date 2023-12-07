<?php
include ("../../connexion/connexion.php");
$id=$_GET['id'];


    $query = "DELETE FROM `produit` WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location:show.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }

?>
