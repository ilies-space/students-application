<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'students-application');

$matricule = $_POST['matricule'];
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$filiere = $_POST['filiere'];
$moiyenne_math = $_POST['moiyenne_math'];
$moiyenne_info = $_POST['moiyenne_info'];
$speciality_favorable = $_POST['speciality_favorable'];


//look if user already exist or not
$s = " select * from students where email ='$email'";

$result = mysqli_query ($con,$s);

$num = mysqli_num_rows($result);

//if user already exist
if ($num == 1)
{
	//HNA TEDIK L SINGUP TREFRESHIHA WSAYER
	$message= "utilisateur existe deja";
	echo "<SCRIPT type='text/javascript'>
				alert('$message');
				window.location.replace(\"http://localhost/students-application/index.html\");
				</SCRIPT>";
}
//add current user to database :


else
{
	// HNA TEDIK LEL PAGE PROFILE NORMALEMENT 
	$reg = "insert into students (matricule ,full_name,email,password,filiere,moiyenne_math,moiyenne_info,speciality_favorable) 
  values ('$matricule','$full_name','$email','$password','$filiere','$moiyenne_math','$moiyenne_info',$speciality_favorable)";
	mysqli_query($con,$reg);
	$message="Inscription reussi";
	echo "<SCRIPT type='text/javascript'>
				alert('$message');
				window.location.replace(\"http://localhost/students-application/index.html\");
				</SCRIPT>";
}


?>
