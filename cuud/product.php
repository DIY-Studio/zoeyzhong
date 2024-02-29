<?php
include_once "database/db_connect.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Rosy Island | Handbag | Cuud</title>
        <?php include "header.html"; ?>
    <body>
        

       
    <div class="container">
            <section class="checksection1">
                <div class="topsection" id="sectiontop">
                    <div class="leftinfo">
                        <li><a>Shipping to: USA</a></li>
                        <li><a>Customer care</a></li>
                        <li><a>Store Locator</a></li>
                    
                    </div>
                    <div class="rightinfo">
                    <li><a>Log in/Register</a></li>
                    <li>
                        <div class="total-toggles"><span>Likes</span>&nbsp;</div>
                    </li>
                    <li class="shoppingbag"><a href="checkout.php?id=1">Shopping bag</a></li>
                    
                    </div>
                </div>
            
                <div>
                <?php include "nav.html"; ?>
                </div>


            </section>
            
            
        
        <?php 

            if(!isset($_GET['id'])) {
	          echo "You borked it";
            } else {

	           $query_string = "SELECT * FROM `products` WHERE `id` = '{$_GET['id']}'";

	           $result = $conn->query($query_string);

	           if($conn->errno) die($conn->error);

	           $row = $result->fetch_object();


	               // show the data after it's all ready
	    ?>
        <div class="promotioncode">
                <span>
                    Enjoy free shipping promotion by Christmas Eve or 15% off by register now!
                </span>
                </div>
        <section class="productsection2">

                <div class="row">
                    <div class="col-sm-12 col-md-1"></div>
                    <div class="col-sm-12 col-md-5">
                        <div class="largerviewer">
                            <img id=fullview src="images/<?= $row->image1 ?>">
                        </div>
                    </div>
                    
            
                    <div class="col-sm-12 col-md-5">
                        <div >
                            <p id="product-name"><?= $row->productName ?></p>
                            <p id="product-detail"><?= $row->description ?></p>
                            <p id="product-name">$<?= $row->price ?></p>
                            <div class="toggle toggle-fav">
                                <input type="checkbox" id="favorite3">
                                <label for="favorite3">&hearts;</label>
                            </div>
                            
                            <p id="product-detail"><span>Quantity:</span>
                                <select>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select></p>
                            <p id="product-detail">
                                Color: <?= $row->color ?>
                            </p>
                            <div class="add">
                                <a id=add href="checkout.php?id=1">
                                <span >Add to bag</span>
                                </a>
                            </div>
                            <p id="product-detail">Material:<?= $row->material ?> </p>
                            
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-1"></div>
                </div>
                <div class="productsearchbar"></div>
                <div class="row">
                    <div class="col-sm-12 col-md-1"></div>
                    <div class="col-sm-12 col-md-5">
                        <div class="img">
                            <a href="bb2-1.jpg"><img src="images/<?= $row->image1 ?>" alt="" height="100" width="100" >
                            </a>
                        </div>
                        <div class="img">
                            <a href="bb2-2.JPG"><img src="images/<?= $row->image2 ?>" alt="" height="100" width="100" >
                            </a>
                        </div>
                        <div class="img">
                            <a href="bb2-3.JPG"><img src="images/<?= $row->image3 ?>" alt="" height="100" width="100" >
                            </a>
                        </div>
                      <?php 
}
?>   
                        
                    </div>
                        
                </div>
                    <div class="col-sm-12 col-md-1"></div>
                    <div class="col-sm-12 col-md-6"></div>
              
            
                <div class="productspacebar"></div>
                
                <div class="row">
                    <div class="col-sm-12 col-md-1"></div>
                    <div class="col-sm-12 col-md-5">
                        <div class="product-comment">
                            <p id="product-name">Customer reviews:</p>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 col-md-2">
                                <img src="customer1.png" alt="" class="customer-img">
                                </div>
                                <div class="col-sm-12 col-md-10">
                                <p class="customer-name">Leila Smith
                                </p>
                                <p class="customer-review">This is my first time to shop with Cuud, but I really liked it. I am planning to get another one for Mother`s Day gift!
                                </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-2">
                                <img src="customer2.png" alt="" class="customer-img">
                                </div>
                                <div class="col-sm-12 col-md-10">
                                <p class="customer-name">Leila Smith
                                </p>
                                <p class="customer-review">This is my first time to shop with Cuud, but I really liked it. I am planning to get another one for Mother`s Day gift!
                                </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-2">
                                <img src="customer3.png" alt="" class="customer-img">
                                </div>
                                <div class="col-sm-12 col-md-10">
                                <p class="customer-name">Leila Smith
                                </p>
                                <p class="customer-review">This is my first time to shop with Cuud, but I really liked it. I am planning to get another one for Mother`s Day gift!
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-1">
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <p id="product-name">You may also like:</p>
                        <hr>
                        <div class="row">
                                <div class="col-sm-12 col-md-6">
                                <a href="product.php?id=6">
                                <img src="images/b5.jpg" alt="" class="maylike-img">
                                </a>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                <a href="product.php?id=5">
                                <img src="images/b6.jpg" alt="" class="maylike-img">
                                </a>
                                </div>
                        </div>

                    </div>
                </div>
            
                <div class="productspacebar"></div>
            
        
            
            </section>
            <hr>
            <section class="section3">
                   <footer>
                    <a href="#sectiontop">
                    <p class="back">BACK TO TOP</p></a>
                <?php include "footer.html"; ?>
