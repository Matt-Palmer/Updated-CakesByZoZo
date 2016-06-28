<?php
	include 'php/form.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>Get In Touch</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/getintouch.css">
</head>

<body>
	<header>
		<div class="header-wrapper">
			<p class="page-heading">Cakes By ZoZo</p>
		</div>

		<nav class="top-nav">
			<div class="header-wrapper">
				<ul class="top-nav-list">
					<li><a href="index.html">Home</a><!--missing to closing tag removes the unwanted space to the right of the list item-->
					<li><a href="MyCakes.html">My Cakes</a>
					<li><a href="GetInTouch.php">Get In Touch</a>
					<li><a href="AboutMe.html">About Me</a>
				</ul>
			</div>
		</nav>
	</header>
	
	<div class="banner">
	</div>

	<div class="main-body-wrapper">

		<nav class="side-nav">
			<ul class="side-nav-list">
				<li><a href="index.html">Home</a></li>
				<li><a href="MyCakes.html">My Cakes</a>
				<li><a href="GetInTouch.php">Get In Touch</a>
				<li><a href="AboutMe.html">About Me</a>
			</ul>
		</nav>

		<div class="content-wrapper">
			<h1>Get in touch</h1>


			<div class="row">

				<p class="center text-center">Please use the form below to give me an idea of what cake you’d like.</p>
                 
				<div class="form-container clearfix">

                    <?php echo $result; ?>
                    
                    <p class="required-heading">*Required</p>
                    
                    <br>
                    <br>
                    
                    <form name="enquiry-form" method="post">
                    	<div class="form-left">
                    		
                    		<p class="form-headings"><span>*</span>Name:</p>
	                        <input type="text" id="required" name="name" class="input-fields" placeholder="Enter your full name" value="<?php echo $_POST['name']; ?>">

	                        <p class="form-headings"><span>*</span>Email:</p>
	                        <input type="email" id="required" name="email" class="input-fields" placeholder="Enter your email" value="<?php echo $_POST['email']; ?>">

	                        <p class="form-headings"><span>*</span>Requested Date:</p>
	                        <input type="date" id="required" name="request-date" class="input-fields" value="<?php echo $_POST['request-date']; ?>">

	                        <p id="occasion-heading" class="form-headings">Whats the occasion?</p>
	                        <select id="occasion" class="selection-field" name="occasion">

	                            <option></option>
	                            <option value="Birthday" <?php if ($_POST['occasion'] == "Birthday") echo 'selected="selected" '; ?>>Birthday</option>
	                            <option value="Wedding" <?php if ($_POST['occasion'] == "Wedding") echo 'selected="selected" '; ?>>Wedding</option>
	                            <option value="Christening" <?php if ($_POST['occasion'] == "Christening") echo 'selected="selected" '; ?>>Christening</option>
	                            <option value="Holy Communion" <?php if ($_POST['occasion'] == "Holy Communion") echo 'selected="selected" '; ?>>Holy Communion</option>
	                            <option value="Other" <?php if ($_POST['occasion'] == "Other") echo 'selected="selected" '; ?>>Other</option>
	                        </select>

	                        <p class="form-headings">If 'other' please specify:</p>
	                        <input id="other-input-field" type="text" name="specify-other" class="input-fields" value="<?php echo $_POST['specify-other']; ?>"></input>

                    	</div>

                    	<div class="form-right">
                    		
                    		<p class="form-headings">Cake Size:</p>
	                        <select id="size" class="selection-field" name="cake-size">
	                            <option></option>
	                            <option value="6" <?php if ($_POST['cake-size'] == "6") echo 'selected="selected" '; ?>>6</option>
	                            <option value="8" <?php if ($_POST['cake-size'] == "8") echo 'selected="selected" '; ?>>8</option>
	                            <option value="10" <?php if ($_POST['cake-size'] == "10") echo 'selected="selected" '; ?>>10</option>
	                            <option value="12" <?php if ($_POST['cake-size'] == "12") echo 'selected="selected" '; ?>>12</option>
	                            <option value="cupcakes" <?php if ($_POST['cake-size'] == "cupcakes") echo 'selected="selected" '; ?>>Cupcakes</option>
	                            <option value="single-number" <?php if ($_POST['cake-size'] == "single-number") echo 'selected="selected" '; ?>>Single number</option>
	                            <option value="double-number" <?php if ($_POST['cake-size'] == "double-number") echo 'selected="selected" '; ?>>Double number</option>
	                        </select>

	                        <p id="cupcake-heading" class="form-headings">No Cupcakes:</p>
	                        <select id="no-cupcakes" class="selection-field" name="no-cupcakes">
	                            <option></option>
	                            <option value="6" <?php if ($_POST['no-cupcakes'] == "6") echo 'selected="selected" '; ?>>6</option>
	                            <option value="8" <?php if ($_POST['no-cupcakes'] == "8") echo 'selected="selected" '; ?>>8</option>
	                            <option value="10" <?php if ($_POST['no-cupcakes'] == "10") echo 'selected="selected" '; ?>>10</option>
	                            <option value="12" <?php if ($_POST['no-cupcakes'] == "12") echo 'selected="selected" '; ?>>12</option>
	                        </select>

	                        <p id="single-number-selection-heading" class="form-headings">Select Number</p>

	                        <select id="single-number-option" class="selection-field single-number-options" name="single-number-option">
	                            <option></option>
	                            <option value="0" <?php if ($_POST['single-number-option'] == "0") echo 'selected="selected" '; ?>>0</option>
	                            <option value="1" <?php if ($_POST['single-number-option'] == "1") echo 'selected="selected" '; ?>>1</option>
	                            <option value="2" <?php if ($_POST['single-number-option'] == "2") echo 'selected="selected" '; ?>>2</option>
	                            <option value="3" <?php if ($_POST['single-number-option'] == "3") echo 'selected="selected" '; ?>>3</option>
	                            <option value="4" <?php if ($_POST['single-number-option'] == "4") echo 'selected="selected" '; ?>>4</option>
	                            <option value="5" <?php if ($_POST['single-number-option'] == "5") echo 'selected="selected" '; ?>>5</option>
	                            <option value="6" <?php if ($_POST['single-number-option'] == "6") echo 'selected="selected" '; ?>>6</option>
	                            <option value="7" <?php if ($_POST['single-number-option'] == "7") echo 'selected="selected" '; ?>>7</option>
	                            <option value="8" <?php if ($_POST['single-number-option'] == "8") echo 'selected="selected" '; ?>>8</option>
	                            <option value="9" <?php if ($_POST['single-number-option'] == "9") echo 'selected="selected" '; ?>>9</option>
	                        </select>

	                        <p id="double-number-selection-heading" class="form-headings">Select Numbers:</p>

	                        <select id="double-number-option-one" class="selection-field double-number-options" name="double-number-option-one">
	                            <option></option>
	                            <option value="0" <?php if ($_POST['double-number-option-one'] == "0") echo 'selected="selected" '; ?>>0</option>
	                            <option value="1" <?php if ($_POST['double-number-option-one'] == "1") echo 'selected="selected" '; ?>>1</option>
	                            <option value="2" <?php if ($_POST['double-number-option-one'] == "2") echo 'selected="selected" '; ?>>2</option>
	                            <option value="3" <?php if ($_POST['double-number-option-one'] == "3") echo 'selected="selected" '; ?>>3</option>
	                            <option value="4" <?php if ($_POST['double-number-option-one'] == "4") echo 'selected="selected" '; ?>>4</option>
	                            <option value="5" <?php if ($_POST['double-number-option-one'] == "5") echo 'selected="selected" '; ?>>5</option>
	                            <option value="6" <?php if ($_POST['double-number-option-one'] == "6") echo 'selected="selected" '; ?>>6</option>
	                            <option value="7" <?php if ($_POST['double-number-option-one'] == "7") echo 'selected="selected" '; ?>>7</option>
	                            <option value="8" <?php if ($_POST['double-number-option-one'] == "8") echo 'selected="selected" '; ?>>8</option>
	                            <option value="9" <?php if ($_POST['double-number-option-one'] == "9") echo 'selected="selected" '; ?>>9</option>
	                        </select>

	                        <select id="double-number-option-two" class="selection-field double-number-options" name="double-number-option-two">
	                            <option></option>
	                            <option value="0" <?php if ($_POST['double-number-option-two'] == "0") echo 'selected="selected" '; ?>>0</option>
	                            <option value="1" <?php if ($_POST['double-number-option-two'] == "1") echo 'selected="selected" '; ?>>1</option>
	                            <option value="2" <?php if ($_POST['double-number-option-two'] == "2") echo 'selected="selected" '; ?>>2</option>
	                            <option value="3" <?php if ($_POST['double-number-option-two'] == "3") echo 'selected="selected" '; ?>>3</option>
	                            <option value="4" <?php if ($_POST['double-number-option-two'] == "4") echo 'selected="selected" '; ?>>4</option>
	                            <option value="5" <?php if ($_POST['double-number-option-two'] == "5") echo 'selected="selected" '; ?>>5</option>
	                            <option value="6" <?php if ($_POST['double-number-option-two'] == "6") echo 'selected="selected" '; ?>>6</option>
	                            <option value="7" <?php if ($_POST['double-number-option-two'] == "7") echo 'selected="selected" '; ?>>7</option>
	                            <option value="8" <?php if ($_POST['double-number-option-two'] == "8") echo 'selected="selected" '; ?>>8</option>
	                            <option value="9" <?php if ($_POST['double-number-option-two'] == "9") echo 'selected="selected" '; ?>>9</option>
	                        </select>


	                        <p class="form-headings">Sponge Flavour:</p>
	                        <select id="sponge" class="selection-field" name="cake-flavour">
	                            <option></option>
	                            <option value="Vanilla" <?php if ($_POST['cake-flavour'] == "Vanilla") echo 'selected="selected" '; ?>>Vanilla</option>
	                            <option value="Chocolate" <?php if ($_POST['cake-flavour'] == "Chocolate") echo 'selected="selected" '; ?>>Chocolate</option>
	                            <option value="Lemon" <?php if ($_POST['cake-flavour'] == "Lemon") echo 'selected="selected" '; ?>>Lemon</option>
	                        </select>

	                        <p class="form-headings"><span>*</span>Message:</p>
	                        <textarea id="message" name="message" class="text-area input-fields" placeholder="Enter your message"><?php echo htmlspecialchars($_POST['message']);?></textarea>

	                        

                    	</div>
                        
                        <div class="btn-container">
                        	
                        	<input id="submit-btn" class="btn" type="submit" name="submit" value="Submit">

                        </div>

                        

                    </form>


                </div>
			</div>
						
		</div>
		
	</div>

	<footer>
		<section class="footer-wrapper">
			<div class="footer-nav">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="MyCakes.html">My Cakes</a></li>
					<li><a href="GetInTouch.php">Get In Touch</a></li>
					<li><a href="AboutMe.html">About Me</a></li>
				</ul>
			</div>
			<div class="footer-nav">
				<ul>
					<li><a href="#">Link One</a></li>
					<li><a href="#">Link Two</a></li>
					<li><a href="#">Link Three</a></li>
					<li><a href="#">Link Four</a></li>
				</ul>
			</div>
			<div class="footer-nav">
				<ul>
					<li><a href="#">Link One</a></li>
					<li><a href="#">Link Two</a></li>
					<li><a href="#">Link Three</a></li>
					<li><a href="#">Link Four</a></li>
				</ul>
			</div>
			<div class="footer-nav">
				<address>
					<b>Contact Us:</b>

					Main Company
					1 Main Street
					Mainland
					Main
					111 111
				</address>
			</div>
		</section>
	</footer>

	<script src="js/jquery-2.2.0.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/menu.js"></script>
	<script type="text/javascript" src="js/form.js"></script>
</body>

</html>