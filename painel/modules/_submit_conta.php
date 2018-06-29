<?php

	session_start();

	include "../../class/Connection.php";
	include "../../class/DataBase.php";
	include "../../_functions/_functions.php";

	$db = new DataBase();

	$array = Array();

	//SE NECESSÁRIO RETIRE A VARIÁVEL QUE NÃO VAI PARA O BANCO DO $_POST
	$acao = $_POST["acao"];
	unset($_POST["acao"]);

	//ESTE FOREACH PEGA TODAS AS VÁRIAVEIS DO $_POST PARA SALVAR NO BANCO
	foreach ($_POST as $key => $value) {
		$array[$key] = $value;
	}
	
	//SE NECESSÁRIO USE ESSA FUNÇÃO PARA PREPARAR A STRING PARA SER INSERIDA NO BANCO
	$array["nome"] 		= str2db($array["nome"]); 
	$array["email"] 	= str2db($array["email"]); 
	$array["senha"] 	= str2db($array["senha"]); 

	if($array["senha"] == "") unset($array["senha"]);

	if($acao == "insert") $result = $db->insert("usuarios", $array); //INSERE TODAS AS VARIÁVEIS NO BANCO
	if($acao == "update") $result = $db->update("usuarios", $array); //INSERE TODAS AS VARIÁVEIS NO BANCO

	if($result){ // SE DER CERTO
		if($acao == "insert"){ // SE FOR INSERT
			$msg = "Cadastro realizado com sucesso!";
			$url = "../?o=conta_form";
		} else { // SE FOR UPDATE
			$_SESSION["gts_lg"] = $array["lang"];
			$msg = "Salvo com sucesso!";
			$url = "../?o=conta_form";
		}
	} else { // SE DER ERRADO
		$msg = "Erro!\nPor favor, tente novamente mais tarde.";
		$url = "../?o=conta_form";
	} 

?>

<script type="text/javascript">
	var msg = "<?php echo $msg; ?>";
	alert(msg);
	location.href="<?php echo $url; ?>";
</script>