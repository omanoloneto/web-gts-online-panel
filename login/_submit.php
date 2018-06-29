<?php

	include "../class/Connection.php";
	include "../class/DataBase.php";
	include "../_functions/_functions.php";

	session_start();

	$db = new DataBase();

	$array = Array();

	//ESTE FOREACH PEGA TODAS AS VÁRIAVEIS DO $_POST PARA SALVAR NO BANCO
	foreach ($_POST as $key => $value) {
		$array[$key] = $value;
	}

	$result = $db->select("usuarios"," WHERE email = '".$array["email"]."' AND senha = '".$array["senha"]."'");

	$id = "0";
	$tp = "0";
	$lg = "0";

	while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
		$id = $item["id"];
		$tp = $item["tipo"];
		$lg = $item["lang"];
	}

	if($id != "0"){
		$_SESSION["gts_id"] = $id;
		$_SESSION["gts_tp"] = $tp;
		$_SESSION["gts_lg"] = $lg;
	}else{
		$_SESSION["gts_id"] = null;
		$_SESSION["gts_tp"] = null;
		$_SESSION["gts_lg"] = null;
	}

	if($_SESSION["gts_id"] == null || $_SESSION["gts_id"] == ""){
      $msg = "Erro ao realizar login, tente novamente mais tarde!";
      $url = "http://".get_domain()."/login";
  	}else{
  	  $url = "http://".get_domain()."/painel";
  	}
	?>
    	<script type="text/javascript">
      		<?php if($msg != "") { ?>var msg = "<?php echo $msg; ?>";
      		alert(msg);<?php } ?>
      		location.href="<?php echo $url; ?>";
    	</script>
	<?php

?>