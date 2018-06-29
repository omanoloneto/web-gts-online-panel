<?php
	include_once("../../class/Connection.php");
	include_once("../../class/DataBase.php");

	$db = new DataBase;

	$result = $db->delete("jogos", $_GET["i"]);

	if($result){ ?>

		<script type="text/javascript">
			var msg = "Excluido com sucesso!";
			alert(msg);
			location.href="../?o=jogos_list";
		</script>

	<?php } else { ?>

		<script type="text/javascript">
			var msg = "Erro ao excluir!\nPor favor, tente novamente mais tarde.";
			alert(msg);
			location.href="../?o=jogos_list";
		</script>

	<?php } 

?>