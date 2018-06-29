<?php

	include_once("../../class/Connection.php");
	include_once("../../class/DataBase.php");

	$db = new DataBase;

	if($_GET["s"] == "1") $result = $db->sql("UPDATE jogos SET status = '2' WHERE id = '".$_GET["i"]."'");
	if($_GET["s"] == "2") $result = $db->sql("UPDATE jogos SET status = '1' WHERE id = '".$_GET["i"]."'");

	if($result){ ?>

		<script type="text/javascript">
			//var msg = "Alterado com sucesso!";
			//alert(msg);
			location.href="../?o=jogos_list";
		</script>

	<?php } else { ?>

		<script type="text/javascript">
			var msg = "Erro ao alterar!\nPor favor, tente novamente mais tarde.";
			alert(msg);
			location.href="../?o=jogos_list";
		</script>

	<?php } 

?>