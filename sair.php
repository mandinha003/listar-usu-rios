<?php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Saída</title>
    <link rel="stylesheet" href="css/style.css">

    <style>
            body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #7182cf;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
 
        .container {
            text-align: center;
            padding: 24px 48px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 12px 16px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            transition: transform 0.3s ease;
        }
 
        h1 {
            font-size: 2.5rem;
            color: #132c9c; 
            margin-bottom: 20px;
        }
 
        p {
            font-size: 1.2rem;
            margin: 15px 0;
            line-height: 1.5;
        }
 
        .btn {
            display: inline-block;
            padding: 12px 30px;
            font-size: 1.2rem;
            background-color: #132c9c; 
            color: white;
            border-radius: 25px;
        }
 
        .btn:hover {
            transform: translateY(-3px);
        }
 

    </style>
</head>
<body>
    <div class="container">
        <h1>Obrigado por usar nossa aplicação!</h1>
        <p>Caso necessite de mais ajuda, estamos à disposição.</p>
        <a href="lista.php" class="btn">Retornar à página inicial</a>
    </div>
</body>
</html>