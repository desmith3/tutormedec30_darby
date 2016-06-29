<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<!-- Allows a student to make a schedule with a tutor. Redirects to createSchedule.php -->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Tutor Me!!</title>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
<script src="js/jquery.carouFredSel-5.5.0-packed.js"
	type="text/javascript"></script>
<script src="js/functions.js" type="text/javascript"></script>
<script>
//Limit selectable range of datepicker
	$(function() {
		$("#datepicker").datepicker(
				{ minDate: new Date(),
				  maxDate: "+2w",
				  dateFormat: 'yy-mm-dd'
			    }
		);
	});

	function openLanding() {
		window.open("index.php", "_self")
	}

	function viewProfile(tutorId) {
		window.open("profile.php?tutorid=" + tutorId);
	}
</script>
</head>
<?php
include "getAvailableTime.php";
session_start ();
if (! isset ( $_SESSION ['username'] )) {
	header ( "Location: index.php" );
} else {
	$userID = $_SESSION ['username'];
	$tutorID = $_GET ['tutorid'];
	$courseID = $_SESSION ['courseid'];
	$date = $_SESSION ['date'];
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
                <a class="navbar-brand" href="#page-top"><img id="logo" src="css/images/title.png" /></a>
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
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
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
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">Start Bootstrap</span>
                        <hr class="star-light">
                        <span class="skills">Check us out! </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

<body>
	<div class="shell">
		<div class="container">
			<!-- Header -->
			<header id="header"> <img id="logo" src="css/images/logo.png"
				onClick="openLanding()" />
			<div class="cl">&nbsp;</div>
			</header>
			<!-- End of Header -->

			<!-- Top Navigation -->
			<nav id="navigation">
			<ul>
				<li href="#"><a href="#">home</a></li>
				<li><a href="#">about us</a></li>
				<li><a href="#">contacts</a></li>
			</ul>
			<div class="cl">&nbsp;</div>
			</nav>
			<!-- End of Top Navigation -->

			<!-- Left Navigation -->
			<div id="leftNavigation">
				<ul class="nav">
					<li><a href="studentHome.php">Home</a></li>
					<li><a href="profile.php">My Profile</a></li>
					<li><a href="searchTutors.php">Search Tutors</a></li>
					<li><a href="logoff.php">Log off</a></li>
				</ul>
			</div>
			<!-- End of Left Navigation -->

			<div id="userScheduleDiv" style="position: relative"
				style="width:100%;">
				<div class="schedule">
					<h4>Create a schedule</h4>
					<h5>Please select begin time, end time, and location.</h5>
					<br />
					<form id="schedule" method="post" action="createSchedule.php">
						<table cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td><label for="tutorName">Tutor:</label></td>
								<td><?php
								echo "<input id='tutorID' name='tutorID' value='$tutorID' type='name' class='field' readonly />";
								$param = '"' . $tutorID . '"';
								echo "<a onclick='viewProfile($param)' style='padding-left: 3px; margin-left: 18px; text-decoration: underline;'>View Profile</a>";
								?></td>
							</tr>
							<tr>
								<td><label for="course">Course:</label></td>
								<td><?php
								echo "<input  id='courseID' name='courseID' type='name' class='field' value='$courseID' readonly/>";
								?></td>
							</tr>
							<tr>
								<td><label for="datepicker">Date:</label></td>
								<td><?php
								echo "<input  id='datepicker' name='datepicker' type='name' class='field' value='$date' onchange='onDateChange()' readonly/>";
								?></td>
							</tr>
							<tr>
								<td><label for="beginTime">Begin Time:</label></td>
								<td><?php
								echo "<select id='beginTime' name='beginTime' onchange='onBeginTimeChange()'>";
								if (! empty ( $tutorID ) && ! empty ( $date )) {
									$availableTime = getAvailableTime ( $tutorID, $date );
									if (! empty ( $availableTime )) {
										echo "<option selected disabled value=''>Select time</option>";
										foreach ( $availableTime as $time ) {
											echo "<option value='$time'>$time</option>";
										}
									} else {
										echo "<option selected disabled value=''>Not available</option>";
									}
								} else {
									echo "<option selected disabled value=''>Not available</option>";
								}
								echo "</select>";
								?></td>
							</tr>
							<tr>
								<td><label for="endTime">End Time:</label></td>
								<td><?php
								echo "<select id='endTime' name='endTime' onchange='onEndTimeChange()'>";
								if (! empty ( $availableTime )) {
									echo "<option selected disabled value=''>Select time</option>";
									foreach ( $availableTime as $time ) {
										echo "<option value='$time'>$time</option>";
									}
								} else {
									echo "<option selected disabled value=''>Not available</option>";
								}
								echo "</select>";
								?></td>
							</tr>
							<tr>
								<td><label for="location">Location:</label></td>
								<td><select id="location" name='location'
									onchange="onLocationChange()">
										<option selected disabled value=''>Select location</option>
								</select></td>
							</tr>
							<tr>
								<td></td>
							</tr>
							<tr>
								<td colspan="2" align="right"><input id="submitButton"
									type="submit" value="Submit" disabled /></td>
							</tr>
						</table>
						<div class="cl">&nbsp;</div>
					</form>
				</div>
			</div>

			<!-- Footer -->
			<div id="footerContainer">
				<div id="footer">
					<div class="footer-nav">
						<ul>
						</ul>
						<div class="cl">&nbsp;</div>
					</div>
					<p class="copy">
						&copy; Copyright 2013<span>|</span>Tutor Search - Designed by <a
							href="http://www.cs.indiana.edu/~yuqwu/courses/B561-fall13/webpage/"
							target="_blank">Advanced Database Concepts - Group_14</a>
					</p>
					<div class="cl">&nbsp;</div>
				</div>
			</div>
			<!-- End of Footer -->

		</div>
	</div>
	<script>
function onDateChange()
{
	populateBeginTime();
	
	// Reset endtime and location
	document.getElementById("endTime").options.length = 1;
	document.getElementById("location").options.length = 1;
}

function populateBeginTime()
{
	var tutorID = document.getElementById("tutorID").value;
	var date = document.getElementById("datepicker").value;
	
	if( tutorID.length != 0 && date.length != 0 )
	{
		xmlhttp = createXMLHttpRequest();
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200 )
		    {
			    // Set response to begin time select
		    	document.getElementById("beginTime").innerHTML = xmlhttp.responseText;
		    	// Reset endtime select options
		    	document.getElementById("endTime").innerHTML = xmlhttp.responseText;
		    }
		}

		xmlhttp.open("GET","getAvailableTime.php?date="+date+"&tutorID="+tutorID, true);
		xmlhttp.send();		
	}
}
								
