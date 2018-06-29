<?php

	class Connection
	{
		
		function open()
		{
			$server = "localhost";
			$usuario = "hills981_gts";
			$senha = "Gyarados9171";
			$banco = "hills981_gts";
			
			return new mysqli($server, $usuario, $senha, $banco);
		}
		
	}

?>