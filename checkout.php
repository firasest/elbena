<?php
include("includes/connect_db.php");

$req = $bdd->query("SELECT * FROM produit ");
//$donnees = $req->fetch();
 ?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from www.directdesign.it/demos/chateau/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:20:15 GMT -->
<head>
        <title>produits</title>
        
        <!-- meta -->
        <meta charset="utf-8">
        <meta content="" name="description">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
        <link rel="icon" type="image/png" href="images/icon.png" />
        
        <!-- css -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="src/css/font-awesome.css" rel="stylesheet">
        <link href="src/css/animate.css" rel="stylesheet">
        <link href="src/css/swipebox.css" rel="stylesheet">
        <link href="src/css/swiper.min.css" rel="stylesheet">
        <link href="src/css/winemaker-theme.css" rel="stylesheet">
        <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css'>
        <link href="src/css/style.css" rel="stylesheet">
        <link href="src/css/styleaddcart.css" rel="stylesheet">
		<link href="src/css/checkout.css" rel="stylesheet">
        <!-- google fonts -->
        <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Merriweather:300,400,700,900,900italic,700italic,400italic,300italic" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        
		<!-- head js -->
        <script src="src/js/modernizr-2.6.2.min.js"></script>
        <style type="text/css">
         
            .page-header {
			    
			    padding: 185px 0 !important;
			    
			}
            /*.imgProduct{
                    width: 218px;
                    height: 35px;
                    z-index: 999999;
                    position: absolute;
                    top: -25px;
                    left: 22px;
            }*/
            .produit.teaser {
                       width: 26.4rem;
                        height: 24.7rem;
                        text-align: center;
                        /*-webkit-box-shadow: 0 5px 15px rgba(0,0,0,.15);*/
                        box-shadow: 0 5px 15px rgba(0,0,0,.15);
                        margin-right: 1.2rem;
                        /* margin-left: 1.2rem; */
                        margin-top: 2rem;
                        background-color: #fff;
                }

            .product-newVert {
                position: absolute;
                top: 0.3rem;
                left: 50%;
                margin-left: -10.3rem;
                line-height: 2.4rem;
                background-image: url(images/bg-product-teaser-new-vert.png);
                background-repeat: no-repeat;
                width: 20.6rem;
                height: 2.4rem;
                -webkit-background-size: 20.6rem 2.4rem;
                -moz-background-size: 20.6rem 2.4rem;
                background-size: 20.6rem 2.4rem;
                text-transform: uppercase;
                font-family: Stone,Arial,sans-serif;
                font-size: 1.2rem;
                color: #fff;
            }

            .product-newMaron {
                position: absolute;
                top: 0.3rem;
                left: 50%;
                margin-left: -10.3rem;
                line-height: 2.4rem;
                background-image: url(images/bg-product-teaser-new-maron.png);
                background-repeat: no-repeat;
                width: 20.6rem;
                height: 2.4rem;
                -webkit-background-size: 20.6rem 2.4rem;
                -moz-background-size: 20.6rem 2.4rem;
                background-size: 20.6rem 2.4rem;
                text-transform: uppercase;
                font-family: Stone,Arial,sans-serif;
                font-size: 1.2rem;
                color: #fff;
            }

            .product-newBlanc {
                    /*border: 1px solid #000;*/
                position: absolute;
                top: 0.3rem;
                left: 50%;
                margin-left: -10.3rem;
                line-height: 2.4rem;
                background-image: url(images/bg-product-teaser-new-rouge.png);
                background-repeat: no-repeat;
                width: 20.6rem;
                height: 2.4rem;
                -webkit-background-size: 20.6rem 2.4rem;
                -moz-background-size: 20.6rem 2.4rem;
                background-size: 20.6rem 2.4rem;
                text-transform: uppercase;
                font-family: Stone,Arial,sans-serif;
                font-size: 1.2rem;
                color: #fff;
            }


            .product-newBleu {
                position: absolute;
                top: 0.3rem;
                left: 50%;
                margin-left: -10.3rem;
                line-height: 2.4rem;
                background-image: url(images/bg-product-teaser-bleu.png);
                background-repeat: no-repeat;
                width: 20.6rem;
                height: 2.4rem;
                -webkit-background-size: 20.6rem 2.4rem;
                -moz-background-size: 20.6rem 2.4rem;
                background-size: 20.6rem 2.4rem;
                text-transform: uppercase;
                font-family: Stone,Arial,sans-serif;
                font-size: 1.2rem;
                color: #fff;
            }

            .product-newRz {
                position: absolute;
                top: 0.3rem;
                left: 50%;
                margin-left: -10.3rem;
                line-height: 2.4rem;
                background-image: url(images/bg-product-teaser-rz.png);
                background-repeat: no-repeat;
                width: 20.6rem;
                height: 2.4rem;
                -webkit-background-size: 20.6rem 2.4rem;
                -moz-background-size: 20.6rem 2.4rem;
                background-size: 20.6rem 2.4rem;
                text-transform: uppercase;
                font-family: Stone,Arial,sans-serif;
                font-size: 1.2rem;
                color: #fff;
            }



            .product-newRouge {
                position: absolute;
                top: 0.3rem;
                left: 50%;
                margin-left: -10.3rem;
                line-height: 2.4rem;
                background-image: url(images/bg-product-teaser-new-jaune.png);
                background-repeat: no-repeat;
                width: 20.6rem;
                height: 2.4rem;
                -webkit-background-size: 20.6rem 2.4rem;
                -moz-background-size: 20.6rem 2.4rem;
                background-size: 20.6rem 2.4rem;
                text-transform: uppercase;
                font-family: Stone,Arial,sans-serif;
                font-size: 1.2rem;
                color: #fff;
                z-index: 9999999;
            }


     



        </style>
    </head>
    
    <body>
    <aside id="side-nav">
    	
        <div>

            <form class="form-inline">
                <div class="form-group has-feedback">
                    <!--<label for="search-field">Chercher un produit</label>-->
                    <input id="search-field" type="text" class="form-control" placeholder="Recherche...">
                    <button id="search-btn" type="submit" class="btn"><span class="fa fa-search"></span></button>
                </div>
            </form>

            <!--<ul class="list-group">
                <li class="list-group-item style-1 list-group-label">About</li>
                <li class="list-group-item style-1"><a href="register.html">Register</a></li>
                <li class="list-group-item style-1"><a href="login.html">Login</a></li>
                <li class="list-group-item style-1"><a href="contact.html">Contact</a></li>
                <li class="list-group-item style-1"><a href="faq.html">FAQ</a></li>
            </ul>-->    	
            
            <ul class="list-group">
                <li class="list-group-item style-1 list-group-label">Réseaux sociaux</li>
                <li class="list-group-item style-1"><a href="https://www.facebook.com/Fromage-Fiore-344785575533009/" target="_blank"><span class="fa fa-facebook-square"></span> Facebook</a></li>
                <li class="list-group-item style-1"><a href="#"><span class="fa fa-twitter-square"></span> Twitter</a></li>
                <li class="list-group-item style-1"><a href="#"><span class="fa fa-google-plus-square"></span> Google Plus</a></li>
                <li class="list-group-item style-1"><a href="#"><span class="fa fa-pinterest-square"></span> Pinterest</a></li>
            </ul>
            
        </div>

    </aside><!-- /#side-nav  -->
    
    <div class="container-fluid" id="main-container">
        <div class="row" id="main-row">
        
        <?php include("includes/header.php") ?>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>

  <div class="col-25">
    <div class="container">
      <h4>Cart
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <b>4</b>
        </span>
      </h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
