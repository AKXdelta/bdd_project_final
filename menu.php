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
	          <li class="nav-item active"><a href="menu.php" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="room.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.php">Shop</a>
                <a class="dropdown-item" href="product-single.php">Single Product</a>
                <a class="dropdown-item" href="room.php">Cart</a>
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

      <div class="slider-item" style="background-image: url(images/rest4.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Our Menu</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Menu</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex align-items-xl-end">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>+212 8255555</h3>
	    						
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>khouribga city</h3>
	    						<p>Bd Béni Amir, BP 77, Khouribga</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Open Monday-Friday</h3>
	    						<p>8:00am - 9:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
<div class="book p-4">
  <h3>Book a Table</h3>

  <form action="book.php" method="POST" class="appointment-form">

    <div class="d-md-flex">
      <div class="form-group">
        <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
      </div>

      <div class="form-group ml-md-4">
        <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
      </div>
    </div>

    <div class="d-md-flex">
      <div class="form-group">
        <div class="input-wrap">
          <div class="icon"><span class="ion-md-calendar"></span></div>
          <input type="date" name="reservation_date" class="form-control" required>
        </div>
      </div>

      <div class="form-group ml-md-4">
        <div class="input-wrap">
          <div class="icon"><span class="ion-ios-clock"></span></div>
          <input type="time" name="reservation_time" class="form-control" required>
        </div>
      </div>

      <div class="form-group ml-md-4">
        <input type="text" name="phone" class="form-control" placeholder="Phone" required>
      </div>
    </div>

    <div class="d-md-flex">
      <div class="form-group">
        <textarea name="message" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
      </div>

      <div class="form-group ml-md-4">
        <input type="submit" value="Appointment" class="btn btn-white py-3 px-4">
      </div>
    </div>

  </form>
