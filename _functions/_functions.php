<?php

	function str2db($string)
	{
		$string = str_replace("'","~as~",$string);
		$string = str_replace("&","~ec~",$string);
		$string = str_replace("*","~at~",$string);
		$string = str_replace("¹","~1p~",$string);
		$string = str_replace("²","~2p~",$string);
		$string = str_replace("³","~3p~",$string);
		$string = str_replace("$","~es~",$string);

		return $string;
	}

	function db2str($string)
	{
		$string = str_replace("~as~","'",$string);
		$string = str_replace("~ec~","&",$string);
		$string = str_replace("~at~","*",$string);
		$string = str_replace("~1p~","¹",$string);
		$string = str_replace("~2p~","²",$string);
		$string = str_replace("~3p~","³",$string);
		$string = str_replace("~es~","$",$string);

		return $string;
	}

	function date2db($string)
	{
		$a = explode("/", $string);
		$string = $a["2"]."-".$a["1"]."-".$a["0"];

		return $string;
	}

	function db2date($string)
	{
		$a = explode("-", $string);
		$string = $a["2"]."/".$a["1"]."/".$a["0"];

		return $string;
	}

	function show($object){
		echo "<pre>";
		print_r($object);
		echo "</pre>";
	}

	function string2timestamp($model,$string)
	{
		$dtime = DateTime::createFromFormat($model, $string);

		return $dtime->getTimestamp();;
	}

	function get_domain(){
		return $_SERVER['SERVER_NAME'];
	}

	function get_url(){
		return $_SERVER['REQUEST_URI'];
	}

	function preview($array)
	{
		echo "<pre>";
		print_r($array);
		echo "</pre>";
	}

	function get_ip()
	{
	 
	    if (!empty($_SERVER['HTTP_CLIENT_IP']))
	    {
	 
	        $ip = $_SERVER['HTTP_CLIENT_IP'];
	 
	    }
	    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
	    {
	 
	        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	 
	    }
	    else{
	 
	        $ip = $_SERVER['REMOTE_ADDR'];
	 
	    }
	 
	    return $ip;
	 
	}

	function is_mobile(){
		$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
		$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
		$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
		$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
		$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
		$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
		$symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
		if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true){
			return true;
		}else{
			return false;
		}
	}

	function get_system(){
		if(strpos($_SERVER['HTTP_USER_AGENT'],"iPhone") == true) return "iPhone";
		if(strpos($_SERVER['HTTP_USER_AGENT'],"iPad") == true) return "iPad";
		if(strpos($_SERVER['HTTP_USER_AGENT'],"Android") == true) return "Android";
		if(strpos($_SERVER['HTTP_USER_AGENT'],"webOS") == true) return "webOS";
		if(strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry") == true) return "BlackBerry";
		if(strpos($_SERVER['HTTP_USER_AGENT'],"iPod") == true) return "iPod";
		if(strpos($_SERVER['HTTP_USER_AGENT'],"Symbian") == true) return "Symbian";
		if(strpos($_SERVER['HTTP_USER_AGENT'],"Windows") == true) return "Windows";
	}

	function js_troca_color($color){
		echo "

			<script>

			function troca_color(nome){
				var item = document.getElementById(nome);
				item.style.color = \"".$color."\";
			}

			</script>

		";
	}

	function js_troca_text(){
		echo "

			<script>

			function troca_text(nome, texto){
				var item = document.getElementById(nome);
				item.innerHTML = texto;
			}

			</script>

		";
	}

?>