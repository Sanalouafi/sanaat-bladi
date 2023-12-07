<?php

include __DIR__ . '/../models/materiel.php';
session_start();

$msg_error = '';

function add_mate($nom)
{
    global $conn;
    global $msg_error;

    if (empty($nom)) {
        $msg_error = 'Name is required.';
    } else {
        $stmt_mate = mysqli_prepare($conn, addMateriel());
        mysqli_stmt_bind_param($stmt_mate, "s", $nom);

        if (mysqli_stmt_execute($stmt_mate)) {
            header("Location: {$_SERVER['REQUEST_URI']}");
            exit();
        } else {
            $msg_error = 'Error: ' . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt_mate);
    }
}

function show_mate()
{
    global $conn;

    $query = showMateriel();
    $result = mysqli_query($conn, $query);

    return $result;
}

function edit_mate($id){
    global $conn;

    $result = mysqli_query($conn, editMateriel($id));
    $row = mysqli_fetch_assoc($result);
    return $row;

}
function update_mate($nom,$id){
    global $conn;

    $result = mysqli_query($conn, updateMateriel($nom,$id));
    if ($result) {
        header("Location:show.php");
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }

}

