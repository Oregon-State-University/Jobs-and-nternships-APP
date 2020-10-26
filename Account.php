<!DOCTYPE html>
<html>
<head>
	<title> Account </title>




<?php 
include_once('header1.php');

include_once('link.php');


?>
<div id="account">
<div class="col-lg-6 col-sm-6">
    <div class="card hovercard">
        
        <div class="useravatar">
          
        </div>
        <div class="card-info"> <span class="card-title">
        	<?php 
include_once('index.php');

        	echo $_SESSION['firstName']." ".$_SESSION['lastName']; ?></span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" >
        <div class="btn-group" >
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab">
            	
                <div class="hidden-xs">Profile</div>
            </button>
        </div>
        
    </div>

        <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <table class="table">
          	<tr>
          		<td>Name</td>
          		<td><?php 
          		include_once('index.php');

          		echo $_SESSION['firstName'] . " " . $_SESSION['lastName']; ?></td>
          	</tr>
          	
          	<tr>
          		<td>Experiences</td>
          		<td><?php
          		include_once('index.php');
          		 echo $_SESSION['experiences']; ?></td>
          	</tr>
          	<tr>
          		<td>Email</td>
          		<td><?php 
          		include_once('index.php');

          		echo $_SESSION['email']; ?></td>
          	</tr>

			<tr>
          		<td>Major</td>
          		<td><?php
          		include_once('index.php');
          		 echo $_SESSION['major']; ?></td>
          	</tr>

          	<tr>
          		<td>GPA</td>
          		<td><?php
          		include_once('index.php');
          		 echo $_SESSION['gpa']; ?></td>
          	</tr>


          	<tr>
          		<td>Degree</td>
          		<td><?php 
          		include_once('index.php');

          		echo $_SESSION['degree']; ?></td>
          	</tr>


          	<tr>
          		<td>Addres</td>
          		<td><?php
          		include_once('index.php');
          		 echo $_SESSION['city'] . "," . $_SESSION['state']; ?></td>
          	</tr>
          

          </table>
        </div>
        
      </div>
    </div>
    
    </div>
    </div> 




<div class="categories">
			<h2>JOBS</h2>
			<ul>
				<li><a href="https://jobs.oregonstate.edu/postings/95336">Pharmacy Assistant- Cashier </a></li>
				<li><a href="https://jobs.oregonstate.edu/postings/95327">Motorcycle Safety Instructor - 2020 Pool</a></li>
				<li><a href="https://jobs.oregonstate.edu/postings/95325">Maintenance Support</a></li>
				<li><a href="https://jobs.oregonstate.edu/postings/95323"> WGC Student Success Peer Facilitator</a></li>
				<li><a href="https://jobs.oregonstate.edu/postings/95315">OIS Office Assistant</a></li>
			</ul>
		</div>
<br>

<div class="categories">
			<h2>INTRENSHEPS</h2>
			<ul>
				<li><a href="https://jobs.oregonstate.edu/postings/95263">Instructor Pool: 2020/2021</a></li>
				<li><a href="https://jobs.oregonstate.edu/postings/95175">Soil Health Lab Manager</a></li>
				<li><a href="https://jobs.oregonstate.edu/postings/94802">Faculty Research Assistant
</a></li>
				<li><a href="https://jobs.oregonstate.edu/postings/91505">Instructor Pool - 2020/2021: Women, Gender, and Sexuality Studies</a></li>
				<li><a href="https://jobs.oregonstate.edu/postings/90321">NWREC Nursery Program Student Intern</a></li>
			</ul>
		</div>