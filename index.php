<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="./css/main.css">

</head>
<body>
    <header>
        <h1>Formulaire Admin</h1>
    </header>
    <main>
         
    <fieldset>
        <?php
            include_once 'controller/controllerForm.php';
            print "<p>Valeur à enregistrer en base : " . $admin."</p>";
        ?>
        
        <legend>
            Remplir les champs
        </legend>
        <form method="post" action="index.php">
            <label for="login">Login</label>
            <input type="email" name="login" id="login" placeholder="Votre Login" aria-required required>
            
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Votre mot de passe" aria-required required>

            <label>
                <input type="checkbox" name="admin" value="1"> Vous admin
            </label>
        <button type="submit">Envoyer</button>


    </form>
    </fieldset>

    </main>

    <footer>
        <p>
            $copy; - PHP - 2025
        </p>
    </footer>
</body>
</html>