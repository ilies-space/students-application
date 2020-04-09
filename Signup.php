<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Signup.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form"> 
    <form action="func_singup.php" method="post">

        <center>
        
        <label for="matricule"><b>Matricule : </b></label>
        <input id="a" type="text" placeholder="Matricule De Attestation De Scolarité" name="matricule" required>

        </br>

        <label for="fullname"><b>Full Name : </b></label>
        <input id="a" type="text" placeholder="Entrez Nom et Prénom" name="full_name" required>

        </br>

        <label for="email"><b>Email</b></label>
        <input id="a" type="email" placeholder="Enter Email" name="email" required>

        </br>

        <label for="password"><b>Password :</b></label>
        <input id="a" type="password" placeholder="Enter Email" name="password" required>

        </br>
        <!-- HNA MAHICH TAKHDEM
        KHADMET KHATRA WSAYER SAME CODE YAZEH-->
        <input type="radio" name="filiere" value="MI">
        <label for="MI"><b>Math Info</b></label><br>
        <input type="radio" name="filiere" value="SM">
        <label for="MI"><b>Science De La Matière</b></label>
        
        </br>
        <!-- HTA LAHNA RADIO -->
        
        <label for="moy_math"><b>Moyenne Unité Math : </b></label>
        <input id="a" type="text" placeholder="Moy Unité Math" name="moiyenne_math" required>

        </br>

        <label for="moy_info"><b>Moyenne Unité Info : </b></label>
        <input id="a" type="text" placeholder="Moy Unité Info" name="moiyenne_info" required>

        </br>

        <!-- HADI MAKHREBTCH GA3 FIHA
        HADI TANI RADIO BSH YKHOS CONDITION
        IF FILIERE == MATH AFFICHER MATH OU INFO
        SINON AFFICHER PHYSIQUE OU SM
        Wa9ILA TENDAR B JQUERY
         -->
        <label for="MI"><b>Choix Favorable : </b></label><br>
        <input name="speciality_favorable" type="radio" value="Math">
        <label for="MI"><b>Mathématique</b></label><br>
        <input name="speciality_favorable" type="radio" value="Info">
        <label for="MI"><b>Informatique</b></label>

        </br>
        <input class="Envoyer" type="submit">
     

        </center>
    </form>
    </div>
</body>
</html>