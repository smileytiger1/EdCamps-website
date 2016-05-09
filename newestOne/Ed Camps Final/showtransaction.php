<?php 
	session_start();// Start the session before you write your HTML page
    	include ("inventory.php"); 
function checkdisc(){
ini_set('display_errors','On');
error_reporting(E_ALL);
$db_host = "dbserver.engr.scu.edu";
$db_user = "esmith";
$db_pass = "00001045653";
$db_name = "sdb_esmith";
global $totalprice;
$discount = 0;

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql="SELECT PhoneNum FROM Registration WHERE email='$_POST[email]'";

  $result = $con->query($sql);
  if (mysqli_num_rows($result) == 0)
  {
    $discount = 0;
  }
  else
  {$discount = (0.15*$totalprice);
	$totalprice = $totalprice - $discount;
	echo "Thanks for shopping with us again!";
  }

}

function checkout()
{
	if(isset($_SESSION['cart']))
	{
		global $widgets;
		global $prices;
		global $totalprice;
		$totalprice = 0;

		$mycart = $_SESSION['cart'];
		foreach($mycart as $item => $quant)
		{
			$fullname = $widgets[$item];
			$cost = $prices[$item]*$quant;
			$totalprice += $cost;
			echo "$quant $fullname for " . '$' . "$cost <br/>";
		}	
		checkdisc();
		$totalprice = number_format((float)$totalprice,2);
		echo "<br/> Total: ".'$'."$totalprice";
	}
	else
	{
		echo "Your cart is empty.";
	}
    
	session_destroy();
}
?>


<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
	<title> Thank You! </title>
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

</head>
<body link="green" vlink="red">
<?php
	if (isset($_GET['checkout'])){ 
		checkout();
		unset($_GET['checkout']);	
	}
?>
<br/>
	<a href="index.html">Return To Home</a>
	<footer>
        <div class="container text-center">
            <p>Copyright &copy; 2016 EdCamps, Inc.</p>
        </div>
    </footer>
</body>
</html>
