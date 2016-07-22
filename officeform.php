<!--
03/16/2016
AUTHOR: SEBASTIAN VELASQUEZ
final submission


FILE TYPE: OFFICE HOURS SETUP
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sebastian Velasquez - Office Hours Set-Up Form(Lab 2)</title>
<link rel= "stylesheet" href= "../style.css" type="text/css"/>
<link rel= "stylesheet" href= "la2-style.css" type="text/css"/>
<meta http-equiv="Content-Type" content="LabAssignment2; charset=utf-8"/>
</head>
<body>
<!-- START of CONTAINER -->
<div id="container">


<!-- START of LEFT PANEL LAYOUT-->
<?php require 'left_panel.inc'; ?>
<!-- END LEFT PANEL LAYOUT-->


<!-- START of HEADER LAYOUT-->
<?php include '../header.inc'; ?> <!-- ADDED LASTMOD Function TO DISPLAY UPDATE TIME ON MAIN PAGE-->
<!-- END of HEADER LAYOUT -->



<!-- START of CONTENT/MAIN  -->
<div id="content">


<?php
//CONSTANTS of week day
define ("SUNDAY","Sunday");
define ("MONDAY","Monday");
define ("TUESDAY","Tuesday");
define ("WEDNESDAY","Wednesday");
define ("THURSDAY","Thursday");
define ("FRIDAY","Friday");
define ("SATURDAY","Saturday");
//END CONTSANTS

//Return current Unix timestamp
$date = time();

$day = date('d',$date);
$month = date('m',$date);
$year = date('Y',$date);

$first_day_month = mktime(0,0,0,$month,1,$year);//Get Unix timestamp for first day of the month
$name_month = date('F',$first_day_month);

$day_of_week = date('l',$first_day_month);//what is the first day of the month; MONDAY etc


switch($day_of_week)
{
         case MONDAY: $count=0;
         break;
         case TUESDAY: $count=1;
         break;
         case WEDNESDAY: $count=2;
         break;
         case THURSDAY: $count=3;
         break;
         case FRIDAY: $count=4;
         break;
}

$days_in_month = cal_days_in_month(0,$month,$year);//want to find total days in a month and assign it to a variable
?>



<h1>Office Hours Setup Form</h1>

<!-- enclose week days in a div tag called weekdays -->
<ul id="weekdays">
  <li>Day:</li>
  <li>MONDAY</li>
  <li>TUESDAY</li>
  <li>WEDNESDAY</li>
  <li>THURSDAY</li>
  <li>FRIDAY</li>
</ul>
<br /><br />

<div id="e">
	<h4>Time:</h4>
</div>


<form action="calendar.php" method="post">
<div id="m">
	<select name="monday[]" multiple="multiple">
				<option value='7:00am'>7:00am</option>
				<option value='7:30am'>7:30am</option>
				<option value='8:00am'>8:00am</option>
				<option value='8:30am'>8:30am</option>
				<option value='9:00am'>9:00am</option>
				<option value='9:30am'>9:30am</option>
				<option value='10:00am'>10:00am</option>
				<option value='10:30am'>10:30am</option>
				<option value='11:00am'>11:00am</option>
				<option value='11:30am'>11:30am</option>
				<option value='12:00pm'>12:00pm</option>
				<option value='12:30pm'>12:30pm</option>
				<option value='1:00pm'>1:00pm</option>
				<option value='1:30pm'>1:30pm</option>
				<option value='2:00pm'>2:00pm</option>
				<option value='2:30pm'>2:30pm</option>
				<option value='3:00pm'>3:00pm</option>
				<option value='3:30pm'>3:30pm</option>
				<option value='4:00pm'>4:00pm</option>
				<option value='4:30pm'>4:30pm</option>
				<option value='5:00pm'>5:00pm</option>
				<option value='5:30pm'>5:30pm</option>
				<option value='6:00pm'>6:00pm</option>
				<option value='6:30pm'>6:30pm</option>
				<option value='7:00pm'>7:00pm</option>
				<option value='7:30pm'>7:30pm</option>
				<option value='8:00pm'>8:00pm</option>
				<option value='8:30pm'>8:30pm</option>
				<option value='9:00pm'>9:00pm</option>
				<option value='9:30pm'>9:30pm</option>
				<option value='10:00pm'>10:00pm</option>
	</select>
