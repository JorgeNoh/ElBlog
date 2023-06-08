<?php 
  session_start();

if(isset($_SESSION['user_id'])) {
    header('Location: /ElBlog');
}
  require 'includes/conexiones/db_conexion.php';
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password, nombre FROM usuario WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $message = '';

      if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /ElBlog");
    } else {
      $message = 'Lo sentimos, tu correo o contraseña son incorrectos';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
</head>
<body id="login">
  
   <h1 class="log">Iniciar Sesión</h1>o
    <span><a href="registrar">Regístrate</a></span>
    <form action=""></form>
   
    <form action="login" method="post">
        <input type="text" name="email" placeholder="Ingrese su email">
        <input type="password" name="password" placeholder="Ingresa tu contraseña">
        <input type="submit" value="Enviar">
        <?php if(!empty($message)): ?>
        <p> <?= $message ?></p>
        <?php endif; ?>
    </form>
</body>
</html>