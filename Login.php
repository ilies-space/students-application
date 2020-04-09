<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Login.css">
    <title>Login</title>
</head>


<body>
    <div class="form">
        <form action="func_login.php" method="post">
            <h1>Se Connecter</h1>
            <label for="email"><b>Email :</b></label>
            <input id="a" type="email" placeholder="Enter Email" name="email" required>

            </br>

            <label for="password"><b>Password :</b></label>
            <input id="a" type="password" placeholder="Enter Email" name="password" required>
        
            <br>
            <input class="Envoye" type="submit">
        </form>
    </div>
</body>
</html>