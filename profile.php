 
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

<body id="page-top" class="centerTable">

<script type="text/javascript">
$( document ).ready(function() {
	$('span.stars').stars();
	
	$("#editInfoForm").submit(function(event) {
	    event.preventDefault();
	    var values = $(this).serialize();

	    $.ajax({
	        url: "updateInfo.php",
	        type: "post",
	        data: values,
	        success: function(data){
	        	$( "#viewInfo" ).html( data );
	        	$( "#viewInfo" ).css( "display", "block");
	        	$( "#editInfo" ).css( "display", "none" );
	        },
	        error:function(){
	            alert("failure");
	        }
	    });
	});

});

$.fn.stars = function() {
	return $(this).each(function() {
		$(this).html($('<span />').width(Math.max(0, (Math.min(5, parseFloat($(this).html())))) * 16));
	});
}

function onEditInfo()
{
	var firstName = document.getElementById("tdFirstName").textContent;
	var lastName = document.getElementById("tdLastName").textContent;
	var email = document.getElementById("tdEmail").textContent;
	var phone = document.getElementById("tdPhone").textContent;
	var school = document.getElementById("tdSchool").textContent;
	var major = document.getElementById("tdMajor").textContent;

	// Populate values to editInfo form
	$( "#firstName" ).val( firstName );
	$( "#lastName" ).val( lastName );
	$( "#email" ).val( email );
	$( "#phone" ).val( phone );
	$( "#school" ).val( school );
	$( "#major" ).val( major );

	$( "#viewInfo" ).css( "display", "none" );
	$( "#editInfo" ).css( "display", "block" );
}

function onCancelUpdateInfo()
{
	$( "#editInfo" ).css( "display", "none" );
	$( "#viewInfo" ).css( "display", "block" );
}

function onEditCourse()
{
	$( "#viewCoursesAndRating" ).css( "display", "none" );
	$( "#editCourses" ).css( "display", "block" );
}

window.deletedCourses = [];
window.addedCourses = [];

function onAddNewCourse()
{
	var sel = document.getElementById( "newCourse" );
	var existed = document.getElementById( sel.value );
	if( existed == null )
	{
		var table = document.getElementById("editCoursesTable");
		var row = table.insertRow(-1);
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);
		
		row.setAttribute("id", sel.value, 0);
		cell1.innerHTML = sel.value;
		cell2.innerHTML= sel.options[sel.selectedIndex].text;

		var temp = '"' + sel.value + '"';
		cell3.innerHTML = "<a onclick='onRemoveCourse(" + temp + ")'>Remove</a>";

		var index = deletedCourses.indexOf(sel.value);
		if( index > -1 )
		{
			deletedCourses.splice(index, 1);
		}
		else
		{
			addedCourses.push( sel.value );
		}
	}
	else
	{
		alert("You have already added this course!");
	}
}

function onRemoveCourse(rowId)
{
	var conf = confirm( "Please confirm to remove " + rowId + " from your courses." );
	if (conf == true)
	{
		var removeElement = document.getElementById( rowId );
		removeElement.parentNode.removeChild( removeElement );

		var index = addedCourses.indexOf(rowId);
		if( index > -1 )
		{
			addedCourses.splice(index, 1);
		}
		else
		{
			deletedCourses.push( rowId );
		}
	}
}

function onDoneUpdate()
{
	if( addedCourses.length > 0 || deletedCourses.length > 0)
	{
		var conf = confirm( "Please confirm to update your change." );
		if (conf == true)
		{
			$.post("updateCourseOffer.php", 
					{addedCourses: JSON.stringify(addedCourses),
					 deletedCourses: JSON.stringify(deletedCourses) }, 
					function(data){
						addedCourses.length = 0;
						deletedCourses.length = 0;
						$( "#viewCoursesAndRating" ).html( data );
	        			$( "#editCourses" ).css( "display", "none" );
	        			$( "#viewCoursesAndRating" ).css( "display", "block" );
	        			location.reload();
			});
		}
	}
	else
	{
		onCancleEditCourse();
	}
}

function onCancleEditCourse()
{
	if( addedCourses.length > 0 || deletedCourses.length > 0 )
	{
		$.post("getEditCoursesView.php", 
				function(data){
					addedCourses.length = 0;
					deletedCourses.length = 0;
					$( "#editCourses" ).html( data );
	    			$( "#editCourses" ).css( "display", "none" );
	    			$( "#viewCoursesAndRating" ).css( "display", "block" );
		});
	}
	else
	{
		$( "#editCourses" ).css( "display", "none" );
		$( "#viewCoursesAndRating" ).css( "display", "block" );
	}
}

</script>

<style type="text/css">
span.stars,span.stars span {
	display: block;
	background: url(css/images/stars.png) 0 -16px repeat-x;
	width: 80px;
	height: 16px;
}

span.stars span {
	background-position: 0 0;
}


</style>

