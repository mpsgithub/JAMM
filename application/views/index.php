<!DOCTYPE html>
<html>
<head>
	<title>JAMM</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<style type="text/css">
		.main-jumbo {
			background-color: rgba(245, 245, 245, 0.9);
		}
		.jumbo-container {
			margin-top: 200px;
		}

/*		.intro-header {
			
			background: url(background.jpg) no-repeat center center;
			background-size: cover;
			max-width: 100%;
			height: auto;
			padding-bottom: 200px;
		}*/

		.navbar-brand img {
			height: 150%;
		}

/*		#nav { 
		    background: url(images/intro.png) 50% 0 fixed;
		    height: auto;  
		    margin: 0 auto; 
		    width: 100%; 
		    position: relative; 
		    box-shadow: 0 0 50px rgba(0,0,0,0.8);
		    padding: 100px 0;
		}
*/

		#nav { 
		    /*background: url(images/intro.png) 50% 0 fixed;*/
		    /*height: auto;  
		    margin: 0 auto;*/ 
		    width: 100%; 
		    position: relative; 
		    /*box-shadow: 0 0 50px rgba(0,0,0,0.8);
		    padding: 100px 0;*/
		}

		#main { 
		    background: url(assets/images/background.jpg) 50% 0 fixed; 
/*		    height: auto;  */
		    margin: 0 auto; 
/*		    width: 100%; */
			background-size: cover;
		    position: relative; 
		    /*box-shadow: 0 0 50px rgba(0,0,0,0.8);*/
		    /*padding-top: 100px;*/
		    padding-bottom: 200px;
		}
		#rest { 
		   /* background: url(images/about.png) 50% 0 fixed; */
		    height: auto;
		    margin: 0 auto; 
		    width: 100%; 
		    position: relative; 
		    box-shadow: 0 0 50px rgba(0,0,0,0.8);
		    /*padding: 100px 0;*/
		    /*color: #fff;*/
		}

/*		.city-btn a {
			margin: auto;
		}*/
	</style>
</head>
<body>

<div class="intro-header">
<section id="nav" data-speed="6" data-type="background">
	
</section>
<!-- <section id="nav" data-speed="6" data-type="background"> -->
<section id="main" data-speed="2" data-type="background">
<!-- <div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
	    	<div class="navbar-header">
	      		<a class="navbar-brand" href="#">
	        		<img alt="logo" src="assets/images/logo.png">
	      		</a>
	    	</div>
	  	<form class="navbar-form navbar-left" role="search">
			<div class="form-group">
		    	<input type="text" class="form-control" name="city" placeholder="City">
		  	</div>
		  	<div class="form-group">
		    	<input type="text" class="form-control" name="cuisine" placeholder="Cuisine">
		  	</div>
		  	<div class="form-group">
		    	<input type="text" class="form-control" name="chef" placeholder="Chef Name">
		  	</div>
		  	<button type="submit" class="btn btn-success">Search</button>
		</form>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="user_profile">User Account</a></li>
			<li><a href="chef_profile">Chef Account</a></li>
        	<li><a href="login_reg">Login/Register</a></li>
        </ul>
		</div>
	</nav>
</div> -->
<!-- </section> -->
	<div class="container">
		<div class="row">
			<div class="navbar-right">
				<div class="btn-group" role="group">

<?php
                if ($this->session->userdata('user_type') == "user") { ?>
                    <a class="btn btn-success" href="/users/user_profile/<?= $this->session->userdata('id') ?>">User Account</a>
                    <a class="btn btn-success" href="/logins/logout">Logout</a>
<?php           } 
                  elseif ($this->session->userdata('user_type') == "chef") { ?>
                    <a class="btn btn-success" href="/chefs/chef_profile/<?= $this->session->userdata('id') ?>">Chef Account</a>
                    <a class="btn btn-success" href="/logins/logout">Logout</a>
<?php           
                } else {
?>
                    <a class="btn btn-success" href="/logins/login_page">Login/Register</a>
<?php
                }
?>
                </div>
			</div>
		</div>
	</div>
	
	<div class="container jumbo-container">
		<div class="jumbotron row  main-jumbo">
			<h1>JAMM || <small>Rock Your Tastebuds</small></h1>
			<br><br>
			<form method="post" action="" class="mainform form-inline">
				<div class="form-group">
					<h3>Search By:</h3>
				</div>
				<div class="form-group">
					<input type="text" class="form-control input-lg" placeholder="City (required)" aria-describedby="basic-addon1" name="city">
				</div>
				<div class="form-group">
					<input type="text" class="form-control input-lg" placeholder="Cuisine" aria-describedby="basic-addon2" name="cuisine">
				</div>
				<div class="form-group">
					<input type="text" class="form-control input-lg" placeholder="Food Name" aria-describedby="basic-addon3" name="food">
				</div>
				<div class="form-group">
					<button type="submit" value="Search" class="btn btn-success">Submit</button>
				</div>
			</form>
			<br><br>
			<!-- <div class="row">
				<a href="login_reg" class="col-md-offset-5 btn btn-success">Register or Log In</a>
			</div> -->
		</div>
	</div>
