
<?php
session_start();
$grandTotal = 0;

if (!empty($_SESSION['cart'])) {
  foreach ($_SESSION['cart'] as $item) {
    $quantity = isset($item['quantity']) ? $item['quantity'] : 1;
    $grandTotal += $item['price'] * $quantity;
  }
}

$_SESSION['grandTotal'] = $grandTotal;
?>


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Coffee - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">DAILY DOSE</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="room.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.php">Shop</a>
                <a class="dropdown-item" href="product-single.php">Single Product</a>
                <a class="dropdown-item" href="cart.php">Cart</a>
                <a class="dropdown-item" href="checkout.php">Checkout</a>
              </div>
            </li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	          <li class="nav-item cart"><a href="cart.php" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small>1</small></span></a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Cart</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    
								<tbody>
<?php if (!empty($_SESSION['cart'])): ?>
  <?php $grandTotal = 0; ?>
  <?php foreach ($_SESSION['cart'] as $index => $item): ?>
    <?php 
      $quantity = isset($item['quantity']) ? $item['quantity'] : 1;
      $total = $item['price'] * $quantity;
      $grandTotal += $total;
    ?>
    <tr class="text-center">
      <td class="product-remove">
        <a href="remove_from_cart.php?index=<?= $index ?>">
          <span class="icon-close"></span>
        </a>
      </td>

      <td class="image-prod">
        <div class="img" style="background-image:url(<?= $item['image'] ?>);"></div>
      </td>

      <td class="product-name">
        <h3><?= htmlspecialchars($item['name']) ?></h3>
      </td>

      <td class="price"><?= $item['price'] ?> DHS</td>

      <td class="quantity">
      <?= $quantity ?>
      </td>


      <td class="total"><?= $total ?> DHS</td>
    </tr>
  <?php endforeach; ?>
<?php else: ?>
  <tr>
    <td colspan="6" class="text-center">Votre panier est vide</td>
  </tr>
