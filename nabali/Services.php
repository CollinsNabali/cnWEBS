<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>cnDesigners | Services</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1><span class="highlight">cnDesigners</span> &Developers</h1>
			</div>
			<nav>
				
					<li><a href="index.php">Home</a></li>
					<li><a href="About.php">About</a></li>
					<li class="current"><a href="Services.php">Services</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
			</nav>
			
		</div>
	</header>
 	
	<section id="newsletter">
		<div class="container">
			<h1>Subscribe for Bonus Updates</h1>
			<form action="subs.php" method="POST">
				<input type="email" name="email" placeholder="Enter Email...">
				<button type="submit" class="button_1">Subscribe</button>
			</form>
		</div>
	</section>

	<section id="main">
		<div class="container">
		  <article id="main-col">
		  	<h1 id="page-title">Services</h1>
		  	<ul id="services">
		  		<li>
		  			<h3>Website Design & Development</h3>
		  			<p>We design and develop proffesional websites for our customers. We also develop Programs to suit your needs, like management systems for schools,hospitals etc. </p>
<p>The prices vary depending how heavy the system and websites are.</p>
		  		</li>
		  		<li>
		  			<h3>Photography</h3>
		  			<p>We also offer photograph services in areas around Nairobi</p>
<p>Our prices are negotiable</p>
		  		</li>
		  		<li>
		  			<h3>Arts</h3>
		  			<p>We offer drawing services at affordable prices.For Customers outside Nairobi You will have to incur extra charges for deliveries depending on the methods you will want us to send you the drawing.</p>
<!--<p>Pricing: $25 per month</p>-->
		  		</li>
		  	</ul>
		  	
		  </article>
		  <aside id="sidebar">
		  	<div class="dark">
		  	<h3>Send us a Message</h3>
		  	<form class="Quote" action="msg.php" method="POST">
		  		<div>
		  			<label>Name</label><br>
		  			<input type="text" name="name" placeholder="Name" required="">
		  		</div>
		  		<div>
		  			<label>Email</label><br>
		  			<input type="text" name="email" placeholder="Email" required=""> 
		  		</div>
		  		<div>
		  			<label>Subject</label><br>
		  			<input type="text" name="subject" placeholder="Subject" required=""> 
		  		</div>
		  		<div>
		  			<label>Message</label><br>
		  			<textarea name="message" placeholder="Message" required=""></textarea>
		  		</div>
		  	 	<button class="button_1" type="Submit">Send</button>
		  	
		  	</form>

</div>
		  </aside>
	    </div>
	</section>
        
</body>
  <footer>
  	<p>cnWeb Design, copyright &copy; 2020</p>
  </footer>
</html> 
