<?php

class Database{
	private static $_instance = null;
	private $mysqli;

	public function __construct(){
		$this->mysqli = new mysqli('localhost', 'root', '', 'ecommerce') or die('There is problem !');
	}

	public function getInstance(){
		if (!isset(self::$_instance)) {
			self::$_instance = new Database();
		}
		return self::$_instance;
	}

	public function escape($name){
		return $this->mysqli->real_escape_string($name);
	}

	public function run_query($query, $msg){
		if ( $this->mysqli->query($query) ) return true; else die($msg);
	}

	public function insert( $table, $fileds=array() ){
		$column = implode(", ", array_keys($fileds) );
		$value	= array();
		$i 		= 0;
		foreach ($fileds as $key => $values) {
			if (is_int($values)) {
				$value[$i] = $this->escape($values);
			}else{
				$value[$i] = "'" .$this->escape($values). "'";
			}
			$i++;
		}
		$values = implode(", ", $value);
		$query 	= "INSERT INTO $table ($column) VALUES ($values)";
		//die($query);
		return $this->run_query($query, "ERROR FOR INSERT");
	}

	public function update($table, $fields, $id)
	{
		$valuesArrays 	= array();
		$i 				= 0;

		foreach ($fields as $key=>$values) {
			if ( is_int($values) ) {
				$valuesArrays[$i] = $key . "=".$this->escape($values);
			}else{
				$valuesArrays[$i] = $key . "='" . $this->escape($values) . "'";
			}
			$i++;
		}

		$values = implode(", ", $valuesArrays);

		$query = "UPDATE $table SET $values WHERE id = $id";
		//die($query);
		return $this->run_query($query, 'Error For UPDATE');
	}


	public function delete($table, $id){
		$id = $this->escape($id);
		$query = "DELETE FROM $table WHERE id = $id";
		
		//die($query);
		return $this->run_query($query, 'Error For DELETE');
	}

	public function get_info($table, $column='', $value=''){
		if ( !is_int($value)) $value = "'" . $value . "'";

		if ( $column != '') {
				
			$query = "SELECT * FROM $table WHERE $column = $value";

			$result = $this->mysqli->query($query);
		
			while ( $row = $result->fetch_assoc() ) {
				$results[] = $row;

			}
			return $results;
		}else{

			$query = "SELECT * FROM $table";

			$result = $this->mysqli->query($query);
		
			while ( $row = $result->fetch_assoc() ) {
				$results[] = $row;
			}

			return $results;
		}
	}


	public function get_user($table, $column='', $value=''){
		if ( !is_int($value)) $value = "'" . $value . "'";

		if ( $column != '') {
				
			$query = "SELECT * FROM $table WHERE $column = $value";

			$result = $this->mysqli->query($query);
		
			while ( $row = $result->fetch_assoc() ) {
				return $row;

			}
		}else{

			$query = "SELECT * FROM $table";

			$result = $this->mysqli->query($query);
		
			while ( $row = $result->fetch_assoc() ) {
				$results[] = $row;
			}

			return $results;
		}
	}
}


?>