<?php 

/**
 * 
 */
class Database
{

	public static function connect(){
		$db = new mysqli("localhost","root","H3ct0r","tienda_master");
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
}