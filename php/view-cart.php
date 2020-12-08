<?php
session_start();
include('../php/connection.php');

if (isset($_POST["checkout"])) {
    if (!isset($_SESSION["email"])) {
        header('Location: /beast/php/signUp.php');
        exit();
    } else {
        if (!isset($_COOKIE["Total"])) {
            header('Location: /beast/php/error.php');
            exit();
        } else {
            header('Location: /beast/php/payment/');
            exit();
        }
    }
}
?>
<!DOCTYPE HTML>
<html>


<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width">
    <title>Shopping cart</title>
    <link href="../css/view_cart.css" media="screen" rel="stylesheet" type="text/css">
    <script src="../javascript/view-cart.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/navbarandfooter.css" />
</head>

<body class="shopping-cart">
    <!-- Navigation bar -->
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


    <section id="main" class="entire_width">
        <div class="container_12">
            <div class="grid_12">
                <h1 class="page_title">Shopping Cart</h1>

                <table class="cart_product">
                    <tr>
                        <th class="images"></th>
                        <th class="bg name">Product Name</th>
                        <th class="edit"> </th>
                        <th class="bg price">Unit Price</th>
                        <th class="qty">Qty</th>
                        <th class="bg subtotal">Subtotal</th>
                        <th class="close"> </th>
                    </tr>
                    <?php
                    $query = "SELECT * FROM incart  
INNER JOIN product
ON incart.product_id=product.product_id;";
                    $result = $conn->query($query);
                    error_log("Result is " . json_encode($result));
                    if ($result) {

                        while ($row = $result->fetch_object()) {
                    ?>

                            <form id="quantityUpdate" name="quantityUpdate" action="update.php" method="GET">
                                <tr>
                                    <td class="images"><a href="#"><img src="../img/Products/<?php echo $row->product_img; ?>" alt="Car"></a></td>
                                    <td class="bg name" style="font-size: 15px;"><?php echo $row->product_name; ?></td>
                                    <td class="edit"><a title="Edit" href="#">Edit</a></td>
                                    <td class="bg price" data-price="<?php echo $row->product_price; ?>">$<?php echo $row->product_price; ?></td>
                                    <td class="qty">
                                        <input type="hidden" for="quantityUpdate" name="quantityKey[]" value="<?php echo $row->cart_id; ?>" />
                                        <input type="text" class="qt" for="quantityUpdate" name="quantity[]" value="<?php echo $row->quantity; ?>" />
                                    </td>
                                    <td class="bg subtotal subtotal1" data-subtoal="<?php
                                                                                    echo $row->product_price * $row->quantity;
                                                                                    ?>">$<?php
                                                                                            echo $row->product_price * $row->quantity;
                                                                                            ?></td>
                                    <td class="close"><a title="remove" class="close" href="delete.php?cart_id=<?php echo $row->cart_id; ?>">Remove</a></td>
                                </tr>
                        <?php
                        }
                    }
                        ?>
                        <tr>
                            <td colspan="7" class="cart_but">
                                <button class="continue"><span>icon</span><a href="product_page.php" style="color: #000">Continue Shopping</a></button>
                                <button name="quantityUpdate" id="quantityUpdate" class="update" for="quantityUpdate"><span>icon</span>Update Shopping Cart</button>


                            </td>
                        </tr>
                            </form>
                </table>
            </div>

            <center>
                <div class="grid_4">

                    <div class="bottom_block total">
                        <form method="post">
                            <table class="subtotal">
                                <tr>
                                    <td>Subtotal</td>
                                    <td class="price" id="subtotal">$1, 500.00</td>
                                </tr>
                                <tr class="grand_total">
                                    <td>Grand Total</td>
                                    <td class="price" id="grandtotal">$1, 500.00</td>
                                </tr>
                            </table>
                            <button type="submit" name="checkout" id="checkout" class="checkout">PROCEED TO CHECKOUT</button>
                        </form>
                    </div>
                </div>
            </center>

        </div>
    </section>

    <script type="text/javascript">
        var inputsS = document.getElementsByClassName('subtotal1');
        var total = 0;
        for (i = 0; i < inputsS.length; i++) {
            total += parseInt(inputsS[i].getAttribute('data-subtoal'));
        }
        document.getElementById("subtotal").innerHTML = "$" + total;
        document.getElementById("grandtotal").innerHTML = "$" + total;
        document.cookie = "Total" + '=' + total;
        // <?php
            // $_SESSION["price"] = $_COOKIE['Total'];
            // 
            ?>
    </script>
</body>

</html>