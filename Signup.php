<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="func_singup.php" method="post">

        <label for="matricule"><b>Matricule : </b></label>
        <input type="text" placeholder="Matricule De Attestation De Scolarité" name="matricule" required>

        </br>

        <label for="fullname"><b>Full Name : </b></label>
        <input type="text" placeholder="Entrez Nom et Prénom" name="full_name" required>

        </br>

        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>

        </br>

        <label for="password"><b>Password :</b></label>
        <input type="password" placeholder="Enter Email" name="password" required>

        </br>

        <label for="MI"><b>MI</b></label>
        <input type="text"  name="filiere" >


        </br>

        <label for="moy_math"><b>Moyenne Unité Math : </b></label>
        <input type="text" placeholder="Moy Unité Math" name="moiyenne_math" required>

        </br>

        <label for="moy_info"><b>Moyenne Unité Info : </b></label>
        <input type="text" placeholder="Moy Unité Info" name="moiyenne_info" required>

        </br>

        <label for="Math"><b>Math</b></label>
        <input type="text"  name="speciality_favorable" >


        </br>
        <input type="submit">
    </form>
</body>
</html>