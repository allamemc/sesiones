<?php
include('header.php');
include('config.php');
?>
<?php
if(isset($_POST['eliminar'])){
    session_start();
    $_SESSION['id'] = $_GET['id'];
    header('location: eliminar.php');
}elseif(isset($_POST['cancelar'])){
    header('location: consultar.php');
}
?>
<h1>Listado de pedidos - clientes</h1>
<?php
if(isset($_GET['id'])){
    echo "<form action='' method='post' class='card' style='width: 18rem; margin: 0 auto; margin-top: 30px;'>
    <div class='card-body'>
    <h5 class='card-title'>¿Eliminar el pedido {$_GET['id']}?</h5>
    <button type='submit' class='btn btn-danger' name='eliminar'>Eliminar</button>
    <button type='submit' class='btn btn-secondary' name='cancelar'>Cancelar</button>
    </div>
    </form>";
}

?>
<?php
$consultar = "SELECT * FROM PEDIDOS";
?>
<table class="table" style="width: 600px; margin:30px auto 0;">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">FECHA PEDIDO</th>
        <th scope="col">PRODUCTO</th>
        <th scope="col">UNIDADES</th>
        <th scope="col">MODIFICAR</th>
    </tr>
    </thead>
    <tbody>
<?php
try {
    $resultado = $conn -> query($consultar);
    while ( $row = $resultado -> fetch() ) {
        echo "<tr>
      <th scope='row'>{$row[0]}</th>
      <td>{$row[1]}</td>
      <td>{$row[2]}</td>
      <td>{$row[3]}</td>
      <td><a class='btn btn-danger' style='text-decoration: none; margin-right: 10px;' href='consultar.php?id={$row[0]}'><ion-icon name='trash-outline''></ion-icon></a><a class='btn btn-primary' style='text-decoration: none;' href='actualizar.php?id={$row[0]}'><ion-icon name='refresh-outline'></ion-icon></i></a></td>
    </tr>";
    }
} catch (PDOException $e) {
    print "<h1>Hubo un error</h1>";
    die();
}

?>
    </tbody>
</table>






<?php
include('footer.html');
?>