</div>

    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
        <div class="row">
        	<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Entrées</h3>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/OIP.webp);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Salade César Au Poulet</span></h3>
	        				<span class="price">90.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Salade César au poulet croustillant, tomate cerise confite, salade Romaine et croûtons</p>
	        			</div>
        			</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/R.jfif);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Salade Grecque </span></h3>
	        				<span class="price">80.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Tomate, oignon rouge, concombre, poivrons, olive Kalamata, fromage feta</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/salade-chevres.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Salade de fromage de chèvre</span></h3>
	        				<span class="price">95.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Salade de fromage de chèvre gratiné au fine herbes, pommes caramélisées, betterave mariné et mesclun de salade, vinaigrette de balsamique et miel</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/OIF.webp);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Tartare de mangue et gambas cuites</span></h3>
	        				<span class="price">110.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Tartare de mangue et gambas cuites, concombre, tomate et herbes, lit de carpaccio d’avocat et salade roquette, tuile de pain croustillante</p>
	        			</div>
	        		</div>
        		</div>
				<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/grilled-peach-and-burrata-salad-683x1024.webp"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Salade de burratta</span></h3>
	        				<span class="price">120.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Tomate cerise, burratta ,Ananas rôtis au romarin, salade roquette, vinaigrette Balsamique</p>
	        			</div>
	        		</div>
        		</div>
				<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/poisson.webp);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Soupe de poissons</span></h3>
	        				<span class="price">85.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Soupe de poissons des rochers et croûtons à la persillade</p>
	        			</div>
	        		</div>
        		</div>
				<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/gambas.webp);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Gambas Pil-Pil</span></h3>
	        				<span class="price">120.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Gambas Pil-Pil au jus de crustacés</p>
	        		</div>
        		</div>
			</div>
				<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/nems.webp);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Nems aux gambas</span></h3>
	        				<span class="price">90.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Nems aux gambas à la chermoula, légumes croquants et champignons frais</p>
	        			</div>
	        		</div>
        		</div>
				
        	
        	</div>

        	<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Plats</h3>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/thon.webp);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Thon rouge de Méditerranée mi-cuit</span></h3>
	        				<span class="price">270.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Thon rouge poêlé</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/saumon.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Saumon grillé</span></h3>
	        				<span class="price">260.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Grillé au garam-massala, fondue de tomate et poivron vert aux parfums d’un rougail, jus d’herbes fraiches</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/cote.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Côte de veau rôtie au sautoir (350g)</span></h3>
	        				<span class="price">300.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        			   <p>Ail confit, sauce aux anchois et herbes fraîches, garniture aux choix</p>
	        			</div>
	        		</div>
        		</div>
				<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/tag.légumes.jpeg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>TAGLIATELLE PRIMAVERA</span></h3>
	        				<span class="price">1800.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        		       <p> Pâtes aux légumes de saison</p>
	        			</div>
	        		</div>
        		</div>
				<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/canard.webp);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Magret de canard rôti aux épices</span></h3>
	        				<span class="price">260.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Légumes grillés, fruits confits de saison, sauce gingembre.</p>
	        			</div>
	        		</div>
        		</div>
				<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/tag.ausaumon.png);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Tagliatelle au saumon fumé</span></h3>
	        				<span class="price">205.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Oignons confits, ail, câpres.</p>
	        			</div>
	        		</div>
        		</div>
				<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/rissoto.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Risotto à la truffe noire</span></h3>
	        				<span class="price">270.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Rocher de parmesan  </p>
	        			</div>
	        		</div>
        		</div>
				<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/noires.webp);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>PÂTES NOIRES AUX FRUITS DE MER</span></h3>
	        				<span class="price">230.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Pates noires,fruits de mer au choix</p>
	        			</div>
	        		</div>
        		</div>
				<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/beef.webp);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Cheeseburger pur boeuf</span></h3>
	        				<span class="price">170.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p> Bun moelleux, vieux cheddar, pastrami grillé, frites, sauce cheddar.</p>
	        			</div>
	        		</div>
        		</div>
				<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/stracciatella.webp);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizaa STRACCIATELLA</span></h3>
	        				<span class="price">160.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Stracciatella, parmesan, roquette</p>
	        			</div>
	        		</div>
        		</div>
				<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/palourdes.webp);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pâtes aux palourdes</span></h3>
	        				<span class="price">150.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Pâtes aux palourdes frais </p>
	        			</div>
	        		</div>
        		</div>
				<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/bufala.avif);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza BUFALA</span></h3>
	        				<span class="price">150.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Bufala, parmesan, roquette, champignons, tomate séché, pesto</p>
	        			</div>
	        		</div>
        		</div>
        	
        	</div>

        	<div class="col-md-6">
        		<h3 class="mb-5 heading-pricing ftco-animate">Desserts</h3>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/framb2.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Cheesecake framboise </span></h3>
	        				<span class="price">100.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Cheesecake framboise et crumble pralines rosess</p>
	        			</div>
        			</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pain.webp);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pain perdu flambé Grand marnier</span></h3>
	        				<span class="price">120.00DHS</span>
                         </div>    
	        			<div class="d-block">
	        				<p>Supreme d’orange caramélisé, Glace vanille</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/Pommes.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Fine tarte aux pommes</span></h3>
	        				<span class="price">95.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/fondant.webp);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Fondant au chocolat</span></h3>
	        				<span class="price">90.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Fondant </p>
	        			</div>
	        		</div>
        		</div>
				
				<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/Pavlova.webp);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pavlova fruits rouges</span></h3>
	        				<span class="price">170.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Crème légère à la vanille, confît de fruits rouges, fruits rouges.</p>
	        			</div>
	        		</div>
        		</div>
				<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/glace.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span> Boules de Glace </span></h3>
	        				<span class="price">80.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Au choix</p>
	        			</div>
	        		</div>
        		</div>
        	</div>

        	<div class="col-md-6">
        		<h3 class="mb-5 heading-pricing ftco-animate">Boissons</h3>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/orange.webp);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Jus d'orange</span></h3>
	        				<span class="price">50.00Dhs</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Oranges pressés</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/citron.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Jus de citron</span></h3>
	        				<span class="price">50.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Citrons pressés</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/coco.avif);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Lait de coco</span></h3>
	        				<span class="price">60.00DHS</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Coco</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/the.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Thé au citron glacé </span></h3>
	        				<span class="price">60.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Thé ,citron</p>
	        			</div>
	        		</div>
        		</div>
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
		              					
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/cote.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Côte de veau rôtie au sautoir</a></h3>
		              					
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/saumon.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Saumon grillé</a></h3>
		              					
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/canard.webp);"></a>
		              				<div class="text">
		              					<h3><a href="#">Magret de canard rôti aux épices</a></h3>
		              					
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/rissoto.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Risotto à la truffe noire</a></h3>
		              					
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
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
		              					
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/citron.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Jus de citron</a></h3>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/coco.avif);"></a>
		              				<div class="text">
		              					<h3><a href="#">Lait de coco</a></h3>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
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
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/fondant.webp);"></a>
		              				<div class="text">
		              					<h3><a href="#">Fondant au chocolat</a></h3>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/Pavlova.webp);"></a>
		              				<div class="text">
		              					<h3><a href="#">Pavlova fruits rouges</a></h3>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/Pommes.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Fine tarte aux pommes</a></h3>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
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
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
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

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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