<!DOCTYPE html>
<html>
<head>
	<title>Feedback form</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
   	<script language="javascript" type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="CSS/nav_bar.css">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<?php include('feedback_backhand.php'); ?>
	<style type="text/css">
		.feedback-heading
		{
			background-image: url("img/bg10.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			height: auto;
			color:white;
			padding: 120px;
			
		}
		.feedback-heading h1
		{
			text-align: center ;
			font-size: 3.2em;
			line-height: 1.5;
			text-transform: uppercase;
			text-shadow: 3px 3px 5px black;
			color: white;
			padding:40px;
		}
		.feedback-content
		{
			text-transform: capitalize;		
			font-size:1.4em;
			letter-spacing: 1.5px;
			font-weight: bold;
			padding: 20px;

		}
		.in-field
		{
			color:#dc2878;
			width:400px;
			height:40px;
			font-weight:normal;

		}
		.error
		{
			color: #dc2878;
		}
		.feedback-content textarea
		{
			color:#dc2878;
			font-weight:normal;
		}
		.feedback-btn
		{
			padding:10px;
			margin:50px 20px;
			width:220px;
			position:relative;
			left:23%;
			font-weight: bold;
			color:#dc2878;
			background-color:white;
			border-color:white;
		}
		.feedback-btn:hover
		{
			color:white;
			background-color:#dc2878;
 			border-color:#dc2878;

		}
		.radio-btn input
		{
			font-size:0.8em;
			font-weight: normal;
			margin-right:15px;
			width: 20px;
			height: 20px;
			
		}
		.footer-distributed
		{
			margin-top:0px;
		}
	</style>
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>			
			</button>
			<a class="navbar-brand" href="index.html"><img src="img/logo.png" class="web_logo" alt="web_logo"></a>
		</div>
		<div class="collapse navbar-collapse navbar-right" id="myNavbar">
			<ul class="nav navbar-nav">
				<li><a class="nav-link" href="index.html">Home</a></li>
				<li class="dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Pages<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a target="_blank" href="top_charts.html">Charts-Hot 50</a></li>
						<li><a target="_blank" href="new_releases.html">New Releases</a></li>
						<li><a target="_blank" href="songs_by_artists.html">Songs and Albums By Artists</a></li>
						<li><a target="_blank" href="top_albums.html">Top Albums</a></li>
					</ul>
				</li>
				<li><a class="nav-link" href="#footer">About me</a></li>
				<li class="active"><a class="nav-link" href="Feedback_form.php">Feedback Form</a></li>	
				<li><a class="nav-link" href="search_song.html"><i class="glyphicon glyphicon-search"></i></a></li>	
			</ul>     			
    		
		</div>
	</div>	
</nav>


	<div class="feedback-heading container-fluid">
	<h1 class="wow slideInRight">Feedback Form</h1>
	<div class="feedback-content container">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="row">
		<div class="col-lg-2">Name:</div><div class="col-lg-8"><input class="in-field" type="text" name="name" maxlength="15" value="<?php echo $name;?>">
		<span class="error">* <?php echo $nameErr;?></span>
		</div>
		</div>
		<br><br>
		<div class="row">
		<div class="col-lg-2">email: </div><div class="col-lg-8"><input class="in-field" type="text" name="email" maxlength="30" value="<?php echo $email;?>">
		<span class="error">* <?php echo $emailErr;?></span>
		</div>
		</div>
		<br><br>
		<div class="row">
		<div class="col-lg-2">subject:</div><div class="col-lg-8"> <input class="in-field" type="text" name="subject" maxlength="15" value="<?php echo $subject;?>">
			<span class="error">* <?php echo $subjectErr;?></span>
		</div>
		</div>
		<br><br>
		<div class="row">
		<div class="col-lg-2">Comment:</div><div class="col-lg-8"><textarea name="comment" rows="5" cols="38" maxlength="100"><?php echo $comment;?></textarea>
			<span class="error">* <?php echo $commentErr;?></span>
		</div>
		</div>	
		<br><br>
		<div class="row">
		<div class="col-lg-2">Rate:</div>
		<div class="radio-btn col-lg-8">
			<input type="radio" name="rate" <?php if (isset($rate) && $rate=="excellent") echo "checked";?> value="excellent">Excellent
 		 	<input type="radio" name="rate" <?php if (isset($rate) && $rate=="good") echo "checked";?> value="good">Good
  			<input type="radio" name="rate" <?php if (isset($rate) && $rate=="average") echo "checked";?> value="average">Average
  			<input type="radio" name="rate" <?php if (isset($rate) && $rate=="poor") echo "checked";?> value="poor">Poor
		</div>
		</div>
		<br><br>
		<button class="feedback-btn btn btn-outline-light" type="submit" name="submit">Submit</button>
		<input class="feedback-btn btn btn-outline-light" type="reset" name="reset" value="Reset">

	</form>
</div>
</div>


<!-- Footerr about-->

<footer id="footer" class="footer-distributed">
			<div class="footer-left">
				<a href="index.html"><img src="img/logo.png" class="web_logo" alt="web_logo"></a>
			</div>
			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Hashimabad Society, Makli</span>Sindh, Pakistan</p>
				</div>
				<div>
					<i class="fa fa-phone"></i>
					<p>+9 230 82049263</p>
				</div>
				<div class="email">
					<i class="fa fa-envelope"></i>
					<p >aqsamustafa111@gmail.com</p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-website-about">
					<span>About the website</span>
					This website is a end semester project of web engineering course in the fourth semester of bachelors of science in computer science.
				</p>
			<div class="footer-icons">
					<a target="_blank" href="https://www.facebook.com/aqsa.mustafa.1"><i class="fa fa-facebook"></i></a>
					<a target="_blank" href="https://twitter.com/aqsaaa111"><i class="fa fa-twitter"></i></a>
					<a target="_blank" href="https://www.instagram.com/aqsa.mustafa1/"><i class="fa fa-instagram"></i></a>
				</div>
			</div>
		</footer>





<script type="text/javascript">
	$(document).ready()
	{
		$(document).ready(function(){
		$("input").keyup(function(){
		var length=$(this).attr('maxlength');
		var a = $(this).val().length;
		if(a >= length){
		alert("Not more than "+length+" characters");
}
})
})
}
</script>
<script>

new WOW().init();

</script>
</body>
</html>