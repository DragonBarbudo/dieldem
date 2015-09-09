<div class="hr"></div>

<footer>
	<div id="footer">
		<nav><?php echo $navigation; ?></nav>
		<address>
			<h4>Contacto</h4>
			<p>Tel. 4118-1027</p>
			<p>Tel. 4119-4420</p>
			<a href="mailto:info@dieldem.com.mx">info@dieldem.com.mx</a>
		</address>
		<div class="clear"></div>
	</div>
</footer>

<?php if($analytics){ ?>
<script>
    var _gaq=[['_setAccount', <?php echo $analytics; ?>],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php } ?>
