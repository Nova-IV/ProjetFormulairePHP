<?php
require_once 'controller/controllerForm.php';

$formData = handleForm();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire PHP</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>
        <h1>Formulaire <span>PHP</span> admin</h1>
    </header>
    <div class="container">
        <!-- Section des messages -->
        <?php if ($formData && !$formData['error']): ?>
            <div class="message">
                <span>✔</span> Admin : <?= $formData['admin'] ? '1' : '0' ?><br>
                <span>✔</span> Login : <?= $formData['login'] ?><br>
                <span>✔</span> Password (hashé) : <?= $formData['password_hashed'] ?>
            </div>
        <?php elseif ($formData && $formData['error']): ?>
            <div class="message" style="color: red;">
                <span>✖</span> Veuillez remplir tous les champs.
            </div>
        <?php endif; ?>

        <!-- Section du formulaire -->
        <form method="POST" action="">
            <fieldset>
                <legend>Remplir les champs</legend>
                <label for="login">Login</label>
                <input type="text" id="login" name="login" placeholder="Votre login" aria-required required>
                
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Votre mot de passe" aria-required required>
                
                <label>
                    <input type="checkbox" name="admin"> Vous êtes admin 🔒
                </label>
                
                <button type="submit">Envoyer</button>
            </fieldset>
        </form>
    </div>
    <footer>
        <p>&copy; 2025 - Projet Formulaire PHP</p>
    </footer>
</body>
</html>