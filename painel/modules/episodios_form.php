<br>
<div class="container">
	<div class="row">
	    <?php if($_GET["s"] != "" || $_GET["i"] != ""){?><form class="col s12" action="modules/_submit_episodios.php" method="POST" enctype="multipart/form-data"><?php } ?>

	    <?php 

	    	$id = $_GET["i"];
	    	$s  = $_GET["s"];

	    	if($id != ""){
	    		include_once("../class/Connection.php");
				include_once("../class/DataBase.php");

				$db = new DataBase;

				$result = $db->select("episodes"," WHERE id = '".$id."'");

				while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
					$title  				= db2str($item["title"]);
					$number  				= $item["number"];
					$type  					= $item["type"];
					$serie  				= $item["serie"];
					$season  				= $item["season"];
					$code_leg  				= $item["code_leg"];
					$code_dub  				= $item["code_dub"];
					$cover  				= $item["cover"];
					$status  				= $item["status"];
				}	
	    	}

	    	$maker->set_label("NOVO EPISÓDIO");
	    	$maker->title();

	    	include_once("_get_series.php");
	    	if($_GET["s"] != "") $cond = " WHERE serie = '".$_GET["s"]."'";
	    	if($_GET["s"] == "") $cond = " WHERE serie = '".$serie."'";
	    	include_once("_get_temporadas.php");

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

	    		$maker->set_name("status");
	    		if($id != "") $maker->set_value($status);
	    		if($id == "") $maker->set_value("1");
	    		$maker->input_hidden();

	    		if($_GET["s"] == "" && $_GET["i"] == ""){ ?><form action="" method="GET"><?php 
	    		$maker->set_name("o");
	    		$maker->set_value("episodios_form");
	    		$maker->input_hidden(); }

                if($_GET["s"] == "" || $_GET["i"] == "") $maker->set_col("8");
                if($_GET["s"] != "" || $_GET["i"] != "") $maker->set_col("12");
                if($_GET["s"] == "" || $_GET["i"] == "") $maker->set_name("s");
                if($_GET["s"] != "" || $_GET["i"] != "") $maker->set_name("serie");
	    		if($_GET["i"] != "") $maker->set_value($serie);
	    		if($_GET["i"] == "") $maker->set_value($_GET["s"]);
                $maker->set_label("Escolher a série");
                $maker->input_select($aSeries, true);

                if($_GET["s"] == "" && $_GET["i"] == ""){
		    		$maker->set_col("4");
		    		$maker->set_name("selectserie");
		    		$maker->set_icon("filter_list");
		    		$maker->set_label("Selecionar");
		    		$maker->submit_button();
		    	}
                if($_GET["s"] == "" && $_GET["i"] == ""){ ?></form><?php }
            if($_GET["s"] != "" || $_GET["i"] != ""){
		    	$maker->divide_row();

		            $maker->set_col("6");
		            $maker->set_name("season");
		    		if($season != "0") $maker->set_value($season);
		            $maker->set_label("Temporada");
		            $maker->input_select($aTemporadasNomes, true);

	    			include_once("_get_episodios_tipos.php");

	                $maker->set_col("6");
	                $maker->set_name("type");
	                $maker->set_label("Tipo de Episódio");
	                if($id != "") $maker->set_value($type);
	                if($id == "") $maker->set_value("1");
	                $maker->input_select($aTipos, true); //ENVIAR 'TRUE' PARA CAMPO OBRIGATÓRIO

		    		$maker->set_col("4");
		    		$maker->set_name("number");
		    		$maker->set_label("Nº do Episódio");
		    		$maker->set_value($number);
		    		$maker->set_min("1");
		    		$maker->set_max("999");
		    		$maker->input_number(true); //ENVIAR 'TRUE' PARA CAMPO OBRIGATÓRIO

		    		$maker->set_col("8");
		    		$maker->set_name("title");
		    		$maker->set_label("Título");
		    		$maker->set_value($title);
		    		$maker->input_text(true); //ENVIAR 'TRUE' PARA CAMPO OBRIGATÓRIO

		    		$maker->set_col("12");
		    		$maker->set_name("code_leg");
		    		$maker->set_label("Código do Episódio Legendado");
		    		$maker->set_value($code_leg);
		    		$maker->input_text(false); //ENVIAR 'TRUE' PARA CAMPO OBRIGATÓRIO

		    		$maker->set_col("12");
		    		$maker->set_name("code_dub");
		    		$maker->set_label("Código do Episódio Dublado");
		    		$maker->set_value($code_dub);
		    		$maker->input_text(false); //ENVIAR 'TRUE' PARA CAMPO OBRIGATÓRIO

		    		$maker->set_col("12");
		    		$maker->set_name("cover");
		    		$maker->set_label("Capa do Episódio");
		    		$maker->set_value($cover);
		    		if($id != "") $maker->input_file(false); //ENVIAR 'TRUE' PARA CAMPO OBRIGATÓRIO
		    		if($id == "") $maker->input_file(true); //ENVIAR 'TRUE' PARA CAMPO OBRIGATÓRIO

		    	$maker->divide_row();

		    		$maker->set_col("4 offset-s8"); //ITEM DE 4 COLUNAS COM ESPAÇO DE 8 COLUNAS
		    		$maker->set_name("submit");
		    		$maker->set_label("Salvar Episódio");
		    		$maker->submit_button();
		    }

	    	$maker->close_row();

	    	if($_GET["s"] != "" || $_GET["i"] != ""){ ?></form><?php }

	    ?>
	</div>
</div>
<br>