<?php
	
	class DataBase
	{
		var $mysqli;
		
		public function insert($table, $array)
		{
			$conn = new Connection();
			$mysqli = $conn->open();

			$sql = "INSERT INTO $table (";

			foreach ($array as $key => $value) {
				$sql .= $key.", ";
			}

			$sql .= ") VALUES (";

			foreach ($array as $key => $value) {
				$sql .= "'".$value."', ";
			}

			$sql .= ")";

			$sql = str_replace(", )", ")", $sql);

			/*$sqlog = "INSERT INTO logs (name,ip,system,date,time,action,table_name,used_sql) VALUES (
					 '".$_SESSION["expointer_adm_nm"]."',
					 '".get_ip()."',
					 '".get_system()."',
					 '".date("d/m/Y")."',
					 '".date("H:i")."',
					 'INSERT',
					 '".$table."',
					 '".str_to_db($sql)."');";
			$mysqli->query($sqlog);*/

			return $mysqli->query($sql);
		}
		
		public function update($table, $array)
		{
			$conn = new Connection();
			$mysqli = $conn->open();

			$id = $array["id"];
			unset($array["id"]);

			$sql = "UPDATE $table SET ";

			foreach ($array as $key => $value) {
				$sql .= $key." = '".$value."', ";
			}

			$sql .= "WHERE id = '".$id."'";

			$sql = str_replace("', WHERE", "' WHERE", $sql);

			/*$sqlog = "INSERT INTO logs (name,ip,system,date,time,action,table_name,used_sql) VALUES (
					 '".$_SESSION["expointer_adm_nm"]."',
					 '".get_ip()."',
					 '".get_system()."',
					 '".date("d/m/Y")."',
					 '".date("H:i")."',
					 'UPDATE',
					 '".$table."',
					 '".str_to_db($sql)."');";
			$mysqli->query($sqlog);*/

			return $mysqli->query($sql);
		}

		public function select($table, $cond="")
		{
			$conn = new Connection();
			$mysqli = $conn->open();

			$sql = "SELECT * FROM $table ".$cond;

			/*$sqlog = "INSERT INTO logs (name,ip,system,date,time,action,table_name,used_sql) VALUES (
					 '".$_SESSION["expointer_adm_nm"]."',
					 '".get_ip()."',
					 '".get_system()."',
					 '".date("d/m/Y")."',
					 '".date("H:i")."',
					 'SELECT',
					 '".$table."',
					 '".str_to_db($sql)."');";
			$mysqli->query($sqlog);*/

			return $mysqli->query($sql);
		}

		public function delete($table, $id)
		{
			$conn = new Connection();
			$mysqli = $conn->open();

			$sql = "DELETE FROM $table WHERE id = '$id'";

			//echo $sql;

			/*$sqlog = "INSERT INTO logs (name,ip,system,date,time,action,table_name,used_sql) VALUES (
					 '".$_SESSION["expointer_adm_nm"]."',
					 '".get_ip()."',
					 '".get_system()."',
					 '".date("d/m/Y")."',
					 '".date("H:i")."',
					 'DELETE',
					 '".$table."',
					 '".str_to_db($sql)."');";
			$mysqli->query($sqlog);*/
			
			return $mysqli->query($sql);
			
		}

		public function sql($sql)
		{
			$conn = new Connection();
			$mysqli = $conn->open();

			/*$sqlog = "INSERT INTO logs (name,ip,system,date,time,action,table_name,used_sql) VALUES (
					 '".$_SESSION["expointer_adm_nm"]."',
					 '".get_ip()."',
					 '".get_system()."',
					 '".date("d/m/Y")."',
					 '".date("H:i")."',
					 'SQL',
					 '".$table."',
					 '".str_to_db($sql)."');";
			$mysqli->query($sqlog);*/
			
			return $mysqli->query($sql);
			
		}

	}

?>