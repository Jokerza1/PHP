<!DOCTYPE html>
<html>
<head>
    <?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>
	<title>Treekk</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <style type="text/css">
  </style>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Treekk</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <li class="active"><a href="index.php">Home</a></li>
       <li><a href="about.html">About</a></li>
       <li><a href="contact.html">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="form_index.php" id="login">Account <em class="fa fa-user"></em></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> 


<div class="container">
	<div>
	<div class="row">
			<div class="col-lg-12">
				<div id="content">
					<h1>Treekk</h1>
					<h3>Never Travel Alone</h3>
					<hr id="hrgetstarted">
				<button class="btn btn-default btn-lg"><i class="fas fa-plane"></i> Get Started</button>
				</div>
			</div>
		</div>
	</div>
</div>





<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="index.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</body>
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
<footer class="footer footer-big" id="footerTrigger">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-3">
                            <div class="info add-animation-stopped animation-1 animate">
                                <h5 class="title t1">Company</h5>
                                <nav class="blog1">
                                    <ul >
                                        <li>
                                            <a class="footer" href="#">
                                            Home
                                            </a>
                                        </li>
                                        <li>
                                            <a class="footer" href="#">
                                            Find offers
                                            </a>
                                        </li>
                                        <li>
                                            <a class="footer" href="#">
                                            Discover Projects
                                            </a>
                                        </li>
                                        <li>
                                            <a class="footer" href="#">
                                            Our Portfolio
                                            </a>
                                        </li>
                                        <li>
                                            <a class="footer" href="#">
                                            About Us
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-3 col-md-offset-1 col-sm-3">
                            <div class="info add-animation-stopped animation-2 animate">
                                <h5 class="title t2"> Help and Support</h5>
                                <nav class="blog2">
                                    <ul>
                                        <li>
                                            <a class="footer" href="#">
                                            Contact Us
                                            </a>
                                        </li>
                                        <li>
                                            <a class="footer" href="#">
                                            How it works
                                            </a>
                                        </li>
                                        <li>
                                            <a class="footer" href="#">
                                            Terms &amp; Conditions
                                            </a>
                                        </li>
                                        <li>
                                            <a class="footer" href="#">
                                            Company Policy
                                            </a>
                                        </li>
                                        <li>
                                            <a class="footer" href="#">
                                            Money Back
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="info add-animation-stopped animation-3 animate">
                                <h5 class="title t3">Latest News</h5>
                                <nav>
                                    <ul class="blog3">
                                        <li>
                                            <a class="footer" href="#">
                                                <i class="fab fa-twitter"></i> <b>Get Shit Done</b>
                                                The best kit in the market is here, just give it a try and let us...
                                                <hr class="hr-small">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="footer" href="#">
                                            <i class="fab fa-twitter"></i>
                                            We've just been featured on <b> Awwwards Website</b>! Thank you everybody for...
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-2 col-md-offset-1 col-sm-3">
                            <div class="info add-animation-stopped animation-4 animate">
                                <h5 class="title t4">Follow us on</h5>
                                <nav>
                                    <ul class="blog4">
                                        <li>
                                            <a class="link" href="#" class="btn btn-social btn-facebook btn-simple">
                                            <i class="fab fa-facebook-square"></i> Facebook
                                            </a>
                                        </li>
                                        <li>
                                            <a class="link" href="#" class="btn btn-social btn-twitter btn-simple">
                                            <i class="fab fa-twitter"></i> Twitter
                                            </a>
                                        </li>
                                        <li>
                                            <a class="link" href="#" class="btn btn-social btn-reddit btn-simple">
                                            <i class="fab fa-google-plus-square"></i> Google+
                                            </a>
                                        </li>
                                  </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="copyright">
                        © 2018 Pattanun Chutisavang, made for work
                    </div>
                </div>
            </footer>

</html>