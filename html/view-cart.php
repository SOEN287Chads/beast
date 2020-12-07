<?php 
include('../php/connection.php');
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width">
    <title>BeastFit | For the Beast in All of Us | Shopping Cart</title>
    <link href="../css/view_cart.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/product_page.css">
    <link rel="stylesheet" type="text/css" href="../css/navbarandfooter.css" />
    <script src="../javascript/view-cart.js"></script>
</head>
<body class="shopping-cart">

<!-- Navigation bar -->
<div id="navigationbar">
    <nav>
        <ul class="navbar">
            <li><a href="../php/home.php">HOME</a></li>
            <li><a href="../php/about.php">ABOUT</a></li>
            <li><a href="../html/product_page.php">PRODUCTS</a></li>
            <li><a href="../php/about.php">CONTACT</a></li>
        </ul>
    </nav>
</div>

<div class="container_12">
    <main>
        <section class="mt-30">
            <div class="container">
                <div class="width-100">
                    <div class="content">
                        <p class="small m-0">You are in: Home > Product Page > Cart </p>
                    </div>
                </div>

                <div class="width-100">
                    <div class="content">
                        <h1 class="font-30 mt-30 mb-0">View Cart Page <span class="small"></span> </h1>
                    </div>
                </div>

            </div>
        </section>


    </main>
    <div id="top">
        <div class="grid_3">
            <div class="phone_top">
                <span>Call Us +438 (100) 1234</span>
            </div><
        </div>

        <div class="grid_6">
            <div class="welcome">l
                Welcome visitor you can <a href="signUp.html#signin">login</a> or <a href="signUp.html">create an account</a>.
            </div>
        </div>
    </div>

    <div class="clear"></div>

</div><!-- .container_12 -->

<div class="clear"></div>

<div class="clear"></div>

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
                $result = $conn -> query($query);
                error_log("Result is ".json_encode($result));
                if($result){

                    while ($row = $result -> fetch_object()) {
                    ?>

                        <form id="quantityUpdate" action="update.php" method="GET">
                <tr>
                    <td class="images"><a href="#"><img src="../img/Products/<?php echo $row -> product_img; ?>"  alt="Car"></a></td>
                    <td class="bg name" style="font-size: 15px;"><?php echo $row -> product_name; ?></td>
                    <td class="edit"><a title="Edit" href="#">Edit</a></td>
                    <td class="bg price" data-price="<?php echo $row -> product_price; ?>">$<?php echo $row -> product_price; ?></td>
                    <td class="qty">
                         <input type="hidden" for="quantityUpdate" name="quantityKey[]" value="<?php echo $row -> cart_id; ?>" />
                        <input type="text" class="qt" for="quantityUpdate" name="quantity[]" value="<?php echo $row -> quantity; ?>" />
                    </td>
                    <td class="bg subtotal subtotal1" data-subtoal ="<?php
                     echo $row -> product_price * $row -> quantity ; 
                     ?>">$<?php
                     echo $row -> product_price * $row -> quantity ; 
                     ?></td>
                    <td class="close"><a title="remove" class="close" href="delete.php?cart_id=<?php echo $row -> cart_id; ?>">Remove</a></td>
                </tr>
                 <?php
                    }
                }
                ?>
                <tr>
                    <td colspan="7" class="cart_but">
                        <button class="continue"><span>icon</span><a href="../html/product_page.php" style="color: #000">Continue Shopping</a></button>
                        <button class="update" for="quantityUpdate"><span>icon</span>Update Shopping Cart</button>
                      

                    </td>
                </tr>
                <form>
            </table>
        </div><!-- .grid_12 -->

        <div class="clear"></div>
        <div class="clear"></div>

    </div><!-- .container_12 -->
</section><!-- #main -->

<div class="clear"></div>
<div class="div-clear"></div>
<!--<div class="grid_4">-->
<div class="bottom_block total">
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
    <button class="checkout">PROCEED TO CHECKOUT</button>
</div><!-- .total -->
</div><!-- .grid_4 -->
<!-- Footer -->
<div class="footer"><br><br>
    <footer id="footer">
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
                <td>Thong Minh Tran (40072745)</td>
                <td></td>
            </tr>
        </table>

    </footer>
    </div>
<script type="text/javascript">

     var inputsS = document.getElementsByClassName('subtotal1');
    var total = 0;
    for(i=0; i<inputsS.length; i++){
         total += parseInt(inputsS[i].getAttribute('data-subtoal'));
    }
        document.getElementById("subtotal").innerHTML = "$"+total;
    document.getElementById("grandtotal").innerHTML = "$"+total;
</script>

</body>
</html>
