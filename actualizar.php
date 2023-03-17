<?php
include('header.php');

?>
<h1>Actualizar</h1>

<?php
if(isset($_GET['id'])){
    session_start();
    $_SESSION['id'] = $_GET['id'];
    echo "<h1>{$_SESSION['id']}</h1>";
}
?>

<?php

?>





<?php
include('footer.html');
?>