<?php endif; ?>
</tbody>
                    </table>
						  <div class="row mt-4">
                          <div class="col-md-6">
                          <a href="menu.php" class="btn btn-primary py-3 px-4">
                             ← Retour au menu
                          </a>
                          </div>
                         </div>
					  </div>
    			</div>
    		</div>
    		       <div class="cart-total mb-3">
                    <h3>Cart Totals</h3>

                          <p class="d-flex">
                         <span>Subtotal</span>
                      <span><?= $grandTotal ?> DHS</span>
                    </p>

                  <p class="d-flex">
                 <span>Delivery</span>
              <span>0 DHS</span>
                   </p>

                   <hr>

                  <p class="d-flex total-price">
                     <span>Total</span>
                   <span><?= $grandTotal ?> DHS</span>
                     </p>
                      </div>

    				<a href="checkout.php" class="btn btn-primary py-3 px-4">
                     Checkout
                    </a>
				</div>
    		</div>
			</div>
		</section>

   <section class="ftco-menu mb-5 pb-5">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Découvrez</span>
            <h2 class="mb-4">Nos Meilleurs Produits</h2>
            
          </div>
        </div>
    		<div class="row d-md-flex">
	    		<div class="col-lg-12 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Nos Plats</a>

		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Nos boissons</a>

		              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Nos Desserts</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              	<div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/thon.webp);"></a>
		              				<div class="text">
		              					<h3><a href="#">Thon rouge de Méditerranée mi-cuit</a></h3>
		              					
		              					<form action="add_to_cart.php" method="POST">
                                             <input type="hidden" name="name" value="Thon rouge de Méditerranée mi-cuit">
                                             <input type="hidden" name="price" value="270.00">
                                             <input type="hidden" name="image" value="images/thon.webp">

                                             <button type="submit" class="btn btn-primary btn-outline-primary">
                                              Add to cart
                                              </button>
                                           </form>

		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/cote.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Côte de veau rôtie au sautoir</a></h3>
		              					
		              					<form action="add_to_cart.php" method="POST">
                                        <input type="hidden" name="name" value="Côte de veau rôtie au sautoir">
                                        <input type="hidden" name="price" value="300.0">
                                        <input type="hidden" name="image" value="images/cote.jpg">

                                           <button type="submit" class="btn btn-primary btn-outline-primary">
                                        Add to cart
                                           </button>
                                        </form>

		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/saumon.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Saumon grillé</a></h3>
		              					
		              					<form action="add_to_cart.php" method="POST">
                                        <input type="hidden" name="name" value="Saumon grillé">
                                        <input type="hidden" name="price" value="260.0">
                                        <input type="hidden" name="image" value="images/saumon.jpg">

                                           <button type="submit" class="btn btn-primary btn-outline-primary">
                                        Add to cart
                                           </button>
                                        </form>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/canard.webp);"></a>
		              				<div class="text">
		              					<h3><a href="#">Magret de canard rôti aux épices</a></h3>
		              					
		              					<form action="add_to_cart.php" method="POST">
                                        <input type="hidden" name="name" value="Magret de canard rôti aux épices">
                                        <input type="hidden" name="price" value="300.0">
                                        <input type="hidden" name="image" value="images/canard.webp">

                                           <button type="submit" class="btn btn-primary btn-outline-primary">
                                        Add to cart
                                           </button>
                                        </form>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/rissoto.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Risotto à la truffe noire</a></h3>
		              					
		              					<form action="add_to_cart.php" method="POST">
                                        <input type="hidden" name="name" value="Risotto à la truffe noire">
                                        <input type="hidden" name="price" value="270.00">
                                        <input type="hidden" name="image" value="images/rissoto.jpg">

                                           <button type="submit" class="btn btn-primary btn-outline-primary">
                                        Add to cart
                                           </button>
                                        </form>
		              				</div>
		              			</div>
		              		</div>
		              		
		              		
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/orange.webp);"></a>
		              				<div class="text">
		              					<h3><a href="#">Jus d'orange</a></h3>
		              					
		              					<form action="add_to_cart.php" method="POST">
                                        <input type="hidden" name="name" value="Jus d'orange">
                                        <input type="hidden" name="price" value="50.0">
                                        <input type="hidden" name="image" value="images/orange.webp">

                                           <button type="submit" class="btn btn-primary btn-outline-primary">
                                        Add to cart
                                           </button>
                                        </form>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/citron.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Jus de citron</a></h3>
		              					<form action="add_to_cart.php" method="POST">
                                        <input type="hidden" name="name" value="Jus de citron">
                                        <input type="hidden" name="price" value="50.0">
                                        <input type="hidden" name="image" value="images/citron.jpg">

                                           <button type="submit" class="btn btn-primary btn-outline-primary">
                                        Add to cart
                                           </button>
                                        </form>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/coco.avif);"></a>
		              				<div class="text">
		              					<h3><a href="#">Lait de coco</a></h3>
		              					<form action="add_to_cart.php" method="POST">
                                        <input type="hidden" name="name" value="Lait de coco">
                                        <input type="hidden" name="price" value="60.0">
                                        <input type="hidden" name="image" value="images/coco.avif">

                                           <button type="submit" class="btn btn-primary btn-outline-primary">
                                        Add to cart
                                           </button>
                                        </form>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>
					  <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/framb2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Cheesecake framboise</a></h3>
		              					<form action="add_to_cart.php" method="POST">
                                        <input type="hidden" name="name" value="Cheesecake framboise">
                                        <input type="hidden" name="price" value="100.0">
                                        <input type="hidden" name="image" value="images/framb2.jpg">

                                           <button type="submit" class="btn btn-primary btn-outline-primary">
                                        Add to cart
                                           </button>
                                        </form>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/fondant.webp);"></a>
		              				<div class="text">
		              					<h3><a href="#">Fondant au chocolat</a></h3>
		              					<form action="add_to_cart.php" method="POST">
                                        <input type="hidden" name="name" value="Fondant au chocolat">
                                        <input type="hidden" name="price" value="90.0">
                                        <input type="hidden" name="image" value="images/fondant.webp">

                                           <button type="submit" class="btn btn-primary btn-outline-primary">
                                        Add to cart
                                           </button>
                                        </form>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/Pavlova.webp);"></a>
		              				<div class="text">
		              					<h3><a href="#">Pavlova fruits rouges</a></h3>
		              					<form action="add_to_cart.php" method="POST">
                                        <input type="hidden" name="name" value="Pavlova fruits rouges">
                                        <input type="hidden" name="price" value="170.0">
                                        <input type="hidden" name="image" value="images/Pavlova.webp">

                                           <button type="submit" class="btn btn-primary btn-outline-primary">
                                        Add to cart
                                           </button>
                                        </form>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/Pommes.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Fine tarte aux pommes</a></h3>
		              					<form action="add_to_cart.php" method="POST">
                                        <input type="hidden" name="name" value="Fine tarte aux pommes">
                                        <input type="hidden" name="price" value="95.0">
                                        <input type="hidden" name="image" value="images/Pommes.jpg">

                                           <button type="submit" class="btn btn-primary btn-outline-primary">
                                        Add to cart
                                           </button>
                                        </form>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>



    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Daily Dose is a café and restaurant designed for everyday moments.We serve quality coffee, tasty meals, and a warm atmosphere where you can relax, work, or share good times.Your daily dose of comfort, flavor, and good vibes.</p>
             
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Discover the Art of Espresso: A Beginner's Guide</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2025</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">How to Pair Your Coffee with the Perfect Pastry</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct 24, 2025</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Cooked</a></li>
                <li><a href="#" class="py-2 d-block">Deliver</a></li>
                <li><a href="#" class="py-2 d-block">Quality Foods</a></li>
                <li><a href="#" class="py-2 d-block">Mixed</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	               <li><span class="icon icon-map-marker"></span><span class="text">Bd Béni Amir , BP 77 , Khouribga</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+212 8255555</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">dailydose@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

           
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

    
  </body>
</html>