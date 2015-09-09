<? include('config.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<? include('php/head.php'); ?>
</head>

<body onhashchange="productnav()" itemscope itemtype="http://schema.org/WebPage">

<div class="modal"></div>

<!--Header-->		
<header>
	<div id="header">
		<h1><a href="inicio"><img src="imgs/dieldem.png" alt="DIELDEM"/></a></h1>
		<h2 id="companyname">DIELDEM SOLUCIONES INTEGRALES S.A. DE C.V.</h2>
		<div class="clear"></div>
	</div>
	<nav>
		<? echo $navigation;?>
		<div class="clear"></div>
	</nav>
	<div class="clear"></div>
</header>


<!-- SLIDER -->
<? 
	$in = $_GET['in'];
	echo $in;
?>
<div class="hr"></div>
<section id="slider">
	<div class="slider_container">
		<article>
			<div class="titletext"><span>DIELDEM</span>CARROCERÍAS</div>
			<div class="imgs"><img src="imgs/carrocerias.png" alt="Carrocerías"/></div>
		</article>
	</div>
</section>
<div class="hr"></div>




<section id="servicios">

	
	<!--serv-->
	<article class="serv" id="carrocerias">
		<span>Carrocerías<span></span><span></span></span>
		<div class="description">
			<p>Fabricación y reparación de todo tipo de carrocerías así como maquila, corte y dobles de placa hasta ¼, venta y reparación de equipos de refrigeración. </p>
			<ul>
				<li>Fabricación y reparación de todo tipo de carrocerías.</li>
				<li>Frigoríficas <ul><li>Refrigeración, congelación y todo tipo de acondicionamiento.</li></ul></li>
				<li>Mudanceras.</li>
				<li>Tipo van carga seca.</li>
				<li>Plataformas con redilas, redilas fijas.</li>
				<li>Conversión a tándem y torton.</li>
				<li>Conversión de suspensión de muelles a suspensión de aire
					<ul><li>CONTAMOS CON PERSONAL CAPACITADO.</li></ul></li>
			</ul>
			<p>Somos especialistas en <strong>diseño</strong>, <strong>fabricación de piezas</strong> y productos en <strong>fibra de vidrio</strong> totalmente terminadas.
			</p>
			<div class="clear"></div>
			<section class="gallery">
				<article><a href="<? echo imagephp('imgs/carr01.jpg', 600); ?>"><img src="<? echo imagephp('imgs/carr01.jpg', 100); ?>" alt="Carrocerías"/></a></article>
				<article><a href="<? echo imagephp('imgs/carr02.jpg', 600); ?>"><img src="<? echo imagephp('imgs/carr02.jpg', 100); ?>" alt="Carrocerías"/></a></article>
				<article><a href="<? echo imagephp('imgs/carr03.jpg', 600); ?>"><img src="<? echo imagephp('imgs/carr03.jpg', 100); ?>" alt="Carrocerías"/></a></article>
				<article><a href="<? echo imagephp('imgs/carr04.jpg', 600); ?>"><img src="<? echo imagephp('imgs/carr04.jpg', 100); ?>" alt="Carrocerías"/></a></article>
				<div class="clear"></div>
			</section>
			<div class="clear"></div><br />
		</div>
	</article>
	<div class="clear"></div>
	
	<!--serv-->
	<article class="serv" id="mudanceras">
		<span>Mudanceras<span></span><span></span></span>
		<div class="description">
			<p>Cajas secas mudanceras. Prácticas en todos los aspectos de carga por sus 40 m3 a 66 m3 en espacio. Pueden habilitarse con redondos de amarre o rieles logísticos para tensar con bandas.</p>

<p>Complementadas con faldones laterales y cajas de herramientas que, además de dar estética a la unidad, brinda más espacio útil.</p>

<p>Mudanza de 11 mts de largo con una capacidad de 80 m3. Camarote y cajas de htas.</p>
			<div class="clear"></div>
			<section class="gallery">
				<article><a href="<? echo imagephp('imgs/mud01.jpg', 600); ?>"><img src="<? echo imagephp('imgs/mud01.jpg', 100); ?>" alt="Carrocerías"/></a></article>
				<article><a href="<? echo imagephp('imgs/mud02.jpg', 600); ?>"><img src="<? echo imagephp('imgs/mud02.jpg', 100); ?>" alt="Carrocerías"/></a></article>
				
				<div class="clear"></div>
			</section>
			<div class="clear"></div><br />
		</div>
	</article>
	<div class="clear"></div>
	
	<!--serv-->
	<article class="serv" id="cajas-secas">
		<span>Cajas Secas<span></span><span></span></span>
		<div class="description">

<p>Explote al máximo su camión con reflector aerodinámico, evitando la resistencia del viento y mejorando la forma de la carrocería, redituable a corto plazo. Sistema de ventilación óptimo para el producto y la vida misma de la carrocería.</p>

<p>Entre las características principales de las cajas secas se encuentra la resistencia, el espacio y ligereza. Las dimensiones se delimitan acorde a la unidad en la cuál se instalan, procurando aprovechar al máximo las longitudes permisibles.</p>

<p>Pueden contener algún tipo de sujeción de carga (redondos de amarre, rieles logísticos, etc.). el terminado exterior remachado y aluminio casi en su totalidad evitando corrosiones. El interior en triplay de 6mm, el piso de madera puede ser reforzado con lámina antiderrapante para mayor resistencia y durabilidad. Excelente diseño exterior.</p>


			<div class="clear"></div>
			<section class="gallery">
				<article><a href="<? echo imagephp('imgs/sec01.jpg', 600); ?>"><img src="<? echo imagephp('imgs/sec01.jpg', 100); ?>" alt="Carrocerías"/></a></article>
				<article><a href="<? echo imagephp('imgs/sec02.jpg', 600); ?>"><img src="<? echo imagephp('imgs/sec02.jpg', 100); ?>" alt="Carrocerías"/></a></article>

				<div class="clear"></div>
			</section>
			<div class="clear"></div><br />
		</div>
	</article>
	<div class="clear"></div>
	
	<article class="maintext" id="otros" style="opacity: 1;">
		<h3>Cajas Secas Nissan</h3>

<p>Las cajas secas son de las unidades más utilizadas en la industria del transporte. La unidad Nissan es mayormente solicitada por sus 7 m3 (con copete). Adecuada en espacio, gasto de combustible, fluidez en camino congestionado, etc. Diseño innovador que provee de presencia para su empresa y variantes en interiores y acabados (triplay, lamina acordonada, lyner panel, etc.).</p>
		<div class="clear"></div>
	</article>
	
	<div class="clear"></div>
	
	
	
	<!--serv-->
	<article class="serv" id="tipo-jaulas">
		<span>Tipo Jaulas<span></span><span></span></span>
		<div class="description">

			<p>Adecuadas para el transporte de productos con volúmen y peso moderado: tinacos, frigocel, pet, etc.Se cuenta con una diversidad de diseños con el fin de satisfacer las necesidades del cliente, forma de traslado, estética y lujo.</p>

<p>Los materiales empleados para la fabricación pueden variar, así como los tipos de rejillas, etc., brindando la resistencia adecuada y un peso no exagerado.</p>

			<div class="clear"></div>
			<section class="gallery">
				<article><a href="<? echo imagephp('imgs/jau01.jpg', 600); ?>"><img src="<? echo imagephp('imgs/jau01.jpg', 100); ?>" alt="Carrocerías"/></a></article>
				<article><a href="<? echo imagephp('imgs/jau02.jpg', 600); ?>"><img src="<? echo imagephp('imgs/jau02.jpg', 100); ?>" alt="Carrocerías"/></a></article>

				<div class="clear"></div>
			</section>
			<div class="clear"></div><br />
		</div>
	</article>
	<div class="clear"></div>
	
	
	
	<!--serv-->
	<article class="serv" id="tipo-gaseras">
		<span>Tipo Gaseras<span></span><span></span></span>
		<div class="description">

			<p>Estas carrocerías pueden ser muy variables en su diseño, lo que se ve igualmente reflejado en el precio.</p>

<p>En la imagen 2 se aprecia una gasera sencilla de precio accesible que cumple con los requerimientos del cliente. Se pueden realizar desarrollos más completos que limiten la visibilidad de la mercancía utilizando páneles troquelados.</p>

			<div class="clear"></div>
			<section class="gallery">
				<article><a href="<? echo imagephp('imgs/gas01.jpg', 600); ?>"><img src="<? echo imagephp('imgs/gas01.jpg', 100); ?>" alt="Carrocerías"/></a></article>
				<article><a href="<? echo imagephp('imgs/gas02.jpg', 600); ?>"><img src="<? echo imagephp('imgs/gas02.jpg', 100); ?>" alt="Carrocerías"/></a></article>
				<div class="clear"></div>
			</section>
			<div class="clear"></div><br />
		</div>
	</article>
	<div class="clear"></div>
	
	
	
	<!--serv-->
	<article class="serv" id="plataformas">
		<span>Plataformas<span></span><span></span></span>
		<div class="description">

			<p>Con una gran gama, aptas para cualquier unidad: Nissan 3.5 tons., camiones, etc. Pueden ser con concha al frente, totalmente metálicas o con madera, al igual que simples o con faldones laterales (se puede incluír caja de herramientas).</p>

<p>Con diseño versátil que cumple con las funciones necesarias. Se puede manejar piso en madera de grosor variable, piso de lámina lisa o antiderrapante.</p>

			<div class="clear"></div>
			<section class="gallery">
				<article><a href="<? echo imagephp('imgs/pla01.jpg', 600); ?>"><img src="<? echo imagephp('imgs/pla01.jpg', 100); ?>" alt="Carrocerías"/></a></article>
				<article><a href="<? echo imagephp('imgs/pla02.jpg', 600); ?>"><img src="<? echo imagephp('imgs/pla02.jpg', 100); ?>" alt="Carrocerías"/></a></article>
				<div class="clear"></div>
			</section>
			<div class="clear"></div><br />
		</div>
	</article>
	<div class="clear"></div>
	
	
	
	<!--serv-->
	<article class="serv" id="furgon">
		<span>Cajas Secas Lonas o Furgón<span></span><span></span></span>
		<div class="description">

			<p>Se caracterizan por el fácil acceso a la mercancía, el cual se recomienda en tarimas o pallets, ya que se sólo se cuenta con sujeción en la parte frontal y trasera. Permite fácil conteo y revisión de producto, agileza en la descarga del mismo con montacargas o picking.</p>

<p>El espacio es útil al igual que con cualquier caja seca. Las lonas pueden emplearse para publicidad.</p>

			<div class="clear"></div>
			<section class="gallery">
				<article><a href="<? echo imagephp('imgs/lon01.jpg', 600); ?>"><img src="<? echo imagephp('imgs/lon01.jpg', 100); ?>" alt="Carrocerías"/></a></article>
				<article><a href="<? echo imagephp('imgs/lon02.jpg', 600); ?>"><img src="<? echo imagephp('imgs/lon02.jpg', 100); ?>" alt="Carrocerías"/></a></article>
				<div class="clear"></div>
			</section>
			<div class="clear"></div><br />
		</div>
	</article>
	<div class="clear"></div>
	
	
	
	
	<!--serv-->
	<article class="serv" id="otros-disenos">
		<span>Otros Diseños<span></span><span></span></span>
		<div class="description">

			<p>Podemos diseñar la carrocería que usted necesita: práctica, resistente, estética.</p>

			<div class="clear"></div>
			
		</div>
	</article>
	<div class="clear"></div>
	
	

</section>
<div class="clear"></div>




<? include('php/footer.php'); ?>

</body>
</html>