</div>
<div id="t">
	<select name="tuesday[]" multiple="multiple">
				<option value='7:00am'>7:00am</option>
				<option value='7:30am'>7:30am</option>
				<option value='8:00am'>8:00am</option>
				<option value='8:30am'>8:30am</option>
				<option value='9:00am'>9:00am</option>
				<option value='9:30am'>9:30am</option>
				<option value='10:00am'>10:00am</option>
				<option value='10:30am'>10:30am</option>
				<option value='11:00am'>11:00am</option>
				<option value='11:30am'>11:30am</option>
				<option value='12:00pm'>12:00pm</option>
				<option value='12:30pm'>12:30pm</option>
				<option value='1:00pm'>1:00pm</option>
				<option value='1:30pm'>1:30pm</option>
				<option value='2:00pm'>2:00pm</option>
				<option value='2:30pm'>2:30pm</option>
				<option value='3:00pm'>3:00pm</option>
				<option value='3:30pm'>3:30pm</option>
				<option value='4:00pm'>4:00pm</option>
				<option value='4:30pm'>4:30pm</option>
				<option value='5:00pm'>5:00pm</option>
				<option value='5:30pm'>5:30pm</option>
				<option value='6:00pm'>6:00pm</option>
				<option value='6:30pm'>6:30pm</option>
				<option value='7:00pm'>7:00pm</option>
				<option value='7:30pm'>7:30pm</option>
				<option value='8:00pm'>8:00pm</option>
				<option value='8:30pm'>8:30pm</option>
				<option value='9:00pm'>9:00pm</option>
				<option value='9:30pm'>9:30pm</option>
				<option value='10:00pm'>10:00pm</option>
	</select>
</div>
<div id="w">
	<select name="wednesday[]" multiple="multiple">
				<option value='7:00am'>7:00am</option>
				<option value='7:30am'>7:30am</option>
				<option value='8:00am'>8:00am</option>
				<option value='8:30am'>8:30am</option>
				<option value='9:00am'>9:00am</option>
				<option value='9:30am'>9:30am</option>
				<option value='10:00am'>10:00am</option>
				<option value='10:30am'>10:30am</option>
				<option value='11:00am'>11:00am</option>
				<option value='11:30am'>11:30am</option>
				<option value='12:00pm'>12:00pm</option>
				<option value='12:30pm'>12:30pm</option>
				<option value='1:00pm'>1:00pm</option>
				<option value='1:30pm'>1:30pm</option>
				<option value='2:00pm'>2:00pm</option>
				<option value='2:30pm'>2:30pm</option>
				<option value='3:00pm'>3:00pm</option>
				<option value='3:30pm'>3:30pm</option>
				<option value='4:00pm'>4:00pm</option>
				<option value='4:30pm'>4:30pm</option>
				<option value='5:00pm'>5:00pm</option>
				<option value='5:30pm'>5:30pm</option>
				<option value='6:00pm'>6:00pm</option>
				<option value='6:30pm'>6:30pm</option>
				<option value='7:00pm'>7:00pm</option>
				<option value='7:30pm'>7:30pm</option>
				<option value='8:00pm'>8:00pm</option>
				<option value='8:30pm'>8:30pm</option>
				<option value='9:00pm'>9:00pm</option>
				<option value='9:30pm'>9:30pm</option>
				<option value='10:00pm'>10:00pm</option>
	</select>
