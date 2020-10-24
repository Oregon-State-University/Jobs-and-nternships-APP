<?php

session_start();
unset($_SESSION['username']);
unset($_SESSION['islogin']);
header('refresh:3; url=home.html');

?>