<br>
	<div class="row">

	    <?php 

	    	if($_GET["i"] != "") $cond = " WHERE serie = '".$_GET["i"]."'";
	    	$cond .= " ORDER BY number ASC";
	    	include "_get_episodios.php";
	    	$cond = " ORDER BY title ASC";
	    	include "_get_series.php";

	    	$maker->set_label("LISTA DE EPISÓDIOS");
	    	$maker->title();

	    	$maker->open_row(); //ABRE UMA LINHA

	    		?><form action="" method="GET"><?php
	    		$maker->set_name("o");
	    		$maker->set_value("episodios_list");
	    		$maker->input_hidden();

                $maker->set_col("4");
                $maker->set_name("i");
	    		$maker->set_value($_GET["i"]);
                $maker->set_label("Filtrar por série");
                $maker->input_select($aSeries, true);

	    		$maker->set_col("2");
	    		$maker->set_name("filter");
	    		$maker->set_icon("filter_list");
	    		$maker->set_label("Filtrar");
	    		$maker->submit_button();
                ?></form><?php

	    		$maker->set_col("3 offset-s3");
	    		$maker->set_icon("add");
	    		if($_GET["i"] == "") $maker->set_href("?o=episodios_form");
	    		if($_GET["i"] != "") $maker->set_href("?o=episodios_form&s=".$_GET["i"]);
	    		$maker->set_label("Novo Episódio");
	    		$maker->button();

	    	$maker->divide_row();

	    		$maker->open_table("ID,Série,Episódio,Status,Editar,Excluir");

	    			foreach ($aEpisodios as $key => $value) {
	    				
	    				$maker->open_line();

	    					$maker->column($key);

	    					$maker->column($aSeries[$aEpisodioSerie[$key]]);

	    					$maker->column($aEpisodioNumber[$key]." - ".$value);

	    					$maker->open_column();

	    						$maker->set_href("modules/_switch_episodios.php?i=".$key."&s=".$aEpisodioStatus[$key]);
	    						if($aEpisodioStatus[$key] == "1"){
		    						$maker->set_label("ATIVO (clique para desativar)");
		    						$maker->set_icon("visibility");
		    					}else{
		    						$maker->set_label("INATIVO (clique para ativar)");
		    						$maker->set_icon("visibility_off");
		    					}
	    						$maker->icon_button();

	    					$maker->close_column();

	    					$maker->open_column();

	    						$maker->set_href("?o=episodios_form&i=".$key);
	    						$maker->set_label("Clique para editar o episódio.");
	    						$maker->set_icon("mode_edit");
	    						$maker->icon_button();

	    					$maker->close_column();

	    					$maker->open_column();

	    						$maker->set_href("modules/_delete_episodios.php?i=".$key);
	    						$maker->delete_button();

	    					$maker->close_column();

	    				$maker->close_line();

	    			}

	    		$maker->close_table();

	    	$maker->close_row();

	    ?>

	</div>
<br>