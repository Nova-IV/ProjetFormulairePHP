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
        <form method="get" action="traitement.php">
            <label>
                <input type="checkbox" name="admin" value="1"> Vous admin
            </label>
        <button type="submit">Envoyer</button>

        <?php

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
                $admin = isset($_POST['admin']) ? 1 : 0;

                print "<p>Valeur à enregistrer en base : " . $admin."</p>";
            }
        ?>
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