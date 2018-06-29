<br>
<div class="container">
	<div class="row">
	    <form class="col s12" action="modules/_submit_conta.php" method="POST">

	    <?php 

	    	$id = $_SESSION["gts_id"];

	    	if($id != ""){
	    		include_once("../class/Connection.php");
				include_once("../class/DataBase.php");

				$db = new DataBase;

				$result = $db->select("usuarios"," WHERE id = '".$id."'");

				while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
					$nome  				= db2str($item["nome"]);
					$email  			= db2str($item["email"]);
					$senha  			= db2str($item["senha"]);
					$lang  				= db2str($item["lang"]);
				}	
	    	}

	    	if($_SESSION["gts_lg"] == "2"){

		    	$maker->set_label("EDITAR CONTA");
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

		    		if($s != ""){
		    			$serie = $s;
		    		}

		    		$maker->set_name("acao");
		    		$maker->set_value($acao);
		    		$maker->input_hidden();

	                $maker->set_col("12");
	                $maker->set_name("nome");
	                $maker->set_label("Nome Completo");
	                $maker->set_value($nome);
	                $maker->input_text(true); //ENVIAR 'TRUE' PARA CAMPO OBRIGATÓRIO

	                $maker->set_col("4");
	                $maker->set_name("email");
	                $maker->set_label("E-mail");
	                $maker->set_value($email);
	                $maker->input_text(true); //ENVIAR 'TRUE' PARA CAMPO OBRIGATÓRIO

		    		$maker->set_col("4");
		    		$maker->set_name("senha");
		    		$maker->set_label("Nova Senha (se você quiser)");
	                $maker->set_value($senha);
		    		$maker->input_password(false); //ENVIAR 'TRUE' PARA CAMPO OBRIGATÓRIO

		    		$maker->set_col("4");
		    		$maker->set_name("lang");
		    		$maker->set_label("Selecione o Idioma");
	                $maker->set_value($lang);
	                $array = explode(",","NONE,English,Português");
	                unset($array["0"]);
		    		$maker->input_select($array,true); //ENVIAR 'TRUE' PARA CAMPO OBRIGATÓRIO

		    	$maker->divide_row();

		    		$maker->set_col("4 offset-s8"); //ITEM DE 4 COLUNAS COM ESPAÇO DE 8 COLUNAS
		    		$maker->set_name("submit");
		    		$maker->set_label("Salvar");
		    		$maker->submit_button();

		    	$maker->close_row();

		    }else{

				$maker->set_label("EDIT ACCOUNT");
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

		    		if($s != ""){
		    			$serie = $s;
		    		}

		    		$maker->set_name("acao");
		    		$maker->set_value($acao);
		    		$maker->input_hidden();

	                $maker->set_col("12");
	                $maker->set_name("nome");
	                $maker->set_label("Your Full Name");
	                $maker->set_value($nome);
	                $maker->input_text(true); //ENVIAR 'TRUE' PARA CAMPO OBRIGATÓRIO

	                $maker->set_col("4");
	                $maker->set_name("email");
	                $maker->set_label("Your E-mail");
	                $maker->set_value($email);
	                $maker->input_text(true); //ENVIAR 'TRUE' PARA CAMPO OBRIGATÓRIO

		    		$maker->set_col("4");
		    		$maker->set_name("senha");
		    		$maker->set_label("New Password (if you want)");
	                $maker->set_value($senha);
		    		$maker->input_password(false); //ENVIAR 'TRUE' PARA CAMPO OBRIGATÓRIO

		    		$maker->set_col("4");
		    		$maker->set_name("lang");
		    		$maker->set_label("Select the Language");
	                $maker->set_value($lang);
	                $array = explode(",","NONE,English,Português");
	                unset($array["0"]);
		    		$maker->input_select($array,true); //ENVIAR 'TRUE' PARA CAMPO OBRIGATÓRIO

		    	$maker->divide_row();

		    		$maker->set_col("4 offset-s8"); //ITEM DE 4 COLUNAS COM ESPAÇO DE 8 COLUNAS
		    		$maker->set_name("submit");
		    		$maker->set_label("Save");
		    		$maker->submit_button();

		    	$maker->close_row();

		    }

	    ?>

	    </form>
	</div>
</div>
<br>