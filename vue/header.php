<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Gestion Hôtellerie</title>
        <style>
        /* Global Styles */
        body {
            background-color: #f5f5dc; 
            display: flex; 
            flex-direction: column;
            min-height: 100vh; 
        }

        /* Header Styles */
        header {
            background-color: #8B4513; 
            color: #ffffff;
        }

        header a {
            color: #ffffff;
            text-decoration: none;
        }

        /* Navigation Styles */
        .nav-link {
            color: #ffffff !important;
            font-size: 1.1rem;
            font-weight: bold;
        }

        .nav-link:hover {
            color: #FFD700 !important; 
        }

        .nav-item {
            margin-left: 15px;
        }

        /* Footer Styles */
        footer {
            background-color: #8B4513; 
            margin-top: auto; 
        }

        /* Text Color */
        .text-brown {
            color: #8B4513; 
        }

        /* Card Styles */
        .card-custom {
            background-color: #d8c4a0; 
            border: none; 
        }

        /* Button Styles */
        .btn-custom {
            background-color: #8b5b29; 
            color: white; 
            border: none; 
        }

        .btn-custom:hover {
            background-color: #7a4a25; 
        }

        .btn-warning {
            background-color: #d9534f; 
            color: white; 
            border: none; 
        }

        .btn-warning:hover {
            background-color: #c9302c; 
        }
    </style>
</head>
<body>

<header class="p-4 mb-3 shadow">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="h3 m-0"><a href="." class="text-decoration-none">Gestion Hôtellerie</a></h1>

            <nav class="d-flex align-items-center">
                <ul class="nav">
                    <?php if (isset($_SESSION['user'])): ?>
                        <?php if ($_SESSION['user']['role'] == "administrateur"): ?>
                            <li class="nav-item">
                                <a href="chambre.php?action=ajouter" class="nav-link btn btn-outline-light">Ajouter Chambre</a>
                            </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a href="reservation.php?action=lister" class="nav-link btn btn-outline-light">Liste Réservations</a>
                        </li>
                        <li class="nav-item">
                            <a href="fonction.php?action=logout" class="nav-link btn btn-outline-danger">Déconnexion</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a href="vue/connexion.php" class="nav-link btn btn-outline-light">Connexion</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
</header>

<main class="container flex-grow-1">
