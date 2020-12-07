<?php
require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';

if (isset($_POST["signUpButton"])) {

  $username = $_POST["email"];
  $password = $_POST["password"];

  if (legalPassword() !== 0) {
    header('Location: signUp.php?error=weakpassword');
    exit();
  }

  if (emailExists($conn, $username) !== false) {
    header('Location: signUp.php?error=emailexists');
    exit();
  }

  createUser($conn, $username, $password);
  header('Location: signUp.php?error=none');
  exit();
}

if (isset($_POST["signInButton"])) {

  $usr = $_POST["em"];
  $pwd = $_POST["pwd"];

  if (emptyInputLogin($usr, $pwd) !== false) {
    header('Location: /signUp.php?error=emptyinput');
    exit();
  }
  loginUser($conn, $usr, $pwd);
}
?>

<!--Sign up page-->

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Kaushan+Script&display=swap" rel="stylesheet">
  <meta charset="utf-8">
  <title>Sign Up Page</title>
  <style>
    <?php include '../css/signUp.css'; ?>
  </style>
</head>

<body>
  <nav>
    <ul class="navbar">
      <li><a href="home.php"> HOME</a></li>
      <li><a href=" about.html">ABOUT</a></li>
      <li><a href="ProductPage.html">PRODUCTS</a></li>
      <li><a href="about.html#fname">CONTACT</a></li>
      <li><a href="trainer1.html">TRAINERS</a></li>
    </ul>
  </nav>
  <div class="container" id="signup"> <br> <br>

    <h1>Sign Up!</h1>
    <form method="post">
      <input type="text" placeholder="Email" name="email" required><br>

      <input type="password" placeholder="Choose Password" name="password" required><br>
      <?php
      if (isset($_GET['error'])) {
        if ($_GET['error'] == 'weakpassword') {
          echo '<p>* Weak password. The password must contain at least two uppercase characters, 1 lowercase character, 
          <br> 1 special character from !, @, #, $, %, ^, &, 1 digit and a minimum length of 8 characters.</p>';
        } else if ($_GET['error'] == 'emailexists') {
          echo '<p>* Email ID is taken, chosse a different ID.</p>';
        } else if ($_GET['error'] == 'none') {
          echo '<p>You have signed up!</p>';
        }
      }
      ?>
      <p>By creating an account I hereby agree to the
        <a class="terms" href="#">Terms and Conditions</a>
      </p>
      <p>Already a member? <a class="signin" onclick="window.scrollTo(0, document.body.scrollHeight)"> Sign In here!</a> </p>
      <button type=" submit" name="signUpButton">Let's go!</button>
    </form>
  </div>

  <img src="https://images.unsplash.com/photo-1526506118085-60ce8714f8c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2734&q=80" alt="pullUp">
  <div class="" id="signin">
    <h1></h1>
    <h1></h1>
    <h1>Sign In!</h1>
    <form method="post">
      <div class="container">
        <input type="email" placeholder="Email" name="em" required><br>

        <input type="password" placeholder="Password" name="pwd" required><br>
        <?php
        if (isset($_GET['error'])) {
          if ($_GET['error'] == 'wronglogin') {
            echo '<p>* Incorrect email or password.</p>';
          }
        }
        ?>
        <p>
          Dont have an account? <a class="signup" onclick="window.scrollTo(document.body.scrollHeight, 0);
"> Sign Up here!</a>
        </p>
        <button type="submit" name="signInButton">Let me in!</button>
    </form>
  </div>
  <footer>
    <table class="footerTable">
      <tr>
        <td id="footerHead">
          <h3>Visit Us:</h3>
        </td>
        <td id="footerHead">
          <h3>Find Us:</h3>
        </td>
        <td id="footerHead">
          <h3>Developed By:</h3>
        </td>
        <td id="footerHead">
          <h3>Group Members:</h3>
        </td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>EV S2, 1515 Rue Sainte-Catherine</td>
        <td><a href="mailto:teambeastfit.com">Email</a></td>
        <td>SOEN 287 Chads</td>
        <td>Michael Djabauri (40158792)</td>
        <td>Vaansh Lakhwara (40114764)</td>
        <td>Tran Nhu Tran (40086678)</td>
        <td></td>
      </tr>
      <tr>
        <td>O#206, Montréal, QC H3G 2W1, Canada</td>
        <td><a href="https://github.com/SOEN287Chads/beast">GitHub</a></td>
        <td>This is a fictional site.</td>
        <td>Gabriel Martinica (40120255)</td>
        <td>Vatsa Shah <br> (40125107)</td>
        <td>Thong Minh Tran <br>(40072745)</td>
        <td></td>
      </tr>
    </table>
  </footer>
</body>

</html>