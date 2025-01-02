<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion réussie</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
            width: 100%;
        }
        h1 {
            color: #28a745;
            font-size: 2em;
        }
        p {
            font-size: 1.2em;
            margin-top: 20px;
        }
        .btn {
            margin-top: 30px;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Connexion réussie</h1>
    <p>Vous êtes maintenant bien connecté à votre compte !</p>
    <p>Bienvenue parmi nous. Vous pouvez commencer à explorer vos options.</p>
    

        <a class = "btn" href = "/deconnect">Deconnecter</a>

        <a class = "btn" href = "/update">modifier mdp</a>
    </div>

</body>
</html>
