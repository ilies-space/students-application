<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="SignUp.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <div class="form"> 
    <form action="func_singup.php" method="post">

        <center>
        
        <label for="matricule"><b>Matricule : </b></label>
        <input id="a" type="text" placeholder="Attestation De Scolarité" name="matricule" required>

        </br>

        <label for="fullname"><b>Full Name : </b></label>
        <input id="a" type="text" placeholder="Alex Jane" name="full_name" required>

        </br>

        <label for="email"><b>Email</b></label>
        <input id="a" type="email" placeholder="xyz@gmail.com" name="email" required>

        </br>

        <label for="password"><b>Mot De Passe :</b></label>
        <input id="a" type="password" placeholder="Password..." name="password" required>

        </br>

        <label for="filiere"><b>filiere :</b></label>
        <input id="a" type="text" placeholder="MI ou SM" name="filiere" required>

    
        
        
     
        </br>



        <label for="moiyenne_math"><b>Moyenne Math Ou Phy :</b></label>
        <input id="a" type="text" placeholder="Dépend De filiere" name="moiyenne_math" required>
      

        <label for="moiyenne_info"><b>Moyenne Info Ou Chim : </b></label>
        <input id="a" type="text" placeholder="Dépend De filiere" name="moiyenne_info" required>

        </br>

        <label for="speciality_favorable"><b>Specialité Favorable : </b></label>
        <input id="a" type="text" placeholder="Math, Info, Chimie, Physique" name="speciality_favorable" required>

       
        
        </br>
        <input onclick="window.location.href = 'profile.html';" class="Envoyer" type="submit">

        </center>
    </form>
    </div>
</body>
</html>