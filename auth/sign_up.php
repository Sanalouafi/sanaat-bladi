<?php
include("../connexion/connexion.php");

session_start();

if (isset($_POST['sign_submit'])) {
  $name =mysqli_real_escape_string($conn,$_POST['name']) ;
  $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
  $sign_email = mysqli_real_escape_string($conn,$_POST['sign_email']);
  $sign_pswd = mysqli_real_escape_string($conn,$_POST['sign_pswd']);
  $c_sign_pswd = mysqli_real_escape_string($conn,$_POST['c_sign_pswd']);
  $role_id = $_POST['user_role'];

  $msg_error = '';
  $msg_email_error = '';
  $msg_email = '';
  $msg_pwd = '';

  if (empty($name) || empty($lastname) || empty($sign_email) || empty($sign_pswd) || empty($c_sign_pswd)) {
    $msg_error = 'All fields are required.';
  } else {
    if (!filter_var($sign_email, FILTER_VALIDATE_EMAIL)) {
      $msg_email_error = 'Invalid email';
    } else {
      $query_user = "SELECT * FROM utilisateur WHERE email=?";
      $stmt_user = mysqli_prepare($conn, $query_user);
      mysqli_stmt_bind_param($stmt_user, "s", $sign_email);
      mysqli_stmt_execute($stmt_user);
      mysqli_stmt_store_result($stmt_user);

      if (mysqli_stmt_num_rows($stmt_user) > 0) {
        $msg_email = 'Email already exists';
      } else {
        if ($sign_pswd == $c_sign_pswd) {
          $query = "INSERT INTO utilisateur (prenom, nom, email, password, role_id) VALUES (?, ?, ?, ?,?)";
          $stmt = mysqli_prepare($conn, $query);
          $hashed_password = password_hash($sign_pswd, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($stmt, "ssssi", $name, $lastname, $sign_email, $hashed_password,$role_id);
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
?>
