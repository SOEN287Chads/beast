<?php
include('../php/connection.php');
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Product Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/product_page.css">
    <link rel="stylesheet" type="text/css" href="../css/navbarandfooter.css" />
    
</head>
<body>    
    <!-- Navigation bar -->
    <div id="navigationbar"></div>
    
    <!-- Main -->
    <main>
        <section class="mt-30">
            <div class="container">
                <div class="width-100">
                    <div class="content">
                        <p class="small m-0">You are in: Home > Product Page </p>
                    </div>
                </div>

                <div class="width-100">
                    <div class="content">
                        <h1 class="font-30 mt-30 mb-0">Product Page <span class="small"> (15 Products) </span> </h1>
                    </div>
                </div>

                <!-- Side Bar -->
                <div class="width-30">
                     <!-- Categories -->
                    <div class="content">                       
                        <div class="left-sidebar-title">
                            <h3>
                                Categories
                            </h3>
                        </div>
                        <div class="left-sidebar-content">
                            <ul>
                                <?php 
                                $query = "select * from categorie";
                                $result = $conn -> query($query);
                                if($result){
                                    while ($row = $result -> fetch_object()) {
                                        ?>
                                        <li>
                                    <a href="product_page.php?cat_id=<?php echo $row -> cat_id; ?>">
                                        &#x27A4; <?php echo $row -> cat_name; ?>
                                    </a>
                                </li>
                                        <?php
                                    }
                                }
                                ?>
                                
                                

                            </ul>

                        </div>
                    </div>
                     <!-- Brand -->
                     <form id="form" method="GET" action="">
                    <div class="content">
                        <div class="left-sidebar-title">
                            <h3>
                                Brand
                            </h3>
                        </div>
                        <div class="left-sidebar-content">
                            <ul>
                                  <?php 
                                $query = "select * from brand";
                                $result = $conn -> query($query);
                                if($result){
                                    while ($row = $result -> fetch_object()) {
                                        ?>
                                        <li>
                                       <a href="">
                                        <label>
                                            <input type="checkbox" name="brand[]" value="<?php echo $row -> brand_id;?>" 
                                            <?php
                                 if(isset($_GET['brand']) &&  in_array($row -> brand_id, $_GET['brand']))
                                    {echo "checked";}
                                 ?>
                                             /> <?php echo $row -> brand_name;?>
                                        </label>
                                    </a>
                                </li>
                                        <?php
                                    }
                                }
                                ?>
                                
                            </ul>
                        </div>
                    </div>

                     <!-- Price -->
                    <div class="content">
                        <div class="left-sidebar-title">
                            <h3>
                                Price Filter
                            </h3>
                        </div>
                        <div class="left-sidebar-content">
                            <ul>
                                <li>
                                    <a href="">
                                        <label>
                                            <input type="radio" name="price" value="0 to 20" 
                                                <?php
                                 if(isset($_GET['price']) &&  $_GET['price']== "0 to 20")
                                    {echo "checked";}
                                 ?>
                                            /> $0.00 - $20.00
                                        </label>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <label>
                                            <input type="radio" name="price" value="20 to 50"
                                            <?php
                                 if(isset($_GET['price']) &&  $_GET['price']== "20 to 50")
                                    {echo "checked";}
                                 ?>
                                            /> $20.00 - $50.00
                                        </label>
                                    </a>
                                </li>

                                <li>
                                    <a href="">
                                        <label>
                                            <input type="radio" name="price" value="50 to 100" 
                                                <?php
                                 if(isset($_GET['price']) &&  $_GET['price']== "50 to 100")
                                    {echo "checked";}
                                 ?>
                                            /> $50.00 - $100.00
                                        </label>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <label>
                                            <input type="radio" name="price" value="100 to 200"
                                                <?php
                                 if(isset($_GET['price']) &&  $_GET['price']== "100 to 200")
                                    {echo "checked";}
                                 ?>
                                             /> $100.00 - $200.00
                                        </label>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <label>
                                            <input type="radio" name="price" value="200" 
                                                <?php
                                 if(isset($_GET['price']) &&  $_GET['price']== "200")
                                    {echo "checked";}
                                 ?>
                                            /> $200.00+
                                        </label>
                                    </a>
                                </li>

                            </ul>

                        </div>


                    </div>
                    <input type="submit" name="submit" id="submit" value="Apply Filters">
                </form>
                </div>
                <?php
                if(isset($_SESSION['already_incart'])){
                    echo "<div class='alreadINcart'>Product is already In Cart</div>";
                }
                ?>
                <div class="width-70">
                    <div class="content mt-30">
                        <!-- Showing the number of items on display -->
                         <?php 
                        $query;
                        if(isset($_GET['brand'] ) && isset($_GET['price'])){
                            $prices = explode("to", $_GET['price']);
                                if(count($prices)>1){
                                $query = "select * from product where (product_price  >= $prices[0] and product_price  <= $prices[1])";
                            }
                            else{
                                $query = "select * from product where ( product_price  <= ".$_GET['price'].")";
                            }

                               if(count($_GET['brand'])>1){
                                    $query .= "and (";
                                        for($i=0; $i<count($_GET['brand']); $i++){
                                            if($i == count($_GET['brand'])-1){
                                            $query .= "brand_id = ".$_GET['brand'][$i].")";
                                            }
                                            else{
                                           $query .= "brand_id = ".$_GET['brand'][$i]." or ";
                                       }
                                }

                               }
                               else{
                                    $query .= "and (brand_id = ".$_GET['brand'][0].")";
                               }
                        }
                        else if(isset($_GET['brand'] )){
                             $query = "select * from product where";
                               if(count($_GET['brand'])>1){
                                    $query .= " (";
                                        for($i=0; $i<count($_GET['brand']); $i++){
                                            if($i == count($_GET['brand'])-1){
                                            $query .= "brand_id = ".$_GET['brand'][$i].")";
                                            }
                                            else{
                                           $query .= "brand_id = ".$_GET['brand'][$i]." or ";
                                       }
                                }

                               }
                                else{
                                    $query .= "and (brand_id = ".$_GET['brand'][0].")";
                               }
                            
                               
                        }
                          else if(isset($_GET['price'] )){
                                $prices = explode("to", $_GET['price']);
                                if(count($prices)>1){
                                $query = "select * from product where (product_price  >= $prices[0] and product_price  <= $prices[1])";
                            }
                            else{
                                $query = "select * from product where ( product_price  >= ".$_GET['price'].")";
                            }

                                
                          }
                    
                    else if(isset($_GET['cat_id'])){
                        $query = "select * from product where cat_id = ".$_GET['cat_id'];
                              
                              
                    }
                    else{
                        $query = "select * from product";
                    }
                    if(isset($_GET['sortby'])){
                        if($_GET['sortby'] == "featured"){
                            $query .= " ORDER BY featured DESC";
                        }
                        else if($_GET['sortby'] == "lowToHigh"){
                            $query .= " ORDER BY product_price ASC";
                        }
                        else if($_GET['sortby'] == "highToLow"){
                            $query .= " ORDER BY product_price DESC";
                        }
                        else if($_GET['sortby'] == "name"){
                            $query .= " ORDER BY product_name ASC";
                        } 
                        else if($_GET['sortby'] == "new"){
                            $query .= " ORDER BY date ASC";
                        }
                        else if($_GET['sortby'] == "all"){
                            $query .= " ";
                        } 
                    }
                  
                    $result = $conn -> query($query);

                    ?>

                        <div class="width-70">
                            <p class="m-0">
                                <?php
                                 if($result){
                                    ?>
                                ITEMS 1-<?php echo $result -> num_rows; ?> OF <?php echo $result -> num_rows; ?>
                               <?php
                           }
                               else{
                                ?>
                                  ITEMS 0-0 OF 0
                                  <?php 
                              }
                              ?> 
                                </p>
                        </div>
                        <!-- Sort By button -->
                        <div class="width-30">
                            <span>Sort By </span>

                            <select form="form" name="sortby">
                                  <option value="all" >All</option>
                                <option value="featured" <?php
                                 if(isset($_GET['sortby']) &&  $_GET['sortby']== "featured")
                                    {echo "selected";}
                                 ?>
                                 >Featured Products</option>
                                <option value="lowToHigh" 
                                 <?php
                                 if(isset($_GET['sortby']) &&  $_GET['sortby']== "lowToHigh")
                                    {echo "selected";}
                                 ?>
                                >Price: Low to High</option>
                                <option value="highToLow"
                                  <?php
                                 if(isset($_GET['sortby'])&&  $_GET['sortby'] == "highToLow")
                                    {echo "selected";}
                                 ?>
                                 >Price: Hight to Low</option>
                                <option value="name"
                                 <?php
                                 if(isset($_GET['sortby'])&&  $_GET['sortby'] == "name")
                                    {echo "selected";}
                                 ?>
                                >Name</option>
                                <option value="new"
                                <?php
                                 if(isset($_GET['sortby'])&&  $_GET['sortby'] == "new")
                                    {echo "selected";}
                                 ?>
                                >Newly Added</option>
                            </select>
                        </div>
                    </div>

                    <div class="div-clear"></div>
                   
                    <?php
                    if($result){
                      
                    while ($row = $result -> fetch_object()) {
                      
                    ?>
                    <div class="width-33 image-box mt-30">
                        <?php
                        if($row -> featured){

                            ?>
                            <div class="feature">Featured</div>
                            <?php
                        }?>
                        
                        <div class="content">
                            <a href="">
                                <img src="../img/Products/<?php echo $row -> product_img; ?>" class="img-full" alt="img" />
                            </a>
                            <h4><a href=""><?php echo $row -> product_name; ?></a></h4>
                            <h2>$<?php echo $row -> product_price; ?></h2>
                            <a href="addToCart.php?product_id=<?php echo $row -> product_id; ?>" class="btn">
                                Add to cart
                            </a>

                        </div>
                    </div>
                    <?php
                    }
                }
                ?>
                    

                </div>

            </div>
        </section>


    </main>
    <div class="div-clear"></div>
    
    <!-- Footer -->
    <div class="footer"><br><br>
        <footer id="footer"></footer>
    </div>
    <script src="../javascript/navbarandfooter.js"></script>

</body>
</html>