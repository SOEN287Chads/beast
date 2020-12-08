<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BeastFit | For the Beast in All of Us</title>
    <style>
        <?php include '../css/home.css';
        echo
            'header::before {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            content: "";
            z-index: -1;
            position: absolute;
            background: url("gym.jpeg");
            background-size: cover;
        }' ?>
    </style>
</head>

<body>
    <div>
        <nav>
            <ul class="navbar">
                <li><a href="../php/home.php">HOME</a></li>
                <li><a href="../php/about.php">ABOUT</a></li>
                <li><a href="../php/product_page.php">PRODUCTS</a></li>
                <li><a href="../php/about.php#fname">CONTACT</a></li>
                <li><a href="../php/trainer1.php">TRAINERS</a></li>
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

    <div class="container"><br><br>
        <h3 id="titles">HUGE FACILITY | AMAZING TRAINERS | GREAT ATMOSPHERE</h3>
        <p>
            At BeastFit, we’re about real fitness. Our no-nonsense, results-driven culture was built on a history rooted
            in weightlifting culture. With our award winning designs and culture, BeastFit has effortlessly became an
            nationally recognized brand known for its commitment to health, strength, and fitness. Today, we
            continue to be one of the most celebrated fitness brands in the world.
            <br><br>
            Our team is heavily involved in our community and closely connected with local public services, outreach
            programs, and other local businesses. Our culture isn’t that of these corporate gyms. When you walk in the
            door you’re here to work, sweat, and burn. At BeastFit, great shape is an authentic passion, and we don’t
            back down from the challenge to push our bodies to levels constantly challenging our limits.
            <br><br>
            Here at BeastFit you aren’t only joining a gym, you join a team of individuals who are committed to leading
            strong, fit, and healthy lifestyles. Our amazing trainers are ready to make sure you break boundaries and
            achieve your full potential.
        </p>
        <br><br>
        <h3 id="titles">Customer Service</h3>
        <p>
            At BeastFit, customers are at the centre of what we do and why we do it! We have a team of
            knowledgeable sales representatives who are ready to assist you with your gym equipment needs. Our crew will
            be able to answer your questions from honest product information to the best way to integrate a piece of
            equipment into your workout routine. We work hard to ensure we have strong relationships with our suppliers,
            bringing you the best possible prices in the industry. In fact, if you find a better price on one of our
            core range of products, we will match it as a part of our brand promises.
        </p>
        <br><br><br><br><br><br><br><br>
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
                    <td>Vatsa Shah (40125107)</td>
                    <td>Thong Minh Tran (40072745</td>
                    <td></td>
                </tr>
            </table>
        </footer>
    </div>
    <header>
        <h1>FOR THE BEAST IN ALL OF US.</h1>
    </header>
</body>

</html>