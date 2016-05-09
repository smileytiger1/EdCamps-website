<?php 																	//access vars by name attribute (PHP) and id (JS)
$fullname = $_POST['fullname'];
$date   = $_POST['datepicker'];
$parentnames = $_POST['parentnames'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$grade = $_POST['grade'];
$school = $_POST['school'];
$accomodations = $_POST['accomodations'];
if($accomodations == "") {
	$accomodations = "none";
}
$location = $_POST['location'];
$duration = $_POST['duration'];
$cardType = $_POST['cardType'];
$cardName = $_POST['cardName'];
$cardNum = $_POST['cardNum'];
$expirDate = $_POST['expirDate'];
$secCode = $_POST['secCode'];
//ini_set('display_errors', 1);

function calcCost(){
	$totalCost = 0;
	$discount = 0; 
	global $email;
	global $phone; 
	global $duration; 

ini_set('display_errors','On'); 
error_reporting(E_ALL);
$db_host = "dbserver.engr.scu.edu";
$db_user = "esmith";
$db_pass = "00001045653";
$db_name = "sdb_esmith";
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
// Check connection

$userId = "SELECT PhoneNum FROM Registration WHERE email= '$_POST[email]'"; 
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $result = mysqli_query($con, $userId);
  if(mysqli_num_rows($result)==0){
	$con->query("INSERT INTO Registration VALUES('$_POST[email]', '$_POST[phone]', '$_POST[location]')");
    $discount = 0;
    echo "Welcome, new user! <br/> Total cost is: ";
  }
  else{
  	$discount = (600*$duration)*.1; 
  	echo "Welcome back, returning customer! <br/> Total cost is: ";
  }
	mysqli_close($con); 
	$totalCost = (600*$duration) - $discount; 
	return $totalCost; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="utf-8" />
<title>Confirmation page</title>
<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

</head>
<body>
	<strong> Thank you for your business!  Here is a confirmation of your purchase: </strong> <br /><br />
	Applicant's (child's) full name: <em> <?php echo $fullname; ?><br /> </em>
	Date of birth: <em><?php echo $date; ?><br /></em>
	Name(s) of parent(s): <em><?php echo $parentnames; ?><br /></em>
	Parent's contact email: <em><?php echo $email; ?><br /></em>
	Parent's contact phone: <em><?php echo $phone; ?><br /></em>
	Grade level: <em><?php echo $grade; ?><br /></em>
	School: <em><?php echo $school; ?><br /></em>
	Special accomodations: <em><?php echo $accomodations; ?><br /></em>
	Camp duration: <em><?php echo $duration . " weeks"; ?><br /> <br/></em>
	
	<strong> Payment information:</strong> <br>
	Card type: <em> <?php echo $cardType; ?><br /> </em>
	Name (as appearing on card): <em> <?php echo $cardName; ?><br /> </em>
	Card number: <em> <?php echo ("**** **** **** " . substr($cardNum, 12,16)); ?><br /> </em>
	Expiration Date: <em> <?php echo $expirDate; ?><br /> </em>
	Security Code: <em> *** </em><br/> <br/>

	<strong> <em><?php echo "$" . (calcCost()); ?><br /> <br /></em> </strong>
	<footer>
        <div class="container text-center">
            <p>Copyright &copy; 2016 EdCamps, Inc.</p>
        </div>
    </footer>
</body>
</html>

