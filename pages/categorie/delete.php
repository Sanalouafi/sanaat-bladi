<?php
include("../../connexion/connexion.php");

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    mysqli_autocommit($conn, false);

    $delete_produit_query = "DELETE FROM produit WHERE categorie_id = $id";
    $delete_produit_result = mysqli_query($conn, $delete_produit_query);

    if ($delete_produit_result) {
        $delete_categorie_query = "DELETE FROM categorie WHERE id = $id";
        $delete_categorie_result = mysqli_query($conn, $delete_categorie_query);

        if ($delete_categorie_result) {
            mysqli_commit($conn);
            header("Location: show.php");
            exit();
        } else {
            mysqli_rollback($conn);
            echo "Error deleting record from categorie: " . mysqli_error($conn);
        }
    } else {
        mysqli_rollback($conn);
        echo "Error deleting records from produit: " . mysqli_error($conn);
    }

} else {
    echo "Invalid or missing 'id' parameter.";
}
?>
