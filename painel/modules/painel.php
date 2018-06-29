<br>
	<div class="row">

	    <?php 

	    if($_SESSION["gts_lg"] == "2"){

	    	$cond = "WHERE usuario = '".$_SESSION["gts_id"]."' ORDER BY titulo ASC";
	    	include "_get_jogos.php";

	    	$maker->set_label("INFORMAÇÕES SOBRE MEUS JOGOS");
	    	$maker->title();

	    	$maker->open_row(); //ABRE UMA LINHA

	    		$maker->open_table("GAME ID,Título,Número de Usuários,Número de Acessos,Número de Pokémons Online,");

	    			foreach ($aJogos as $key => $value) {
	    				
	    				$maker->open_line();

	    					$maker->column($key);

	    					$maker->column($value);

	    					$maker->column($aJogos_usuarios[$key]);

	    					$maker->column($aJogos_acessos[$key]);

					    	$cond = "WHERE game = '".$key."'";
					    	include "_get_pokemons.php";

	    					$maker->column($cont);

	    				$maker->close_line();

	    			}

	    		$maker->close_table();

	    	$maker->close_row();

	    }else{

	    	$cond = "WHERE usuario = '".$_SESSION["gts_id"]."' ORDER BY titulo ASC";
	    	include "_get_jogos.php";

	    	$maker->set_label("INFORMATION ABOUT MY GAMES");
	    	$maker->title();

	    	$maker->open_row(); //ABRE UMA LINHA

	    		$maker->open_table("GAME ID,Title,Number of Users,Number of Hits,Online Pokémon Number,");

	    			foreach ($aJogos as $key => $value) {
	    				
	    				$maker->open_line();

	    					$maker->column($key);

	    					$maker->column($value);

	    					$maker->column($aJogos_usuarios[$key]);

	    					$maker->column($aJogos_acessos[$key]);

					    	$cond = "WHERE game = '".$key."'";
					    	include "_get_pokemons.php";

	    					$maker->column($cont);

	    				$maker->close_line();

	    			}

	    		$maker->close_table();

	    	$maker->close_row();

	    }

	    ?>

	</div>
<br>