<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Trainer 1</title>
  <style>
    <?php include '../css/trainer.css'; ?>
  </style>
</head>

<body>
  <div>
    <nav class="nav">
      <ul class="navbar">
        <li><a href="home.php">HOME</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="ProductPage.php">PRODUCTS</a></li>
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
  <div class="sidenav">
    <a href="#angela">Angela</a>
    <a href="#sergey">Sergey</a>
    <a href="#maya">Maya</a>
  </div>
  <div class="" id="angela">
    <div class="top-container">
      <img class="trainer1" width="100%" src="https://images.unsplash.com/photo-1574680178050-55c6a6a96e0a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" alt="Angela">
      <h1 class="top-left">Meet Angela.</h1>
    </div>

    <div class="middle-container">
      <div class="about">
        <img class="trainer2" src="https://images.unsplash.com/photo-1550345332-09e3ac987658?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80" alt="Angela">
        <h2>About Me</h2>
        <p>With a so many resources and offers I have designed the best workout routines to help you achieve your goals
          and be proud of your efforts, I offer a comprehensive approach to loosing weight, gaining muscle, improving
          flexibility and so much more. From personal training and group sessions tp healthy lifestyles, I can and will
          help you to train in the best possible way to better your results.</p>
      </div>
      <hr>
      <div class="specialty">
        <h2>My Specialty</h2>
        <img class="equipment" src="https://images.unsplash.com/photo-1517344800994-80b20463999c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="ketlebell">
        <p>Power Lifting!!! My clients have been enjoying the benefits of gaining muscle almost effortlessly for over 5
          years, not only in Montreal, but across all Canada! My commitment developping the perfect coaching routines
          allowed me to help so many people, from dropping multiple pounds through intensive weight training to gaining
          muscle and being proud of that beach body. My team and I here at BeastInc take great pride in providing the
          best to our clients, until they find the beast within them!
        </p>
      </div>
      <hr>
      <div class="offer">
        <img height="10%" width="10%" src="https://www.flaticon.com/svg/static/icons/svg/3306/3306801.svg" alt="Coach-image">
        <h2>What I offer</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat. Duis
          aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
          sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
    <hr>
  </div>
  <div class="" id="sergey">
    <div class="top-container">
      <img class="trainer1" width="100%" src="https://images.unsplash.com/photo-1543761048-3b3c96e6e8bf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80" alt="Sergey">
      <h1 class="top-left">Meet Sergey.</h1>
    </div>

    <div class="middle-container">
      <div class="about">
        <img class="trainer2" src="https://images.unsplash.com/photo-1544133782-b62779394064?ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80" alt="Sergey">
        <h2>About Me</h2>
        <p>With a so many resources and offers I have designed the best workout routines to help you achieve your goals
          and be proud of your efforts, I offer a comprehensive approach to loosing weight, gaining muscle, improving
          flexibility and so much more. From personal training and group sessions tp healthy lifestyles, I can and will
          help you to train in the best possible way to better your results.</p>
      </div>
      <hr>
      <div class="specialty">
        <h2>My Specialty</h2>
        <img class="equipment" src="https://images.unsplash.com/photo-1549719386-74dfcbf7dbed?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80" alt="gloves">
        <p>Martial Arts!!! My clients have been enjoying the benefits of peace of mind and zen through the rigourous
          practice of mixed martial arts almost effortlessly for over 5 years, not only in Montreal, but across all
          Canada! My commitment developping the perfect coaching routines allowed me to help so many people, from
          dropping multiple pounds through intensive weight training to gaining muscle and being proud of that beach
          body. My team and I here at BeastInc take great pride in providing the best to our clients, until they find
          the beast within them!
        </p>
      </div>
      <hr>
      <div class="offer">
        <img height="10%" width="10%" src="https://www.flaticon.com/svg/static/icons/svg/3306/3306801.svg" alt="Coach-image">
        <h2>What I offer</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat. Duis
          aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
          sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
    <hr>
  </div>

  <div class="" id="maya">
    <div class="top-container">
      <img class="trainer1" width="100%" src="https://images.unsplash.com/photo-1584705463454-a9955e5d2183?ixlib=rb-1.2.1&auto=format&fit=crop&w=1533&q=80" alt="Trainer">
      <h1 class="top-left">Meet Maya.</h1>
    </div>

    <div class="middle-container">
      <div class="about">
        <img class="trainer2" src="https://images.unsplash.com/photo-1584708965824-3957ed534c23?ixlib=rb-1.2.1&auto=format&fit=crop&w=1867&q=80" alt="Sergey">
        <h2>About Me</h2>
        <p>With a so many resources and offers I have designed the best workout routines to help you achieve your goals
          and be proud of your efforts, I offer a comprehensive approach to loosing weight, gaining muscle, improving
          flexibility and so much more. From personal training and group sessions tp healthy lifestyles, I can and will
          help you to train in the best possible way to better your results.</p>
      </div>
      <hr>
      <div class="specialty">
        <h2>My Specialty</h2>
        <img class="equipment" src="https://images.unsplash.com/photo-1586886129153-8efcbf737f9c?ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80" alt="gloves">
        <p>Flexibility!!! My clients have been enjoying the benefits of finding happiness through yoga almost
          effortlessly for over 5 years, not only in Montreal, but across all Canada! My commitment developping the
          perfect coaching routines allowed me to help so many people, from dropping multiple pounds through intensive
          yoga training to gaining muscle and being proud of that beach body. My team and I here at BeastInc take great
          pride in providing the best to our clients, until they find the beast within them!
        </p>
      </div>
      <hr>
      <div class="offer">
        <img height="10%" width="10%" src="https://www.flaticon.com/svg/static/icons/svg/3306/3306801.svg" alt="Coach-image">
        <h2>What I offer</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat. Duis
          aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
          sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
    <hr>
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
        <td><a href="mailto:genericemail.com">Email</a></td>
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