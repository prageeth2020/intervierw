<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/styles.css">
    <title>Homepage</title>
  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
		  <div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand text-danger" href="#">photography.lk</a>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
			  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
				  <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link text-white" href="#">About Us</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link text-white" href="#">Contact Us</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link text-white" href="#">Promotions</a>
				</li>
			  </ul>
			  <form class="d-flex">
				<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-primary" type="submit">Search</button>
			  </form>
			</div>
		  </div>
		</nav>
		<div class="container minHeigh">
			<div class="row row-cols-1 row-cols-md-4 g-4">
			<?php
				//require database.php for database connection purpos
				require_once "./Database/Database.php";
				
				//create database instance
				$db = new Database;
				
				//SQl query to get all data from oimages table
				$query = "select * from images";
				
				//execute the query and get the result
				$result = $db->query($query);
				
				//if reesult !@= null menas there are some data in table so repeat row by row until it read all data
				if($result != null){
					//repear data reading row by row
					while($row = $result->fetch_assoc())
					{
						$imgURL = $row["imgURL"];
						$Topic = $row["Topic"];
						$price = $row["price"];
						//display items in DOM
						echo "<div class=\"col\">
								<div class=\"card h-100\">
								  <img src=\"$imgURL\" class=\"card-img-top\" alt=\"...\" style=\"height : 200px;\">
								  <div class=\"card-body\">
									<h5 class=\"card-title\">$Topic</h5>
								  </div>
								   <div class=\"card-footer\">
									  <div class=\"row\">
										<div class=\"col-6\">
											<p class=\"card-text\">Price : $price(LKR) </p>
										</div>
										<div class=\"col-6 text-end\">
											<button type=\"button\" class=\"btn btn-success\">
												<i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i>
												Buy Now
											</button>
										</div>
									  </div>
								   </div>
								</div>
							  </div>";
					}
				}
			
			?>
			</div>
		</div>
		 <div class="footer-dark">
			<footer>
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-md-3 item">
							<h3>Services</h3>
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-sm-6 col-md-3 item">
							<h3>About</h3>
							<ul>
								<li><a href="#">Company</a></li>
								<li><a href="#">Team</a></li>
								<li><a href="#">Careers</a></li>
							</ul>
						</div>
						<div class="col-md-6 item text">
							<h3>photography.lk</h3>
							<p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
						</div>
						<div class="col item social">
							<a href="#"><i class="fab fa-facebook-f"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-snapchat-ghost"></i></a>
							<a href="#"><i class="fab fa-instagram"></i></a>
						</div>
					</div>
					<p class="copyright">Company Name © 2018</p>
				</div>
			</footer>
		</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
	
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/b1c1380a86.js" crossorigin="anonymous"></script>
  </body>
</html>