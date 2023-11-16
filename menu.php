
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hippie Shawarma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="hippe.css">
</head>
<body>
    <div class="container-fluid">
      
        <hr style= "height:3px; width:100%; color:black">
        
        <nav class="navbar navbar-expand-lg  navbar-light" id="navbar">
            <a href="#" class="navbar-brand" style="font-size: 30px;font-weight: bolder; color:rgb(227, 13, 13);"><img class="logo" src="img/hippe.jpg" alt="img">HIPPIE SHAWARMA</i></a>
            <button type="button"  class="navbar-toggler btn-secondary" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" >
                <span class="navbar-toggler-icon" ></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                <a href="index.php" class="nav-item nav-link" style="color: black;font-size: 20px; font-weight: 200;">Home</a>
                <a href="About.php" class="nav-item nav-link" style="color: black;font-size: 20px; font-weight: 200;">About Us</a>
                <a href="francie.php" class="nav-item nav-link" style="color: black;font-size: 20px; font-weight: 200;">Franchise</a>
                <a href="menu.php" class="nav-item nav-link" style="color: black;font-size: 20px; font-weight: 200;">Food Items</a>
                <a href="contact.php" class="nav-item nav-link" style="color: black;font-size: 20px; font-weight: 200;">Contact Us</a>
               </div>
            </div>
        </nav> 
        <header>
          <div class="nav container">
            <div class="search">
              <input type="text" placeholder="search Food..."  class="searches" id="search">
              <i class="fa-solid fa-magnifying-glass"></i>
            </div>
              <!-- carticon  -->
              <i class="fa-solid fa-bag-shopping" id="carticon"></i>
              <div class="cartbox">
                  <div class="cartbox-title">Your  Cart</div>
                  <!-- content -->
                  <div class="cartbox-content">
                      
  
                  </div>
                  <div class="cartbox-total">
                      <div class="total-title">Total</div>
                      <div class="total-price">Rs 0</div>
                  </div>
                  <button type="button" class="btn-buys">Buy Now</button>
                  <i class="fa-solid fa-xmark" id="cartboxclose"></i>
              </div>
          </div>
      </header>
        <hr style= "box-shadow: 5px; height:3px; width:100%; color:black " >
        <!-- <h1 class="mhead"><img src="img/title_shape1.png"  >Our Delicious Food<img src="img/design1.png"></h1>
        <h2 class="subhead">Shawarma Recipes</h2>
         <div class="row">
          <div class="col-12 col-lg-4">
          <figure class="fborder">
            <div class="pic">
            <img src="img/chk1.jpeg" alt="chk1" class="fig1">
            </div>
            <figcaption style="font-size: 18px; font-weight: 700;margin-bottom: 5px; margin-left: 5px;">Hippie Shawarma Special</figcaption>
            <p class="price" style="margin-bottom: 5px; margin-left: 5px;">Rs 130</p>
            <button class="btn btn-secondary" style="margin-bottom: 5px; margin-left: 5px;">Add to Cart</button>
          </figure>
        </div> 
        <div class="col-12 col-lg-4">
          <figure class="fborder">
            <div class="pic">
            <img src="img/mexican.jpg" alt="peri" class="fig1">
          </div>
            <figcaption style="font-size: 18px; font-weight: 700; margin-bottom: 5px; margin-left: 5px;">Mexican Shawarma</figcaption>
            <p class="price" style="margin-bottom: 5px; margin-left: 5px;">Rs 130</p>
            <button class="btn btn-secondary" style="margin-bottom: 5px; margin-left: 5px;">Add to Cart</button>
          </figure>
        </div> 
        <div class="col-12 col-lg-4">
          <figure class="fborder">
            <div class="pic">
            <img src="img/peri.jpeg" alt="cheese" class="fig1">
            </div>
            <figcaption style="font-size: 18px; font-weight: 700;margin-bottom: 5px; margin-left: 5px;">Peri Peri Shawarma</figcaption>
            <p class="price" style="margin-bottom: 5px; margin-left: 5px;">Rs 130</p>
            <button class="btn btn-secondary" style="margin-bottom: 5px; margin-left: 5px;">Add to Cart</button>
          </figure>
        </div> 
       
        </div> 
        <div class="row">
          <div class="col-12 col-lg-4 ">
          <figure class="fborder">
            <div class="pic">
            <img src="img/cheese.jpeg" alt="chk1" class="fig1">
            </div>
            <figcaption style="font-size: 18px; font-weight: 700;margin-bottom: 5px; margin-left: 5px;">Cheesey Shawarma</figcaption>
            <p class="price" style="margin-bottom: 5px; margin-left: 5px;">Rs 130</p>
            <button class="btn btn-secondary " style="margin-bottom: 5px; margin-left: 5px;">Add to Cart</button>
          </figure>
        </div> 
        <div class="col-12 col-lg-4 ">
          <figure class="fborder">
            <div class="pic">
            <img src="img/spicy.jpg" alt="peri" class="fig1">
            </div>
            <figcaption style="font-size: 18px; font-weight: 700;margin-bottom: 5px; margin-left: 5px;">Spicy Shawarma</figcaption>
            <p class="price" style="margin-bottom: 5px; margin-left: 5px;">Rs 130</p>
            <button class="btn btn-secondary" style="margin-bottom: 5px; margin-left: 5px;">Add to Cart</button>
          </figure>
        </div> 
        <div class="col-12 col-lg-4 ">
          <figure class="fborder">
            <div class="pic">
            <img src="img/LEBANESE-CHICKEN-FRIES.jpg" alt="cheese" class="fig1">
            </div>
            <figcaption style="font-size: 18px; font-weight: 700;margin-bottom: 5px; margin-left: 5px;">Lebanese Chicken Shawarma</figcaption>
            <p class="price" style="margin-bottom: 5px; margin-left: 5px;">Rs 130</p>
            <button class="btn btn-secondary" style="margin-bottom: 5px; margin-left: 5px;">Add to Cart</button>
          </figure>
        </div> 
       
        </div>  -->
        <div class="control">
         
            <button class="btn btn-clicked" data-filter="all">All</button>
            <button class="btn"  data-filter="shawarma">Shawarma</button>
            <button class="btn"  data-filter="burger">Burger</button>
            <button class="btn"  data-filter="pizza">Pizza</button>
          
        </div>
        <section class="shop container">
           <h1 class="section-title">Our Delicious Food</h1>
  
  
           <div class="shop-content">
              <div class="product-box" data-item="shawarma">
                  <img src="img/newmenu/blr4.jpg" alt="" class="product-img">
                  <h2 class="product-title">Shawarma Special</h2>
                  <span class="price">Rs 150</span>
                  <i class="fa-solid fa-cart-shopping add-cart"></i>
              </div>
  
              <div class="product-box" data-item="shawarma">
                  <img src="img/newmenu/blur9.jpeg" alt="" class="product-img">
                  <h2 class="product-title">Peri Peri Shawarma</h2>
                  <span class="price">Rs 130</span>
                  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
              </div>
  
              <div class="product-box" data-item="shawarma">
                  <img src="img/newmenu/blur2.jpg" alt="" class="product-img">
                  <h2 class="product-title">Mexican Shawarma</h2>
                  <span class="price">Rs 140</span>
                  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
              </div>
  
              <div class="product-box" data-item="shawarma">
                  <img src="img/newmenu/blur1_1.jpg" alt="" class="product-img">
                  <h2 class="product-title">Cheesey Shawarma</h2>
                  <span class="price">Rs 130</span>
                  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
              </div>
  
              <div class="product-box" data-item="shawarma">
                  <img src="img/newmenu/blr4.jpg" alt="" class="product-img">
                  <h2 class="product-title">Hippie Shawarma </h2>
                  <span class="price">Rs 150</span>
                  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
              </div>
  
              <div class="product-box" data-item="shawarma">
                  <img src="img/newmenu/blur5.jpg" alt="" class="product-img">
                  <h2 class="product-title">Tandoori Shawarma </h2>
                  <span class="price">Rs 130</span>
                  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
              </div>
  
              <div class="product-box" data-item="shawarma">
                  <img src="img/newmenu/blur6.jpeg" alt="" class="product-img">
                  <h2 class="product-title">Spicy Shawarma </h2>
                  <span class="price">Rs 120</span>
                  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
              </div>
  
              <div class="product-box" data-item="shawarma">
                  <img src="img/newmenu/blur7.jpg" alt="" class="product-img">
                  <h2 class="product-title">Plate Shawarma </h2>
                  <span class="price">Rs 160</span>
                  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
              </div>
  
              <div class="product-box" data-item="shawarma">
                  <img src="img/newmenu/blur8.jpg" alt="" class="product-img">
                  <h2 class="product-title">Shizwan Shawarma</h2>
                  <span class="price">Rs 150</span>
                  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
              </div>

              <div class="product-box" data-item="shawarma">
                <img src="img/newmenu/f9.jpeg" alt="" class="product-img">
                <h2 class="product-title">Cheesed Shizwan Shawarma</h2>
                <span class="price">Rs 150</span>
                <i class="fa-solid fa-cart-shopping  add-cart" ></i>
            </div>


            <div class="product-box" data-item="burger">
              <img src="img/newmenu/th (1).jpeg" alt="" class="product-img">
              <h2 class="product-title">Cripsy Chicken Burger</h2>
              <span class="price">Rs 150</span>
              <i class="fa-solid fa-cart-shopping  add-cart" ></i>
          </div>

          <div class="product-box" data-item="burger">
            <img src="img/newmenu/th (2).jpeg" alt="" class="product-img">
            <h2 class="product-title">Double Meet Burger</h2>
            <span class="price">Rs 150</span>
            <i class="fa-solid fa-cart-shopping  add-cart" ></i>
        </div>

    

    <div class="product-box" data-item="burger">
      <img src="img/newmenu/bg9.jpeg" alt="" class="product-img">
      <h2 class="product-title">Grilled Burger</h2>
      <span class="price">Rs 80</span>
      <i class="fa-solid fa-cart-shopping  add-cart" ></i>
  </div>


  <div class="product-box" data-item="burger">
    <img src="img/newmenu/bg7.jpeg" alt="" class="product-img">
    <h2 class="product-title">Turkey Burger</h2>
    <span class="price">Rs 110</span>
    <i class="fa-solid fa-cart-shopping  add-cart" ></i>
