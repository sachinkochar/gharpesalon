<!-- Header Include -->
<?php include("inc/header.php"); ?>

<!-- mail -->
	<div class="mail animated wow zoomIn" data-wow-delay=".5s">
		<div class="container">
			<h3 style="color: #f229a1;">Contact Us</h3>
			<p class="est">Get in touch with us at any time</p>
			<div class="mail-grids">
				<div class="col-md-8 mail-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<form action="" method="post" enctype="multipart/form-data" >
						<input type="text" name="name" value="Name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Name';}" required="">
							<input style="margin-top:15px" type="text" name="phone" value="Phone Number" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" name="email" value="Email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email';}" required=""><br />
                        
						<input type="text" name="subject" value="Subject" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Subject';}" required="">
						<textarea type="text" name="message"  onfocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
						<center><input name="submit" type="submit" value="Submit Now" ></center>
					</form>
				</div>
				<div class="col-md-4 mail-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<div class="mail-grid-right1">
						
						<ul class="phone-mail">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Address</li>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone: +1234 567 893</li>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email: <a href="mailto:info@gharpesalon.com">info@gharpesalon.com</a></li>
						</ul>
						<ul class="social-icons">
							<li><a href="#" class="facebook"></a></li>
							
							<li><a href="#" class="instagram"></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
	
		</div>
	</div>
<!-- //mail -->


  <?php
if(isset($_POST["submit"]))
{
    $to = 'gharpesalon@gmail.com';

    $subject = $_POST["subject"];

    $from = $_POST["email"];

     

    // To send HTML mail, the Content-type header must be set

    $headers  = 'MIME-Version: 1.0' . "\r\n";

    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

     

    // Create email headers

    $headers .= 'From: '.$from."\r\n".

        'Reply-To: '.$from."\r\n" .

        'X-Mailer: PHP/' . phpversion();

     

    // Compose a simple HTML email message

    $message = '<html><body>';

    $message .= '<h3 style="color:#555;">From: '.$_POST["name"].'</h3><br>';

    $message .= '<p style="color:#555;font-size:14px;">Query: '.$_POST["message"].'</p>';
     $message .= '<p style="color:#555;font-size:12px;">Contact: '.$_POST["phone"].'</p>';

    $message .= '</body></html>';

     

    // Sending email

    if(mail($to, $subject, $message, $headers)){

       
       
       $to = $_POST['email'];

    $subject = 'Thank you for query us';

    $from = 'gharpesalon@gmail.com';

     

    // To send HTML mail, the Content-type header must be set

    $headers  = 'MIME-Version: 1.0' . "\r\n";

    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

     

    // Create email headers

    $headers .= 'From: '.$from."\r\n".

        'Reply-To: '.$from."\r\n" .

        'X-Mailer: PHP/' . phpversion();

     

    // Compose a simple HTML email message

    $message = '<html><body>';

   

    $message .= '<b><p style="color:#555;font-size:14px;"> Thank you '.$_POST['name'].' for Contacting us regarding "'.$_POST["message"].'" . We will Reply You Back with in 24 Hrs.</p></b>';
    

    $message .= '</body></html>';
       
       mail($to, $subject, $message, $headers);

    } else{

       echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Unable To Send Mail')
    window.location.href='contact.php';
    </SCRIPT>");
    }


}
    ?>

   <!-- Footer Include -->
<?php include("inc/footer.php"); ?>