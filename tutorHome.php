
<!-- Home page of the tutor. Displays Confirmed and Pending appointments -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GradeBoost</title>

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
                <a class="navbar-brand" href="#page-top">GradeBoost</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                   <li class="page-scroll">
                        <a href="studentHome.php">Home</a>
                    </li>
                    <li class="page-scroll">
                        <a href="aboutUs.php">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                     <li class="page-scroll">
                        <a href="searchTutors.php">Get Tutored</a>
                    </li>
                    <li class="page-scroll">
                        <a href="profile.php">Profile</a>
                    </li>
                     <li class="page-scroll">
                        <a href="aboutUs.php">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="logoff.php">Log off</a>
                    </li>
                    
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
                        <span class="name">Home</span>
                        <hr class="star-light">
                        <span class="skills">Tutoring Records</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Schedule</h2>
                    <hr class="star-primary">

                    	<div id="userProfileDiv">
				<table width="100%">
					<tr>
						<td valign="top" width="50%"><div class="grid-header"
								style="width: 640px;">
								<label>Confirmed Appointments</label>
							</div>
							<div id="myGrid" style="width: 640px; height: 125px;"></div></td>
					</tr>
				</table>

				<table width="100%">
					<tr>
						<td valign="top" width="50%"><div class="grid-header"
								style="width: 640px;">
								<label>Pending Appointments</label>
							</div>
							<div id="myGrid1" style="width: 640px; height: 125px;"></div></td>
					</tr>
				</table>
			</div>
			


                </div>
            </div>
            
               
               </div>
            </section>

    <!-- About Section -->
    

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
                        <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
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



<script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  function openLanding()
	{
	window.open("index.php","_self")
	}
  </script>

<body>
<?php
include "dbConnect.php";
session_start ();
if (! isset ( $_SESSION ['username'] )) {
	header ( "Location: index.php" );
} else {
	
	$username = $_SESSION ['username'];
	$result = mysqli_query ( $con, "select * from Schedule where TutorID='$username' and Status='Approved'" );
	$no_rows = mysqli_num_rows ( $result );
	
	if ($no_rows == 0) {
		?>
	
	<?php
	} else {
		$data = '';
		$i = 0;
		while ( $row = mysqli_fetch_array ( $result, MYSQL_ASSOC ) ) {
			$data .= '
        data[' . $i . '] = {
			ScheduleID: "' . $row ['ScheduleID'] . '",
			UserID: "' . $row ['UserID'] . '",
            TutorID: "' . $row ['TutorID'] . '",
			CourseID: "' . $row ['CourseID'] . '",
			LocationID: "' . $row ['LocationID'] . '",
			Date: "' . $row ['Date'] . '",
            StartTime: "' . $row ['BeginTime'] . '",
			EndTime: "' . $row ['EndTime'] . '",
			Status: "' . $row ['Status'] . '"
        };
    	';
			$i ++;
		}
	}
	
	$result1 = mysqli_query ( $con, "select * from Schedule where TutorID='$username' and Status='Pending'" );
	$no_rows1 = mysqli_num_rows ( $result1 );
	if ($no_rows1 == 0) {
		?>
	
	<?php
	} else {
		$data1 = '';
		$i = 0;
		while ( $row = mysqli_fetch_array ( $result1, MYSQL_ASSOC ) ) {
			$data1 .= '
        data1[' . $i . '] = {
			ScheduleID: "' . $row ['ScheduleID'] . '",
			UserID: "' . $row ['UserID'] . '",
            TutorID: "' . $row ['TutorID'] . '",
			CourseID: "' . $row ['CourseID'] . '",
			LocationID: "' . $row ['LocationID'] . '",
			Date: "' . $row ['Date'] . '",
            StartTime: "' . $row ['BeginTime'] . '",
			EndTime: "' . $row ['EndTime'] . '",
			Status: "' . $row ['Status'] . '"
        };
    	';
			$i ++;
		}
	}
}
include "dbClose.php";
?>

				<label style="float: right; margin-right: 50px;">Welcome <?php echo $username ?></label>
				
			
			
					<!-- end of footer -->
				</div>
			
	</div>
	<script src="js/slick/lib/jquery.event.drag-2.2.js"></script>
	<script src="js/slick/slick.core.js"></script>
	<script src="js/slick/slick.dataview.js"></script>
	<script src="js/slick/slick.formatters.js"></script>
	<script src="js/slick/slick.grid.js"></script>
	<script>
function formatter(row, cell, value, columnDef, dataContext) {
        return value;
    }
	
  var grid;
  var columns = [
    {id: "ScheduleID", name: "Schedule ID", field: "ScheduleID"},
	{id: "TutorID", name: "Student Name", field: "UserID"},
	{id: "CourseID", name: "Course ID", field: "CourseID"},
	{id: "LocationID", name: "Location", field: "LocationID"},
    {id: "Date", name: "Date", field: "Date"},
    {id: "StartTime", name: "From", field: "StartTime"},
    {id: "EndTime", name: "To", field: "EndTime"},
	{id: "Status", name: "Status", field: "Status"}
  ];

  var options = {
    enableCellNavigation: true,
    enableColumnReorder: false
  };

  $(function () {
     var data = [];
        <?=$data?> 
        grid = new Slick.Grid($("#myGrid"), data, columns, options);
  });
</script>
	<script>
function formatter(row, cell, value, columnDef, dataContext) {
        return value;
    }
	
  var grid1;
  var columns1 = [
    {id: "ScheduleID", name: "Schedule ID", field: "ScheduleID"},
	{id: "UserID", name: "Student Name", field: "UserID"},
	{id: "CourseID", name: "Course ID", field: "CourseID"},
	{id: "LocationID", name: "Location", field: "LocationID"},
    {id: "Date", name: "Date", field: "Date"},
    {id: "StartTime", name: "From", field: "StartTime"},
    {id: "EndTime", name: "To", field: "EndTime"},
	{id: "Status", name: "Status", field: "Status"}
  ];

  var options = {
    enableCellNavigation: true,
    enableColumnReorder: false
  };

  $(function () {
     var data1 = [];
        <?=$data1?> 
        grid1 = new Slick.Grid($("#myGrid1"), data1, columns1, options);
  });
</script>
</body>