</div>


<div class="product-box" data-item="burger">
  <img src="img/newmenu/bg6.jpeg" alt="" class="product-img">
  <h2 class="product-title">Crispy Burger</h2>
  <span class="price">Rs 100</span>
  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
</div>


<div class="product-box" data-item="burger">
  <img src="img/newmenu/bg5.jpeg" alt="" class="product-img">
  <h2 class="product-title">Cheese Burger</h2>
  <span class="price">Rs 80</span>
  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
</div>


<div class="product-box" data-item="burger">
  <img src="img/newmenu/bg4.jpeg" alt="" class="product-img">
  <h2 class="product-title">Double Meat Burger</h2>
  <span class="price">Rs 140</span>
  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
</div>


<div class="product-box" data-item="burger">
  <img src="img/newmenu/bg3.jpeg" alt="" class="product-img">
  <h2 class="product-title">Mushroom Burger</h2>
  <span class="price">Rs 70</span>
  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
</div>


<div class="product-box" data-item="burger">
  <img src="img/newmenu/bg12.jpeg" alt="" class="product-img">
  <h2 class="product-title">Burger and Fries</h2>
  <span class="price">Rs 100</span>
  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
</div>


<div class="product-box" data-item="burger">
  <img src="img/newmenu/bg11.jpeg" alt="" class="product-img">
  <h2 class="product-title">Tofu Burger</h2>
  <span class="price">Rs 120</span>
  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