function onBeginTimeChange()
{
	populateEndTime();
	enableSubmitButton();
}

function populateEndTime()
{
	var beginTime = document.getElementById("beginTime");
	var endTime = document.getElementById("endTime");
	var selIndex = beginTime.selectedIndex;

	// Empty endtime options
	endTime.options.length = 1;

	for( var i = selIndex+1; i < beginTime.options.length; i++ )
	{
		var size = endTime.options.length;
		if( size == 1 )
		{
			var btime = beginTime.options[selIndex].text;
			var stime = beginTime.options[i].text;
			if( isTimeWithInRange(btime,stime) )
			{
		 		var opt = document.createElement("option");
		        opt.text = stime;
		        opt.value = stime;
		        endTime.add(opt, null);
			}
		}
		else
		{
			var time1 = endTime.options[size-1].text;
			var time2 = beginTime.options[i].text;
			if( isTimeWithInRange(time1, time2) )
			{
		 		var opt = document.createElement("option");
		        opt.text = time2;
		        opt.value = time2;
		        endTime.add(opt, null);
			}
			else
			{
				break;
			}
		}
	}
}

function isTimeWithInRange(t1, t2)
{
	var d1 = new Date();
	var d2 = new Date();
	
	t1 = t1.split(/:/);
	t2 = t2.split(/:/);

	d1.setHours(t1[0], t1[1]);
	d2.setHours(t2[0], t2[1]);

	if( d2 - d1 <= 1800000 )
	{
		return true;
	}

	return false;
}

function onEndTimeChange()
{
	populateLocation();
	enableSubmitButton();
}

function onLocationChange()
{
	enableSubmitButton();
}
								
function populateLocation()
{
	var beginTime = document.getElementById("beginTime").value;
	var endTime = document.getElementById("endTime").value;
	var date = document.getElementById("datepicker").value;

	if( beginTime.length != 0 && endTime.length != 0 && date.length != 0)
	{
		xmlhttp = createXMLHttpRequest();
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200 )
		    {
			    // Set response function
		    	document.getElementById("location").innerHTML = xmlhttp.responseText;
		    }
		}

		xmlhttp.open("GET","getLocation.php?date="+date+"&beginTime="+beginTime+"&endTime="+endTime, true);
		xmlhttp.send();		
	}
	else
	{
		//empty select
		document.getElementById("location").innerHTML = "<option selected disabled value=''>Not available</option>";
	}	
}

function createXMLHttpRequest()
{
	if (window.XMLHttpRequest)
	{	
		// code for IE7+, Firefox, Chrome, Opera, Safari
		return new XMLHttpRequest();
	}
	else
	{	
		// code for IE6, IE5
		return new ActiveXObject("Microsoft.XMLHTTP");
	}
}

function enableSubmitButton()
{
	var date = document.getElementById("datepicker").value;
	var beginTime = document.getElementById("beginTime").value;
	var endTime = document.getElementById("endTime").value;
	var location = document.getElementById("location").value;
	
	if( date.length != 0 && beginTime.length != 0 && endTime.length != 0 && location.length != 0 )
	{
		document.getElementById("submitButton").disabled = false;
	}
}
</script>
</body>
</html>