<?php
session_start ();
if (! isset ( $_SESSION ['username'] )) {
	header ( "Location: index.php" );
} else {
include "dbConnect.php";
include "getProfileInfo.php";
$userID = ! empty ( $_GET ['tutorid'] ) ? $_GET ['tutorid'] : $_SESSION ['username'];
}
?>





    

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
                <a class="navbar-brand" href="#page-top"><img id="logo" src="img/officialGBsymbol.png" width="25" height="20" /> GradeBoost</a>
                <br/>
                <br/>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                     <!--<li class="page-scroll">
                        <a href="studentHome.php">Home</a>
                    </li>-->
                    
                    
			
					<?php
                    if (isTutor ( $userID ) == true) {
                        echo "<li><a href='tutorHome.php'>Home</a></li>";
                        echo "<li><a href='profile.php'>My Profile</a></li>";
                    } else {
                        echo "<li><a href='studentHome.php'>Home</a></li>";
                        echo "<li><a href='profile.php'>My Profile</a></li>";
                        echo "<li><a href='searchTutors.php'>Get Tutored</a></li>";
                    }
                    ?>
                     
                    <li class="page-scroll">
                        <a href="aboutUs.php">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
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
                        <span class="name">Profile</span>
                        <hr class="star-light">
                        <span class="skills"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>


	
			

			        <!--<li><a href="logoff.php">Log off</a></li>-->
				<!--</ul>
			</div>-->
			<!-- End of Left Navigation -->

			<!-- Profile -->
   <!-- <section id="portfolio">-->
       
                <div class="col-lg-12 text-center">

			<div  id="userScheduleDiv">
                <style="width:100%; height:100%"/>
				<?php echo("<h2>$userID's Profile</h2>")?>
				<br />
				<div id="generalInfo">
					<style="width:50%"; height:"100%"/>
					<div class="centerTable" id="viewInfo">
						<?php populateViewInfoForm($userID)?>
					</div>
					<div class="centerTable" id="editInfo" style="display: none;">
						<form id="editInfoForm" method="post" action="">
							<table class="centerTable">
								<tr>
									<td><label for="firstName">First Name:</label></td>
									<td><?php echo "<input id='firstName' name='firstName' type='name' class='field' />" ?></td>
								</tr>
								<tr>
									<td><label for="lastName">Last Name:</label></td>
									<td><?php echo "<input id='lastName' name='lastName' type='name' class='field' />" ?></td>
								</tr>
								<tr>
									<td><label for="email">Email:</label></td>
									<td><?php echo "<input id='email' name='email' type='name' class='field' readonly />" ?></td>
								</tr>
								<tr>
									<td><label for="phone">Phone:</label></td>
									<td><?php echo "<input id='phone' name='phone' type='name' class='field' />" ?></td>
								</tr>
								<tr>
									<td><label for="school">School:</label></td>
									<td><?php echo "<input id='school' name='school' type='name' class='field' />" ?></td>
								</tr>
								<tr>
									<td><label for="major">Major:</label></td>
									<td><?php echo "<input id='major' name='major' type='name' class='field' />" ?></td>
								</tr>
								<tr>
									<td align="right"><input id="updateInfoButton" type="submit"
										value="Update" /></td>
									<td align="right"><input id="cancelInfoButton" type="button"
										value="Cancel" onclick="onCancelUpdateInfo()" /></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
                </div>
                </div>
                </div>
            </div>
                </section>
                
				<br />
				<?php
				if (isTutor ( $userID )) {
					echo "<div id='tutorInfo'>";
					echo "<h3 style='margin-left:0px;'>Courses and Ratings</h3>";
					echo "<div id='viewCoursesAndRating' style='margin-left:0px, margin-right:0px;'>"; 
					populateCourseAndRatings ( $userID );
					echo "</div>";
					echo "<div id='editCourses' style='margin-left:0px;display: none;'>";
					populateEditCourseView ( $userID );
					echo "</div>";
					echo "<br />";
					
					echo "<div id='timetable' style='margin-left:0px;'>";
					echo "<h3>Timetable</h3>";
					echo "<div id='myGrid' style='width: 240px; height: 200px;'>";
					echo "</div>";
					$time_table = getTimeTable ( $userID );
					$data = '';
					$i = 0;
					while ( $row = mysqli_fetch_array ( $time_table, MYSQL_ASSOC ) ) {
						$data .= '
							        	data[' . $i . '] = {
									Date: "' . $row ['Date'] . '",
							              StartTime: "' . $row ['BeginTime'] . '",
									EndTime: "' . $row ['EndTime'] . '"
							        };
							    ';
						$i ++;
					}
					
					if (isEditable ( $userID ) == true) {
						echo "<a href='addTimeTable.php'>Add new...</a>";
					}
					
					echo "</div>";
				}
				?>
			
			
			
			<!-- End of Profile -->

			<!-- Footer -->
			
			<!-- End of Footer -->
	
	<script src="js/slick/lib/jquery.event.drag-2.2.js"></script>
	<script src="js/slick/slick.core.js"></script>
	<script src="js/slick/slick.dataview.js"></script>
	<script src="js/slick/slick.formatters.js"></script>
	<script src="js/slick/slick.grid.js"></script>
	<script>
		var grid;
	
		var columns = [
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
	</script>


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
    </div>

</body>

</html>