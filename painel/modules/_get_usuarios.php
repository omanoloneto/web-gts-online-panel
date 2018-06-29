<? 
	include_once("../class/Connection.php");
	include_once("../class/DataBase.php");

	$db = new DataBase;

	$aUsuarios = Array();

	$result = $db->select("usuarios", $cond);
	$cond = "";

	while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
		$aUsuarios[$item["id"]] 			= $item["nome"];
	}

?>