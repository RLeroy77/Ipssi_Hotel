<?php
// Démarrer la session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Connexion - Gestion Hôtellerie</title>
    <style>
        body {
            background-color: #f5f5dc; 
            display: flex; 
            flex-direction: column;
            min-height: 100vh; 
        }
        .text-brown {
            color: #8B4513; 
        }
        .card-custom {
            background-color: #d8c4a0; 
            border: none; 
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<main class="container flex-grow-1">
    <h2 class="text-center mb-4 text-brown">Connexion</h2>

    <div class="container">
        <form method="post" action="../fonction.php" class="card shadow-sm card-custom p-4" style="border-radius: 10px;">
            <div class="form-group mb-3">
                <label for="">Login</label>
                <input type="text" class="form-control" name="login" required>
            </div>

            <div class="form-group mb-3">
                <label for="">Mot de passe</label>
                <input type="password" class="form-control" name="mdp" required>
            </div>
            
            <button type="submit" class="btn btn-custom mt-3">Connexion</button>
        </form>
    </div>
</main>

<?php include 'footer.php'; ?>

</body>
</html>
