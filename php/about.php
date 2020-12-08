<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
  <title>About Us</title>
  <style>
    <?php include '../css/about.css'; ?><?php include '../css/navbarandfooter.css'; ?>
  </style>
  <script src="https://use.fontawesome.com/aba6b003fc.js"></script>

  <style>
    .container {
      z-index: 2;
      top: 150vh;
      /*^edit value depending on your page*/
      width: 100%;
      height: initial;
      position: absolute;
      background: rgb(0, 0, 0);
    }
  </style>
</head>

<body>
  <div id="navigationbar">
    <nav class="nav">
      <ul class="navbar">
        <li><a href="home.php">HOME</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="product_page.php">PRODUCTS</a></li>
        <li><a href="about.php#fname">CONTACT</a></li>
        <li><a href="trainer1.php">TRAINERS</a></li>
      </ul>
    </nav>
    <?php
    if (isset($_SESSION["email"])) {
      echo '<a href="includes/logout.inc.php" class="loginSignUp">LOG OUT</a>';
    } else {
      echo '<a href="signUp.php" class="loginSignUp">SIGN UP!</a>';
    }
    ?>
  </div>

  <section class="about-us-mot">
    <div class="container1">
      <img src="../img/man.jpg" alt="barbell">
      <div class="in-barbell-txt">
        <h1>Unleash Your <i>Beast</i></h1>
      </div>
    </div>
  </section>
  <section class="offerings">
    <div class="offer-container">
      <div class="titletxt">
        <h1>Fitness products and services for your home or facility</h1>
      </div>
      <div class="bodytxt">
        <p>Beast Inc has been established a strong presence in Canada's fitness lifestyle.
          With years of experience, we aim to deliver the best possible fitness experience.
          We encourage amateurs and professionals to achieve their goals.
          <br>
          <br>
          <i>What can you expect?</i>
        </p>
      </div>
    </div>

    <div class="containerimgrow">
      <div class="row">
        <div class="col">
          <img src="../img/coach.jpg" alt="Coach">
        </div>
        <div class="col">
          <h2>Personal Training</h2>
          <p>Certified high-quality trainers available for you 24/7.
            Stop following advice from gym bros.</p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <h2>Fitness Equipment</h2>
          <p>Everything from (A)pparel to (Z) bars.</p>
        </div>
        <div class="col">
          <img src="../img/dumbbell.jpg" alt="dumbbell">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <img src="../img/barbellgrip.jpg" alt="Barbell2" id="grip">
        </div>
        <div class="col">
          <h2>Got Your Back</h2>
          <p>We are here to motivate you, inspire you and make you become
            the best person you can be.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="contact">
    <div class="container-contact">
      <div class="questions">
        <h1>Get In Touch</h1>
      </div>
      <form method="post">
        <div class="contact-us">
          <div class="fname">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" id="fname" name="firstname" placeholder="    First Name" required>
          </div>
          <div class="lname">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" id="lname" name="lastname" placeholder="    Last Name" required>
          </div>
          <div class="email">
            <i class="fa fa-envelope"></i>
            <input type="email" id="email" name="senderemail" placeholder="    Email" required>
          </div>
          <div class="subject">
            <textarea rows="5" id="subject" name="subject" placeholder="What is your query?" required></textarea>
          </div>
          <div class="sub">
            <input type="submit" value="Submit" name="formsub">
            <?php
            if (isset($_POST['formsub'])) {
              $firstname = $_POST['firstname'];
              $lastname = $_POST['lastname'];
              $to = 'thebeastfitteam@gmail.com';
              $subject = 'BeastFt Contact Form';
              $from = $_POST['senderemail'];
              $name = $_POST['firstname'] . $_POST['lastname'];
              $subject = $_POST['subject'];
              mail($to, "$subject from: $from name: $firstname $lastname", $subject);
              echo " <p style='color:white;'> Mail Sent. Thank you " . $firstname . $lastname . ", we will contact you shortly.";
            }
            ?>
          </div>
        </div>
      </form>
    </div>
  </section>

  <div class="container"><br><br>
    <footer id="footer"></footer>
  </div>
  <script src="../javascript/PHPnavbarandfooter.js"></script>
</body>

</html>