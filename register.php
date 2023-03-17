<?php
include('header.php');
require ('config.php');
?>

<h1>Register</h1>

<form action="" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introduzca el email" name="email" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Introduzca la contraseña" name="password" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Repita la contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Introduzca la contraseña" name="password2" required>
    </div>
    <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
    <small id="emailHelp" class="form-text text-muted">Si ya tiene cuenta <a href="login.php">inicie sesión</a>.</small>
</form>
<?php

if (isset($_POST['enviar'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
        try {
            $querys = "select * from colaboradores where correo = '{$email}'";
            $resultados = $conn->query($querys);
            if($resultados->rowCount() == 1){
                echo "<div class='alert alert-danger' role='alert' style='width: 600px; margin: 30px auto 0;'>
              El correo ya existe!
            </div>";
            }else{
                if ($password2 != $password){
                    echo "<div class='alert alert-danger' role='alert' style='width: 600px; margin: 30px auto 0;'>
              Las contraseñas no coinciden!
            </div>";
                }else{
                    $sqlc = "INSERT INTO COLABORADORES(CORREO,PASSWORD) VALUES ('{$email}','{$password}')";
                    $resultado = $conn->query($sqlc);
                    echo "<div class='alert alert-success' role='alert' style='width: 600px; margin: 30px auto 0;'>
              Se registro correctamente! Redirigiendo al login...
            </div>";
                    header('refresh:3; login.php');
                }

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
