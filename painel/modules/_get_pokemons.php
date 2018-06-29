<? 
	include_once("../class/Connection.php");
	include_once("../class/DataBase.php");

	$db = new DataBase;

	$aPokemons = Array();

	$result = $db->select("gts", $cond);
	$cond = "";
	$cont=0;

	while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
		$aPokemons[$item["id"]] 			= $item["pokemon"];
		$cont++;
	}

?>