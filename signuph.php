<!DOCTYPE html>
<html>
<head>
	<title> signup</title>
</head>
<body>
 <?php
include_once('signup.php');
 ?>


<div id="content-wrapper">

<fieldset>
<legend> Sign Up </legend>
 
<form method="post" action="signup.php">
<table class="signup_table">

<tr>
<td> <label for="firstName"> First Name: </label> </td>
<td>
<input type="text" name="firstName" id="firstName" value="<?php if(!empty($firstName)) echo $firstName; ?>" required="required" />
<span id="firstNamex" class="error"> <?= $firstNamex ?> </span>
</td>
</tr>

<tr>
<td> <label for="middleName"> Middle Name: </label> </td>
<td>
<input type="text" name="middleName" id="middleName" value="<?php if(!empty($middleName)) echo $middleName; ?>" required="required" />
<span id="middleNamex" class="error"> <?= $middleNamex ?> </span>
</td>
</tr>
<tr>
<td> <label for="lastName"> Last Name: </label> </td>
<td>
<input type="text" name="lastName" id="lastName" value="<?php if(!empty($lastName)) echo $lastName; ?>" required="required" />
<span id="lastNamex" class="error"> <?= $lastNamex ?> </span>
</td>
</tr>


<tr>
<td> <label for="email"> Email: </label> </td>
<td>
<input type="email" name="email" id="email" value="<?php if(!empty($email)) echo $email; ?>" required="required" />
<span id="emailx" class="error"> <?= $emailx ?> </span>
</td>
</tr>

<tr>
<td> <label for="password"> Password: </label> </td>
<td>
<input type="password" id="password" name="password" required="required" />
<span id="passwordx" class="error"> <?= $passwordx ?> </span>
</td>
</tr>

<tr>
<td> <label for="confirm_password"> Confirm Password: </label> </td>
<td>
<input type="password" id="confirm_password" name="confirm_Password" required="required" />
<span id="confirm_Passwordx" class="error"> <?= $confirm_Passwordx ?> </span>
</td>
</tr>


<tr>
<td> <label for="experiences"> Experiences: </label> </td>
<td>

<textarea   rows="10" cols="60"  type="text" name="experiences" id="experiences" value="<?php if(!empty($experiences)) echo $experiences; ?>" required="required" placeholder=" What are you passionate about? What are you looking for, Is it job or internship? What are your experiences or skills?" ></textarea>
<span id="experiencesx" class="error"> <?= $experiencesx ?> </span>
</td>
</tr>

<tr>
<td> <label for="age"> Age: </label> </td>
<td>
<input type="text" name="age" id="age" value="<?php if(!empty($age)) echo $age; ?>" required="required" />
<span id="agex" class="error"> <?= $agex ?> </span>
</td>
</tr>
<tr>
<td> <label for="gender"> Gender: </label> </td>
<td>
<input type="text" name="gender" id="gender" value="<?php if(!empty($gender)) echo $gender; ?>" required="required" />
<span id="genderx" class="error"> <?= $genderx ?> </span>
</td>
</tr>



<tr>
<td> <label for="phoneNo"> Phone Number: </label> </td>
<td>
<input type="phoneNo" name="phoneNo" id="phoneNo" value="<?php if(!empty($phoneNo)) echo $phoneNo; ?>" required="required" />
<span id="phoneNox" class="error"> <?= $phoneNox ?> </span>
</td>
</tr>

<tr>
<td> <label for="adr1"> Addres 1: </label> </td>
<td>
<input type="adr1" id="adr1" name="adr1" required="required" />
<span id="adr1x" class="error"> <?= $adr1x ?> </span>
</td>
</tr>

<tr>
<td> <label for="adr2"> Addres 2: </label> </td>
<td>
<input type="adr2" id="adr2" name="adr2" required="required" />
<span id="adr2x" class="error"> <?= $adr2x ?> </span>
</td>
</tr>


<tr>
<td> <label for="city"> City : </label> </td>
<td>
<input type="text" name="city" id="city" value="<?php if(!empty($city)) echo $city; ?>" required="required" />
<span id="cityx" class="error"> <?= $cityx ?> </span>
</td>
</tr>

<tr>
<td> <label for="state"> State: </label> </td>
<td>
<input type="text" name="state" id="state" value="<?php if(!empty($state)) echo $state; ?>" required="required" />
<span id="statex" class="error"> <?= $statex ?> </span>
</td>
</tr>
<tr>
<td> <label for="zip"> Zip Code: </label> </td>
<td>
<input type="text" name="zip" id="zip" value="<?php if(!empty($zip)) echo $zip; ?>" required="required" />
<span id="zipx" class="error"> <?= $zipx ?> </span>
</td>
</tr>


<tr>
<td> <label for="major"> Major: </label> </td>
<td>
<input type="text" name="major" id="major" value="<?php if(!empty($major)) echo $major; ?>" required="required" />
<span id="majorx" class="error"> <?= $majorx ?> </span>
</td>
</tr>

<tr>
<td> <label for="gpa"> GPA: </label> </td>
<td>
<input type="text" name="gpa" id="gpa" value="<?php if(!empty($gpa)) echo $gpa; ?>" required="required" />
<span id="gpax" class="error"> <?= $gpax ?> </span>
</td>
</tr>
<tr>
<td> <label for="degree"> Degree: </label> </td>
<td>
<input type="text" name="degree" id="degree" value="<?php if(!empty($degree)) echo $degree; ?>" required="required" />
<span id="degreex" class="error"> <?= $degreex ?> </span>
</td>
</tr>



<tr>
<td> <label for="startYear"> Start Year: </label> </td>
<td>
<input type="date" id="startYear" name="startYear" required="required" />
<span id="startYearx" class="error"> <?= $startYearx ?> </span>
</td>
</tr>

<tr>
<td> <label for="graduateYear"> Graduate Year : </label> </td>
<td>
<input type="date" id="graduateYear" name="graduateYear" required="required" />
<span id="graduateYearx" class="error"> <?= $graduateYearx ?> </span>
</td>
</tr>

<tr>
<td> <input type="submit" name="submit" value="Sign Up" id="signup_btn" /> </td>
</tr>
</table>
</form>
</fieldset>




</body>
</html>