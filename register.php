
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GradeBoost-Register</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
     <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top"> GradeBoost </a>
                
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="aboutUs.php">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>

                    <li><a href="studentHome.php">Home</a></li>
					<li><a href="profile.php">My Profile</a></li>
					<li><a href="searchTutors.php">Search Tutors</a></li>
					<li><a href="logoff.php">Log off</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="intro-text">
                        <span class="name">Register</span>
                        <hr class="star-light">
                        <span class="skills"> </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
   

    <!-- About Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                   
                   
               
                         <form name="information" method="post" action="">
						<div class="reg_section personal_info">
							<h3>Your Personal Information</h3>
							<input type="name" name="email" value=""
								placeholder="Your .edu email*" size="25"> <br />
                             <input type="name"name="fname" value="" placeholder="First name*" size="25"
								maxlength="25" /><br/>
                             <input type="name" name="lname" value=""placeholder="Last name*" size="25" maxlength="25" /> <br /> 
                            <input type="name" name="phone" value="" placeholder="Phone number*"
								size="25" maxlength="25" /> <br /> 
                            <input type="name" name="major" value="" placeholder="Major" size="25" /> <br/>
                            <input type="name" name="school" value="" placeholder="School" size="25" />
						</div>
						<div class="reg_section password">
							<h3>Your Account</h3>
							<input type="name" name="username" value=""
								placeholder="Your Username*" maxlength="30" /> <br /> <input
								type="password" name="password" value=""
								placeholder="Your Password*" maxlength="30" /> <br /> <input
								type="password" name="password2" value=""
								placeholder="Enter your Password again*" maxlength="30" /> <br />
						</div>
						<div class="reg_section password">
							<h3>Register as</h3>
							<select name="role">
								<option value="student" selected="selected">Student</option>
								<option value="tutor">Tutor</option>
							</select> <br> </br>
							<p>
								<input type="submit" name="commit" value="Sign up"
									style="float: left; margin-left: 350px;" onclick="get_info();">
							
							
							<p id="output"></p>
							</p>
					
					</form>
                    </div>
                     </div>
            </div>
            </section>
    <!-- Contact Section -->
    

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About Freelancer</h3>
                        <p>GradeBoost is an easy to use, mobile application that allows a platform for peer to peer tutoring. <a href="http://mygradeboost.com">Check out our Website!</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2014
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>




<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
<script src="js/jquery.carouFredSel-5.5.0-packed.js"
	type="text/javascript"></script>
<script src="js/functions.js" type="text/javascript"></script>
  <?php $POST=array(); ?>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  function openLanding()
	{
	window.open("index.php","_self")
	}
  </script>


			
					<script>  
		  function change_form()
		  {
		  	document.information.action ="./dbRegister.php";
		  }
		  
		  function get_info() 
		  {
		  	var errlog = '';
			var email = $("input[name='email']").val();
			var gender = $("input[name='gender']").val();
		  	var username = $("input[name='username']").val();	
		  	var pwd1 = $("input[name='password']").val();
			var pwd2 = $("input[name='password2']").val();
			var fname = $("input[name='fname']").val();
			var lname = $("input[name='lname']").val();
			var phone = $("input[name='phone']").val();

			
			function valid() 
			{
				var flag = true;
				var reg1 = /^[a-z0-9]+@indiana\.edu+/;
				var reg2 = /^[a-zA-Z]+$/;
				var reg3 = /^[0-9]+$/;

		  		if(reg1.test(email) == false) {
					errlog += "->You should provide INDIANA UNIVERSITY email address ONLY without any special characters in your Username\n (Example: username@indiana.edu)\n";
		  		} 
				if(reg2.test(fname) == false) {
					errlog += "->Please Enter a valid first name - with no special characters or numbers\n";
		  		} 
				if(reg2.test(lname) == false) {
					errlog += "->Please Enter a valid last name - with no special characters or numbers\n";
		  		} 
				if(reg3.test(phone) == false) {
					errlog += "->Please provide a valid phone number - Numericals only!!\n";
		  		} 
                            if(phone.length < 10) {
					errlog += "->Please Enter a valid phone - Number cannot be less than 10 digits!!\n";
		  		} 
				if(reg2.test(username) == false) {
					errlog += "->Please Enter a valid Username - with no special characters or numbers\n";
				} if(pwd1==="" || pwd2==="") {
					errlog += "->Password cannot be empty\n";
				} if(pwd1!=pwd2) {
					errlog += "->Please make sure you enter identical passwords\n";
				} if(errlog.length!=0) {
					flag = false;
				}
				return flag;
		 	}
			
			var flag = valid();

			if (flag) 
			{
				change_form();
			} 
			else 
			{
				alert(errlog);
			}
		  } 		  
		  </script>
					
				
			
			<br /> <br />
			<!-- footer -->
			



