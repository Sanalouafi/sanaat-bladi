<?php

include __DIR__.'/../models/produit.php';

$msg_error = '';

function add_produit($nom, $description, $prix, $photo, $categorie, $materiel)
{
    global $conn;
    global $msg_error;

    if (empty($nom) || empty($description) || empty($prix) || empty($photo) || empty($categorie) || empty($materiel)) {
        $msg_error = 'All fields are required.';
    } else {
        $stmt_produit = mysqli_prepare($conn, addProduit());
        mysqli_stmt_bind_param($stmt_produit, "ssdssi", $nom, $description, $prix, $photo, $categorie, $materiel);

        if (mysqli_stmt_execute($stmt_produit)) {
            header("Location: {$_SERVER['REQUEST_URI']}");
            exit();
        } else {
            $msg_error = 'Error: ' . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt_produit);
    }
}

function show_produit()
{
    global $conn;

    $query = showProduit();
    $result = mysqli_query($conn, $query);

    return $result;
}

function edit_produit($id)
{
    global $conn;
    $result = mysqli_query($conn, editProduit($id));
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function update_produit($nom, $description, $prix, $photo, $categorie, $materiel, $id)
{
    global $conn;

    $result = mysqli_query($conn, updateProduit($nom, $description, $prix, $photo, $categorie, $materiel, $id));
    
    if ($result) {
        header("Location: show.php");
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
}
