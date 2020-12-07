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
    <title>Shopping cart</title>
    <link href="../css/view_cart.css" media="screen" rel="stylesheet" type="text/css">
    <script src="../javascript/view-cart.js"></script>
</head>
<body class="shopping-cart">
<div class="container_12">
    <div id="top">
        <div class="grid_3">
            <div class="phone_top">
                <span>Call Us +438 (100) 1234</span>
            </div><
        </div>

        <div class="grid_6">
            <div class="welcome">l
                Welcome visitor you can <a href="#">login</a> or <a href="#">create an account</a>.
            </div>
        </div>

        <div class="grid_3">
            <div class="valuta">
                <ul>
                    <li class="curent"><a href="#">$</a></li>
                    <li><a href="#">&#8364;</a></li>
                    <li><a href="#">&#163;</a></li>
                </ul>
            </div>

            <div class="lang">
                <ul>
                    <li class="curent"><a href="#">EN</a></li>
                    <li><a href="#">FR</a></li>
                </ul>
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
                        <button class="continue"><span>icon</span><a href="product_page.php" style="color: #000">Continue Shopping</a></button>
                        <button class="update" for="quantityUpdate"><span>icon</span>Update Shopping Cart</button>
                      

                    </td>
                </tr>
                <form>
            </table>
        </div><!-- .grid_12 -->

        <div class="clear"></div>

        <div id="content_bottom" class="shopping_box">
            <div class="grid_4">
                <div class="bottom_block estimate">
                    <h3>Estimate Shipping and Tax</h3>
                    <p>Enter your destination to get a shipping estimate.</p>
                    <form>
                        <p>
                            <strong>Country:</strong><sup class="surely">*</sup><br/>
                            <select>
                                <option>United States</option>
                                <option>United States</option>
                            </select>
                        </p>
                        <p>
                            <strong>State/Province:</strong><br/>
                            <select>
                                <option>Please select region, state or province</option>
                                <option>Please select region, state or province</option>
                            </select>
                        </p>
                        <p>
                            <strong>Zip/Postal Code</strong><br/>
                            <input type="text" name="" value="" />
                        </p>
                        <input type="submit" id="get_estimate" value="Get a Quote" />
                    </form>

                </div><!-- .estimate -->
            </div><!-- .grid_4 -->

            <div class="grid_4">
                <div class="bottom_block discount">
                    <h3>Discount Codes</h3>
                    <p>Enter your coupon code if you have one.</p>
                    <form>
                        <p>
                            <input type="text" name="" value="" placeholder="United States"/>
                        </p>
                        <input type="submit" id="apply_coupon" value="Apply Coupon" />
                    </form>
                </div>
            </div>

            <div class="grid_4">
                <div class="bottom_block total">
                    <table class="subtotal">
                        <tr>
                            <td>Subtotal</td><td class="price" id="subtotal">$1, 500.00</td>
                        </tr>
                        <tr class="grand_total">
                            <td>Grand Total</td><td class="price" id="grandtotal">$1, 500.00</td>
                        </tr>
                    </table>
                    <button class="checkout">PROCEED TO CHECKOUT</button>
                    <a href="#">Checkout with Multiple Addresses</a>
                </div><!-- .total -->
            </div><!-- .grid_4 -->

            <div class="clear"></div>
        </div><!-- #content_bottom -->
        <div class="clear"></div>

        <div class="carousel" id="following">
            <div class="c_header">
                <div class="grid_10">
                    <h5>Based on your selection, you may be interested in the following item:</h5>
                </div><!-- .grid_10 -->

                <div class="grid_2">
                    <a id="next_c1" class="next arows" href="#"><span>Next</span></a>
                    <a id="prev_c1" class="prev arows" href="#"><span>Prev</span></a>
                </div><!-- .grid_2 -->
            </div><!-- .c_header -->
        </div><!-- .carousel -->

    </div><!-- .container_12 -->
</section><!-- #main -->

<div class="clear"></div>
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
