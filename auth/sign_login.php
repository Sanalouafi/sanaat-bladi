<?php
include("../connexion/connexion.php");
include("../controllers/auth/login.php");
include("../controllers/auth/signup.php");

if (isset($_POST['sign_submit'])) {
  register($_POST['name'], $_POST['lastname'], $_POST['sign_email'], $_POST['sign_pswd'], $_POST['c_sign_pswd'], $_POST['user_role']);
}
if (isset($_POST['login_submit'])) {
  login($_POST['login_email'], $_POST['login_pswd']);
}
$query_role = "SELECT id, nom FROM role WHERE id IN (1, 2)";
$stmt_role = mysqli_prepare($conn, $query_role);

if ($stmt_role) {
  mysqli_stmt_execute($stmt_role);
  mysqli_stmt_store_result($stmt_role);
  mysqli_stmt_bind_result($stmt_role, $id, $nom);




?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/css/sign_login.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>Signup&login</title>
  </head>

  <body style="overflow-x: hidden;">
    <?php
    include("../pages/includes/header.php");
    ?>

    <div class="sign-login-section d-flex container align-items-center">
      <div class="title-area text-center">
        <h1>Entrez vos informations personnelles et commencez votre voyage avec nous</h1>
      </div>
      <div class="form-area sign-section flex-column align-items-center text-center">
        <h1>Sign Up</h1>
        <p>Créez votre compte gratuitement</p>
        <form class="sign-form d-flex flex-column align-items-center" method="post">
          <div>
            <span class="php-errors"><?php echo isset($_SESSION['msg_error']) ? $_SESSION['msg_error'] : ''; ?></span>
          </div>
          <div class="nameInput">
            <label for="name"></label>
            <input type="text" id="name" name="name" placeholder="Nom">
          </div>
          <div class="lastnameInput">
            <label for="lastname"></label>
            <input type="text" id="lastname" name="lastname" placeholder="Prenom">
          </div>
          <div class="user-role">
            <label for="user_role">choisir votre role:</label>
            <select id="user_role" name="user_role">
              <option value="">None</option>
              <?php
              while (mysqli_stmt_fetch($stmt_role)) {
                echo '<option value="' . $id . '">' . $nom . '</option>';
              }

              ?>
            </select>
          <?php
        } else {
          echo 'Error: ' . mysqli_error($conn);
        }
          ?>
          </div>

          <div class="mailinput">
            <label for="sign-email"></label>
            <input type="email" id="sign-email" name="sign_email" placeholder="Email">
            <span class="php-errors"><?php echo isset($_SESSION['msg_email_error']) ? $_SESSION['msg_email_error'] : ''; ?></span>
            <span class="php-errors"><?php echo isset($_SESSION['msg_email']) ? $_SESSION['msg_email'] : ''; ?></span>
            <span class="errmsg">Invalide email!!</span>
          </div>
          <div class="pswd-input">
            <label for="sign-pswd"></label>
            <input type="password" id="sign-pswd" name="sign_pswd" placeholder="Mot de passe">
            <span class="errmsg">Invalide password!!</span>
          </div>
          <div class="pswd-input">
            <label for="sign-pswd"></label>
            <input type="password" id="c-sign-pswd" name="c_sign_pswd" placeholder=" confirmation de Mot de pasee">
            <span class="errmsg">the password didn't match!!</span>
            <span class="php-errors"><?php echo isset($_SESSION['msg_pwd']) ? $_SESSION['msg_pwd'] : ''; ?></span>

          </div>

          <input id="signbtn" type="submit" name="sign_submit" value="Sign Up">
        </form>
        <p>Vous avez deja un compte?? <b id="link-login">Login</b></p>
      </div>

      <div class="form-area login-section flex-column align-items-center text-center">
        <h1>Login</h1>
        <h4>Bienvenue</h4>
        <p>Pour rester en contact avec nous, veuillez vous connecter avec vos informations personnelles</p>
        <form class="login-form d-flex flex-column align-items-center" method="post">
          <div class="mailinput">
            <label for="log-email"></label>
            <input type="email" id="log-email" name="login_email" placeholder="Email">
            <span class="errmsg">Invalid email!!</span>
          </div>
          <div class="pswd-input">
            <label for="log-pswd"></label>
            <input type="password" id="log-pswd" name="login_pswd" placeholder="Mot de passe">
            <span class="errmsg">Invalid password!!</span>
          </div>
          <input id="loginbtn" type="submit" name="login_submit" value="Login">
        </form>

        <p>Vous n'avez pas un compte?? <b id="link-sign">Sign up</b></p>
      </div>

    </div>
    <?php
    include("../pages/includes/footer.php");
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/js/sign_login.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>

  </html>