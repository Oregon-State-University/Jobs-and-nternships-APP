

<?php

include_once('header.php');

 
$conn = new mysqli('localhost', 'root', '', 'hiring');

session_start();

if(isset($_SESSION['email']))
header("Location: Account.php");


$show_form = false;


$passwordx = $confirm_Passwordx = $firstNamex = $middleNamex = $lastNamex = $emailx = $experiencesx = $agex = $genderx = $phoneNox = $adr1x = $adr2x = $cityx = $statex = $zipx = $majorx = $gpax = $degreex = $startYearx = $graduateYearx = '' ;


if($_SERVER["REQUEST_METHOD"] == "POST") {

if(isset($_POST['submit'])){


extract($_POST);

if(empty($email)){
$emailx = "Please fill out email";
$show_form = true;
}
else {
$email = ($email);
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
$emailx = "Invalid email format";
$show_form = true;
}
}

if(empty($password)){
$passwordx = "Please fill out this field" ;
$show_form = true;
}

if(empty($confirm_Password)){
$confirm_Passwordx = "Please fill out this field" ;
$show_form = true;
}


if(empty($firstName)){
$firstNamex = "Please enter valid name";
$show_form = true;
}

if(empty($middleName)){
$middleNamex = "Please enter valid name";
$show_form = true;
}

if(empty($lastName)){
$lastNamex = "Please enter valid name";
$show_form = true;
}

if(empty($experiences)){
$experiencesx = "Please enter your experiences";
$show_form = true;
}

if(empty($age)){
$agex = "Please enter your Age";
$show_form = true;
}

if(empty($gender)){
$genderx = "Please enter your Gender";
$show_form = true;
}

if(empty($phoneNo)){
$phoneNox = "Please enter valid Phone Number";
$show_form = true;
}

if(empty($adr1)){
$adr1x = "Please enter your Addres";
$show_form = true;
}
if(empty($adr2)){
$adr2x = "Please enter valid Addres";
$show_form = true;
}

if(empty($city)){
$cityx = "Please enter valid City";
$show_form = true;
}

if(empty($state)){
$statex = "Please enter your State";
$show_form = true;
}

if(empty($zip)){
$zipx = "Please enter your Zip Code";
$show_form = true;
}
if(empty($major)){
$majorx = "Please enter Your Major";
$show_form = true;
}

if(empty($gpa)){
$gpax = "Please enter your GPA";
$show_form = true;
}

if(empty($degree)){
$degreex = "Please enter Your Degree";
$show_form = true;
}

if(empty($startYear)){
$startYearx = "Please enter the Year ";
$show_form = true;
}


if(empty($graduateYear)){
$graduateYearx = "Please enter the Year ";
$show_form = true;
}



if( $password !== $confirm_Password){
$passwordx = "Passwords do not match" ;
$confirm_Passwordx = "Passwords do not match";
$show_form = true;
}

if((!empty($email)) && (!empty($password))   && (!empty($confirm_Password)) && ($password === $confirm_Password) && 
	(!empty($firstName)) && (!empty($middleName)) && (!empty($lastName)) && (!empty($experiences)) && (!empty($age)) && 
	(!empty($gender)) && (!empty($phoneNo)) && (!empty($adr1)) && (!empty($adr2)) && (!empty($city)) && (!empty($state)) && (!empty($zip)) && (!empty($major)) && (!empty($gpa)) && (!empty($degree)) && (!empty($startYear)) && (!empty($graduateYear))  && (!$show_form) ){


$query = "SELECT * FROM students WHERE email = '$email' ";
$result = $conn->query($query);

if($result->num_rows == 0){
$password = sha1($password);

$insert = "INSERT INTO students (password, firstName, middleName, lastName, email, experiences, age, gender, phoneNo, adr1, adr2, city, state, zip, major, gpa, degree, startYear, graduateYear) VALUES ('$password','$firstName', '$middleName', '$lastName', '$email', '$experiences', '$age', '$gender','$phoneNo', '$adr1', '$adr2', '$city', '$state', '$zip', '$major','$gpa', '$degree', '$startYear', '$graduateYear')" ;

if($conn->query($insert) === TRUE){
echo "Signed up successfully. You can now <a href='login.php'> login </a> to your account";
}

}
else { $emailx = "Entered email/username is already registered";
$show_form = true;
}

} else {
$show_form = true;
}

}  
}

 
else
$show_form = true ;

 
if( $show_form ){
?>


<?php
}

?>