</div>
<div id="th">
	<select name="thursday[]" multiple="multiple">
				<option value='7:00am'>7:00am</option>
				<option value='7:30am'>7:30am</option>
				<option value='8:00am'>8:00am</option>
				<option value='8:30am'>8:30am</option>
				<option value='9:00am'>9:00am</option>
				<option value='9:30am'>9:30am</option>
				<option value='10:00am'>10:00am</option>
				<option value='10:30am'>10:30am</option>
				<option value='11:00am'>11:00am</option>
				<option value='11:30am'>11:30am</option>
				<option value='12:00pm'>12:00pm</option>
				<option value='12:30pm'>12:30pm</option>
				<option value='1:00pm'>1:00pm</option>
				<option value='1:30pm'>1:30pm</option>
				<option value='2:00pm'>2:00pm</option>
				<option value='2:30pm'>2:30pm</option>
				<option value='3:00pm'>3:00pm</option>
				<option value='3:30pm'>3:30pm</option>
				<option value='4:00pm'>4:00pm</option>
				<option value='4:30pm'>4:30pm</option>
				<option value='5:00pm'>5:00pm</option>
				<option value='5:30pm'>5:30pm</option>
				<option value='6:00pm'>6:00pm</option>
				<option value='6:30pm'>6:30pm</option>
				<option value='7:00pm'>7:00pm</option>
				<option value='7:30pm'>7:30pm</option>
				<option value='8:00pm'>8:00pm</option>
				<option value='8:30pm'>8:30pm</option>
				<option value='9:00pm'>9:00pm</option>
				<option value='9:30pm'>9:30pm</option>
				<option value='10:00pm'>10:00pm</option>
	</select>
</div>
<div id="f">
	<select name="friday[]" multiple="multiple">
				<option value='7:00am'>7:00am</option>
				<option value='7:30am'>7:30am</option>
				<option value='8:00am'>8:00am</option>
				<option value='8:30am'>8:30am</option>
				<option value='9:00am'>9:00am</option>
				<option value='9:30am'>9:30am</option>
				<option value='10:00am'>10:00am</option>
				<option value='10:30am'>10:30am</option>
				<option value='11:00am'>11:00am</option>
				<option value='11:30am'>11:30am</option>
				<option value='12:00pm'>12:00pm</option>
				<option value='12:30pm'>12:30pm</option>
				<option value='1:00pm'>1:00pm</option>
				<option value='1:30pm'>1:30pm</option>
				<option value='2:00pm'>2:00pm</option>
				<option value='2:30pm'>2:30pm</option>
				<option value='3:00pm'>3:00pm</option>
				<option value='3:30pm'>3:30pm</option>
				<option value='4:00pm'>4:00pm</option>
				<option value='4:30pm'>4:30pm</option>
				<option value='5:00pm'>5:00pm</option>
				<option value='5:30pm'>5:30pm</option>
				<option value='6:00pm'>6:00pm</option>
				<option value='6:30pm'>6:30pm</option>
				<option value='7:00pm'>7:00pm</option>
				<option value='7:30pm'>7:30pm</option>
				<option value='8:00pm'>8:00pm</option>
				<option value='8:30pm'>8:30pm</option>
				<option value='9:00pm'>9:00pm</option>
				<option value='9:30pm'>9:30pm</option>
				<option value='10:00pm'>10:00pm</option>
	</select>
</div>
<div class="end">
		<input type="reset" value="Reset" />
		<input type="submit" name="submit" value="Submit" />
</div>
</form>

<?php
$day_count = 1;

echo "<ul id='daysselect'>";
while ($count>0){
//echo "<li>null</li>";
$count = $count-1;
$day_count++;
}



?>

</div>
<!--  END of CONTENT LAYOUT-->

<!-- START of FOOTER LAYOUT-->
<?php  readfile("../footer.inc"); ?>
<!-- END of FOOTER LAYOUT-->



</div>
<!--  END of CONTAINER-->
</body>
</html>
