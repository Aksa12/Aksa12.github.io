<!DOCTYPE html>
<html>
<head>
	<title>Feedback form</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<?php include('feedback_backhand.php'); ?>
	<style type="text/css">
		.feedback-heading
		{
			background-image: url("bg10.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			height: 100%;
			color:white;
			
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
		.radio-btn input:hover
		{
			background-color: #dc2878
		}
	</style>
</head>
<body>
	<div class="feedback-heading container-fluid">
	<h1>Feedback Form</h1>
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
</body>
</html>