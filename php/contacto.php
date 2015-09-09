<? include('config.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<? include('php/head.php'); ?>
</head>

<body itemscope itemtype="http://schema.org/WebPage">

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

<div class="hr"></div>
<section id="slider">
	<div class="slider_container">
		<article>
			<div class="titletext"><span>SISTEMAS DE</span>ALMACENAJE</div>
			<div class="imgs"><img src="imgs/sistemas-de-almacenaje.png" alt="Sistemas de Almacenaje" /></div>
		</article>
		<article>
			<div class="titletext"><span>MATERIALES DE</span>CONSTRUCCIÓN</div>
			<div class="imgs"><img src="imgs/materiales_de_construccion.png" alt="Materiales de construcción" /></div>
		</article>
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
	</div>
</section>
<div class="hr"></div>




<section id="contacto">
	<form method="post" action="" id="contactform">
		<div>
			<label><strong>Escríbanos un mensaje</strong></label>
		<? 
			include('php/Inputs.php'); 
			new Inputs('Nombre', 'text', '', true); 
			new Inputs('Empresa', 'text');
			new Inputs('Correo electrónico','email','',true);
			new Inputs('Teléfono', 'tel', '', true);
			new Inputs('Ciudad','text');
			new Inputs('Mensaje','textarea');
			new Inputs('','buttonsubmit', 'Enviar');
		?>
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</form>
	
	<address>
		<div id="address">
			<p id="writeus">Contáctenos</p>
			<p><strong>Tel. 4118-1027</strong></p>
			<p><strong>Tel. 4119-4420</strong></p>
			<p><a href="mailto:info@dieldem.com.mx">info@dieldem.com.mx</a></p>
			<!--<p>Casuarinas 121-A. Izcalli, Ixtapaluca, C.P. 56560, México.</p>-->
		</div>
	</address>
	<div class="clear"></div>
</section>

<? include('php/footer.php'); ?>

</body>
</html>