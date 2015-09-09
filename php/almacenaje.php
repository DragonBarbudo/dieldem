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
			<div class="titletext"><span>DIELDEM</span>ALMACENAJE</div>
			<div class="imgs"><img src="imgs/sistemas-de-almacenaje.png" alt="Sistemas de Almacenaje" /></div>
		</article>
	</div>
</section>
<div class="hr"></div>




<section id="productos">
	<article class="maintext">
		<h3>Sistemas de Almacenaje</h3>
		<p>Ofrecemos diferentes productos y servicios con un equipo de ingenieros especializados en dar soluciones e innovación en sistemas de almacenaje.</p>

		<p>Nuestro sistema de Mejora Continua fortalece y reestructura la importancia de la calidad en los productos y servicios ofrecidos, haciendo hincapié en la atención al cliente, capacitación constante, mejora de procesos y métodos de trabajo, etc, con la finalidad de proporcionar soluciones oportunas y eficientes que satisfagan sus necesidades.</p>
		
		<p>Dentro de nuestros productos y servicios usted podrá encontrar lo más novedoso en materiales. diseño, e ingeniería.</p>
	</article>
	
	<div class="clear"></div>
	
	<article class="prod" id="selectivo">
		<span>SELECTIVO<span></span><span></span></span>
		<!--imagen-->
		<img src="imgs/racks/selectivo.png" alt="Selectivo" />
		<div class="description">
			<p>Diseñado para almacenar diversos productos.</p>
			<p>Permite una colocación fácil y rápida, se adapta a cualquier tipo de tamaño o peso.</p>
		</div>
		<div class="clear"></div>
	</article>
	<article class="prod" id="double-deep">
		<span>DOUBLE DEEP<span></span><span></span></span>
		<!--imagen-->
		<img src="imgs/racks/doubledeep.png" alt="Double Deep" />
		<div class="description">
			<p>Planeado a doble profundidad, ideal para cuando no se tiene mucho espacio. La selectividad del producto esta presente en todo momento, permitiendo un acceso rápido.</p>
			<p>Diseñado para montacargas con doble reach.</p>
		</div>
		<div class="clear"></div>
	</article>
	<div class="clear"></div>
	
	<article class="prod" id="cantilever">
		<span>CANTILEVER<span></span><span></span></span>
		<!--imagen-->
		<img src="imgs/racks/cantilever.png" alt="Cantilever" />
		<div class="description">
			<p>Diseñado para el almacenamiento de Productos largos, voluminosos y de tamaños desiguales. Este rack proporciona un excelente resultado para la exposición de la mercancía.</p>
		</div>
		<div class="clear"></div>
	</article>
	<article class="prod" id="push-back">
		<span>PUSH BACK<span></span><span></span></span>
		<!--imagen-->
		<img src="imgs/racks/pushback.png" alt="Push Back" />
		<div class="description">
			<p>Sistema integral UEPS que opera a través de carros, guías de acero y de la gravedad. Incrementa el numero deposiciones en el almacén, además de un menor costo de operación.</p>
		</div>
		<div class="clear"></div>
	</article>
	<div class="clear"></div>
	
	<article class="prod" id="carton-flow">
		<span>CARTON FLOW<span></span><span></span></span>
		<!--imagen-->
		<img src="imgs/racks/cartonflow.png" alt="Carton Flow" />
		<div class="description">
			<p>Sistema PEPS para el surtido y/o picking. Diseñado con ruedas de polietileno de alta densidad y rieles de acero, para facilitar el deslizamiento sistemático de: cajas, bolsas, bultos y taras de plástico, etc.</p>
		</div>
		<div class="clear"></div>
	</article>
	<article class="prod" id="mezzanine">
		<span>MEZZANINE<span></span><span></span></span>
		<!--imagen-->
		<img src="imgs/racks/mezzanine.png" alt="Mezzanine" />
		<div class="description">
			<p>Con este sistema se mejora el aprovechamiento de superficies de naves; ocupando la altura. Este se diseña en base a la necesidad de resistencia por m2 y seleccionando el piso correcto para la necesidad de operación.</p>
		</div>
		<div class="clear"></div>
	</article>
	<div class="clear"></div>
	
	<article class="prod" id="estanteria">
		<span>ESTANTERÍA<span></span><span></span></span>
		<!--imagen-->
		<img src="imgs/racks/estanteria.png" alt="Estantería" />
		<div class="description">
			<p>Este rack almacena mercancías con peso ligero, controlando la selectividad, y fácil acceso. Diseñado para productos homogéneos y heterogéneos.</p>
		</div>
		<div class="clear"></div>
	</article>
	<article class="prod" id="entrepiso">
		<span>ENTREPISO<span></span><span></span></span>
		<!--imagen-->
		<img src="imgs/racks/entrepiso.png" alt="Entrepiso" />
		<div class="description">
			<p>Rack de almacenaje masivo para operaciones manuales (productos no entarimados). Diseñado con entreplantas con la finalidad de aprovechar la altura del almacén.</p>
		</div>
		<div class="clear"></div>
	</article>
	<div class="clear"></div>
	
	<article class="maintext" id="otros">
		<h3>Otros Productos</h3>
		<p>Además de los sistemas de almacenaje y partiendo de la necesidad de proporcionarle soluciones integrales, DIELDEM, le ofrece a usted los siguientes productos:
		</p>
		<ul>
			<li>Apiladores</li>
			<li>Carretillas</li>
			<li>Transportadores extensibles</li>
			<li>Máquinas envolvedoras</li>
			<li>Tarimas de plástico</li>
			<li>Suministros para sistemas de almacenaje</li>
			<li>Carros plataformas</li>
			<li>Elevadores de carga</li>
		</ul>
		<ul>
			<li>Mesas de trabajo</li>
			<li>Montacargas</li>
			<li>Patines</li>
			<li>Rampas niveladoras</li>
			<li>Rampas para autos</li>
			<li>Escaleras</li>
			<li>Transportadores</li>
		</ul>
		<div class="clear"></div>
	</article>
	<div class="clear"></div>
</section>




<? include('php/footer.php'); ?>

</body>
</html>