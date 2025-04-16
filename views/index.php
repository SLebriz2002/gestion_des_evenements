<?php require_once __DIR__ . '/layout/header.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Système de Gestion des Événements</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #eef2f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 60px auto;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            text-align: center;
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 30px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav li {
            margin: 20px 0;
        }

        nav a {
            text-decoration: none;
            color: #3498db;
            font-weight: 500;
            font-size: 18px;
            padding: 12px 24px;
            border: 2px solid #3498db;
            border-radius: 8px;
            transition: all 0.3s ease-in-out;
            display: inline-block;
        }

        nav a:hover {
            background-color: #3498db;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            nav a {
                display: block;
                width: 100%;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bienvenue dans le Système de Gestion des Événements</h1>

        <nav>
            <ul>
                <li><a href="events/create_event.php">Créer un événement</a></li>
                <li><a href="participants/register_participant.php">Inscrire un participant</a></li>
                <li><a href="events/list_events.php">Liste des événements</a></li>
                <li><a href="inscriptions/list_inscriptions.php">Liste des inscriptions</a></li>
            </ul>
        </nav>
    </div>
    <?php require_once __DIR__ . '/layout/footer.php'; ?>
</body>
</html>



