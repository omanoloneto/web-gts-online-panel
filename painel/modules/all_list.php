<br>
	<div class="row">

	    <?php 

	    if($_SESSION["gts_lg"] == "2"){

	    	include "_get_usuarios.php";
	    	$cond = " ORDER BY titulo ASC";
	    	include "_get_jogos.php";

	    	$maker->set_label("TODOS OS JOGOS");
	    	$maker->title();

	    	$maker->open_row(); //ABRE UMA LINHA

	    		$maker->open_table("Título,Data de Cadastro,Dono do Jogo");

	    			foreach ($aJogos as $key => $value) {
	    				
	    				$maker->open_line();

	    					$maker->column($value);

	    					$maker->column(db2date($aJogos_data[$key]));

	    					$maker->column($aUsuarios[$aJogos_usuario[$key]]);
	    					//$maker->column($aJogos_usuario[$key]);

	    				$maker->close_line();

	    			}

	    		$maker->close_table();

	    	$maker->close_row();

	    }else{

	    	include "_get_usuarios.php";
	    	$cond = " ORDER BY titulo ASC";
	    	include "_get_jogos.php";

	    	$maker->set_label("ALL GAMES");
	    	$maker->title();

	    	$maker->open_row(); //ABRE UMA LINHA

	    		$maker->open_table("Title,Created on,Game Owner");

	    			foreach ($aJogos as $key => $value) {
	    				
	    				$maker->open_line();

	    					$maker->column($value);

	    					$maker->column(db2date($aJogos_data[$key]));

	    					$maker->column($aUsuarios[$aJogos_usuario[$key]]);
	    					//$maker->column($aJogos_usuario[$key]);

	    				$maker->close_line();

	    			}

	    		$maker->close_table();

	    	$maker->close_row();


	    }

	    ?>

	</div>
<br>