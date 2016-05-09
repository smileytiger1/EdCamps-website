<?php 
  session_start();// Start the session before you write your HTML page
?>
 <?php 
    include ("inventory.php");  
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
   <!--<link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top"> 
<pre>

</pre>
 <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.html#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Home</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse" style="background-color:rgba(256,256,256,.99)">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="registrationForm.html">Register</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#contact">Contact</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="catalog.php">Shop</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#activities">Activities</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="login.html">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>     

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Online Store</p>
                <div class="list-group">
                    <a href="viewCart.php?show" class="list-group-item">View Shopping Cart</a>
                    <a href="purchase.php" class="list-group-item">Checkout</a>
                    <a href="viewCart.php?clear" class="list-group-item">Clear Shopping Cart</a>
                </div>
            </div>

            <div class="col-md-9">
              <h1 id="product" align="center">Featured Products </h1>

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active" align="center">
                                    <img class="slide-image" src="sweatshirt.jpg" alt="sweatshirt">

                                </div>
                                <div class="item" align="center">
                                    <img class="slide-image" src="sticker.jpg" alt="sticker" style="height:460px">
                                </div>
                                <div class="item" align="center">
                                    <img class="slide-image" src="socks.jpg" alt="socks" style="width:300px;height:460px">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="tshirt.jpg" alt="tshirt">
                            <div class="caption">
                                <h4 class="pull-right"><?php global $prices; echo "$",$prices["sh"]; ?></h4>
                                <h4>T-shirt
                                </h4>
                                <p>A timeless classic, this super-soft cotton tee features the iconic EdCamps logo. </p>
                            </div>
                            <div class="ratings">
                              <a class="pull-right" href="viewCart.php?add=sh">Add to Cart</a>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="pencil.jpg" alt="pencil">
                            <div class="caption">
                                <h4 class="pull-right"><?php global $prices; echo "$",$prices["pn"]; ?></h4>
                                <h4>Pencils
                                </h4>
                                <p>Who says all code needs to be written on a computer?</p>
                            </div>
                            <div class="ratings">
                               <a class="pull-right" href="viewCart.php?add=pn">Add to Cart</a>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="backpack.jpg" alt="backpack">
                            <div class="caption">
                                <h4 class="pull-right"><?php global $prices; echo "$",$prices["bp"]; ?></h4>
                                <h4>Backpack
                                </h4>
                                <p>Everyone in the tech industry has "the black backpack," so we thought we'd create one too.</p>
                            </div>
                            <div class="ratings">
                                <a class="pull-right" href="viewCart.php?add=bp">Add to Cart</a>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="sweatshirt.jpg" alt="sweatshirt">
                            <div class="caption">
                                <h4 class="pull-right"><?php global $prices; echo "$",$prices["sw"]; ?></h4>
                                <h4>Sweatshirt
                                </h4>
                                <p>El Nino means the Bay Area can be a bit chilly. Wrap up in this warm sweatshirt.</p>
                            </div>
                            <div class="ratings">
                              <a class="pull-right" href="viewCart.php?add=sw">Add to Cart</a>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="socks.jpg" alt="socks">
                            <div class="caption">
                                <h4 class="pull-right"><?php global $prices; echo "$",$prices["sk"]; ?></h4>
                                <h4>Socks
                                </h4>
                                <p>Your feet work hard for you.  Treat them with a pair of EdCamps socks.</p>
                            </div>
                            <div class="ratings">
                               <a class="pull-right" href="viewCart.php?add=sk">Add to Cart</a>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="pendrive.jpg" alt="pendrive">
                            <div class="caption">
                                <h4 class="pull-right"><?php global $prices; echo "$",$prices["pd"]; ?></h4>
                                <h4>Pendrive
                                </h4>
                                <p>Carry your projects with you wherever you go.</p>
                            </div>
                            <div class="ratings">
                            <a class="pull-right" href="viewCart.php?add=pd">Add to Cart</a>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="gitsubscription.jpg" alt="gitsubscription">
                            <div class="caption">
                                <h4 class="pull-right"><?php global $prices; echo "$",$prices["gs"]; ?></h4>
                                <h4>Git Subscription
                                </h4>
                                <p>It's never too early to learn this critical code-collaboration platoform.</p>
                            </div>
                            <div class="ratings">
                             <a class="pull-right" href="viewCart.php?add=gs">Add to Cart</a>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="sticker.jpg" alt="sticker">
                            <div class="caption">
                                <h4 class="pull-right"><?php global $prices; echo "$",$prices["db"]; ?></h4>
                                <h4>I Heart Debugging Sticker
                                </h4>
                                <p>You know you do.  And with the price corresponding to the HTTP server error "Not Found," there's even more reason to purchase this sticker.</p>
                            </div>
                            <div class="ratings">
                               <a class="pull-right" href="viewCart.php?add=db">Add to Cart</a>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
        <div class="container text-center">
            <p>Copyright &copy; 2016 EdCamps, Inc.</p>
        </div>
    </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</body>

</html>

