<!--
03/16/2016
AUTHOR: SEBASTIAN VELASQUEZ
final submission

FILE TYPE: calendar 
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sebastian Velasquez - Lab Assignment 2</title>
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
         case SUNDAY: $count=0;
         break;
         case MONDAY: $count=1;
         break;
         case TUESDAY: $count=2;
         break;
         case WEDNESDAY: $count=3;
         break;
         case THURSDAY: $count=4;
         break;
         case FRIDAY: $count=5;
         break;
         case SATURDAY: $count=6;
         break;
}

$days_in_month = cal_days_in_month(0,$month,$year);//want to find total days in a month and assign it to a variable
?>



<!-- displays the upper part of calendar, create
div tags for header of month, year etc being enclosed to keep intact
-->

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<label>student name:</label><input type="text" name="studentName" />
	<label>student email:</label><input type="text" name="studentEmail" />
	<input type="reset" value="Clear" />
	<input type="submit" name="Submit" value="Submit" />
<!-- </form> -->
<?php
if (isset($_POST['Submit']))
{
	$name = $_POST['studentName'];
	$email = $_POST['studentEmail'];
	$to = 'fcamach4@gmu.edu';
	$message = "Here is my availabilty to meet with you. $name";


	$sent = mail($to, 'Office Hour Scheduled',$message,$email);

	echo '<br />Email successfully sent to prof\'s email at fcamach4@gmu.edu!';
}

?>


<div id="month">
    <li class="prev"> Prev </li>
    <li class="next"> Next </li>
    <li class="name-month">
    	<?php echo  $name_month. ", ". $year; ?>
    </li>
</div>
<!-- END of upper month header-->


<!-- enclose week days in a div tag called weekdays -->
<div id="weekdays">
  <li>SUNDAY</li>
  <li>MONDAY</li>
  <li>TUESDAY</li>
  <li>WEDNESDAY</li>
  <li>THURSDAY</li>
  <li>FRIDAY</li>
  <li>SATURDAY</li>
</div>
<!-- END of div weekdays -->




<!-- display null/day of week field according to switch statement output  -->
<?php
$day_count = 1;

while ($count>0)
{
echo "<div id='days'>";
echo "<li>null</li>";
echo "</div>";
$count = $count-1;
$day_count++;

}







//display the start and end date of each week
$day_num = 1;

while($day_num <= $days_in_month)
{

$q = date("l", mktime(0,0,0,$month,$day_num,$year));

if (isset($_POST['monday'])){
$am = $_POST['monday'];
$amc = count($am);}

if (isset($_POST['tuesday'])){
$at = $_POST['tuesday'];
$atc = count($at);}

if (isset($_POST['wednesday'])){
$aw = $_POST['wednesday'];
$awc = count($aw);}

if (isset($_POST['thursday'])){
$ath = $_POST['thursday'];
$athc = count($ath);}

if (isset($_POST['friday'])){
$af = $_POST['friday'];
$afc = count($af);}

error_reporting(0);

echo "<div id='days'>";
	if($q==SUNDAY)
	{

		echo "<li>"  .$day_num. "</li>";
		echo "</div>";
	}


	if($q==MONDAY)
	{?>

		<!--<?php for($i=0; $i < $amc; $i++)?>-->
		 					<!--<span class='floatl'> <?php echo $am[$i];?></span>-->


		 			<li>
		 				<span class='floatl'> <?php
		 					for($i=0; $i < $amc; $i++){?>
		 						<input type = 'radio' Name ='mtime' value= "mt"/>

		 				<?php	echo $am[$i]."<br />";
		 				}?>
		 				</span>
		 				<?php echo $day_num;?>
		 			</li>
		 		</div>
<?php }



	if($q==TUESDAY)
	{?>
		<li>
		 				<span class='floatl'> <?php
		 					for($i=0; $i < $atc; $i++){?>
		 						<input type = 'radio' Name ='mtime' value= "tt"/>

		 				<?php	echo $at[$i]."<br />";
		 				}?>
		 				</span>
		 				<?php echo $day_num;?>
		 			</li>
		 		</div>
<?php }


	if($q==WEDNESDAY)
	{ ?>
		<li>
		 				<span class='floatl'> <?php
		 					for($i=0; $i < $awc; $i++){?>
		 						<input type = 'radio' Name ='mtime' value= "wt"/>

		 				<?php	echo $aw[$i]."<br />";
		 				}?>
		 				</span>
		 				<?php echo $day_num;?>
		 			</li>
		 		</div>
<?php }

	if($q==THURSDAY)
	{?>

		<li>
		 				<span class='floatl'> <?php
		 					for($i=0; $i < $athc; $i++){?>
		 						<input type = 'radio' Name ='mtime' value= "tht"/>

		 				<?php	echo $ath[$i]."<br />";
		 				}?>
		 				</span>
		 				<?php echo $day_num;?>
		 			</li>
		 		</div>
<?php }

	if($q==FRIDAY)
	{?>

		<li>
		 				<span class='floatl'> <?php
		 					for($i=0; $i < $afc; $i++){?>
		 						<input type = 'radio' Name ='mtime' value= "ft"/>

		 				<?php	echo $af[$i]."<br />";
		 				}?>
		 				</span>
		 				<?php echo $day_num;?>
		 			</li>
		 		</div>
<?php  }

	if($q==SATURDAY)
	{

		echo "<li>"  .$day_num. "</li>";
		echo "</div>";
	}


	//print_r($name)
	$day_num++;
	$day_count++;
	if($day_count >7){
	$day_count=1;
	}








//display next row of week
while ($day_count > 1 and $day_count <= 7){
	$day_count++;
}

//END OF LOOP OF DAYS OF WEEK IN MONTH
}

?>

</form>
</div>
<!--  END of CONTENT LAYOUT-->

<!-- START of FOOTER LAYOUT-->
<?php  readfile("../footer.inc"); ?>
<!-- END of FOOTER LAYOUT-->



</div>
<!--  END of CONTAINER-->
</body>
</html>
