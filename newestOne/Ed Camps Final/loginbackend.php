<?php 
	session_start();// Start the session before you write your HTML page
function checkdisc(){
ini_set('display_errors','On');
error_reporting(E_ALL);
$db_host = "dbserver.engr.scu.edu";
$db_user = "esmith";
$db_pass = "00001045653";
$db_name = "sdb_esmith";

$email = $_POST['email'];
$parentstatus = false;

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


else{
  $sql="SELECT Email FROM Registration";

  $result = $con->query($sql);
  while($row = mysqli_fetch_array($result))
  {
	if($row['Email']==$email)
		$parentstatus = true;	
  }
if($parentstatus)
{echo '<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->';
echo'<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top"> 

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
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
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
    </nav> ';
	echo '<svg height="100" width="5"></svg>';
	echo '<h3 style="align:center">Here is your child\'s daily schedule: </h3>';
	echo '<table>
  <tr> <th> Time <th> Activity <th> Location <th>

  <tr> <td> 4:00am - 7:30 am  </td>
       <td>|  Debugging practice </td>
       <td>|  The Computer Gym </td>
       
  </tr>
  <tr> <td> 7:31 am - 7:35 am  </td>
       <td>|  Breakfast </td>
       <td>|  "I\'ll Take a Byte Outta You" Cafe </td>
  </tr>
  <tr> <td> 7:36 am - 10:00 am  </td>
       <td>|  PHP Debugging </td>
       <td>|  Isolation Cells </td>
       
  </tr>
  <tr> <td> 10:15 am - 11:00 am  </td>
       <td>|  Cross Country Practice </td>
       <td>|  Alone in the Forest </td>
  </tr>
  <tr> <td> 11:00 am - 12:00 pm  </td>
       <td>|  Learning About the Animals </td>
       <td>|  404 Meadows </td>
  </tr>
  <tr> <td> 12:00 pm - 12:30 pm  </td>
       <td>|  Eating the Animals </td>
       <td>|  "404 Error: Soul Not Found" Graveyard </td>
  </tr>
  <tr> <td> 12:30 pm - 3:00 pm  </td>
       <td>|  ARM Assembly Debugging </td>
       <td>|  The Computer Track </td>
  </tr>
  <tr> <td> 3:00 pm - 5:00 pm  </td>
       <td>|  REGEX Debugging </td>
       <td>|  [^L] Christmas Conference Room </td>
  </tr>
  <tr> <td> 5:00 pm - 12:00 am  </td>
       <td>|  Debugging Presentations </td>
       <td>|  The Warden\'s Office </td> 

  </tr>
  </table>';
}
else
{
echo '<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->';
echo'<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top"> 

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
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
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
    </nav> ';
	echo '<svg height="100" width="5"></svg>';
	echo'<h5>Your child is not enrolled.</h5>  ';
} 
print("Return to <a href='index.html'> home page. </a>") ;  
echo'</body>';
}
}
checkdisc();
?>

