<?php
	if($_POST['submit']){
                
                if(!$_POST['name']){
                    
                    $error.='<br>Please enter your name'; 
                    
                }
                
                if(!$_POST['email']){
                    
                    $error.='<br>Please enter your email'; 
                    
                }
                
                if(!$_POST['request-date']){
                    
                    $error.='<br>Please enter a date'; 
                    
                }
                
                if(!$_POST['message']){
                    
                    $error.='<br>Please enter a message'; 
                    
                }
                
                if ($error) {

                    $result='<div class="error-container"><strong>There were error(s)
                    in your form:</strong><br>'. $error .'</div>';

	 	         } else {

                    if (mail("zoej311@cakesbyzozo.co.uk", "New Cake Request", 
                             
                            "Name: " . $_POST['name'] . "\r\n" .
                            "Email: " . $_POST['email'] . "\r\n" .
                            "Requested Date: " . $_POST['request-date'] . "\r\n" .
                            "Occasion: " . $_POST['occasion'] . "\r\n" .
                            "Occasion (Other): " . $_POST['specify-other'] . "\r\n" .
                            "Cake-size: " . $_POST['cake-size'] . "\r\n" .
                            "No. Cupcakes: " . $_POST['no-cupcakes'] . "\r\n" .
                            "Single Number: " . $_POST['single-number-option'] . "\r\n" .
                            "Double Number 1: " . $_POST['double-number-option-one'] . "\r\n" .
                            "Double Number 2: " . $_POST['double-number-option-two'] . "\r\n" .
                            "Sponge: " . $_POST['cake-flavour'] . "\r\n" .
                            "Message: " . $_POST['message'])) {

                        $result='<div class="email-confirmation"><strong>Thank
                        you!</strong> I\'ll be in touch.</div>';

                    } else {

                        $result='<div class="error-container">Sorry, there was
                        an error sending your message. Please try again later.</div>';

                    }



                }


            }
?>