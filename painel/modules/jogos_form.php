<br>
<div class="container">
	<div class="row">
	    <form class="col s12" action="modules/_submit_jogos.php" method="POST">

	    <?php 

	    	$id = $_GET["i"];

	    	if($id != ""){
	    		include_once("../class/Connection.php");
				include_once("../class/DataBase.php");

				$db = new DataBase;

				$result = $db->select("jogos"," WHERE id = '".$id."'");

				while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
					$titulo  			= db2str($item["titulo"]);
					$data  				= $item["data"];
					$status  			= $item["status"];
					$usuarios  			= $item["num_usuarios"];
					$acessos  			= $item["num_acessos"];
				}	
	    	}

	    	if($_SESSION["gts_lg"] == "2"){
		    	if($id == "") $maker->set_label("NOVO JOGO");
		    	if($id != "") $maker->set_label("EDITAR JOGO");
		   	}else{
		    	if($id == "") $maker->set_label("NEW GAME");
		    	if($id != "") $maker->set_label("EDIT GAME");
		   	}
	    	$maker->title();

	    	$maker->open_row(); //ABRE UMA LINHA

	    		if($id != ""){
		    		$maker->set_name("id");
		    		$maker->set_value($id);
		    		$maker->input_hidden();

		    		$acao = "update";
	    		}else{
		    		$acao = "insert";
	    		}

	    		$maker->set_name("acao");
	    		$maker->set_value($acao);
	    		$maker->input_hidden();

	    		$maker->set_name("usuario");
	    		$maker->set_value($_SESSION["gts_id"]);
	    		$maker->input_hidden();

	    		$maker->set_name("data");
	    		if($id == "") $maker->set_value(date("Y-m-d"));
	    		if($id != "") $maker->set_value($data);
	    		$maker->input_hidden();

	    		$maker->set_name("num_acessos");
	    		if($id == "") $maker->set_value("0");
	    		if($id != "") $maker->set_value($acessos);
	    		$maker->input_hidden();

	    		$maker->set_name("num_usuarios");
	    		if($id == "") $maker->set_value("0");
	    		if($id != "") $maker->set_value($usuarios);
	    		$maker->input_hidden();

	    		$maker->set_name("status");
	    		if($id != "") $maker->set_value($status);
	    		if($id == "") $maker->set_value("1");
	    		$maker->input_hidden();

	    	if($_SESSION["gts_lg"] == "2"){

	    		$maker->set_col("12");
	    		$maker->set_name("titulo");
	    		$maker->set_label("Título");
	    		$maker->set_value($titulo);
	    		$maker->input_text(true); //ENVIAR 'TRUE' PARA CAMPO OBRIGATÓRIO

	    	}else{

	    		$maker->set_col("12");
	    		$maker->set_name("titulo");
	    		$maker->set_label("Title");
	    		$maker->set_value($titulo);
	    		$maker->input_text(true); //ENVIAR 'TRUE' PARA CAMPO OBRIGATÓRIO
	    	}

	    	$maker->divide_row();

	    		$maker->set_col("4 offset-s8"); //ITEM DE 4 COLUNAS COM ESPAÇO DE 8 COLUNAS
	    		$maker->set_name("submit");
	    		if($_SESSION["gts_lg"] == "2") $maker->set_label("Salvar Jogo");
	    		else $maker->set_label("Save Game");
	    		$maker->submit_button();

	    	$maker->close_row();

	    ?>

	    </form>
	</div>
</div>
<br>