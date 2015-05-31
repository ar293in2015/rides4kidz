<?php

require_once('functions.php');


?>

<!DOCTYPE html>
<html>
	<head>

		<title> Rides4Kidz</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/tattoo.css" rel="stylesheet">
    <script src="js/respond.js"></script>


	</head>

	<body>

<!--navbar-->


		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand">Rides4Kidz</a>
				</div>
					<div id="navbar" class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								<li><a href="home.html">Home</a></li>



							</ul>

							<ul class="nav navbar-nav navbar-right">
								<li><a href="#">View Profile</a>
								<li><a href="#">Log Out</a>
								</li>
							</ul>
					</div>
			</div>
		</nav>



<!--body-->

<div class="row" style="text-align:center">
  <div class="col-md-12">
    <h1>Administrative Page</h1>
  </div>
</div>

<hr class="featurette-divider">

<div class="row" style="text-align:center">
  <div class="col-md-12">
  <button class="btn btn-danger">Click Here to Authorize your Account</button>
	<br>
	<br>
	<span class="glyphicon glyphicon-warning-sign"></span><strong> PLEASE CLICK HERE TO AUTHORIZE ACCOUNT BEFORE PROCEEDING</strong>
  </div>
</div>

<div class='row' style="margin-top: 25px; margin-left: 15px;">
	<div class="col-md-5 ">
		<div class="panel panel-primary">
		<div class="panel-heading"><span class="glyphicon glyphicon-road" aria-hidden="true"></span> Uber Request Form</div>
		<div class="panel-body">
			<div class="form">

<!-- <?php

if(isset($_SESSION['errors3'])) {
foreach($_SESSION['errors3'] as $errors3) {
echo $errors3;
}

$_SESSION = array();
}



?> -->
				<form action="process.php" method="post" >
					<input type='hidden' name="action" value="request">
					<h5>Type of Uber Ride</h5>
					<label class="checkbox-inline"><input type="checkbox" name='car' value="uberx">UberX</label>
					<label class="checkbox-inline"><input type="checkbox" value="uberxl" name='car'>UberXL</label>



					<div class="form-group" style="margin-top:10px;">
		      <label for="sel1">Number of Children:</label>
		      <select name="numkids" class="form-control" id="sel1">
		        <option>1</option>
		        <option>2</option>
		        <option>3</option>
		        <option>4</option>
						<option>5</option>
						<option>6</option>
		      </select>
				</div>

				<div class="form-group" style="margin-top:5px;">
					<label for="start">Starting Location:</label>
					<input name="start" type="name" class="form-control" id="start" placeholder="Starting Location">
				</div>
				<div class="form-group end">
					<label for="end">End Location:</label>
					<input name="end1" type="name" class="form-control end" id="" placeholder="End Location">
					<input name="end2" type="name" class="form-control end" id="" placeholder="End Location">
					<input name="end3" type="name" class="form-control end" id="" placeholder="End Location">
					<input name="end4" type="name" class="form-control end" id="" placeholder="End Location">
					<input name="end5" type="name" class="form-control end" id="" placeholder="End Location">
					<input name="end6" type="name" class="form-control end" id="" placeholder="End Location">
				</div>

				<div class="form-group end">
					<label for="child">Children:</label>
					<input name="child1" type="name" class="form-control child" id="" placeholder="Child Name">
					<input name="child2" type="name" class="form-control child" id="" placeholder="Child Name">
					<input name="child3" type="name" class="form-control child" id="" placeholder="Child Name">
					<input name="child4" type="name" class="form-control child" id="" placeholder="Child Name">
					<input name="child5" type="name" class="form-control child" id="" placeholder="Child Name">
					<input name="child6" type="name" class="form-control child" id="" placeholder="Child Name">
				</div>

				<div class="message" style="margin-bottom: 10px">
					<label for="comments">Comments:</label>
				<textarea name="comment" class="form-control" rows="5"></textarea>
			</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			</div>

		</div>
	</div>
	</div>
	<div class="col-md-7" style="text-align: center">
		<strong>NEW FEATURE COMING SOON!!</strong>
		<br>
		<button class='btn btn-warning' >
			Set Schedule
		</button>


		<p style="margin-top:40px; font-weight: bold; font-size: 150%; text-decoration:underline">Chauffers</p>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
				<th>Phone Number</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
				<td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
				<td>john@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
				<td>john@example.com</td>
      </tr>

    </tbody>
  </table>
	</div>
</div>









<!--Footer-->

<!--
	<footer class = "footer">
		<div class="container">
			<div class="col-md-6 col-sm-6">
			<p class="test-muted"> Copyright @ 2015 Rides4Kidz inc. All rights reserved</p>
		</div>
			<div class="col-md-6 col-sm-6">
				<ul class = "gf-links piped footer-links">
					<li><a href="about_page.html">About</a></li>
					<li><a href="testimonials.html">Testimonials</a></li>
					<li><a href="#">Partners</a></li>
					<li><a href="contact_us.html.php">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</footer> -->


	<!-- javascript -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

	</body>






</html>
