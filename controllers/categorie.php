<?php

include __DIR__ . '/../models/categories.php';
session_start();

$msg_error = '';

function add_cate($nom)
{
    global $conn;
    global $msg_error;

    if (empty($nom)) {
        $msg_error = 'Name is required.';
    } else {
        $stmt_cate = mysqli_prepare($conn, addCategorie());
        mysqli_stmt_bind_param($stmt_cate, "s", $nom);

        if (mysqli_stmt_execute($stmt_cate)) {
            header("Location: {$_SERVER['REQUEST_URI']}");
            exit();
        } else {
            $msg_error = 'Error: ' . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt_cate);
    }
}

function show_cate()
{
    global $conn;

    $query = showCategorie();
    $result = mysqli_query($conn, $query);

    return $result;
}

function edit_cate($id){
    global $conn;

    $result = mysqli_query($conn, editCategorie($id));
    $row = mysqli_fetch_assoc($result);
    return $row;

}
function update_cate($nom,$id){
    global $conn;

    $result = mysqli_query($conn, updateCategorie($nom,$id));
    if ($result) {
        header("Location:show.php");
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }

}
function search_cate($searchTerm)
{
    global $conn;


    $stmt = mysqli_prepare($conn,search());
    mysqli_stmt_bind_param($stmt, "s", $searchTerm);

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}