</div>
</section>

<section id="rest" data-speed="4" data-type="background">
<div class="container">
	<hr class="section-heading-spacer">
	<div class="row">
		<div class="col-md-4">
			<h2>Hungry?</h2>
			<p>JAMM hooks you up with the best home-cooked meals in your region, city, and even in your neighborhood.</p>
		</div>
		<div class="col-md-4">
			<h2>Do you love to cook?</h2>
			<p>Let JAMM find customers for your favorite hobby, or rather, let them find you.</p>
		</div>
		<div class="col-md-4">
			<h2>Know any good chefs?</h2>
			<p>Give them a chance to share their talents with the world! Take them to our website.</p>
		</div>
		
	</div>
	<hr class="section-heading-spacer">
</div>

<div class="container">
	<hr class="section-heading-spacer">
	<h1>Search a City Near You</h1>
	<div class="row">

		<div class="col-md-4">
			<div class="thumbnail">
				<img src="assets/images/sanjose.jpg" alt="San Jose">
				<div class="caption">
					<h3>San Jose</h3>
					<p>San Jose is known for all the cats and dogs it cooks. Yummy cats and dogs. Yum ipsum custodes cow burgers. Yes all the cats and dogs are 100% organic. Yes. Yes.</p>
						<br>

			<?php
			            if ($this->session->userdata('user_type')) {
			?>
				            <div class="city-btn">
								<a href="/foods/all_food_by_city/San%20Jose" class="btn btn-success col-md-5 col-md-offset-0">Food</a>
								<a href="/foods/all_chefs_by_city/San%20Jose" class="btn btn-success col-md-5 col-md-offset-2">Chefs</a>
							</div>
			<?php
						} else {
			?>
							<div class="city-btn">
			                    <a class="btn btn-success col-md-12" href="/logins/login_page">Register and Login to See Food in San Jose!</a>
			                </div>
			<?php
			            }
			?>

						<div class="clearfix"></div>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="thumbnail">
				<img src="assets/images/losangeles.jpg" alt="Los Angeles">
				<div class="caption">
					<h3>Los Angeles</h3>
					<p>Los Angeles cooks no human flesh. None. Human flesh is the last thing anyone in Los Angeles will serve you, ever. Unless possibly if you ask very nicely.</p>
						<br>

			<?php
			            if ($this->session->userdata('user_type')) {
			?>
				            <div class="city-btn">
								<a href="/foods/all_food_by_city/Los%20Angeles" class="btn btn-success col-md-5 col-md-offset-0">Food</a>
								<a href="/foods/all_chefs_by_city/Los%20Angeles" class="btn btn-success col-md-5 col-md-offset-2">Chefs</a>
							</div>
			<?php
						} else {
			?>
							<div class="city-btn">
			                    <a class="btn btn-success col-md-12" href="/logins/login_page">Register and Login to See Food in Los Angeles!</a>
			                </div>
			<?php
			            }
			?>

						<div class="clearfix"></div>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="thumbnail">
				<img src="assets/images/sanfrancisco.jpg" alt="San Francisco">
				<div class="caption">
					<h3>San Francisco</h3>
					<p>Our chefs in San Francisco only eat Benedictine monks, so you have nothing to worry about. You're perfectly safe here, so feel free to stop by for a visit. (They know. Run.)</p>
						<br>

			<?php
			            if ($this->session->userdata('user_type')) {
			?>
				            <div class="city-btn">
								<a href="/foods/all_food_by_city/San%20Francisco" class="btn btn-success col-md-5 col-md-offset-0">Food</a>
								<a href="/foods/all_chefs_by_city/San%20Francisco" class="btn btn-success col-md-5 col-md-offset-2">Chefs</a>
							</div>
			<?php
						} else {
			?>
							<div class="city-btn">
			                    <a class="btn btn-success col-md-12" href="/logins/login_page">Register and Login to See Food in San Francisco!</a>
			                </div>
			<?php
			            }
			?>

						<div class="clearfix"></div>
				</div>
			</div>
		</div>

	</form>
	</div>
</div>


<br>
<p class="text-center">&copy; JAMM, Inc.</p>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
   // cache the window object
   $window = $(window);
 
   $('section[data-type="background"]').each(function(){
     // declare the variable to affect the defined data-type
     var $scroll = $(this);
                     
      $(window).scroll(function() {
        // HTML5 proves useful for helping with creating JS functions!
        // also, negative value because we're scrolling upwards                             
        var yPos = -($window.scrollTop() / $scroll.data('speed')); 
         
        // background position
        var coords = '50% '+ yPos + 'px';
 
        // move the background
        $scroll.css({ backgroundPosition: coords });    
      }); // end window scroll
   });  // end section function
}); // close out script
</script>
</body>
</html>