</div>
<?php include("includes/footer.php") ?>
            </div>
            <!-- /#main-row -->
        </div>
        <!-- /#main-container -->
        
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>


        <!-- jsDeliver -->
	    <script type="text/javascript" src="src/js/jquery.lazy-master/jquery.lazy.js"></script>
	    <script type="text/javascript" src="src/js/jquery.lazy-master/jquery.lazy.min.js"></script>

	    <!-- cdnjs -->
	    <script type="text/javascript" src="src/js/jquery.lazy-master/jquery.lazy.plugins.js"></script>
	    <script type="text/javascript" src="src/js/jquery.lazy-master/jquery.lazy.plugins.min.js"></script>

        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="src/js/jquery.swipebox.min.js"></script>
        <script type="text/javascript" src="src/js/jquery.stellar.js"></script>
        <script type="text/javascript" src="src/js/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="src/js/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="src/js/sticky.js"></script>
        <script type="text/javascript" src="src/js/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="src/js/winemaker-theme.js"></script>
        <script type="text/javascript">
        	
			    $('.lazy').Lazy({
			        // your configuration goes here
			        scrollDirection: 'vertical',
			        effect: 'fadeIn',
			        //delay: 5000,
			        //combined: true,
			        //placeholder: "data:images/Loading_icon.gif",
			        effectTime: 2000,
          			threshold: 0,
			        visibleOnly: true,
			        onError: function(element) {
			            console.log('error loading ' + element.data('src'));
			        }
			    });
        </script>


        <script>
        
		$(document).ready(function() {
        
		/* ISOTOPE */
		
			function getHashFilter() {
			  // get filter=filterName
			  var matches = location.hash.match( /filter=([^&]+)/i );
			  var hashFilter = matches && matches[1];
			  return hashFilter && decodeURIComponent( hashFilter );
			}
		
			var $grid = $('.isotope-grid');
			
			// bind filter button click
			var $filterButtonGroup = $('.isotope-filters');
			$filterButtonGroup.on( 'click', 'a', function() {
			var filterAttr = $( this ).attr('data-filter');
			// set filter in hash
			location.hash = 'filter=' + encodeURIComponent( filterAttr );
			});
			
			var isIsotopeInit = false;
			
			function onHashchange() {
				var hashFilter = getHashFilter();
				if ( !hashFilter && isIsotopeInit ) {
				  return;
				}
				isIsotopeInit = true;
				// filter isotope
				$grid.isotope({
				  itemSelector: '.isotope-grid-item',
				  masonry: {
					columnWidth: '.isotope-grid-sizer',
					gutter: '.isotope-gutter-sizer',
					isFitWidth: true     
					},
				  filter: hashFilter
				});
				// set selected class on button
				if ( hashFilter ) {
				  $filterButtonGroup.find('.active').removeClass('active');
				  var $current = $filterButtonGroup.find('[data-filter="' + hashFilter + '"]');
				  $current.parent().addClass('active');
				}
			}
			
			$(window).on( 'hashchange', onHashchange );
			
			// trigger event handler to init Isotope
			onHashchange();

		}); 
        
        </script>
        
        
	</body>

<!-- Mirrored from www.directdesign.it/demos/chateau/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:20:56 GMT -->
</html>