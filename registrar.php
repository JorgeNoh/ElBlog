<?php  
require 'includes/conexiones/db_conexion.php';
$message = '';
if(!empty($_POST['email']) && !empty($_POST['password'])) {
    if ($_POST['password'] == $_POST['confirmar_contraseña']) {
    
    $sql ="INSERT INTO usuario (email, password, nombre) VALUES(:email, :password, :nombre)";
    $stmt = $conn->prepare($sql);
    $stmt -> bindParam(':email',$_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt -> bindParam(':password',$password);
        $stmt -> bindParam(':nombre',$_POST['nombre']);
    
    if ($stmt->execute()){
        $message = 'Se creó correctamente tu cuenta';
    } else {
        $message = 'Lo sentimos, se ha producido un error';
    }
 }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Regístrate</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="css/alertify.rtl.css">
<link rel="stylesheet" href="css/themes/default.rtl.css">
</head>
<body id="login">
    <h1 class="log">Regístrate</h1> o
    <span><a href="login">Logueate</a></span>

    <form action="registrar" method="post">
        <input type="text" name="email" placeholder="Ingrese su email">
        <input type="text" name="nombre" placeholder="Nombre de Usuario">
        <input type="password" name="password" placeholder="Ingresa tu contraseña">
        <input type="password" name="confirmar_contraseña" placeholder="Repite tu contraseña">
        <input type="submit" value="Enviar">
    <?php if(!empty($message)):?>
    <p> <?= $message ?></p>
    <?php endif; ?>
    </form>
</body>
</html>