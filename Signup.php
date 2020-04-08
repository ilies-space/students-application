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
        <!-- HNA MAHICH TAKHDEM
        KHADMET KHATRA WSAYER SAME CODE YAZEH-->
        <input name="filiere" type="radio" value="MI">Math Info<br>

        <input name="filiere" type="radio" value="SM">Science De La Matiere<br>
        </br>

        <label for="moy_math"><b>Moyenne Unité Math : </b></label>
        <input type="text" placeholder="Moy Unité Math" name="moiyenne_math" required>

        </br>

        <label for="moy_info"><b>Moyenne Unité Info : </b></label>
        <input type="text" placeholder="Moy Unité Info" name="moiyenne_info" required>

        </br>

        <!-- HADI MAKHREBTCH GA3 FIHA
        HADI TANI RADIO BSH YKHOS CONDITION
        IF FILIERE == MATH AFFICHER MATH OU INFO
        SINON AFFICHER PHYSIQUE OU SM
        Wa9ILA TENDAR B JQUERY
         -->
        <label for="Math"><b>Math</b></label>
        <input type="text"  name="speciality_favorable" >

        <label for="Info"><b>Info</b></label>
        <input type="text"  name="speciality_favorable" >

        </br>
        <input type="submit">
        
    </form>
</body>
</html>