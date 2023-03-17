<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/trash.css' rel='stylesheet'>
    <style>
        h1,h2{
            text-align: center;
        }
        .footer {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1rem;
            color: gray;
            text-align: center;
        }
        table{
            width: 600px;
        }
        form{
            width: 600px;
            margin: 30px auto 0;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        form button{
            width: 100px;
        }
    </style>
</head>
<body>
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" href="index.php">Index</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="actualizar.php">Actualizar</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="eliminar.php">Eliminar</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="consultar.php">Consultar</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
    </li>
    <li class="nav-item">
        <a class="nav-link"><?php
            echo date('j-m-Y G:i:s');
            ?></a>
    </li>

</ul>