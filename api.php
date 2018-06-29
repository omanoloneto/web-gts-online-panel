<?php
	/****
		GTS.php
			* By Umbreon
			
		- For use with Umbreon's trading system for Pokemon Essentials
		- Please edit the variables starting from $user ending at $table
		- After Editing, you can continue with main instructions
	****/

	include "class/Connection.php";

	$settings_table = "settings";
	$table = "gts";
	
	$version = "2.0.2";
	$default_message = "GTS, Version: $version";

	$conn = new Connection();
	$mysqli = $conn->open();
	
	if (!isset($_POST["action"]))
	{
		die($default_message);
	}
	else
	{
		$action = $_POST["action"];
		$game = $_GET["i"];
		$query = $mysqli->query("UPDATE jogos SET num_acessos = num_acessos + 1 WHERE id = $game");
	}
	
	if ($action == "getOnlineID") #### Tested, Works
	{
		$query = $mysqli->query("SELECT total_ids FROM settings WHERE id = 0");
		$str = "";
		$row = null;
		if ($query != false)
		{
			while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)){ 
				$str = $item["total_ids"] + 1;
			}
		}
		die("$str");
	}
	elseif ($action == "setOnlineID") #### Tested, Works
	{
		$id = $_POST["id"];
		$query = $mysqli->query("UPDATE settings SET total_ids = $id WHERE id = 0");
		if ($query != false)
		{
			$query = $mysqli->query("UPDATE jogos SET num_usuarios = num_usuarios + 1 WHERE id = $game");
			die("success");
		}else
		{
			die("");
		}
	}
	elseif ($action == "hasPokemonUploaded") #### Tested, Works
	{
		$id = $_POST["id"];
		$query = $mysqli->query("SELECT id FROM gts WHERE id = $id AND game = $game");
		if ($query != false)
		{
			$v = array();
			while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)){
				$v["id"] = $item["id"];
			}

			if (isset($v["id"]))
			{
				die("yes");
			}
		}
		die("no");
	}
	elseif ($action == "setTaken") #### Tested, Works
	{
		$id = $_POST["id"];
		
		$query = $mysqli->query("UPDATE gts SET taken = 1 WHERE id = $id AND game = $game");
		if ($query != false)
		{
			die("success");
		}
	}
	elseif ($action == "isTaken") #### Tested, Works
	{
		$id = $_POST["id"];
		
		$query = $mysqli->query("SELECT taken FROM gts WHERE id = $id AND game = $game");
		if ($query != false)
		{
			$row = array();

			while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)){
				$row["taken"] = $item["taken"];
			}

			if (isset($row["taken"]))
			{
				if ($row["taken"] == 1)
				{
					die("yes");
				}
			}
		}
		die("no");
	}
	elseif ($action == "uploadPokemon") #### Tested, Works
	{
		$id = $_POST["id"];
		$pokemon = $_POST["pokemon"];
		$species = $_POST["species"];
		$level = $_POST["level"];
		$gender = $_POST["gender"];
		$wspecies = $_POST["Wspecies"];
		$wlevelmin = $_POST["WlevelMin"];
		$wlevelmax = $_POST["WlevelMax"];
		$wgender = $_POST["Wgender"];
		
		$query = $mysqli->query("INSERT INTO gts (id, pokemon, species, level, gender, wanted_species, wanted_min_level,
		wanted_max_level, wanted_gender, game) VALUES ($id, '$pokemon', $species, $level, $gender, $wspecies, $wlevelmin, $wlevelmax, $wgender, $game)") or die(mysqli_error());
		
		if ($query != false)
		{
			die("success");
		}
		else
		{
			die("");
		}
		
	}
	elseif ($action == "uploadNewPokemon") #### Tested, Works
	{
		$id = $_POST["id"];
		$pokemon = $_POST["pokemon"];
		
		$query = $mysqli->query("UPDATE gts SET pokemon = '$pokemon' WHERE id = $id AND game = $game");
		if ($query != false)
		{
			die("success");
		}
		else
		{
			die("");
		}
	}
	elseif ($action == "downloadPokemon") #### Tested, Works
	{
		$id = $_POST["id"];
		
		$query = $mysqli->query("SELECT pokemon FROM gts WHERE id = $id AND game = $game");
		if ($query != false)
		{
			$row = array();
			while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)){
				$row = $item;
			}
			if (isset($row["pokemon"]))
			{
				die($row["pokemon"]);
			}
		}
		die("");
	}
	elseif ($action == "downloadWantedData") #### Not Tested, Should Work
	{
		$id = $_POST["id"];
		
		$query = $mysqli->query("SELECT * FROM gts WHERE id = $id AND game = $game");
		if ($query != false)
		{
			$row = array();
			while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)){
				$row = $item;
			}
			$str = "";
			if (!isset($row["wanted_species"]) || !isset($row["wanted_min_level"]) || !isset($row["wanted_max_level"]) || !isset($row["wanted_gender"]))
			{
				die("");
			}

			$str = "".$row["wanted_species"].",".$row["wanted_min_level"].",".$row["wanted_max_level"].",".$row["wanted_gender"];
			die($str);
		}
		die("");
	}
	elseif ($action == "deletePokemon") #### Tested, Works
	{
		$id = $_POST["id"];
		$withdraw = $_POST["withdraw"];
		if ($withdraw == "y")
		{
			$query = $mysqli->query("SELECT taken FROM gts WHERE id = $id AND game = $game");
			if ($query != false)
			{
				$row = array();
				while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)){
					$row = $item;
				}
				if (isset($row["taken"]))
				{
					if ($row["taken"] == 1)
					{
						die("failed, pokemon already taken!");
					}
				}
			}
		}
		
		$query = $mysqli->query("DELETE FROM gts WHERE id = $id AND game = $game");
		if ($query != false)
		{
			die("success");
		}

		die("failed, could not execute query!");
	}
	elseif ($action == "getPokemonList") #### Tested, Works
	{
		$species = $_POST["species"];
		$levelMin = $_POST["levelMin"];
		$levelMax = $_POST["levelMax"];
		$gender = $_POST["gender"];
		$id = $_POST["id"];
		
		if ($gender != -1)
		{
			$query = $mysqli->query("SELECT * FROM gts WHERE id != $id && species = $species && level >= $levelMin && level <= $levelMax &&
			gender = $gender && taken = 0 AND game = $game") or die(mysqli_error());
		}
		else
		{
			$query = $mysqli->query("SELECT * FROM gts WHERE id != $id && species = $species && level >= $levelMin && level <= $levelMax && taken = 0 AND game = $game")
			or die(mysqli_error());
		}
		$str = "";
		$row = null;
		if ($query != false)
		{
			$str = "";
			$cont = 0;
			while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)){
				if($cont == 0) $str = $str.$item["id"];
				else $str = $str.",".$item["id"];
				$cont++;
			}
		}
		if ($str == "")
		{
			$str = "nothing";
		}
		die($str);
	}
	elseif ($action == "getPokemonListFromWanted") #### Not Tested, should work
	{
		$species = $_POST["species"];
		$level = $_POST["level"];
		$gender = $_POST["gender"];
		$id = $_POST["id"];
		
		$query = $mysqli->query("SELECT * FROM gts WHERE id != $id && wanted_species = $species && wanted_max_level >= $level && wanted_min_level <= $level &&
		(wanted_gender = $gender || wanted_gender = -1) && taken = 0 AND game = $game") or die(mysqli_error());
		$str = "";
		$row = null;
		if ($query != false)
		{
			$str = "";
			$cont = 0;
			while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)){
				if($cont == 0) $str = $str.$item["id"];
				else $str = $str.",".$item["id"];
				$cont++;
			}
		}
		if ($str == "")
		{
			$str = "nothing";
		}
		die($str);
	}
	elseif ($action == "createTables") #### Tested, Works
	{
		$mysqli->query("CREATE DATABASE IF NOT EXISTS $database DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci") or die(mysqli_error());
		$mysqli->query("USE $database") or die(mysqli_error());
		$mysqli->query("DROP TABLE IF EXISTS $table") or die(mysqli_error());
		$mysqli->query("DROP TABLE IF EXISTS $settings_table") or die(mysqli_error());
		$mysqli->query("CREATE TABLE $table (
		  id int(11) NOT NULL,
		  pokemon varchar(3000) NOT NULL,
		  species int(11) NOT NULL,
		  level int(11) NOT NULL,
		  gender int(11) NOT NULL,
		  wanted_species int(11) NOT NULL,
		  wanted_min_level int(11) NOT NULL,
		  wanted_max_level int(11) NOT NULL,
		  wanted_gender int(11) NOT NULL,
		  taken int(11) NOT NULL DEFAULT '0',
		  PRIMARY KEY (id)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1;") or die(mysqli_error());
		$mysqli->query("CREATE TABLE $settings_table (
		  id int(11) NOT NULL,
		  total_ids int(11) NOT NULL,
		  PRIMARY KEY (id),
		  UNIQUE KEY total_ids (total_ids)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1;") or die(mysqli_error());
		$mysqli->query("INSERT INTO $settings_table (id, total_ids) VALUES (0, 0)") or die(mysqli_error());
	}
	
	die($default_message);
?>