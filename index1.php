<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>



<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link type="text/css" href="css/main1.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
       
        <title>Home page</title>
        <style>
            .navbar-nav {
                margin-left: auto;
            }
            .search1{
                width: 650px;
            }
            .nav-item{
                padding-right: 55px;
            }
            .nav-link{
                color: white;
            }
           
            .container-fluid{
                background-image: url("images/banner2.webp");
                height: 200px;
        position: relative;
          
          
            }
            .centered {
          position: absolute;
          top: 60%;
          left: 50%;
          transform: translate(-50%, -50%);
        }
        .navbar{
            background-color: rgb(252, 110, 8);
        }
        .col-4:hover {
          transform: translateY(-7px);
        }
        .col-4 p {
          font-size: 14px;
        }
        .small-container {
          max-width: 1080px;
          margin: auto;
          padding-left: 25px;
          padding-right: 25px;
        }
        
        .col-4 {
          flex-basis: 25%;
          padding: 10px;
          min-width: 200px;
          margin-bottom: 50px;
          transition: transform 0.5s;
        }
        .col-4 img {
          width: 100%;
        }
        .filterDiv {
          float: left;
         
          width: 100px;
          line-height: 100px;
          text-align: center;
          margin: 2px;
          display: none; 
        }
        
        .show {
          display: block;
        }
        .btn {
          border: none;
          outline: none;
          cursor: pointer;
        }
        .menuhover:hover {
          box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
          background-color: #96d7d7;
        }
        .menuhover{
          background-color: #f5f0eb;
        }
        .container {
          overflow: hidden;
        }
        .title {
          text-align: center;
          
          position: relative;
          line-height: 60px;
          color: #555555;
        }
        
        .title::after {
          content: '';
          background: #1a9cbd;
          width: 80px;
          height: 5px;
          border-radius: 5px;
          position: absolute;
          bottom: 0;
          left: 50%;
          transform: translateX(-50%);
        }
        .buttons{
          text-align: center;
        }
        
        .bi-person{
          color: black;
        }
        
        </style>
        <script>
            var ProductImg = document.getElementById("ProductImg");
            var smallImg = document.getElementsByClassName("small-img");
            smallImg[0].onclick = function () {
              ProductImg.src = smallImg[0].src;
            };
            smallImg[1].onclick = function () {
              ProductImg.src = smallImg[1].src;
            };
            smallImg[2].onclick = function () {
              ProductImg.src = smallImg[2].src;
            };
            smallImg[3].onclick = function () {
              ProductImg.src = smallImg[3].src;
            };
          
          
          
            filterSelection("all")
          function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("filterDiv");
            if (c == "all") c = "";
          for (i = 0; i < x.length; i++) {
              w3RemoveClass(x[i], "show");
              if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
          }
          
          function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
              if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
              }
            }
          }
          function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
              while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
              }
            }
            element.className = arr1.join(" ");
          }
          var btnContainer = document.getElementById("myBtnContainer");
          var btns = btnContainer.getElementsByClassName("btn");
          for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
              var current = document.getElementsByClassName("active");
              current[0].className = current[0].className.replace(" active", "");
              this.className += " active";
            });
          }
          
          
          
              
          </script>
    </head>

    <body>
        
        <nav class="navbar">
           
            <div class="navbar-top" style=" background-color: rgb(252, 110, 8);">
                <div>
                    <button id="menuButton"><i class="fas fa-bars"></i></button>
                    
                    <a href="" style="text-decoration: none; color: white;" >
                        
                        <h3 class="px-5">Tomato</h3>
                    </a>  
                </div>
                <div class="centerbutton">
                  <div class="input-group">
                    <input  class="search1" type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    <button type="button" class="btn btn-danger">search</button>
                  </div>
                </div>  
                <div>
                    <div class="account">
                      <a href="index1.php">
                        <i class="bi bi-person">
                          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                          </svg>
                        </i>
                        </a> 
                    </div>
                    <div class="shopping-cart">
                        <div class="sum-prices">
                            <i class="fas fa-shopping-cart shoppingCartButton"></i>
                            <h6 id="sum-prices"></h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="producstOnCart hide">
                <div class="overlay"></div>
                <div class="top">
                    <button id="closeButton">
                        <i class="fas fa-times-circle"></i>
                    </button>
                    <h3>Cart</h3>
                </div>
                <ul id="buyItems">
                    <p class="empty">Your shopping cart is empty</p>
                   
                </ul>
                <button class="btn btn-danger  checkout hidden"> <a href="checkout.php" style="text-decoration: none; color: white;">Check out</a></button>
            </div>
        </nav>
        <header>
            
            
            
                <div class="container-fluid" >
                    <div class="centered">
                    </div>
                  </div> 
            </header>
            <br>
            <br>
            <br>
            <br>
          
            <h2 class="title">Restaurants</h2>
          <br><br>
          
            <div class="small-container">
              <div class="row row1">
                <div class="col-4">
                  <img src="images/restaurant1.avif" >
                  <h4>F House</h4>
                  
                </div>
          
                <div class="col-4">
                  <img src="images/restaurant2.avif">
                  <h4>AB's -Absolute Barbecues</h4>
                 
                </div>
          
                <div class="col-4">
                  <img src="images/restaurants3.webp" >
                  <h4>Oishii</h4>
                  
                </div>
                
                <div class="col-4">
                  <img src="images/restaurant4.webp" >
                  <h4>Backyard Cafe</h4>
                  
                </div>
               
              </div>
            </div>
            <br>
            <br>
        <main>
            <section class="main-section">
                <div class="product-container">
             
                    <h2 class="title">Menu</h2>
