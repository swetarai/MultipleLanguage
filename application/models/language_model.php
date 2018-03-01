<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language_Model extends CI_Model 
{
	/**
	 * insert data into the table
	 * @param string $table table name
	 * @param resource $data  return last insert id
	 * @return last inserted id will return
	 */
	public function add($table, $data)
	{
		$this->db->insert($table, $data);

		return $this->db->insert_id();
	}
}
?>