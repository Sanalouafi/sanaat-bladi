<?php
include("../../connexion/connexion.php");

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    mysqli_autocommit($conn, false);

    $delete_produit_query = "DELETE FROM produit WHERE materiel_id = $id";
    $delete_produit_result = mysqli_query($conn, $delete_produit_query);

    if ($delete_produit_result) {
        $delete_materiel_query = "DELETE FROM materiel WHERE id = $id";
        $delete_materiel_result = mysqli_query($conn, $delete_materiel_query);

        if ($delete_materiel_result) {
            mysqli_commit($conn);
            header("Location: show.php");
            exit();
        } else {
            mysqli_rollback($conn);
            echo "Error deleting record from materiel: " . mysqli_error($conn);
        }
    } else {
        mysqli_rollback($conn);
        echo "Error deleting records from produit: " . mysqli_error($conn);
    }

} else {
    echo "Invalid or missing 'id' parameter.";
}
?>
