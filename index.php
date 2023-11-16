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
  <!-- <div class="cart-container">
    <div class="phones">
      <p class="add"><i class="fa-solid fa-envelope"></i>hippieshawarma@gmail.com</p>
      <p class="add"><i class="fa-solid fa-phone"></i></i>+91-9585727352</p>
    </div>
    <div class="search">
      <input type="search" placeholder="search..." class="searches">
      <i class="fa-solid fa-magnifying-glass"></i>
    </div>
    <div class="cart-box">
      <div class="cart-icon"><i class="fa-solid fa-cart-shopping fa-2x non-empty" id="cartIcon"></i></div>
       <span class="counts">0</span> 
      <div class="whole-cart-window hide">
        <h2 class="cart-h2">shopping Cart</h2>
        <div class="cart-wrapper">
           <div class="cart-item">
             <img src="img/g2.jpg">
             <div class="details">
              <h3>Item Name</h3>
              
              <span class="quantity">Quantity:1</span>
              <span class="price">Rs150</span>
             
             </div>
             <div class="cancel"><i class="fa-solid fa-xmark"></i></div>
           </div>
           <div class="cart-item">
            <img src="img/g2.jpg">
            <div class="details">
             <h3>Item Name</h3>
             <p>Spicy Shawarma with chees
             <span class="quantity">Quantity:1</span>
             <span class="price">Rs150</span>
            </p>
            </div>
            <div class="cancel"><i class="fa-solid fa-xmark"></i></div>
          </div>
        </div>
        <div class="subtotal">SubTotal:Rs0.00</div>
        <div class="checkout">Checkout</div>
        <div class="view-cart">View Cart</div>
      </div>
      
    </div>
  </div> -->
  <header>
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
       
          <div class="nav container">
            <div class="search">
              
              <input type="search" placeholder="search Food..." class="searches">
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
     
        <hr style= "box-shadow: 5px; height:3px; width:100%; color:black " >
        </header>
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/pic.jpg" class="d-block w-100 " alt="img" style="object-fit: cover;">
              </div>
              <div class="carousel-item">
                <img src="img/japan dish.jpg" class="d-block w-100 " alt="img" style="object-fit: cover;">
              </div>
              <div class="carousel-item">
                <img src="img/sh2.jpg" class="d-block w-100 " alt="img" style="object-fit: cover;">
              </div>
              <div class="carousel-item">
                <img src="img/shawarma1.jpg" class="d-block w-100 " alt="img" style="object-fit: cover;">
              </div>
              <div class="carousel-item">
                <img src="img/img1.jpg" class="d-block w-100 " alt="img" style="object-fit: cover;">
              </div>
              <div class="carousel-item">
                <img src="img/sawarma 4.jpg" class="d-block w-100 " alt="img" style="object-fit: cover;">
              </div>
              <div class="carousel-item">
                <img src="img/pic2.jpg" class="d-block w-100 " alt="img" style="object-fit: cover;">
              </div>
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button> -->
          </div>
          <div class="welcome">
             <h1 class="heading">Welcome TO</h1>
             <h2 class="shop">Hippie Shawarma</P>
              <p class="description">Shawarma, the Middle Eastern delicacy, is one that finds an ardent fan, no matter which country, city, nook or cranny you walk into. The gently grilled juicy meats and fillings, with just the right creaminess, flavor and acidity of Tahini, chili sauce and garlic mayonnaise are a winning combination with the fresh and crunchy salad veggies, all wrapped up in the goodness of a warm, soft Lebanese bread. It makes a great meal. And as die hard foodies would know, a great meal makes a great day! Especially when you have not one, not two, not three, but four delicious Shawarmas in Chicken, Lamb, Soya and Paneer to bite into, you know you’re in for a treat.</p>
          </div>
          <div class="platter row">
            <div data-id = "1" class="col-12 col-lg-4 food-box">
              <figure class="fborder">
                <img src="img/The yummy seczhwan chicken rice--(WEBP).webp" alt="chk1">
                <figcaption style="font-size: 18px; font-weight: 700;margin-bottom: 5px; margin-left: 5px;">Hippie Shawarma Special</figcaption>
                <!-- <p class="price" style="margin-bottom: 5px; margin-left: 5px;">Rs 150</p> -->
                <!-- <button class="btn btn-secondary" style="margin-bottom: 5px; margin-left: 5px;" onclick="addToCart()">Add to Cart</button> -->
              </figure>
            </div> 
            <div data-id = "2"  class="col-12 col-lg-4 food-box">
              <figure class="fborder">
                <img src="img/spicy.jpg" alt="chk1">
                <figcaption style="font-size: 18px; font-weight: 700;margin-bottom: 5px; margin-left: 5px;">Hippie Shawarma Special</figcaption>
                <!-- <p class="price" style="margin-bottom: 5px; margin-left: 5px;">Rs 150</p>
                <button class="btn btn-secondary" style="margin-bottom: 5px; margin-left: 5px;" onclick="addToCart()">Add to Cart</button> -->
              </figure>
            </div> 
            <div data-id = "3"  class="col-12 col-lg-4 food-box">
              <figure class="fborder">
                <img src="img/peri.jpeg" alt="chk1">
                <figcaption style="font-size: 18px; font-weight: 700;margin-bottom: 5px; margin-left: 5px;">Hippie Shawarma Special</figcaption>
                <!-- <p class="price" style="margin-bottom: 5px; margin-left: 5px;">Rs 160</p>
                <button class="btn btn-secondary" style="margin-bottom: 5px; margin-left: 5px;" onclick="addToCart()">Add to Cart</button> -->
              </figure>
            </div> 
            
            
              
                
                
          </div>
        </div>
            <div class="southindian">
              <div class="content2">
                <p class="title2">The South Indian Delicacy</p>
                <p class="title3">Best Seller</p>
                <p class="title4">Reinforcing healthy lifestyle with our carefully crafted menu. For an enriching experience delve into our fresh and wholesome meals ll. For good food is good life!</p>
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-12">
                  <figure >
                    <img src="img/houseplatter1.jpg " style="margin-left: 28px;" alt="image">
                    <figcaption style="font-size: 20px; font-weight: bold; margin-left: 28px;">Hippie Special Non Veg Platter</figcaption>
                  </figure>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                <figure >
                  <img src="img/chk1.jpeg "  style="margin-left: 28px;" alt="image">
                  <figcaption style="font-size: 20px; font-weight: bold;  margin-left: 28px;">Hippie Chicken Shawarma Platter</figcaption>
                </figure>
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <figure >
                  <img src="img/chk2.jpeg"  style="margin-left: 28px;" alt="image">
                  <figcaption style="font-size: 20px; font-weight: bold;  margin-left: 28px;">Hippie Special Mixed Platter</figcaption>
                </figure>
              </div>
              <div class="col-lg-6 col-md-6 col-12">
                <figure >
                  <img src="img/The yummy seczhwan chicken rice--(WEBP).webp"  style="margin-left: 28px;" alt="image">
                  <figcaption style="font-size: 20px; font-weight: bold;  margin-left: 28px;">Hippie Special Mixed Fried Rice</figcaption>
                </figure>
              </div>
               </div>
              </div>
            </div>
        
            <div class="steps">
              <h1 class="stephead">HOWEVER YOU SAY IT, IT'S DELICIOUS</h1>
              <h1 class="stephead">-EVERYBODY</h1>
            </div>
            <div class="discover">
              <h1 class="discover_hd" style="color:rgb(176, 21, 21);text-align: center;
              font-size: 35px;">Discover</h1>
              <h2 style="color: black; text-align: center; font-size: 40px; font-weight: bolder;">Our Hippie Delicacies</h2>
               <div class="discovers">
                <p style="text-align: left; font-size: 20px;">
                A professionally managed restaurant with set Standard Operating Processes and nominated at the Big F Awards under "Best Mediterranean Cuisine" category, 2022. The Brand also launched its Franchisee operations and successfully opened outlets in Chennai, Trichy and Coimbatore in 2018.
               <br> Established with sheer passion for good food, Hippie Shawarma opened doors in June, 2017 under Spectra Cuisines Pvt Ltd. Concept curated and lead by an industry veteran with over 7 years of hospitality consultancy and entrepreneurial experience.
               <br> The timeless taste of Lebanese cuisine has helped Hippie Shawarma establish a strong market-presence in the past 6 years by becoming a preferred brand. Has Strong online presence, with it own Online ordering website and application in place.
                </p>
              
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
            
            <div  class="col-lg-4 col-md-4 col-12">
              <img src="img/❤️(JPG).jpg" class="logos">
            </div>
            
            <div  class="col-lg-4 col-md-4 col-12">
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
          
       
    
     
  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
<script src="filter.js"></script>
</body>
</html>