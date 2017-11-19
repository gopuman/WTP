<html>
	<head>
		<title>CARS4SALE:The best place to rent or buy cars!</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			#belly {
    			background-color: #4CAF50;
    			color: white;
    			padding: 14px 20px;
    			margin: 8px 26px;
    			border: none;
    			cursor: pointer;
    			width: 90%;
				font-size:20px;
			}
			#belly:hover {
    			opacity: 0.8;
			}

			input[type=text], input[type=password] {
   				 width: 90%;
   				 padding: 12px 20px;
   				 margin: 8px 26px;
   				 display: inline-block;
   				 border: 1px solid #ccc;
   				 box-sizing: border-box;
				 font-size:16px;
			}

			.imgcontainer {
    			text-align: center;
    			margin: 24px 0 12px 0;
    			position: relative;
			}
			.avatar {
    			width: 200px;
				height:200px;
    			border-radius: 50%;
			}

			.modal {
				display:none;
    			position: fixed;
    			z-index: 1;
    			left: 0;
    			top: 0;
    			width: 100%;
    			height: 100%;
    			overflow: auto;
  			 	background-color: rgba(0,0,0,0.4);
			}

			.modal-content {
				    background-color: #fefefe;
					filter: drop-shadow(8px 8px 10px black);
    				margin: 4% auto 15% auto;
    				border: 1px solid #888;
    				width: 30%; 
					padding-bottom: 30px;
			}

			.close {
    			position: absolute;
    			right: 25px;
    			top: 0;
   			 	color: #000;
    			font-size: 35px;
    			font-weight: bold;	
			}
			.close:hover,.close:focus {
    				color: red;
    			cursor: pointer;
			}

			.animate {
				animation: zoom 0.6s
			}
			@keyframes zoom {
    			from {transform: scale(0)} 
    			to {transform: scale(1)}
				}
			}
		</style>
	</head>
	<body>
	<link rel = "stylesheet" type = "text/css" href = "homepage.css">
	<center>
		<div class = "image">
			<div id = "navbar">
			<img class ="logo-img" src = "logo.png">
			<a id = "linkref" href = "">Home</a>
			<a id = "linkref" href = "">Tariffs</a>
			<a id = "linkref" href = "">Buy</a>
			<a id = "linkref" href = "">Rent</a>
			<a id = "linkref" href = "">Sell</a>
			<a id = "linkref" href = "Aboutus.html">About Us</a>
			<a onclick = "document.getElementById('modal-wrapper').style.display='block'" id = "linkref1">Login</a>
		</div>
	</center>

	<div id="modal-wrapper" class="modal">
			
			<form class="modal-content animate" action="validate_login.php" method = "post">
				  
			  <div class="imgcontainer">
				<span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
				<img src="xyz.png" alt="Avatar" class="avatar">
				<h1 style="text-align:center">Login Here</h1>
			  </div>
		  
			  <div class="container">
				<input type="text" placeholder="Enter Username" name="userName">
				<input type="password" placeholder="Enter Password" name="pass">        
				<button type="submit" id = "belly">Login</button>
				<input type="checkbox" style="margin:26px 30px;"> Remember me      
				<a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot Password ?</a>
			  </div>
			  
			</form>
			
		  </div>

	<img src = "ezgif.com-gif-maker.gif" width = 100%>
	<p id = "privacy"><a href = "privacy_policy.html" target = "_blank"><b>Privacy Policy</b></a></p>
	<div class = "btn">
		<a href = "Register.html"><input class = "button" type = "button"  value = "Begin Your Journey. Sign up now"></input></a>
		<p class = "txt">Have an existing account? <a href  = "login_page.html" id = "link">Login</a> here</p>
	</div>
	
	<div id = "wrapper">
		<h1 style="font-family:AR Destine Medium;color:#778899">A CAR FOR EVERY NEED</h1>
		<p style="padding:0;font-family:calibri;">We have a range of cars, so something will perfectly fit your trip</p>
		<div id = "box1">
			<a href = ""><img id = "a" src = "sedan.jpg"/></a>
			<p style="font-size:30px;font-family:Copperplate Gothic;"><b>SEDAN</b></p>
			<p>Price starting at ₹95 per hr(Fuel Free)</p>
			<p>Cars Available: HONDA CITY, HONDA AMAZE, HONDA CIVIC, 	MARUTI CIAZ, FORD FIESTA, FORD ASPIRE</p>
		</div>
		<div id = "box2">
			<a href = "hatchback_cars.html"><img id = "a" src = "hatchback.jpg"/></a>
			<p style="font-size:30px;font-family:Copperplate Gothic;"><b>HATCHBACK</b></p>
			<p>Price starting at ₹70 per hr(Fuel Free)</p>
			<p>Cars Available: FORD FIGO, MARUTI SWIFT, BALENO, MAHINDRA KUV 100</p>
		</div>
		<div id = "box3">
			<a href = ""><img id = "a" src = "suv.jpg"/></a>
			<p style="font-size:30px;font-family:Copperplate Gothic;"><b>SUV</b></p>
			<p>Price starting at ₹100 per hr(Fuel Free)</p>
			<p>Cars Available: MAHINDRA XUV, MAHINDRA SCORPIO, FORD ECOSPORT, FORD ENDEAVOUR, HYUNDAI CRETA</p>
		</div>
		<div id = "box4">
			<a href = ""><img id = "c" src = "4.jpg"/></a>
			<p style="font-size:30px;font-family:Copperplate Gothic;"><b>GRANDE</b></p>
			<p>Price starting at ₹240 per hr (Fuel free)</p>
			<p>Cars Available: MERCEDES GLA, AUDI Q3</p>
		</div>
	</div>
	<script>
		var modal = document.getElementById('modal-wrapper');
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
    </script>
</body>
</html>