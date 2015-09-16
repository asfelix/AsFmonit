<?php
// include ($path . "common.php");
?>

</div>
<br />

<footer>
	<div id="footerimg">
		<img src="http://hotspot.dipelnet.com.br/prefeituracascavel/images/rodape.jpg" alt="Logo Dipelnet" />
	</div>
	<!--
	<div id="footertxt">
		<p class="rodape">
			<a href="
			<?php
			if (isset($siteowner)) {
				print $siteowner;
			} else {
				print "fail";
			}
			?>" title="
			<?php
			if (isset($owner)) {
				print $owner;
			} else {
				print "fail";
			}
			?>"> <?php
				if (isset($owner)) {
					print $owner;
				} else {
					print "";
				}
			?></a>
			<br />
			Rua Paraná, 3016 - 87.810-010 - Cascavel - Paraná
			<br />
			Telefone: <a href="tel:0800-646-7000">0800-646-7000</a>
			<br />
			SCM: 61.362 - STFC: 482/2008 - 483/2008 - 484/2008
			<br />
			Copyright &copy; 2010 - <?php echo date('Y'); ?>
			- Todos os direitos reservados
		</p>
		&nbsp;
	</div>
-->
</footer>
<!--
<p class="note">
	Melhor visualizado em: <a href="http://getfirefox.com" title="Baixe o Firefox">Mozilla Firefox 12.0</a>, <a href="https://www.google.com/chrome?hl=pt-br" title="Faça o download do Google Chrome">Google Chrome 18.0</a> <a href="http://opera.com" title="Baixar o Opera">Opera 12</a> <a href="www.apple.com/br/safari/" title="Faça o download do Safari">Safari 5</a> Internet Explorer 9 ou versões mais recentes.
</p>
-->
<?php
  // echo($_SERVER['HTTP_USER_AGENT']);
?>

<!-- jQuery (necessario para os plugins Javascript Bootstrap) -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
