<? include('config.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<? include('php/head.php'); ?>
</head>

<body itemscope itemtype="http://schema.org/WebPage">

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
			<div class="titletext"><span>DIELDEM</span>PERSONALIZACIÓN</div>
			<div class="imgs"><img src="imgs/weare.png" alt="Personalización" /></div>
		</article>
	</div>
</section>
<div class="hr"></div>




<section id="servicios">
	<article class="maintext">
		<h3>Personalización</h3>
		<p>En <strong>DIELDEM</strong> contamos con una gran gama de productos. Para nosotros es muy importante que estos sean totalmente personalizados a sus necesidades reales, por lo que si usted prefiere nuestro equipo de ingeniería lo visitara directamente en sus oficinas para explicarle cada uno de nuestros productos y servicios, así como orientarle sobre los diferentes sistemas racks y de transportación de acuerdo a sus necesidades…</p>

<blockquote>Nos gusta hacer equipo con ustedes, estamos a sus órdenes.</blockquote>
	</article>
	<div class="clear"></div>
</section>
<div class="clear"></div>




<? include('php/footer.php'); ?>

</body>
</html>