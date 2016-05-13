<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Card Buggy</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/app.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Cool Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link href='fonts/cards.ttf' rel='stylesheet' type='text/css'>

</head>

<body>
<!-- Modal -->
    <div class="modal-dialog" id="myModal">

	<!-- Modal content-->
	<div class="modal-content">
	<div class="modal-header">
	    <button type="button" class="close" id="closeButton" data-dismiss="modal">&times;</button>
	    <h2 class="modal-title">Email has been sent!</h2>
	</div>
	<div class="modal-body">
	    <p>We'll get back to you as soon as possible</p>
	</div>
	<div class="modal-footer">
	    <button type="button" class="btn btn-default" id="closeButton2"data-dismiss="modal">Close</button>
	</div>
	</div>

    </div>
    <!-- Full Page Background -->
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand navbar-custom-brand subdued" href="index.html">The Card Buggy</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html" class="navbar-custom-link">About</a>
                    </li>
                    <li class = "active-page">
                    <a href="purchase.html" class="navbar-custom-link"> Purchase</a>
                    </li>
                    <li>
                        <a href="contact.html" class="active-page navbar-custom-link">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                <div class="col-sm-5">
                        <div class="contact-forms">
                            <form name="sentMessage" id="contactForm" novalidate method="post" action="contactresponse1.php">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="phone" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <textarea rows="5" class="form-control" name="message" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                                </div>
                            </form>
                        <div id="success"></div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-buy btn-lg">Submit</button>
                            </div>
                        </div>
                </div>
                    <div class="col-sm-5 col-sm-offset-1 contact-information">
                        <div class = "col-sm-12">
                        <h2>Get In <strong>Touch</strong></h2>
                        <p>Give us a call or email us any time of the day and we will be ready to answer your question.</p>
                        <h2>The <strong>Office</strong></h2>
                        <p><strong>Phone:</strong> (734) 953-3718</p>
                        <p><strong>Email:</strong> cbman23@gmail.com</p>

                        </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./content -->
    <!-- /.Full Page Background -->
    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Modal Window -->
    <script src="js/modal-fadein.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

<?php


$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
?>


<?php

//echo $tagstyle.' Tag Style<br>';


echo 'Name: '.$name. " <br>";
echo 'Phone:        '.$phone. " <br>";
echo 'EMAIL:        '.$email. " <br>";
echo 'Message:      '.$message. " <br>";

?>

<?php
$to = "andrew.lee12@gmail.com";
 $subject = "New Contact - TILE IMAGE";
 $body = 'Name: '. $name. "\n" . 'Phone:            '. $phone. "\n" . 'EMAIL:           '. $email. "\n" . 'Message:     '. $message;
 if (mail($to, $subject, $body)) {
   echo("<p>Your message was successfully sent to Milford Accounting!</p>");
  } else {
   echo("<p>Your message was not successfully sent to Milford Accounting. Please contact Milford Accounting.</p>");
  }


?>
</body>

</html>
