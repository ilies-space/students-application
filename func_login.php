<?php

session_start();
//Conect to database :
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'myproject');
//-------------------

//var initialisation :
$password = $_POST['password'];
$email    = $_POST['email'];
//-------------------

//check if user exist :
$s      = " select * from users where email ='$email' && password = '$password' ";
$result = mysqli_query($con, $s);
$num    = mysqli_num_rows($result);
if ($num == 1) {

header('location:application_submited.php');

  //show alert message if user password wrong :
?>
<script> alert ("Vous avez entré des informations incorrectes (le compte n'existe pas)");

window.location.replace(\"http://localhost/students-application/index.html\");
</script>

<?php
}
//YKHOS NZIDO TA3 MOTDEPASSE INCORRECT
//-------------------
?>
