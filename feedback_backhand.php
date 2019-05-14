
<?php
// define variables and set to empty values
$nameErr = $emailErr = $subjectErr = $rateErr= $commentErr = "";
$name = $email = $subject = $comment=$rate = "";
$response="";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
 	$response="";
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
      $name="";
    }
  }


  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
      $email = "";
    }
  }

  if (empty($_POST["subject"])) {
    $subjectErr = "Subject is required";
  } else {
    $subject = test_input($_POST["subject"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$subject)) {
      $subjectErr = "Only letters and white space allowed"; 
      $subject= "";
    }
  }
  if (empty($_POST["comment"])) {
    $commentErr = "Comment is required";
  } else {
    $comment = test_input($_POST["comment"]);
  }
  if (empty($_POST["rate"])) {
    $rateErr = "rating is required";
  } else {
    $rate = test_input($_POST["rate"]);
  }

if($name!=""&&$email!=""&&$subject!=""&&$comment!=""&&$rate!="")
{

	$myfile=fopen("example.txt","a");
	$feedback=$name.' '.$email.' '.$subject.' '.$comment.' '.$rate."\r\n";
	fwrite($myfile,$feedback);
	fclose($myfile);
/*
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $subject;
echo "<br>";
echo $comment;
echo "<br>";
*/
$name = $email = $subject = $comment = $rate="";
}
 
}

