<?php


session_strate();



$username = trim($_POST['email']);
$password = trim($_POST['pass']);


$servername = "localhost";
$username = "host";
$password = "Liao19961124..";
$dbname = "user";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connect error: " . $conn->connect_error);
} 

$useremail = "SELECT 'email' FROM 'userl' WHERE 'email' = '$username' AND 'password' = '$password'";
$userpw = "SELECT 'password' FROM 'userl' WHERE 'email' = '$username' AND 'password' = '$password'";

if(($username == '') || ($password == '')){
	header('refresh:3; url=home.html');
	echo"email or password cannot be empty. go back to home page in 3 seconds. please login again.";
	exit;
}

elseif (($username != $useremail) || ($password != $userpw)){
	header('refresh:3; url=home.html');
	echo"email or password is wrong. go back to home page in 3 seconds. please login again.";
	exit;
}

else{
	$_SESSION['username'] = $username;
	$_SESSION['islogin'] = 1

	header('refresh:3; url=home.html');

}

?>
