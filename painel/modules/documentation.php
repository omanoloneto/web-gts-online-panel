<br>
<style type="text/css">
	p {
		text-align: justify;
	}
</style>
<div class="container">
	<div class="row">
		<?php

			if($_SESSION["gts_lg"] == "2"){

				// DOCUMENTAÇÃO EM PORTUGUÊS
				$maker->open_row(); 

				$maker->set_label("DOCUMENTAÇÃO");
		    	$maker->title();

		    	?>

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

		    	<p>O sistema de GTS para <b>Pokémon Essentials</b> (RMXP) foi criado e disponibilizado por <b>Hansiec</b> e <b>Saving Raven</b> no fórum <b>PokéCommunity</b>, nós da <b>Hills Tech</b> apenas criamos o servidor e o painel administrativo para o sistema, tivemos que atualizar os códigos do criador origial para que o sistema funcionasse em uma versão mais recente do <b>Pokémon Essentials</b> e para que pudesse ser usado por várias pessoas ao mesmo tempo por meio deste painel administrativo, porém todo o código original é de autoria dos desenvolvedores citados anteriormente. O post original pode ser lido <b><a href="https://www.pokecommunity.com/showthread.php?t=317998" target="_blank">clicando aqui</a></b>.</p>

		    	<p><b>PS.:</b> Não esqueça de criar um <i>backup</i> do seu jogo antes de realizar os procedimentos.</p>

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

		    	<?php

		    	$maker->divide_row();

				$maker->set_label("PRIMEIROS PASSOS");
		    	$maker->title();

		    	?>

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

		    	<p>Primeiramente você deve clicar na aba <b>Meus Jogos</b>, no menu superior do site, nesta tela você verá todos os jogos que foram cadastrados por você. Clicando no botão <b>Novo Jogo</b> você pode cadastrar um jogo novo apenas informando o título do jogo, você pode ter quantos jogos quiser cadastrados no sistema. Depois de cadastrado você será direcionado novamente para a tela que lista os seus jogos, nela você verá o jogo que acabou de cadastrar, no início da linha haverá um número, este é o <b>GAME ID</b> do seu jogo (<i>como mostrado na imagem abaixo</i>), cada jogo tem um <b>GAME ID</b> diferente, anote ele, pois ele será muito importante para continuar o seu projeto.</p>

		    	<img src="../images/doc1.png" width="100%" />

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

		    	<?php

		    	$maker->divide_row();

				$maker->set_label("GRÁFICOS E SCRIPTS");
		    	$maker->title();

		    	?>

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

		    	<p>Você vai precisar fazer download dos arquivos que serão usados como gráfico do sistema de GTS dentro do jogo, para fazer o download basta <b><a href="http://gts.hillstech.co/Graphics.zip" target="_blank">clicar aqui</a></b>. Após fazer o download do arquivo <b>.zip</b> basta extrai-lo para dentro da pasta do seu jogo.</p>

		    	<p>Com os gráficos já no lugar certo, vamos abrir nosso projeto e abrir o <b>Editor de Scripts</b>. Crie um novo <i>script</i> em branco com o nome <b>GTS_MainSystem</b>, mas <b>ATENÇÂO:</b> se você utiliza a versão 17 do Pokémon Essentials, crie esse código logo <b>acima</b> do <b>Main</b>. O código que vamos colocar nesse <i>script</i> teve ser copiado de um arquivo <b>.txt</b> que você pode ver escolhendo o seu tipo de jogo abaixo:<br>

		    	<ul>
		    		<li>Se você utiliza a <b>v17</b> e o sistema padrão de <i>save game</i> <b><a href="http://gts.hillstech.co/GTSMSv17.txt" target="_blank">clique aqui</a></b></li>
		    	</ul>

		    	<ul>
		    		<li>Se você utiliza a <b>v16</b> e o sistema de <i>multiple save game</i> <b><a href="http://gts.hillstech.co/GTSMSMSG.txt" target="_blank">clique aqui</a></b></li>
		    		<li>Se você utiliza a <b>v16</b> e o sistema padrão de <i>save game</i> <b><a href="http://gts.hillstech.co/GTSMS.txt" target="_blank">clique aqui</a></b></li>
		    	</ul>
		    		
		    	</p>

		    	<p>Após copiar o código do arquivo <b>.txt</b> cole ele no <i>script</i> em branco que você acabou de criar no seu projeto, o resultado deve ficar parecido com o da imagem abaixo.</p>

		    	<img src="../images/doc2.png" width="100%" />

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

		    	<?php

		    	$maker->divide_row();

				$maker->set_label("CONFIGURANDO O SCRIPT NA <b>VERSÃO 17</b>");
		    	$maker->title();

		    	?>

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

		    	<p>Lembra que eu disse que era para anotar o <b>GAME ID</b> do seu jogo? Agora é a hora de usar o número que você anotou. Vamos procurar no <i>script</i> que criamos no nosso projeto no <b>RPG Maker XP</b> a linha que contem a <i>URL</i> de conexão com o servidor, na linha acima dela teremos a variável <i>GAMEID</i>, você vai notar que há um número zero bem no fim dessa linha, como na imagem abaixo.</p>

		    	<img src="../images/doc5.png" width="100%" />

		    	<p>Este zero deverá ser substituido pelo <b>GAME ID</b> do seu jogo, aquele número que você anotou lá no começo da documentação. Após este passo basta você salvar o <i>script</i> e fechar o <b>Editor de Scripts</b>.</p>

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

		    	<?php

		    	$maker->divide_row();

				$maker->set_label("CONFIGURANDO O SCRIPT NA <b>VERSÃO 16</b>");
		    	$maker->title();

		    	?>

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

		    	<p>Lembra que eu disse que era para anotar o <b>GAME ID</b> do seu jogo? Agora é a hora de usar o número que você anotou. Vamos procurar no <i>script</i> que criamos no nosso projeto no <b>RPG Maker XP</b> a linha que contem a <i>URL</i> de conexão com o servidor, provavelmente será a linha 48 do <i>script</i>, você vai notar que há um número zero bem no fim da linha, como na imagem abaixo.</p>

		    	<img src="../images/doc3.png" width="100%" />

		    	<p>Este zero deverá ser substituido pelo <b>GAME ID</b> do seu jogo, aquele número que você anotou lá no começo da documentação. Após este passo basta você salvar o <i>script</i> e fechar o <b>Editor de Scripts</b>.</p>

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
		    	
		    	<?php

		    	$maker->divide_row();

				$maker->set_label("USANDO O GTS");
		    	$maker->title();

		    	?>

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

		    	<p>Agora você já instalou o GTS em seu projeto, e ele já está funcionando, o que precisamos fazer é criar um evento para chamar o <i>script</i> que acabamos de configurar.</p>

		    	<p>Criei um evento qualquer, e dentro deste evento a única coisa que vou fazer é chamar o nosso <i>script</i> com a opção <b>Chamar Script</b>, de dentro dela colocar o código <b>GTS.open</b>. Veja como ficou meu evento na imagem abaixo.</p>

		    	<img src="../images/doc4.png" width="100%" />

		    	<p>Finalmente é só testar o seu jogo agora, falando com o evento que você criou já vai ser possível testar o GTS e depositar seus Pokémons no servidor. Caso você tenha algum tipo de problema entre em contato com a gente pelo email <b><a href="mailto:contato@hillstech.co?Subject=GTS Report" target="_top">contato@hillstech.co</a></b> para informar o que aconteceu.</p>

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
		    	
		    	<?php

		    	$maker->divide_row();

				$maker->set_label("CONSIDERAÇÕES FINAIS");
		    	$maker->title();

		    	?>

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

		    	<p>Como citado anteriormente, você pode ter quantos jogos quiser cadastrados no sistema, cada jogo tem o seu <b>GAME ID</b> e você derá que configura-lo no <i>script</i> de cada um dos seus projetos.</p>

		    	<p>É muito importante que não se esqueça de configurar o <b>GAME ID</b> dos seus jogos, caso contrário o GTS não irá funcionar, cada um dos projetos que você tiver deve ter um <b>GAME ID</b> diferente, logo deve cadastrar todos os projetos que quiser usar aqui no <i>GTS by hills tech</i>.</p>

		    	<p><i>Este sistema é completamente sem fins lucrativos, e foi criado por fãs com base no trabalho de fãs.</i></p>

		    	<p><i><b>Pokémon</b> é uma marca registrada, e todos os direitos pertencem a <b>Nintendo</b>.</i></p>

		    	<br><br><br><br>

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
		    	
		    	<?php

		    	$maker->close_row();

			}else{

				// DOCUMENTAÇÃO EM INGLÊS
				$maker->open_row(); 

				$maker->set_label("DOCUMENTATION");
		    	$maker->title();

		    	?>

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

		    	
				<p> The GTS system for <b>Pokémon Essentials</b> (RMXP) was created and made available by <b>Hansiec</b> and <b>Saving Raven</b> in the PokéCommunity forum, our team at <b>Hills Tech</b> created the server and admin panel for the system, we had to update the origial creator codes for the system to run on a newer version of <b>Pokémon Essentials</b> and so that it could be used by multiple people at the same time through this administrative panel, but all the original code is authored by the developers mentioned above. The original post can be read <b><a href="https://www.pokecommunity.com/showthread.php?t=317998" target="_blank">clicking here</a></b>.</p>

				<p><b>PS.:</b> Do not forget to create a <i>backup</i> of your game before performing the procedures.</p>

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

		    	<?php

		    	$maker->divide_row();

				$maker->set_label("FIRST STEPS");
		    	$maker->title();

		    	?>

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

		    	<p>First you must click on the <b>My Games</b> tab in the top menu of the site, in this screen you will see all the games that have been registered by you. By clicking the <b>New Game</b> button you can register a new game just by entering the title of the game, you can have as many games as you want registered in the system. Once you have registered, you will be directed back to the screen that lists your games, in it you will see the game that you just registered, at the beginning of the line there will be a number, this is the <b>GAME ID</b> (<i>as shown in the image below</i>), each game has a different <b>GAME ID</b>, note it because it will be very important to continue your project.</p>

		    	<img src="../images/doc1.png" width="100%" />

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

		    	<?php

		    	$maker->divide_row();

				$maker->set_label("GRAPHICS AND SCRIPTS");
		    	$maker->title();

		    	?>

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

		    	<p>You will need to download the files that will be used as graphics of the GTS system within the game, to download just <b><a href="http://gts.hillstech.co/Graphics.zip" target="_blank">click here</a></b>. After downloading the <b>.zip</b> file simply extract it into your game folder.</p>

		    	<p>With the graphics already in place, let's open our project and open the <b>Script Editor</b>. Create a new blank <i>script</i> with <b>GTS_MainSystem</b> in your name, but <b>ATTENTION:</b> if you use version 17 of Pokémon Essentials, create this code just <b>above</b> the Main. The code we're going to put in this <i>script</i> has to be copied from a <b>.txt</b> file that you can see by choosing your game type below:<br>

		    	<ul>
		    		<li>If you use the <b>v17</b> and the default <i>save game system</i> <b><a href="http://gts.hillstech.co/GTSMSv17.txt" target="_blank">click here</a></b></li>
		    	</ul>

		    	<ul>
		    		<li>If you use the <b>v16</b> and the <i>multiple save game system</i> <b><a href="http://gts.hillstech.co/GTSMSMSG.txt" target="_blank">click here</a></b></li>
		    		<li>If you use the <b>v16</b> and the default <i>save game system</i> <b><a href="http://gts.hillstech.co/GTSMS.txt" target="_blank">click here</a></b></li>
		    	</ul>
		    		
		    	</p>

		    	<p>After copying the code from the <b>.txt</b> file paste it into the blank <i>script</i> you just created in your project, the result should look like the one below.</p>

		    	<img src="../images/doc2.png" width="100%" />

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

		    	<?php

		    	$maker->divide_row();

				$maker->set_label("CONFIGURING SCRIPT IN <b>VERSION 17</b>");
		    	$maker->title();

		    	?>

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

		    	<p>Remember I said that it was to write down the <b>GAME ID</b> of your game? Now is the time to use the number you wrote down. Let's look at the <i>script</i> that we created in our <b>RPG Maker XP</b> project the line that contains <i>URL</i> connecting to the server on the line above it we will have the <i>GAMEID</i> variable, you will notice that there is a zero number right at the end of this line, as in the image below.</p>

		    	<img src="../images/doc5.png" width="100%" />

		    	<p>This zero should be replaced by your game's <b>GAME ID</b>, the number you noted there at the beginning of the documentation. After this step you just need to save the <i>script</i> and close the <b>Script Editor</b>.</p>

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

		    	<?php

		    	$maker->divide_row();

				$maker->set_label("CONFIGURING SCRIPT IN <b>VERSION 16</b>");
		    	$maker->title();

		    	?>

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

		    	<p>Remember that I said it was to write down the <b>GAME ID</b> of your game? Now is the time to use the number you wrote down. Let's look at the <i> script </i> that we created in our <b>RPG Maker XP</b> project that contains the <i>URL</i> connection to the server, usually on the line 48, you will notice that there is a zero number at the end of the line, as in the image below.</p>

		    	<img src="../images/doc3.png" width="100%" />

		    	<p>This zero should be replaced by your game's <b>GAME ID</b>, the number you noted there at the beginning of the documentation. After this step you just need to save the <i>script</i> and close the <b>Script Editor</b>.</p>

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
		    	
		    	<?php

		    	$maker->divide_row();

				$maker->set_label("USING THE GTS");
		    	$maker->title();

		    	?>

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

		    	<p>Now you've installed GTS in your project, and it's already working, what we need to do is create an event to call the <i>script</i> we just set up.</p>

		    	<p>I created an event, and within this event the only thing I'm going to do is call our script with the <b>Call Script</b> option, from inside it put the <b>GTS.open</b>. See how my event was in the image below.</p>

		    	<img src="../images/doc4.png" width="100%" />

		    	<p>Finally, just test your game now, speaking with the event you created it will already be possible to test the GTS and deposit your Pokémon on the server. If you have any problems please contact us by email <b><a href="mailto:contato@hillstech.co?Subject=GTS Report" target="_top">contato@hillstech.co</a></b> to report what happened.</p>

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
		    	
		    	<?php

		    	$maker->divide_row();

				$maker->set_label("FINAL CONSIDERATIONS");
		    	$maker->title();

		    	?>

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

		    	<p>As mentioned earlier, you can have as many games as you want registered in the system, each game has its <b>GAME ID</b> and you will have to configure it in the <i>script</i> of each of your projects.</p>

		    	<p>It is very important that you do not forget to configure the <b>GAME ID</b> of your games, otherwise the GTS will not work, each of the projects you have must have a different <b>GAME ID</b> you should register all the projects you want to use here in <i>GTS by hills tech</i>.</p>

		    	<p><i>This system is completely non-profit, and was created by fans based on the work of fans.</i></p>

		    	<p><i><b>Pokémon</b> is a registered trademark, and all rights belong to <b>Nintendo</b>.</i></p>

		    	<br><br><br><br>

		    	<!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
		    	
		    	<?php

		    	$maker->close_row();


			}

		?>
	</div>
</div>
<br>