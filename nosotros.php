<?php 
session_start();

    require 'includes/conexiones/db_conexion.php';
    
    if(isset($_SESSION['user_id'])) {
        $records = $conn ->prepare('SELECT id, email, password, nombre FROM usuario WHERE id = :id');
        $records-> bindParam(':id', $_SESSION['user_id']);
        $records-> execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;
        
    if(count($results) > 0) {
      $user = $results;
    }
  }

?>

<?php if(!empty($user)):?>

       <?php include_once 'includes/templates/registrado.php'; ?>
	
	 <main>
	 <center><h1> Sobre Nosotros </h1></center>
	 <br> <br>
	 <center> <p> Somos una pequeña empresa que se encarga de subir y manter al día a los usuarios que visitan esta página con las noticias mas relevantes, todas las noticias que usted ve estan verificadas y son reales para que el usuario este confiado de la noticia que lee, sabemos que estar informado es una necesidad y por eso nosotros nos animamos a poder informar a las demas personas. </p> </center>
	 <br> <br> <br>
	 <center> <h1 id="vision"> Nuestra Visión </h1> </center>
	 <br> <br>
	 <center> <p> Nuestra visión es mantener informado a las personas además de que con un solo clic tengan las noticias más actualizadas y relevantes en varias ciudades, nuestra página es sin ningún fin de lucro y solo es para mantener informados a las personas, es una página hecha 100% por personas Mexicanas y queremos que todos los Mexicanos estén al tanto de las noticias no solo de politica, sino también, las de cultura, deportes y otras noticias más que les sean de su agrado. <p> </center>
	 </main>

	<?php include_once 'includes/templates/footer.php'; ?>
<?php else: ?>
	 <?php include_once 'includes/templates/header.php'; ?>

	 <main>
	 <center><h1> Sobre Nosotros </h1></center>
	 <br> <br>
	 <center> <p> Somos una pequeña empresa que se encarga de subir y manter al día a los usuarios que visitan esta página con las noticias mas relevantes, todas las noticias que usted ve estan verificadas y son reales para que el usuario este confiado de la noticia que lee, sabemos que estar informado es una necesidad y por eso nosotros nos animamos a poder informar a las demas personas. </p> </center>
	 <br> <br> <br>
	 <center> <h1 id="vision"> Nuestra Visión </h1> </center>
	 <br> <br>
	 <center> <p> Nuestra visión es mantener informado a las personas además de que con un solo clic tengan las noticias más actualizadas y relevantes en varias ciudades, nuestra página es sin ningún fin de lucro y solo es para mantener informados a las personas, es una página hecha 100% por personas Mexicanas y queremos que todos los Mexicanos estén al tanto de las noticias no solo de politica, sino también, las de cultura, deportes y otras noticias más que les sean de su agrado. <p> </center>
	 </main>

<?php include_once 'includes/templates/footer.php'; ?>

<?php endif; ?>