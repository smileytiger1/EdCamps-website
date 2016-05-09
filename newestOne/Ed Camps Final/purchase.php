<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet"> 

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"> 
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script type = "text/javascript">
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  //duration-price calculation 
  function genPrice(duration) {
      totalCost = 600*duration;
      document.getElementById("totalCost").innerHTML = "The total cost of the camp will be $" + totalCost + ".";
      document.getElementById("totalCost").style.visibility = "visible";  
  }

  function validateForm() {


	//email check      USE TO CHECK IF PARENT IS RETURNING CUSTOMER AND IF SO, 10% DISCOUNT??
	var email = document.getElementById("email").value; 
  	if(email == ""){ //check 1: field filled in 
  		alert ("Please enter email.");
  		email.focus();   
  		return false;
  	}
  	var formatPattern = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;  //check 2: field syntactically correct
		if (email.match(formatPattern)){
			//alert ("Format  OK"); 
			//return true;
		}
		else {
			alert ("Invalid email format.  Re-enter correctly.");
			email.focus();            
			return false;  
		}


    
    //card num check
    var cardNum = document.getElementById("cardNum").value; 
    if(cardNum == ""){ //check 1: field filled in 
      alert ("Please enter card number.");
      cardNum.focus();   
      return false;
    }
    var formatPattern = /^\d{16}$/;  //check 2: field syntactically correct
    if (cardNum.match(formatPattern)){
      //alert ("Format  OK"); 
      //return true;
    }
    else {
      alert ("Invalid card number format.  Re-enter correctly.");
      cardNum.focus();            
      return false;  
    }
    //expiration date check
    var expirDate = document.getElementById("expirDate").value; 
    if(expirDate == ""){ //check 1: field filled in 
      alert ("Please enter card expiration date.");
      expirDate.focus();   
      return false;
    }
    var formatPattern = /^(1[0-2]|0[1-9]|\d)\/(20\d{2}|19\d{2}|0(?!0)\d|[1-9]\d)$/;  //check 2: field syntactically correct
    if (expirDate.match(formatPattern)){
      //alert ("Format  OK"); 
      //return true;
    }
    else {
      alert ("Invalid card expiration date format.  Re-enter correctly.");
      expirDate.focus();            
      return false;  
    }
    //security code check
    var secCode = document.getElementById("secCode").value; 
    if(secCode == ""){ //check 1: field filled in 
      alert ("Please enter card security code.");
      secCode.focus();   
      return false;
    }
    var formatPattern = /^[0-9]{3,4}$/;  //check 2: field syntactically correct
    if (secCode.match(formatPattern)){
      //alert ("Format  OK"); 
      //return true;
    }
    else {
      alert ("Invalid card security code format.  Re-enter correctly.");
      secCode.focus();            
      return false;  
    }
//card name check
    var cardName = document.getElementById("cardName").value; 
    if(cardName == ""){ //check 1: field filled in 
      alert ("Please enter the name that appears on your card.");
      cardName.focus();   
      return false;
    }
	else{	
  		sendForm();
  	}
  }
  function sendForm(){
  	//alert("hey you");
  	document.regForm.submit(); 
  }
  </script>
  <style>
  	#specialAccoms{
  		width: 325px; 
  		height: 100px; 
  		padding-top: 0;
      padding-left: 0;
  	}
    #totalCost{
      visibility: visible;
      color:red; 
    }
    #submitBtn:hover{
      background:#1d9b6c;
    }
    input{
      color:black;
    }
  </style>
</head>
<body>

<form name="regForm" align="center" method="post" action="showtransaction.php?checkout">
  <strong>Email:</strong><br>
  <input type="text" name="email" id="email" autocomplete="off">
  <br> <br>


  <div>
  <strong>Secure payment information:</strong><br>
  <em> Card type: </em><br>
  <input type="radio" name="cardType" value="Visa, MasterCard, AMEX, or Discover" checked> <img src="othercards.jpg" width="150px"> <br>
  <input type="radio" name="cardType" value="PayPal"> <img src="pp.jpg" width="40px"> <br><br>
  <em>Name (as it appears on your card): </em><input type="text" name="cardName" id="cardName" autocomplete="off"><br><br>
  <em>Card number (no dashes or spaces): </em><input type="password" name="cardNum" id="cardNum" autocomplete="off">
  <em>Expires (mm/yyyy): </em><input type="text" name="expirDate" id="expirDate" autocomplete="off">
  <em>Security code: </em><input type="password" name="secCode" id="secCode" style="width:50px" autocomplete="off"><br><br>
</div>

  <input id="submitBtn" type="button" name="submitBtn" value="Submit" onclick="validateForm()" style="color:black">
</form>
<footer>
        <div class="container text-center">
            <p>Copyright &copy; 2016 EdCamps, Inc.</p>
        </div>
    </footer>
</body>
</html>
