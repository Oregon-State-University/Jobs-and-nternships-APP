
<?php

include_once('header.php');
include_once('loginh.php');
 
$conn = new mysqli('localhost', 'root', '', 'hiring');

 
session_start();

 
if(isset($_SESSION['email']))
header("Location: Account.php");


 
$show_form = false;
$login_result = $emailx = $passwordx = '' ;

if($_SERVER["REQUEST_METHOD"] == "POST"){
if(isset($_POST["submit"])){

extract($_POST);

 
if(empty($email)){
$emailx = "Please fill out email";
$show_form = true;
} else {
$email = ($email);
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
$emailx = "Invalid email format";
$show_form = true;
}
}

 
if(empty($password)){
$passwordx = "Please fill out the password";
$show_form = true;
}

 
if( (!empty($email)) && (!empty($password)) && (!$show_form)){
$password = sha1($password);

 
$search = " SELECT * FROM students WHERE email = '$email' AND password = '$password' ";
$result = $conn->query($search);


 
if($result->num_rows == 1){

 
$row = $result->fetch_assoc();

$_SESSION['email'] = $row['email'];
$_SESSION['firstName'] = $row['firstName'];
$_SESSION['middleName'] = $row['middleName'];
$_SESSION['lastName'] = $row['lastName'];
$_SESSION['experiences'] = $row['experiences'];

$_SESSION['major'] = $row['major'];
$_SESSION['degree'] = $row['degree'];
$_SESSION['gpa'] = $row['gpa'];
$_SESSION['city'] = $row['city'];
$_SESSION['state'] = $row['state'];






header("Location: Account.php");
$conn->close();
} else { echo "There's some problem logging you in. We are sorry for the inconvience"; }

} else{
$login_result = "Invalid credentials" ;
$show_form = true;
}

}  

}  
else {
$show_form = true;
}

if($show_form){
?>

<div class="error">
	
<?php echo $login_result; ?>
</div>

<?php
}

 
?>

</div>  