<?php
include_once "database/db_connect.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My shopping bag | Cuud</title>
    

        <?php include "header.html"; ?>
    <body>   
        <div class="container">
            <section class="checksection1" >
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
                    <li class="shoppingbag"><a href="checkout.php">Shopping bag</a></li>
                    
                    </div>
                </div>
            
                <div>
                    <?php include "nav.html"; ?>
                </div>
            </section>

            <!-- <div class="searchbar">
                <div class="search-button">
                        <input type='checkbox' id="search-button1">

                        <label for="search-button1">
                            <img src="searchicon.svg" width="20px" height="20px"></label>
                        <input type="search">
                </div>
                <span>Search</span>
                
            </div> -->

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
            
        <section class="cosection2">
            <div class="row">
                <div class="col-sm-12 col-md-1"></div>
                <div class="col-sm-12 col-md-10">
                <div class="bar">
                    <p>My Orders</p>
                    </div></div>
                <div class="col-sm-12 col-md-1"></div>
            </div>
           
                <div class="row">
                    <div class="col-sm-12 col-md-1"></div>
                    <div class="col-sm-12 col-md-3">
                        <div class="largerviewer">
                            <img id=cofullview src="images/<?= $row->image1 ?>">
                        </div>
                    </div>
                    
            
                    <div class="col-sm-12 col-md-5">
                        <div >
                            <p id="coproduct-name"><?= $row->productName ?></p>
                            <p id="coproduct-detail">Quantity: 1 | Color: Hotpink <a href="productlist.php"><span>Edit</span></a></p>
                            
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2">
        
                            <p id="coproduct-name">$<?= $row->price ?></p>
                            <div class="toggle toggle-fav"><span>Save for later</span>
                            <input type="checkbox" id="favorite1">
                            <label for="favorite1">&hearts;</label>
                            </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-1"></div>
                </div>

                <?php 
}
?>   
                
            
                <div class="searchbar"></div>
            <div class="row">
                <div class="col-sm-12 col-md-1"></div>
                <div class="col-sm-12 col-md-10">
                <div class="bar2">
                    <details>
                    <summary class="barsummary">Shipping Information</summary>
                           <p class="address">First Name: <input type="text" name="firstname" placeholder="Zoey"> </p>
                            <p class="address">Last Name:<input type="text" name="lastname" placeholder="Zhong"></p> 
                            
                            
                            <p class="address2">Address1:<input type="text" name="address1" placeholder="">  </p> 
                            <p class="address2">Address2: (optional)<input type="text" name="address2" placeholder=""></p> 
                            
                            <p class="address">Zip code: <input type="text" name="zipcode" placeholder=""></p> 
                            <p class="address">City:<input type="text" name="city" placeholder=""></p> 
                            <p class="address">State: <input type="text" name="State" placeholder=""></p>
                           
                
                            <P class="address2">Phone# <input type="text" name="phonenumber" placeholder=""></P> 
                       
                            
                            <P class="address2">Email:<input type="text" name="email" placeholder=""></P>

                            <p class="address2">
                        <input type="checkbox" id="addtobilling" name="addtobilling" value="addtobilling">
                        <label for="subscribeNews">Add this as my billing address</label>
                         </p>


                    </details>
                    </div>
                </div>
                <div class="col-sm-12 col-md-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-1"></div>
                <div class="col-sm-12 col-md-10">
                <div class="bar2">
                    <details>
                    <summary class="barsummary">Payment</summary>
                            
                            <p class="address">Card Holder: <input type="text" name="firstname" placeholder="Zoey"> </p>
                            
                            <p class="address2">Card Number:<input type="text" name="address1" placeholder="462 20th Ave">  </p> 
                            <p class="address2">CSV:<input type="text" name="address2" placeholder="Apt#"></p> 
                            
                            <p class="address">Exp Date: <input type="text" name="zipcode" placeholder="MM/YY"></p> 
                            
                            

                    

                    </details>
                    </div>
                </div>

                <div class="col-sm-12 col-md-1"></div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-1"></div>
                <div class="col-sm-12 col-md-10">
                <div class="bar2">
                    <details>
                    <summary class="barsummary">Review & Pleace order</summary>
                    </details>
                    </div></div>
                <div class="col-sm-12 col-md-1"></div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-1"></div>
                <div class="col-sm-12 col-md-10">
                <div class="confirmbar">
                    <details>
                    <summary class="barsummary">Confirmation</summary>
                    </details>
                    </div>
                </div>
                <div class="col-sm-12 col-md-1"></div>
            </div>
                
                <div class="spacebar"></div>
            
            </section>
            <hr>
            <section class="section3">
                   <footer>
                    <a href="#sectiontop">
                    <p class="back">BACK TO TOP</p></a>
                <?php include "footer.html"; ?>