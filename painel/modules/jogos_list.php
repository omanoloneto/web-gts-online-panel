<br>
	<div class="row">

	    <?php 

	    if($_SESSION["gts_lg"] == "2"){

	    	$cond = "WHERE usuario = '".$_SESSION["gts_id"]."' ORDER BY titulo ASC";
	    	include "_get_jogos.php";

	    	$maker->set_label("MEUS JOGOS");
	    	$maker->title();

	    	$maker->open_row(); //ABRE UMA LINHA

	    		$maker->set_col("3 offset-s9");
	    		$maker->set_icon("add");
	    		$maker->set_href("?o=jogos_form");
	    		$maker->set_label("Novo Jogo");
	    		$maker->button();

	    	$maker->divide_row();

	    		$maker->open_table("GAME ID,Título,Data de Cadastro,Status,Editar,Excluir");

	    			foreach ($aJogos as $key => $value) {
	    				
	    				$maker->open_line();

	    					$maker->column($key);

	    					$maker->column($value);

	    					$maker->column(db2date($aJogos_data[$key]));

	    					$maker->open_column();

	    						$maker->set_href("modules/_switch_jogos.php?i=".$key."&s=".$aJogos_status[$key]);
	    						if($aJogos_status[$key] == "1"){
		    						$maker->set_label("ATIVO (clique para desativar)");
		    						$maker->set_icon("visibility");
		    					}else{
		    						$maker->set_label("INATIVO (clique para ativar)");
		    						$maker->set_icon("visibility_off");
		    					}
	    						$maker->icon_button();

	    					$maker->close_column();

	    					$maker->open_column();

	    						$maker->set_href("?o=jogos_form&i=".$key);
	    						$maker->set_label("Clique para editar o jogo.");
	    						$maker->set_icon("mode_edit");
	    						$maker->icon_button();

	    					$maker->close_column();

	    					$maker->open_column();

	    						$maker->set_href("modules/_delete_jogos.php?i=".$key);
	    						$maker->delete_button();

	    					$maker->close_column();

	    				$maker->close_line();

	    			}

	    		$maker->close_table();

	    	$maker->close_row();

	    }else{

	    	$cond = "WHERE usuario = '".$_SESSION["gts_id"]."' ORDER BY titulo ASC";
	    	include "_get_jogos.php";

	    	$maker->set_label("MY GAMES");
	    	$maker->title();

	    	$maker->open_row(); //ABRE UMA LINHA

	    		$maker->set_col("3 offset-s9");
	    		$maker->set_icon("add");
	    		$maker->set_href("?o=jogos_form");
	    		$maker->set_label("New Game");
	    		$maker->button();

	    	$maker->divide_row();

	    		$maker->open_table("GAME ID,Title,Created on,Status,Edit,Delete");

	    			foreach ($aJogos as $key => $value) {
	    				
	    				$maker->open_line();

	    					$maker->column($key);

	    					$maker->column($value);

	    					$maker->column(db2date($aJogos_data[$key]));

	    					$maker->open_column();

	    						$maker->set_href("modules/_switch_jogos.php?i=".$key."&s=".$aJogos_status[$key]);
	    						if($aJogos_status[$key] == "1"){
		    						$maker->set_label("ACTIVE (click to deactivate)");
		    						$maker->set_icon("visibility");
		    					}else{
		    						$maker->set_label("DEACTIVE (click to activate)");
		    						$maker->set_icon("visibility_off");
		    					}
	    						$maker->icon_button();

	    					$maker->close_column();

	    					$maker->open_column();

	    						$maker->set_href("?o=jogos_form&i=".$key);
	    						$maker->set_label("Click to edit the game.");
	    						$maker->set_icon("mode_edit");
	    						$maker->icon_button();

	    					$maker->close_column();

	    					$maker->open_column();

	    						$maker->set_href("modules/_delete_jogos.php?i=".$key);
	    						$maker->delete_button();

	    					$maker->close_column();

	    				$maker->close_line();

	    			}

	    		$maker->close_table();

	    	$maker->close_row();

	    }

	    ?>

	</div>
<br>