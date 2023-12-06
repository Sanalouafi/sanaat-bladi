<?php
include __DIR__.'/../../models/auth/login.php';



$error = array(
    'email' => '',
    'password' => '',

);

function login($email, $password)
{
    global $conn;
    global $error;

    if (empty($email)) {
        $error['email'] = "email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error['email'] = "email mast be validate Email";
    } else {
        $error['email'] = "";
    }

    if (empty($password)) {
        $error['password'] = "password is required";
    } else {
        $error['password'] = "";
    }



    if (empty($error['email']) &&  empty($error['password'])) {

        $stmt = $conn->prepare(loginUser());
        $stmt->bind_param("s",  $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user["password"])) {
                $_SESSION['name'] = $user['name'];
                $_SESSION['id'] = $user['id'];
                $_SESSION['role'] = $user['role_id'];
                if ($_SESSION['role'] == 0) {
                    header('Location: ../pages/admin/dashboard.php');
                } elseif ($_SESSION['role'] == 1) {
                    header('Location: ../pages/artisant.php');
                } else {
                    header('Location: ../pages/marketplace.php');
                }
            } else {
                $error['password'] = "password is incorrect ";
            }
        } else {
            $error['email'] = "email is not registered";
            return null;
        }
    } else {
       echo "error";
    }
}