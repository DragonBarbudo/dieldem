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
			<div class="titletext"><span>DIELDEM</span>SERVICIOS</div>
			<div class="imgs"><img src="imgs/sistemas-de-almacenaje.png" alt="Sistemas de Almacenaje" /></div>
		</article>
	</div>
</section>
<div class="hr"></div>




<section id="servicios">
	<article class="maintext">
		<h3>Servicios</h3>
		<p>Ofrecemos diferentes productos y servicios con un equipo de ingenieros especializados en dar soluciones e innovación en sistemas de almacenaje.</p>

		<p>Nuestro sistema de Mejora Continua fortalece y reestructura la importancia de la calidad en los productos y servicios ofrecidos, haciendo hincapié en la atención al cliente, capacitación constante, mejora de procesos y métodos de trabajo, etc, con la finalidad de proporcionar soluciones oportunas y eficientes que satisfagan sus necesidades.</p>
		
		<p>Dentro de nuestros productos y servicios usted podrá encontrar lo más novedoso en materiales. diseño, e ingeniería.</p>
	</article>
	
	<div class="clear"></div>
	
	<!--serv-->
	<article class="serv" id="mantenimiento-preventivo">
		<span>Mantenimiento Preventivo<span></span><span></span></span>
		<div class="description">
			<p>Revisión periódica del sistema de racks y/o de transportación, para detectar las necesidades del sistema y obtener la operación correcta, seguridad en el equipo y para minimizar costos.</p>
		</div>
		<div class="clear"></div>
	</article>
	<div class="clear"></div>
	<!--serv-->
	<article class="serv" id="mantenimiento-correctivo">
		<span>Mantenimiento Correctivo<span></span><span></span></span>
		<div class="description">
			<p>Ajuste y/o reparación del sistema de racks y/o de transportación, para el correcto funcionamiento de operación y seguridad.</p>
		</div>
		<div class="clear"></div>
	</article>
	<div class="clear"></div>
	<!--serv-->
	<article class="serv" id="montaje">
		<span>Montaje<span></span><span></span></span>
		<div class="description">
			<p>Contamos con colaboradores especializados y capacitados para la instalación de los sistemas de almacenajes.</p>
		</div>
		<div class="clear"></div>
	</article>
	<div class="clear"></div>
	<!--serv-->
	<article class="serv" id="desmontaje-y-traslados">
		<span>Desmontaje y Traslados<span></span><span></span></span>
		<div class="description">
			<p>Servicio en donde nuestro cliente necesita un cambio de instalaciones.</p>
		</div>
		<div class="clear"></div>
	</article>
	<div class="clear"></div>
	<!--serv-->
	<article class="serv" id="consultoria">
		<span>Consultoría<span></span><span></span></span>
		<div class="description">
			<p>Contamos con equipo especializado en estudios logísticos, de esta manera ayudamos a optimizar el área de procesos y almacenaje.</p>
		</div>
		<div class="clear"></div>
	</article>
	<div class="clear"></div>
</section>

<? include('php/footer.php'); ?>

</body>
</html>