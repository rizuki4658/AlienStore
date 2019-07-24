<?php

class Inventory{
	private $_db;

	public function __construct(){
		$this->_db	= Database::getInstance();
	}

	public function add_inventory($fields = array()){
		if ( $this->_db->insert('inventory', $fields)) return true; else return false;
	}

	public function edit_inventory($fields = array(), $id){
		if ( $this->_db->update('inventory', $fields, $id)) return true; else return false;
	}

	public function delete_inventory($id){
		if ( $this->_db->delete('inventory', $id)) return true; else return false;
	}

	public function tabel_category($table, $columns, $key=''){
		return $this->_db->get_info($table, $columns, $key);
	}

	public function move_files($name, $msg=''){
		$files 				= 	$name;
		$unique				=	time();
		$files_name			=	$files['name'];
		$files_location		=	$files['tmp_name'];
		$files_error		=	$files['error'];
		$files_size			=	$files['size'];
		$files_type			=	$files['type'];
		$files_destination	=	'../Upload/'.$files_name;
		if ($files_error==0) {
			
			if ($files_type === 'image/jpg' || $files_type === 'image/jpeg') {
				
				if ($files_size <= 1000000) {
					
					if (file_exists($files_destination)) {
						$files_destination	=	str_replace(".jpg", "", $files_destination);
						$files_destination	=	$files_destination."_".$unique.".jpg";

						return $files_destination;
					}else{
						$files_destination 	=	$files_destination;
						return $files_destination;
					}
				}else { $msg = 'Image size is too lage!'; return $msg;}
			}else { $msg = 'Image type is not accept! (jpg/jpeg is accept)'; return $msg;}
		}else { $msg = 'There is error when upload'; return $msg;}
	}	
}

?>