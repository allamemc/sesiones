<?php
include('header.php');
require ('config.php');
?>

<h1>Login</h1>
<form action="" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introduzca el email" name="email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Introduzca la contraseña" name="password">
    </div>
    <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
    <small id="emailHelp" class="form-text text-muted">Si no tiene cuenta <a href="register.php">regístrese</a>.</small>
</form>

<?php

if (isset($_POST['enviar'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    try {
        $querys = "select * from colaboradores where correo = '{$email}' and password='{$password}'";
        $resultados = $conn->query($querys);
        if($resultados->rowCount() == 1){
            session_start();
            $_SESSION['token'] = 'user';
            echo "<div class='alert alert-success' role='alert' style='width: 600px; margin: 30px auto 0;'>
              Inicio Sesión correctamente!
            </div>";
            header('refresh:1; index.php');
        }else{
            echo "<div class='alert alert-danger' role='alert' style='width: 600px; margin: 30px auto 0;'>
              Email o contraseña inválidos!
            </div>";
        }
    } catch (PDOException $e) {
        print "<h1>Hubo un error</h1>";
        die();
    }


}

?>






<?php
include('footer.html');
?>
