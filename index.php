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
    <div class="contenido contenedor">
		<main>
			<article>
				<h2 class="tit">SpaceX</h2>
				<img src="img/spacex.jpg" alt="imagen spacex">
				<p>Washington. SpaceX pospuso el lanzamiento de 60 satélites a la órbita baja de la Tierra que estaba programado para el jueves en la noche, posiblemente hasta la próxima semana, citando la necesidad de actualizaciones de software.

					El lanzamiento del cohete Falcon 9 de SpaceX, desde Cabo Cañaveral, iba a ser el primero de miles de su proyecto Starlink, que busca ofrecer internet de banda ancha para todo el planeta.
					
					"Posponemos para actualizar el software satelital y volver a revisar todo de nuevo", aseguró en un tuit la cuenta oficial de SpaceX. "Siempre queremos hacer todo lo que podamos sobre el terreno para maximizar el éxito de la misión, la próxima oportunidad de lanzamiento es aproximadamente en una semana".</p>
				<a href="https://elcomercio.pe/tecnologia/actualidad/spacex-pospone-lanzamiento-primeros-satelites-red-internet-noticia-nndc-636057" class="boton">Leer más </a>
			</article>
			<article>
				<h2 class="tit">La Nasa</h2>
				<img src="img/nasa.jpg" alt="Hola jasja">
				<p> La Administración Nacional de la Aeronáutica y del Espacio (NASA) de EE UU mandará a una mujer por primera vez a la Luna en 2024, dentro de su proyecto Artemis (Artemisa, en castellano) que también supondrá el retorno de las misiones tripuladas al satélite de la Tierra. "Este programa va a permitir a una nueva generación de chicas jóvenes, como mi hija, que se vean [reflejadas] de tal manera que no lo harían de otra forma", dijo el administrador de la NASA, Jim Bridenstine, en un acto con empleados de la agencia trasmitido por internet. Bridenstine insistió en que le gustaría que su hija, de 11 años, se vea reflejada en los astronautas —una mujer y un hombre— que van a viajar a la Luna en 2024 y recordó que en la década de los sesenta las jóvenes no disponían de ese tipo de modelos de referencia.</p>
				<a href=" https://www.20minutos.es/noticia/3640847/0/primera-mujer-luna-2024-artemis-nasa/#xtor=AD-15&xts=467263" class="boton">Leer más</a>
			</article>
			<article>
				<h2 class="tit">Yucatán</h2>
				<h3>ALERTA: calor extremo deja SIN AGUA a Yucatán </h3>
				<br>
				<img src="img/yucatan.webp" alt="imagen de nasa">
				<p>La Junta de Agua Potable y Alcantarillado de Yucatán (Japay) reciben al día 10 quejas por falta de agua, problema que se da principalmente en el sur de la ciudad de Mérida, y que de acuerdo con el personal de la dependencia, se debe al calor. 

					Ante las altas temperaturas que afectan Yucatán, el personal de la dependencia indicó que las llaves maestras no se pueden abrir por completo, ya que de hacerlo, las tuberías se podrían reventar, ya que tienen demasiados años en servicio, aunado a que los constantes apagones registrados dañan las plantas y por ende la presión del suministro del vital líquido disminuye considerablemente en la ciudad de Mérida. </p>
				<a href="https://laverdadnoticias.com/yucatan/ALERTA-calor-extremo-deja-SIN-AGUA-a-Yucatan---20190523-0046.html" class="boton">Leer más</a>
			</article>
			<article>
				<h2 class="tit">Yucatán</h2>
				<h3>Se espera que continúen las lluvias en Yucatán </h3>
				<br>
				<img src="https://www.yucatan.com.mx/wp-content/uploads/2019/06/201906031901.jpg" alt="imagen de yucatan-lluvias">
				<p>El arrastre de humedad generado por un sistema de baja presión ubicado en el sur del Golfo de México, combinado con la presencia de una vaguada, seguirá favoreciendo lluvias de diversa intensidad este lunes en Yucatán, informa el OCPY de la Conagua.

					De acuerdo con los pronósticos, para este día se esperan de chubascos a tormentas fuertes (25 a 50mm) en el sur, centro y noroeste de Yucatán. Para el oriente , norte y noreste del estado se pronostican chubascos (5 a 25mm).

					Se pronostican vientos del este sureste de 15 a 25 km/h con probables rachas mayores a los 45 km/h en la zona costera.

					Se anticipan temperaturas máximas de entre los 33 y 36 grados Celsius para Yucatán, mientras que para Mérida los valores máximos oscilarían entre los 35 y 36 grados. </p>
				<a href="https://www.yucatan.com.mx/merida/clima/se-espera-que-continuen-las-lluvias-en-yucatan" class="boton">Leer más</a>
			</article><br>
			
				<article>
				<h2 class="tit">Yucatán</h2>
				<h3>Yucatán da mala imagen nacional </h3>
				<br>
				<img src="https://www.yucatan.com.mx/wp-content/uploads/2019/06/IMG-27674915.jpg" alt="imagen de torneo">
				<p>“Los torneos de lazo le están dando una muy mala imagen a Yucatán ante el mundo” lamentó Rosario Sosa Parra, presidenta de la Asociación por los Derechos de los Animales en Yucatán, A. C.

					“Pero más allá del impacto mediático que se le da al estado a nivel internacional”, continuó la activista, “sin duda es un hecho que somos un pueblo cruel e insensible hacia los animales, persistimos en torturarlos y celebrar su dolor y agonía”.

					“No puedo entender cómo si existe una ley que defiende a los animales del maltrato y la crueldad es que la autoridad no procede en consecuencia”, cuestionó.

					A decir de la presidenta de la ADAY, es muy claro que existen intereses económicos muy fuertes que van más allá de la tradición, los usos y las costumbres de los pueblos. También asegura que es evidente que el gobierno del Estado no quiere interferir con asuntos que corresponden a los ayuntamientos, lo cual es incorrecto porque la ley no hace distingos de ningún nivel de gobierno. Simplemente se acata o no. </p>
				<a href="https://www.yucatan.com.mx/merida/yucatan-da-mala-imagen-nacional" class="boton">Leer más</a>
			</article><br>
			
			<br> <br>
		</main>
		<?php include_once 'includes/templates/footer.php'; ?>
		<?php else: ?>
		
    <?php include_once 'includes/templates/header.php'; ?>
	    <div class="contenido contenedor">
		<main>
			<article>
				<h2 class="tit">SpaceX</h2>
				<img src="img/spacex.jpg" alt="imagen spacex">
				<p>Washington. SpaceX pospuso el lanzamiento de 60 satélites a la órbita baja de la Tierra que estaba programado para el jueves en la noche, posiblemente hasta la próxima semana, citando la necesidad de actualizaciones de software.

					El lanzamiento del cohete Falcon 9 de SpaceX, desde Cabo Cañaveral, iba a ser el primero de miles de su proyecto Starlink, que busca ofrecer internet de banda ancha para todo el planeta.
					
					"Posponemos para actualizar el software satelital y volver a revisar todo de nuevo", aseguró en un tuit la cuenta oficial de SpaceX. "Siempre queremos hacer todo lo que podamos sobre el terreno para maximizar el éxito de la misión, la próxima oportunidad de lanzamiento es aproximadamente en una semana".</p>
				<a href="https://elcomercio.pe/tecnologia/actualidad/spacex-pospone-lanzamiento-primeros-satelites-red-internet-noticia-nndc-636057" class="boton">Leer más </a>
			</article>
			<article>
				<h2 class="tit">La Nasa</h2>
				<img src="img/nasa.jpg" alt="Hola jasja">
				<p> La Administración Nacional de la Aeronáutica y del Espacio (NASA) de EE UU mandará a una mujer por primera vez a la Luna en 2024, dentro de su proyecto Artemis (Artemisa, en castellano) que también supondrá el retorno de las misiones tripuladas al satélite de la Tierra. "Este programa va a permitir a una nueva generación de chicas jóvenes, como mi hija, que se vean [reflejadas] de tal manera que no lo harían de otra forma", dijo el administrador de la NASA, Jim Bridenstine, en un acto con empleados de la agencia trasmitido por internet. Bridenstine insistió en que le gustaría que su hija, de 11 años, se vea reflejada en los astronautas —una mujer y un hombre— que van a viajar a la Luna en 2024 y recordó que en la década de los sesenta las jóvenes no disponían de ese tipo de modelos de referencia.</p>
				<a href=" https://www.20minutos.es/noticia/3640847/0/primera-mujer-luna-2024-artemis-nasa/#xtor=AD-15&xts=467263" class="boton">Leer más</a>
			</article>
			<article>
				<h2 class="tit">Yucatán</h2>
				<h3>ALERTA: calor extremo deja SIN AGUA a Yucatán </h3>
				<br>
				<img src="img/yucatan.webp" alt="imagen de nasa">
				<p>La Junta de Agua Potable y Alcantarillado de Yucatán (Japay) reciben al día 10 quejas por falta de agua, problema que se da principalmente en el sur de la ciudad de Mérida, y que de acuerdo con el personal de la dependencia, se debe al calor. 

					Ante las altas temperaturas que afectan Yucatán, el personal de la dependencia indicó que las llaves maestras no se pueden abrir por completo, ya que de hacerlo, las tuberías se podrían reventar, ya que tienen demasiados años en servicio, aunado a que los constantes apagones registrados dañan las plantas y por ende la presión del suministro del vital líquido disminuye considerablemente en la ciudad de Mérida. </p>
				<a href="https://laverdadnoticias.com/yucatan/ALERTA-calor-extremo-deja-SIN-AGUA-a-Yucatan---20190523-0046.html" class="boton">Leer más</a>
			</article>
						<article>
				<h2 class="tit">Yucatán</h2>
				<h3>Se espera que continúen las lluvias en Yucatán </h3>
				<br>
				<img src="https://www.yucatan.com.mx/wp-content/uploads/2019/06/201906031901.jpg" alt="imagen de yucatan-lluvias">
				<p>El arrastre de humedad generado por un sistema de baja presión ubicado en el sur del Golfo de México, combinado con la presencia de una vaguada, seguirá favoreciendo lluvias de diversa intensidad este lunes en Yucatán, informa el OCPY de la Conagua.

					De acuerdo con los pronósticos, para este día se esperan de chubascos a tormentas fuertes (25 a 50mm) en el sur, centro y noroeste de Yucatán. Para el oriente , norte y noreste del estado se pronostican chubascos (5 a 25mm).

					Se pronostican vientos del este sureste de 15 a 25 km/h con probables rachas mayores a los 45 km/h en la zona costera.

					Se anticipan temperaturas máximas de entre los 33 y 36 grados Celsius para Yucatán, mientras que para Mérida los valores máximos oscilarían entre los 35 y 36 grados. </p>
				<a href="https://www.yucatan.com.mx/merida/clima/se-espera-que-continuen-las-lluvias-en-yucatan" class="boton">Leer más</a>
			</article><br>
			
				<article>
				<h2 class="tit">Yucatán</h2>
				<h3>Yucatán da mala imagen nacional </h3>
				<br>
				<img src="https://www.yucatan.com.mx/wp-content/uploads/2019/06/IMG-27674915.jpg" alt="imagen de torneo">
				<p>“Los torneos de lazo le están dando una muy mala imagen a Yucatán ante el mundo” lamentó Rosario Sosa Parra, presidenta de la Asociación por los Derechos de los Animales en Yucatán, A. C.

					“Pero más allá del impacto mediático que se le da al estado a nivel internacional”, continuó la activista, “sin duda es un hecho que somos un pueblo cruel e insensible hacia los animales, persistimos en torturarlos y celebrar su dolor y agonía”.

					“No puedo entender cómo si existe una ley que defiende a los animales del maltrato y la crueldad es que la autoridad no procede en consecuencia”, cuestionó.

					A decir de la presidenta de la ADAY, es muy claro que existen intereses económicos muy fuertes que van más allá de la tradición, los usos y las costumbres de los pueblos. También asegura que es evidente que el gobierno del Estado no quiere interferir con asuntos que corresponden a los ayuntamientos, lo cual es incorrecto porque la ley no hace distingos de ningún nivel de gobierno. Simplemente se acata o no. </p>
				<a href="https://www.yucatan.com.mx/merida/yucatan-da-mala-imagen-nacional" class="boton">Leer más</a>
			</article><br>
			
			<br> <br>
		</main>
		<?php include_once 'includes/templates/footer.php'; ?>
		    <?php endif; ?>