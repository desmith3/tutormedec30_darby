


<!-- Given a course and a date, allows students to search for available tutors. -->


<script>
  $(function() {
  $("#datepicker").datepicker({
    minDate: 0,
    maxDate: '+2w',
    dateFormat: 'yy-mm-dd'
});
  });
  
  function openLanding()
	{
	window.open("index.php","_self")
	}
	
  </script>


<?php
include "dbConnect.php";
session_start ();
if (! isset ( $_SESSION ['username'] )) {
	header ( "Location: index.php" );
} else {
	
	$username = $_SESSION ['username'];
	
	$result1 = mysqli_query ( $con, "select CourseID from Course" );
	
	if (isset ( $_POST ['course'] )) {
		$course = $_POST ["course"];
		$date = $_POST ["datepicker"];
		
		if ($course == "Enter Course here") {
			$course_mod = 1;
		} else {
			$course_mod = "c.courseid='" . $course . "'";
		}
		
		if ($date == "Enter Date here") {
			$date_mod = 1;
		} else {
			$date_mod = "t.date='" . $date . "'";
		}
		
		$_SESSION ['courseid'] = $course;
		$_SESSION ['date'] = $date;
		
		$query = "select c.Courseid, c.TutorID, t.Date, t.BeginTime, t.EndTime from CourseOffer c join TimeTable t on c.TutorID = t.TutorID where $course_mod and $date_mod";
		$result = mysqli_query ( $con, $query );
		$no_rows = mysqli_num_rows ( $result );
		
		if ($no_rows == 0) {
			?>
	<script type="text/javascript">
  		alert("Oops!! No Tutors found for the specified search criteria");
  		document.location.href = 'searchTutors.php';
	</script>
<?php
		} else {
			$data = '';
			$i = 0;
			while ( $row = mysqli_fetch_array ( $result, MYSQL_ASSOC ) ) {
				$data .= '
        data[' . $i . '] = {
            TutorID: "' . $row ['TutorID'] . '",
	     Date: "' . $row ['Date'] . '",
            StartTime: "' . $row ['BeginTime'] . '",
	     EndTime: "' . $row ['EndTime'] . '"
        };
    ';
				$i ++;
			}
		}
	}
}
include "dbClose.php";
?>

    <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> GradeBoost</title>

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
                <a class="navbar-brand" href="#page-top"><img src="img/officialGBsymbol.png"  width="25"height="18" />GradeBoost</a>
                <br/>
                <br/>
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
                        <a href="profile.php">Profile</a>
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
                        <span class="name">Find A Tutor</span>
                        <hr class="star-light">
                        <label style="float: right; margin-right: 50px;">Welcome <?php echo $username ?></label>
				<!--<div class="cl">&nbsp;</div>-->
                        <span class="skills"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

				
				
			
			<!--<div id="leftNavigation">
				<ul class="nav">
					<li><a href="studentHome.php">Home</a></li>
					<li><a href="profile.php">My Profile</a></li>
					<li><a href="#">Search Tutors</a></li>
					<li><a href="logoff.php">Log off</a></li>
				</ul>
			</div>-->
			<div id="userProfileDiv" style="position: relative">
				<style="width:100%;"/>
				<div class="centerTable"><!--was "search"-->
					<form class="centerTable" id="searchForm" action="" method="post">
						<h4 style="text-align:center">Tutor Search</h4>
						<br/>
						<table class="centerTable" cellpadding="0" cellspacing="0" border="0">
                            <tbody class="centerTable">
							<tr>
								<td><label for="course">Course:</label></td>
								<td><select id="course" name="course" id="course">
				<?php
				while ( $row = mysqli_fetch_array ( $result1 ) )
					echo ("<option value = '" . $row ['CourseID'] . "'>" . $row ['CourseID'] . "</option>");
				?></select></td>
							</tr>
							<tr>
								<td><label for="datepicker">Date:</label></td>
								<td><input id="datepicker" name="datepicker" type="name"
									class="field" value="Enter Date here" title="Enter Date here"
									readonly> </input></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" id="submit" value="Search"
									style="margin-left: 20px;"></td>
							</tr>
                                </tbody>
						</table>
						<div class="cl">&nbsp;</div>
					</form>
				</div>
				<table class="centerTable" width="50%">
					<tr>
						<td valign="top" width="50%"><div class="grid-header"
								style="width: 560px;">
								<label class="centerTable">Search Results for <? if($course=="Enter Course here") echo all; else echo $course; ?></label>
							</div>
							<div class="centerTable" id="myGrid" style="width: 560px; height: 175px;"></div></td>
					</tr>
                    
				</table>
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
    {id: "TutorID", name: "Tutor Name", field: "TutorID", formatter: function ( row, cell, value, columnDef, dataContext ) {
            return '<a href="schedule.php?tutorid=' + value + '">' + value + '</a>';
        }
},
    {id: "Date", name: "Date", field: "Date"},
    {id: "StartTime", name: "From", field: "StartTime"},
    {id: "EndTime", name: "To", field: "EndTime"}
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
  
  function scheduleAppointment(id)
  {
	  window.alert(id);
  }
 
</script>
    </body>

     <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>1426 GB Headquarters<br>Tuscaloosa, AL 90210</p>
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
                        <h3>About GradeBoost</h3>
                        <p>GradeBoost is an easy to use, mobile application that allows a platform for peer to peer tutoring <a href="http://mygradeboost.com">Check out our Website!</a>.</p>
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



</html>
