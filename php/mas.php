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
			<div class="titletext"><span></span>CARROCERÍAS</div>
			<div class="imgs"><img src="imgs/carrocerias.png" alt="Carrocerías" /></div>
		</article>
		<article>
			<div class="titletext"><span>INSTALACIÓN DE</span>ELEVADORES</div>
			<div class="imgs"><img src="imgs/elevadores.png" alt="Instalación de Elevadores" /></div>
		</article>
		<article>
			<div class="titletext"><span>RECURSOS</span>HUMANOS</div>
			<div class="imgs"><img src="imgs/recursos-humanos.png" alt="Recursos Humanos" /></div>
		</article>
		<article>
			<div class="titletext"><span>SISTEMAS DE ENERGÍA</span>ELÉCTRICA</div>
			<div class="imgs"><img src="imgs/sistemas-de-energia-electrica.png" alt="Sistemas de Energía Eléctrica" /></div>
		</article>
		<article>
			<div class="titletext"><span>MATERIALES DE</span>CONSTRUCCIÓN</div>
			<div class="imgs"><img src="imgs/materiales_de_construccion.png" alt="Materiales de construcción" /></div>
		</article>
	</div>
</section>
<div class="hr"></div>




<section id="servicios">

	
	<!--serv-->
	<article class="serv" id="productos-para-construccion">
		<span>Productos para construcción<span></span><span></span></span>
		<div class="description">
			<p>Dando atención a las necesidades de nuestros clientes también contamos con el suministro e instalación de materiales para la construcción como:</p>
			<ul>
				<li>Lamina galvanizada</li>
				<li>Lamina pintro</li>
				<li>Lamina negra</li>
				<li>Perfiles</li>
			</ul>
			<ul>
				<li>Triplay</li>
				<li>Madera</li>
				<li>Trabajos especializados en soldadura</li>
				<li>Calzas de nivelación</li>
			</ul>
		</div>
	</article>
	<div class="clear"></div>
	
	<!--serv-->
	<article class="serv" id="instalacion-de-elevadores">
		<span>Instalación de Elevadores<span></span><span></span></span>
		<div class="description">
			<p>Contamos con refacciones de todas las marcas, todos nuestros trabajos están garantizados, contamos con laboratorio electrónico, para análisis o reparación de partes electrónicas además de contar con personal capacitado y con experiencia.</p>

			<p>Los servicios que ofrecemos son:</p>
			<ul>
				<li>Mantenimiento correctivo y preventivo.</li>
				<li>Reparaciones, modernizaciones.</li>
				<li>Instalación de elevadores nuevos.</li>
			</ul>

			<p>En elevadores de todo tipo, tales como:</p>
			
			<ul>
				<li>De pasajeros.</li>
				<li>Camilleros (hospitales).</li>
				<li>Montacargas.</li>
				<li>Montacoches.</li>
				<li>Apilacoches.</li>
				<li>Rampas hidráulicas.</li>
			</ul>
			
			<p>Con diferentes sistemas:</p>
			
			<ul>
				<li>Hidráulicos.</li>
				<li>Arranque directo o estrella delta.</li>
				<li>Eléctricos, con o sin cuarto de máquinas de 2 velocidades o con variación de frecuencia.</li>
			</ul>
			<p>Servicio de mantenimiento y reparación e instalación de portones eléctricos (abre puertas automático).</p>
			
			<p>ATENDEMOS LLAMADAS DE EMERGENCIA LOS 365 DIAS DEL AÑO.</p>
		</div>
	</article>
	<div class="clear"></div>
	<!--serv-->
	<article class="serv" id="recursos-humanos">
		<span>Recursos Humanos<span></span><span></span></span>
		<div class="description">
			<p>Realización de Estudios Socio-Económicos.</p>

			<p>Investigaciones Crediticias a persona físicas y morales, especialmente en el ramo automotriz, como son:</p>
			
			<ul>
				<li>Servicios en los servicios de consultoría:</li>
				<li>Estudios Socio-Económicos área metropolitana y foráneos.</li>
				<li>Manejo y creación de Outsourcing.</li>
				<li>Investigaciones de Crédito personas físicas y morales.</li>
				<li>Investigaciones crediticias en el ramo automotriz.
					<ul><li>CREDITAXI y CREDISIN (Nissan y Renuault).</li></ul></li>
			</ul>
		</div>
	</article>
	<div class="clear"></div>
	<!--serv-->
	<article class="serv" id="energia-electrica">
		<span>Instalación de Sistemas de Energía Eléctrica<span></span><span></span></span>
		<div class="description">
			<p>Mantenimiento preventivo, correctivo y construcción de instalaciones eléctricas de tipo residencial, comercial e industrial en obra civil o edificación, baja y media tensión.</p>

			<ul>
				<li>Canalizaciones.</li>
				<li>Cableados</li>
				<li>Dispositivos</li>
				<li>Elementos
					<ul><li>Todo lo referente a instalaciones eléctricas en baja y media tensión.</li></ul>
				</li>
			</ul>
		</div>
	</article>
	<div class="clear"></div>
	
	<!--serv-->
	<article class="serv" id="personalizacion">
		<span>Personalización<span></span><span></span></span>
		<div class="description">
			<p>En <strong>DIELDEM</strong> contamos con una gran gama de productos. Para nosotros es muy importante que estos sean totalmente personalizados a sus necesidades reales, por lo que si usted prefiere nuestro equipo de ingeniería lo visitara directamente en sus oficinas para explicarle cada uno de nuestros productos y servicios, así como orientarle sobre los diferentes sistemas racks y de transportación de acuerdo a sus necesidades…</p>

<blockquote>Nos gusta hacer equipo con ustedes, estamos a sus órdenes.</blockquote>
		</div>
	</article>
	<div class="clear"></div>
	
	
	

</section>
<div class="clear"></div>




<? include('php/footer.php'); ?>

</body>
</html>