
<?php
require './PHPMailer-master/class.phpmailer.php';
require './PHPMailer-master/class.smtp.php';

$mail = new PHPMailer ();
$mail->IsSMTP (); // set mailer to use SMTP
$mail->Host = "ssl://smtp.gmail.com"; // specify main and backup server
$mail->Port = 465; // set the port to use
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "darbye.smith411@gmail.com"; // your SMTP username or your gmail username
                                              
<<<<<<< HEAD
 include 'mail_password.php'; //includes my password
$mail->Password = "Squirrel12345"; // your SMTP password or your gmail password
=======
// include 'mail_password.php'; //includes my password
//$mail->Password = "Squirre112345"; // your SMTP password or your gmail password
>>>>>>> e5f7ee562108cb709ff1181fd52fcae7dcedae51

//$from = "darbye.smith411@gmail.com"; // Reply to this email
//$mail->From = $from;
//$mail->FromName = "GradeBoost"; // Name to indicate where the email came from when the recepient received
//$mail->WordWrap = 50; // set word wrap
//$mail->IsHTML ( true ); // send as HTML

//$actLink = "";
//$actLink .= "/tutorActive.php?scheduleID=";
//$actLink .= $scheduleID;
//$rejLink = "";
//$rejLink .= "/tutorReject.php?scheduleID=";
//$rejLink .= $scheduleID;

<<<<<<< HEAD
$locationBody = "The location is <strong>" . $building . "</strong>, <strong>" . $floor . "</strong> floor, room <strong>" . $room . "</strong>.<br />";
$timeBody = "Time is on <strong>" . $date . "</strong>, from <strong>" . $beginTime . "</strong> to <strong>" . $endTime . "</strong>.<br />";
$endBody = "<br />Thank you <br /> GradeBoost<br />";
=======
//$locationBody = "The location is <strong>" . $building . "</strong>, <strong>" . $floor . "</strong> floor, room <strong>" . $room . "</strong>.<br />";
//$timeBody = "Time is on <strong>" . $date . "</strong>, from <strong>" . $beginTime . "</strong> to <strong>" . $endTime . "</strong>.<br />";
//$endBody = "<br />Thank you <br /> GradeBoost<br />";
>>>>>>> e5f7ee562108cb709ff1181fd52fcae7dcedae51
?>