</div>


<div class="product-box" data-item="burger">
  <img src="img/newmenu/bg10.jpeg" alt="" class="product-img">
  <h2 class="product-title"> Meet Burger and Fries</h2>
  <span class="price">Rs 140</span>
  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
</div>


<div class="product-box" data-item="burger">
  <img src="img/newmenu/bg8.jpg" alt="" class="product-img">
  <h2 class="product-title">Hippie Burger</h2>
  <span class="price">Rs 150</span>
  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
</div>





<div class="product-box" data-item="pizza">
  <img src="img/newmenu/p1.jpeg" alt="" class="product-img">
  <h2 class="product-title">Extra Ordinary pizza</h2>
  <span class="price">Rs 120</span>
  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
</div>

<div class="product-box"  data-item="pizza">
  <img src="img/newmenu/p2.jpg" alt="" class="product-img">
  <h2 class="product-title">Paperoni Cheese Pizza</h2>
  <span class="price">Rs 130</span>
  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
</div>


<div class="product-box"  data-item="pizza">
  <img src="img/newmenu/p5.jpg" alt="" class="product-img">
  <h2 class="product-title">Tuna Melt Pizza</h2>
  <span class="price">Rs 130</span>
  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
</div>

<div class="product-box"  data-item="pizza">
  <img src="img/newmenu/p6.jpg" alt="" class="product-img">
  <h2 class="product-title">Special Bacon Pizza</h2>
  <span class="price">Rs 150</span>
  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