<br>
<div class="buttons">
    <div id="myBtnContainer">
      <button class="btn active menuhover" onclick="filterSelection('all')"> Menu</button>
      <button class="btn menuhover" onclick="filterSelection('biryani')">biryani</button>
      <button class="btn menuhover" onclick="filterSelection('soup')"> soup</button>
      <button class="btn menuhover" onclick="filterSelection('cake')"> cakes</button>
      <button class="btn menuhover" onclick="filterSelection('burger')"> burger</button>
      <button class="btn menuhover" onclick="filterSelection('pizza')"> pizza</button>
    </div></div>
    
    <div class="small-container">
      <div class="row row1">
        
        <div class="col-4 filterDiv  biryani">
            <div class="product-under">  
          <img src="images/Murgh Makhani-Dum Biriyani.JPG" >
          <h4 class="productName">Murgh Makhani-Dum Biriyani</h4>
          <div class="centerbutton">
            <h6 class="price"> ₹<span class="priceValue">524</span></h6>
            <button class="btn btn-small btn-outline-danger addToCart" data-product-id="1">
                 <i class="fas fa-cart-plus"></i>Add to cart</button>
          </div>
          </div>  
        </div>
        
      
        <div class="col-4 filterDiv soup">
            <div class="product-under">  
          <img src="images/french onion soup.webp" >
          <h4 class="productName">french onion soup</h4>
          <div class="centerbutton">
            <h6 class="price"> ₹<span class="priceValue">256</span></h6>
            <button class="btn btn-small btn-outline-danger addToCart" data-product-id="2">
                 <i class="fas fa-cart-plus"></i>Add to cart</button>
          </div>
          </div>  
        </div>
        
        <div class="col-4 filterDiv cake">
            <div class="product-under">  
          <img src="images/chocolate cake.avif" >
          <h4 class="productName">chocolate cake</h4>
          <div class="centerbutton">
            <h6 class="price"> ₹<span class="priceValue">324</span></h6>
            <button class="btn btn-small btn-outline-danger addToCart" data-product-id="3">
                 <i class="fas fa-cart-plus"></i>Add to cart</button>
          </div>
          </div>  
        </div>
        
        <div class="col-4  filterDiv burger">
            <div class="product-under">  
          <img src="images/chicken burger.webp" >
          <h4 class="productName">Chicken burger</h4>
          <div class="centerbutton">
            <h6 class="price"> ₹<span class="priceValue">139</span></h6>
            <button class="btn btn-small btn-outline-danger addToCart" data-product-id="4">
                 <i class="fas fa-cart-plus"></i>Add to cart</button>
          </div>
          </div>  
           </div>
    
        <div class="col-4 filterDiv soup">
            <div class="product-under">  
          <img src="images/Chicken-Noodle-Soup.jpg" >
          <h4 class="productName">Chicken Noodle Soup</h4>
          <div class="centerbutton">
            <h6 class="price"> ₹<span class="priceValue">139</span></h6>
            <button class="btn btn-small btn-outline-danger addToCart" data-product-id="5">
                 <i class="fas fa-cart-plus"></i>Add to cart</button>
          </div>
          </div>  
        </div>
    
        
        <div class="col-4 filterDiv cake">
            <div class="product-under">  
          <img src="images/mangolicious-cream-cake.webp" >
          <h4 class="productName">mangolicious cream cake</h4>
          <div class="centerbutton">
            <h6 class="price"> ₹<span class="priceValue">223</span></h6>
            <button class="btn btn-small btn-outline-danger addToCart" data-product-id="6">
                 <i class="fas fa-cart-plus"></i>Add to cart</button>
          </div>
          </div>  
        </div>
    
        
        <div class="col-4 filterDiv biryani">
            <div class="product-under">  
          <img src="images/mushroom biryani.jpg" >
          <h4 class="productName">mushroom biryani</h4>
          <div class="centerbutton">
            <h6 class="price"> ₹<span class="priceValue">699</span></h6>
            <button class="btn btn-small btn-outline-danger addToCart" data-product-id="7">
                 <i class="fas fa-cart-plus"></i>Add to cart</button>
          </div>
          </div>  
        </div>
    
        
        <div class="col-4 filterDiv pizza">
            <div class="product-under">  
          <img src="images/veg pizza.jpg" >
          <h4 class="productName">veg Pizza</h4>
          <div class="centerbutton">
            <h6 class="price"> ₹<span class="priceValue">139</span></h6>
            <button class="btn btn-small btn-outline-danger addToCart" data-product-id="8">
                 <i class="fas fa-cart-plus"></i>Add to cart</button>
          </div>
          </div>  
        </div>
    
        <div class="col-4  filterDiv  soup">
            <div class="product-under">  
          <img src="images/food-3.jpg" >
          <h4 class="productName">Great Northern Bean Soup</h4>
          <div class="centerbutton">
            <h6 class="price"> ₹<span class="priceValue">149</span></h6>
            <button class="btn btn-small btn-outline-danger addToCart" data-product-id="9">
                 <i class="fas fa-cart-plus"></i>Add to cart</button>
          </div>
          </div>  
        </div>
    
      
        <div class="col-4  filterDiv  cake">
            <div class="product-under">  
          <img src="images/cake.jpg">
          <h4 class="productName">red velvet cake</h4>
          <div class="centerbutton">
            <h6 class="price"> ₹<span class="priceValue">300</span></h6>
            <button class="btn btn-small btn-outline-danger addToCart" data-product-id="10">
                 <i class="fas fa-cart-plus"></i>Add to cart</button>
          </div>
          </div>  
        </div>
    
        
        <div class="col-4  filterDiv  burger">
            <div class="product-under">  
          <img src="images/galler2.jpg" >
          <h4 class="productName">Stuffed Bean Burger</h4>
          <div class="centerbutton">
            <h6 class="price"> ₹<span class="priceValue">168</span></h6>
            <button class="btn btn-small btn-outline-danger addToCart" data-product-id="11">
                 <i class="fas fa-cart-plus"></i>Add to cart</button>
          </div>
          </div>  
        </div>
        
    
    
        <div class="col-4  filterDiv  pizza">
            <div class="product-under">  
          <img src="images/gallery3.jpg" >
          <h4 class="productName">New York-Style Pizza</h4>
          <div class="centerbutton">
            <h6 class="price"> ₹<span class="priceValue">289</span></h6>
            <button class="btn btn-small btn-outline-danger addToCart" data-product-id="12">
                 <i class="fas fa-cart-plus"></i>Add to cart</button>
          </div>
          </div>  
        </div>
    
    
        <div class="col-4  filterDiv  burger">
            <div class="product-under">  
          <img src="images/mutton Burgers.webp" >
          <h4 class="productName">   	
            mutton Burger</h4>
            <div class="centerbutton">
                <h6 class="price"> ₹<span class="priceValue">159</span></h6>
                <button class="btn btn-small btn-outline-danger addToCart" data-product-id="13">
                     <i class="fas fa-cart-plus"></i>Add to cart</button>
            </div>
              </div>  
        </div>
    
        
        <div class="col-4  filterDiv  cake">
            <div class="product-under">  
          <img src="images/disney princess cake.webp" >
          <h4 class="productName"> Disney Princess Cake</h4>
          <div class="centerbutton">
            <h6 class="price"> ₹<span class="priceValue">345</span></h6>
            <button class="btn btn-small btn-outline-danger addToCart" data-product-id="14">
                 <i class="fas fa-cart-plus"></i>Add to cart</button>
          </div>
          </div>  
        </div>
    
        
        <div class="col-4  filterDiv  soup">
            <div class="product-under">  
          <img src="images/soup2.jfif" >
          <h4 class="productName"> 
           
            chicken soup</h4>
            <div class="centerbutton">
                <h6 class="price"> ₹<span class="priceValue">163</span></h6>
                <button class="btn btn-small btn-outline-danger addToCart" data-product-id="15">
                     <i class="fas fa-cart-plus"></i>Add to cart</button>
                     </div>
              </div>  
        </div>
        
        <div class="col-4  filterDiv  biryani">
            <div class="product-under">  
          <img src="images/malabar chicken biriyani.jpg" class="product-image">
          <h4 class="productName"> Malabar Chicken Biriyani</h4>
          <div class="centerbutton">
            <h6 class="price"> ₹<span class="priceValue">839</span></h6>
            <button class="btn btn-small btn-outline-danger addToCart" data-product-id="16">
                 <i class="fas fa-cart-plus"></i>Add to cart</button>
          </div>
          </div>  
        </div>
    
         
        <div class="col-4  filterDiv  soup">
            <div class="product-under">  
          <img src="images/soup11.webp" class="product-image">
          <h4 class="productName"> 	
            Chicken Manchau Soup</h4>
            <div class="centerbutton">
                <h6 class="price"> ₹<span class="priceValue">326</span></h6>
                <button class="btn btn-small btn-outline-danger addToCart" data-product-id="17">
                     <i class="fas fa-cart-plus"></i>Add to cart</button>
            </div>
              </div>  
        </div>
      
        
        <div class="col-4  filterDiv  biryani">
            <div class="product-under">  
          <img src="images/duam biriyani.jfif" class="product-image">
          <h4 class="productName"> dum biryani</h4>
          <div class="centerbutton">
            <h6 class="price"> ₹<span class="priceValue">299</span></h6>
            <button class="btn btn-small btn-outline-danger addToCart" data-product-id="18">
                 <i class="fas fa-cart-plus"></i>Add to cart</button>
          </div>
          </div>  
    </div>
    
        
        <div class="col-4  filterDiv  pizza">
            <div class="product-under">  
          <img src="images/pizza1.webp" class="product-image">
          <h4 class="productName">Green Chick Chop</h4>

          <div class="centerbutton">
            <h6 class="price"> ₹<span class="priceValue">429</span></h6>
            <button class="btn btn-small btn-outline-danger addToCart" data-product-id="19">
                 <i class="fas fa-cart-plus"></i>Add to cart</button>
          </div>
          </div>  
     </div>
        
    
        <div class="col-4  filterDiv  cake">
            <div class="product-under">   
          <img src="images/chocolate-gems-cake.webp" class="product-image">
          <h4  class="productName">chocolate gems cake</h4>
         
          <div class="centerbutton">
            <h6 class="price"> ₹<span class="priceValue">456</span></h6>
            <button class="btn btn-small btn-outline-danger addToCart" data-product-id="20">
                 <i class="fas fa-cart-plus"></i>Add to cart</button>
          </div>                   
               
     </div>

          </div>
