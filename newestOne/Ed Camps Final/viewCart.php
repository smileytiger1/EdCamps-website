<?php 
session_start();	// Start the session before you write your HTML page

?>
<?php 
    include ("inventory.php"); 
 ?>
<?php 
// This function displays the contents of the shopping cart 
function show_cart() {
	global $widgets;
    if (isset($_SESSION['cart'])){
		echo "Your Shopping Cart has the following items so far:<br/>"; 
		$mycart = $_SESSION['cart'];
		foreach ($mycart as $key => $value){
		if ($value >0)
		    // get the full widget name from the widgets array;
			$fullname = $widgets[$key];
			print("$fullname = $value"."<a href="."viewCart.php?drop=$key".
			">    Remove</a><br/>");
		}
	}
	else {
		echo "No items in the cart";
	
	}
}
// This function removes an item from the shopping cart
function drop() {

	 if (isset($_GET['drop'])){
	 	$dropItemId = $_GET['drop'];	 		 		
		if (isset($_SESSION['cart'])){
			$mycart = $_SESSION['cart'];
			if($mycart[$dropItemId] > 1)
				$mycart[$dropItemId]-=1;
			else
				unset ($mycart[$dropItemId]);			
			$_SESSION['cart'] = $mycart; 
		} 
	}  
} 
// Adds an item to the shopping cart
function addToCart(){
	// Access the global array
	global $widgets;
	
	
	// Get the item id to add - this is the string sent with the 
	// selection when the user clicked a link
	
	$addItemId = $_GET['add'];
		 		 		
	if (isset($_SESSION['cart'])){
		$mycart = $_SESSION['cart'];
		
		// if the item already exists, increment the count
		if (isset($mycart[$addItemId])){
			$mycart[$addItemId]+=1;									
		} 
		// if the item does not exist, add it to the cart
		else{
			$mycart[$addItemId] = 1;
		}		
	}
	else{
		// cart does not exist, create one
		$mycart = array();
		$mycart[$addItemId] = 1;
	}
    $_SESSION['cart'] = $mycart; 
	echo "$widgets[$addItemId] added to cart <br/>";  
}
function clearCart(){
	if (isset($_GET['clear'])){
	 	if (isset($_SESSION['cart'])){
			unset($_SESSION['cart']); 
	  	}
		echo "Shopping Cart Cleared ";
	} 
}
function checkout()
{
	if(isset($_SESSION['cart']))
	{
		global $widgets;
		global $prices;
		$totalprice = 0;

		$mycart = $_SESSION['cart'];
		foreach($mycart as $item => $quant)
		{
			$fullname = $widgets[$item];
			$cost = $prices[$item]*$quant;
			$totalprice += $cost;
			echo "$quant $fullname for " . '$' . "$cost <br/>";
		}	
		echo "<br/> Total: ".'$'."$totalprice";
	}
	else
	{
		echo "Your cart is empty.";
	}
    
	session_destroy();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
<head><title>ViewCart</title>
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
	// if user has chosen "add"
	if ( isset($_GET['add'])) { 
		addToCart();
		unset($_GET['add']);
	}
	// if user has chosen "show cart"	
	elseif (isset($_GET['show'])){ 
       		
		show_cart();
		unset($_GET['show']);	
	}
	// if user has chosen "clear cart"	
	elseif (isset($_GET['clear'])){ 
		clearCart();
		unset($_GET['clear']);	
	}
	// if user has chosen "remove item from cart"		
	elseif (isset($_GET['drop'])){ 
		drop();
		unset($_GET['drop']);	
	}// if user has chosen "remove item from cart"		
	elseif (isset($_GET['checkout'])){ 
		checkout();
		unset($_GET['checkout']);	
	}	   	
?>
<p> 
    <a href="catalog.php?">Back to the Catalog</a> 
</p> 
<footer>
        <div class="container text-center">
            <p>Copyright &copy; 2016 EdCamps, Inc.</p>
        </div>
    </footer>
 </body>
</html>
