<?php
$title = "Distribuição de Pontos de Acesso: Piraquara Digital ";
require_once("header.php");
?>

<h1>Projeto Piraquara Digital</h1>
<h2>Pontos de Acesso</h2>

	<div class="cntd">
		<section>
			<p style="font-size: small;">Atualizado automaticamente a cada 5 minutos.<br />
				Para atualizar manualmente, pressione a tecla <strong>F5</strong>
			</p>

			<hr />
			<p>&nbsp;</p>

				<div id="1">
<?php
$result = mysql_query( "SELECT ip, descricao FROM hotspot WHERE descricao NOT LIKE '%Uberaba%' ORDER BY descricao;" ) or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);
setlocale(LC_ALL, "pt_BR.UTF-8");
echo "<p>Cascavel, ".strftime("%e")." de ".strftime("%B")." de ".strftime("%Y")." - ".strftime("%H:%M")."</p>";
echo "<p>Existem atualmente ".$num_rows." pontos de acesso:</p>";
echo "<table border='1'>\n";
echo "<tr><th>Localidade</th><th>Status</th><th>Usuários Online</th></tr>";
while ($get_info = mysql_fetch_array($result)){
	print_r("<tr><td><a href='resultado.php?ipap=".$get_info[0]."'>".$get_info[1]."</a></td>").$conectado = @fsockopen($get_info[0], 64322, $numeroDoErro, $stringDoErro, 0.6);
	if ($conectado) {
		echo "<td>- Online -</td>";
		echo "<td align='right'>";
		system("/usr/bin/snmpwalk -v 1 -c public -On ".$get_info[0]." 1.3.6.1.4.1.14988.1.1.2.1.1.2 |grep hotspot- | wc -l");
		echo "</td></tr>";
	} else {
		echo "<td><span style='color: red;'>Offline</span></td></tr>";
	}
	"";
}
echo "</table>";

mysql_close($link);
?>

				</div>
		</section>
	</div>

<?php
require_once("footer.php");
?>
