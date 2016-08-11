<!DOCTYPE html>
<html lang="en">

<head>
	<?php

	include "dbconnect.php";

	?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MindUrMeds</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script>
		function loginSubmit() 
		{
			document.forms[']
		}
	</script>

</head>

<body>



    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>MindUrMeds</h1>
                        <h3>Being Healthy has Never Been this Easy</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a data-toggle="modal" href="#loginModal" class="btn btn-default btn-lg"><span class="network-name">Login</span></a>
                            </li>
                            <li>
                                <a data-toggle="modal" href="#signinModal" class="btn btn-default btn-lg"><span class="network-name">Sign up</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
	
	<!-- modal -->
	<div id="loginModal" class="modal fade" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h1 class="modal-title">Login</h1>
						</div>
						<div class="modal-body">
							<form id = "login" method = "POST" action = "login.php" enctype="multipart/form-data" class="form col-md-12 center-block">
							<div class="form-group">
							  <input type="text" class="form-control input-lg" placeholder="Email" name = "email">
							</div>
							<div class="form-group">
							  <input type="password" class="form-control input-lg" placeholder="Password" name = "password">
							</div>
							<div class="form-group">
							  <button type = "submit" class="btn btn-primary btn-lg btn-block" name="login" onclick = "loginSubmit()">Sign In</button>
							  <span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>
							</div>
						  </form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>

				  </div>
			</div>
			
	<div id="signinModal" class="modal fade" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h1 class="modal-title">Sign up</h1>
						</div>
						<div class="modal-body">
							<form form method = "POST" action ="signup.php" enctype="multipart/form-data" class="form col-md-12 center-block">
								<div class="form-group">
									<input type="text" class="form-control input-lg" placeholder="First Name" name ="first" id = "first">
								</div>
								<div class="form-group">
									<input type="text" class="form-control input-lg" placeholder="Last Name" name ="last">
								</div>
								<div class="form-group">
								  <input type="text" class="form-control input-lg" placeholder="Email" name = "email">
								</div>
								<div class="form-group">
									<input type="password" class="form-control input-lg" placeholder="Password" name = "password" >
								</div>
								<div class="form-group">
								  <button type = "submit" class="btn btn-primary btn-lg btn-block" name = "signup">Register</button>
								  <span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>
								</div>
						  </form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>

				  </div>
			</div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Tips from MUM:</h2>
                    <p class="lead">
					<ul style="font-size:17px"> 
					<li>Keeping track of your medications is one of the most important skills to keeping a healthy lifestyle. You can use MindUrMeds to track your medications.</li>
					<li>Ask your pharmicist how to best store your medications.</li>
					<li>Check which pills you can take together and which you have to take seperately.</li>
					<li>Never stop a medication without a doctor's permission even if your symptoms have cleared.</li>
					<li>If you experience any side-effects write it down and tell your doctor.</li>
					<li>Check if you need to take food with your medication.</li>
					<li>Don't share your prescription medications with anyone.</li>
					</ul>
					</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/pill to brain.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Our Web App</h2>
                    <p class="lead">Code_med was inspired to create this web app as a prototype for a potential ios/andriod app.  They wanted
					to give back to the community when they realized that many individuals take a variety of prescription medications and it 
					is easy to forget what they are, when to take them and the dosages. Furthermore, at the doctor’s office remembering the 
					names can be difficult. They wanted to streamline this process and make it easier to keep track of your medications for 
					a healthier, happier lifestyle.  They designed this web app that creates a space to type in the medications, a 
					description, the time to take them, as well as their dosages.  The target audience for this application is anyone (kids 
					[with adult supervision] or adults) who have medications they are on regularly and need to remember to take. They 
					improved their app from other common medicine reminder apps by using a friendly interface that anyone can use in attempt
					to destigmatize the embarrassment that comes with taking medications.  
</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/doctors.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">About Us</h2>
                    <p class="lead">MindUrMeds was founded in the year 2016 by Amal Moosa, Brooke Barlow, Veronica Grant, and Rachel Stern 
					aka code_med.  The four girls competed with others to earn an
					opportunity to participate in a seven week summer immersion program called Girls Who Code.  They went on informative 
					field trips, met dedicated women in technology, and gained great friendships that will last them a lifetime.  Brooke and 
					Veronica are rising Juniors ready to continue expanding their knowledge in the different STEM fields.  Amal and Rachel 
					are rising Seniors looking forward to possibly starting a career in computer science.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="code_med.JPG" alt="our picture">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
					<p style = "text-align: center">Thanks to Capital One DC</p>
                    <p style = "text-align: center" class="copyright text-muted small">Copyright &copy; code_med 2016. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
