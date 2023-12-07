<?php

include __DIR__ . '/../../models/auth/signup.php';

session_start();
$msg_error = '';
$msg_email_error = '';
$msg_email = '';
$msg_pwd = '';

function register($prenom,$nom,$email,$password,$c_password,$role_id)
{
    global $conn;
    global $msg_error;
    global $msg_email_error;
    global $msg_email;
    global $msg_pwd;
    if (empty($prenom) || empty($nom) || empty($email) || empty($password) || empty($c_password)) {
        $msg_error = 'All fields are required.';
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $msg_email_error = 'Invalid email';
        } else {
            $query_user = checkEmail();
            $stmt_user = mysqli_prepare($conn, $query_user);
            mysqli_stmt_bind_param($stmt_user, "s", $email);
            mysqli_stmt_execute($stmt_user);
            mysqli_stmt_store_result($stmt_user);

            if (mysqli_stmt_num_rows($stmt_user) > 0) {
                $msg_email = 'Email already exists';
            } else {
                if ($password == $c_password) {
                    $query = registerUser();
                    $stmt = mysqli_prepare($conn, $query);
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "ssssi", $prenom, $nom, $email, $hashed_password, $role_id);
                    mysqli_stmt_execute($stmt);
                } else {
                    $msg_pwd = 'Passwords do not match.';
                }
            }

            mysqli_stmt_close($stmt_user);
            mysqli_stmt_close($stmt);
        }
    }

    $_SESSION['msg_error'] = $msg_error;
    $_SESSION['msg_email_error'] = $msg_email_error;
    $_SESSION['msg_email'] = $msg_email;
    $_SESSION['msg_pwd'] = $msg_pwd;

    header("Location: sign_login.php");
    exit();

}
