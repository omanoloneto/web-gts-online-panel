<? 
	include_once("../class/Connection.php");
	include_once("../class/DataBase.php");

	$db = new DataBase;

	$aJogos = Array();
	$aJogos_data = Array();
	$aJogos_status = Array();
	$aJogos_usuario = Array();
	$aJogos_usuarios = Array();
	$aJogos_acessos = Array();

	$result = $db->select("jogos", $cond);
	$cond = "";

	while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
		$aJogos[$item["id"]] 				= $item["titulo"];
		$aJogos_data[$item["id"]] 			= $item["data"];
		$aJogos_status[$item["id"]]		 	= $item["status"];
		$aJogos_usuario[$item["id"]]		= $item["usuario"];
		$aJogos_usuarios[$item["id"]]		= $item["num_usuarios"];
		$aJogos_acessos[$item["id"]]		= $item["num_acessos"];
	}

?>