</div>

<div class="product-box"  data-item="pizza">
  <img src="img/newmenu/p7.jpg" alt="" class="product-img">
  <h2 class="product-title">Meat Deluxe Pizza</h2>
  <span class="price">Rs 170</span>
  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
</div>

<div class="product-box"  data-item="pizza">
  <img src="img/newmenu/p8.jpg" alt="" class="product-img">
  <h2 class="product-title">Super Cheesy Pizza</h2>
  <span class="price">Rs 140</span>
  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
</div>


<div class="product-box"  data-item="pizza">
  <img src="img/newmenu/p3.jpg" alt="" class="product-img">
  <h2 class="product-title">Extra Topping Pizza</h2>
  <span class="price">Rs 180</span>
  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
</div>


<div class="product-box"  data-item="pizza">
  <img src="img/newmenu/p9.jpg" alt="" class="product-img">
  <h2 class="product-title">Special Beef Pizza</h2>
  <span class="price">Rs 110</span>
  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
</div>


<div class="product-box"  data-item="pizza">
  <img src="img/newmenu/p10.jpg" alt="" class="product-img">
  <h2 class="product-title">Hippie Special Pizza</h2>
  <span class="price">Rs 140</span>
  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
</div>


<div class="product-box"  data-item="pizza">
  <img src="img/newmenu/p11.jpg" alt="" class="product-img">
  <h2 class="product-title">veg Pizza Delight</h2>
  <span class="price">Rs 150</span>
  <i class="fa-solid fa-cart-shopping  add-cart" ></i>
</div>

           </div>
          </section>  
  
  
  
  
  
  
          <div class="row menus">
            
            <div class="col-lg-6 col-12">
              <h2 class="menuhead">Hippie Burger Menu</h2>
              <img src="img/menu1.png" alt="menu" class="burger">
            </div>
            <div class="col-lg-6 col-12">
              <h2 class="menuhead">Pizza Menu</h2>
              <img src="img/menu2.png" alt="menu" class="burger">
            </div>
            <div class=" col-12">
             
              <img src="img/Menu 3.png" alt="menu" class="burger" style="width: 100%;">
            </div>
            
          </div>
          
            <div class="address row">
              <div  class="col-lg-4 col-md-4 col-12">
              <table>
                <tr>
                  <td>
                <a href="https://instagram.com/
                oh_my_shawarma" target="_blank">
                  <i class="fa-brands fa-2x fa-instagram"></i>
                </a>
              </td>
              <td>
                <a href="https://facebook.com/hippir_shawarma2.0">
                  <i class="fa-brands fa-2x fa-facebook"></i>
              </a>
              </td>
              <td>
                <a href="https://youtube.com/hippir_shawarma2.0">
                  <i class="fa-brands fa-2x fa-youtube"></i>
                </a>
              </td>
                </tr>
              </table>
              <h1 class="hippe">#Hippie Shawarma</h1>
            </div>
            
            <div class="col-lg-4 col-md-4 col-12">
              <img src="img/❤️(JPG).jpg" class="logos">
            </div>
            
            <div class="col-lg-4 col-md-4 col-12">
              <h1 style="font-weight: bold; color: aliceblue; font-size: 25px;">Get In Touch</h1>
              <address>
                <table>
                  <tr>
                    <i class="fa-solid fa-location-dot" style="color:red;"></i></tr>
                   <tr><p style="color: antiquewhite;">2/389D Co-operative Nagar,<br>Thiyanapuram,Vilamal Post<br>Trichy.</p>
                  </tr>
                </table>
                <table>
                  <tr><i class="fa-solid fa-phone" style="color:red;"></i></tr> 
                  <tr><p style="color: antiquewhite;">9585727352, 044-248694</p></tr>
                </table>
                <table>
                  <tr><i class="fa-solid fa-envelope" style="color:red;"></i></tr> 
                  <tr><p style="color: antiquewhite;">sales@Hippie Shawarma.com</p></tr>
                </table>
              </address>
            </div>
            </div>
          </div>
        
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
<script src="filter.js"></script>
</body>
</html>

