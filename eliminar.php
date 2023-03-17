<?php
include('header.php');
include ('config.php');
session_start();
?>

<h1>Eliminar</h1>
<?php
if(isset($_POST['eliminar'])){
    $consulta2 = "DELETE FROM PEDIDOS WHERE ID = {$_SESSION['id']}";
    session_destroy();
    $conn->query($consulta2);
    echo "<div class='alert alert-success' role='alert' style='margin: 0 auto; width: 300px;'>
    Se elimino el pedido correctamente! Redirigiendo...
    </div>";
    header('refresh:3; url=consultar.php');
}elseif(isset($_POST['cancelar'])){
    session_destroy();
    header('location: consultar.php');
}
?>
<?php
if (isset($_SESSION['id'])){
    $consulta = "SELECT * FROM PEDIDOS WHERE id = {$_SESSION['id']}";
    $resultado = $conn->query($consulta);
    if ($resultado->rowCount() == 1){
        $row = $resultado->fetch();
        echo "<form action='' method='post' class='card' style='width: 18rem; margin: 0 auto; margin-top: 30px;'>
    <div class='card-body'>
    <h5 class='card-title'>ID del pedido: {$row[0]}</h5>
    <p class='card-text'>Fecha Pedido: {$row[1]}</p>
    <p class='card-text'>Producto: {$row[2]}</p>
    <p class='card-text'>Unidades: {$row[3]}</p>
    <button type='submit' class='btn btn-danger' name='eliminar'>Eliminar</button>
    <button type='submit' class='btn btn-secondary' name='cancelar'>Cancelar</button>
    </div>
    </form>";
    }
}
?>







<?php
include('footer.html');
?>
