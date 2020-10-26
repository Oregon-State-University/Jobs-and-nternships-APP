
<body id="container">
			
		


			
	
<?php
 
session_start();

 

if(isset($_SESSION['email']) )
{

echo " Welcome, " .					     $_SESSION['firstName'];
echo "  " . 							 $_SESSION['lastName'] . "<br/> ";
echo " <br/>Experiences:<br/> " . 		 $_SESSION['experiences'] . "<br/>";
echo " <br/>" .							 $_SESSION['major'] . "<br/>";
echo "<br/> " . 						 $_SESSION['email'] . "<br/>";
echo "<br/> " .							 $_SESSION['degree'] . "<br/>";
echo "<br/>GPA :" . 					 $_SESSION['major'] . "<br/>";
echo "  " . 							 $_SESSION['city'] ;
echo ", " . 							 $_SESSION['state'] . "<br/>";


}

else
{

include_once('header1.php');	
?>


<b> Thank you ! <br> we are looking forward to your next visit <br>         Goodbuy </b>
 
<?php
}
?>

	</body>