</div></div></div>
           
     
    
            </section>
        </main>
        <footer class="text-center text-lg-start bg-light text-muted">
            <section
                class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <div class="me-5 d-none d-lg-block">
                  <span>Get connected with us on social networks:</span>
                </div>
             <div>
                  <a href="" class="me-4 text-reset">
                    <i class="bi bi-facebook"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg></i>
                  </a>
                  <a href="" class="me-4 text-reset">
                    <i class="bi bi-twitter"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                    </svg></i>
                  </a>
                  <a href="" class="me-4 text-reset">
                    <i class="bi bi-google"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                      <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                    </svg></i>
                  </a>
                  <a href="" class="me-4 text-reset">
                    <i class="bi bi-instagram"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg></i>
                  </a>
                  <a href="" class="me-4 text-reset">
                    <i class="bi bi-linkedin"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                      <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                    </svg></i>
                  </a>
                  <a href="" class="me-4 text-reset">
                    <i class="bi bi-github"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                      <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg></i>
                  </a>
                </div>
             </section>
            <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
             <h6 class="text-uppercase fw-bold mb-4">
                        <u><h1 class="footer cname">Tamato</h1></u>
                      </h6>
                      <p>
                       Tamato is a online food odering app.
                       we have conneted with various resturents all over the world.
                      </p>
                    </div>
             <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
             <h6 class="text-uppercase fw-bold mb-4">
                        food
                      </h6>
                      <p>
                        <a href="#!" class="text-reset">Biryani </a>
                      </p>
                      <p>
                        <a href="#!" class="text-reset">juices</a>
                      </p>
                      <p>
                        <a href="#!" class="text-reset">ice creams</a>
                      </p>
                      <p>
                        <a href="#!" class="text-reset">staters</a>
                      </p>
                    </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
                        Useful links
                      </h6>
                      <p>
                        <a href="#!" class="text-reset">Pricing</a>
                      </p>
                      <p>
                        <a href="#!" class="text-reset">Settings</a>
                      </p>
                      <p>
                        <a href="#!" class="text-reset">Orders</a>
                      </p>
                      <p>
                        <a href="#!" class="text-reset">Help</a>
                      </p>
                    </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
             <h6 class="text-uppercase fw-bold mb-4">
                        Contact
                      </h6>
                      <p><i class="bi bi-geo-alt"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                      </svg></i> Hyderabad,Telangana,India.</p>
                      <p>
                        <i class="bi bi-email"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                          <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                        </svg></i>
                        Tomato@gmail.com
                      </p>
                      <p><i class="bi bi-telephone"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                      </svg></i> + 91 234 567 88</p>
                      <p><i class="bi bi-mobile"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                      </svg></i> + 91 234 567 89</p>
                    </div>
            </div>
             </div>
              </section>
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2022 Copyright:
                <a class="text-reset fw-bold" href=""><u>Tamato</u></a>
              </div>
            </footer>
        <script src="script.js"></script>
        <script src="shopping-cart.js"></script>
    </body>
</html>
