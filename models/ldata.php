<?php

class Ldata extends CI_Model{

function _construct()
{
	parent::_construct();
}

function load_db()
{
	$this->load->database();
}

function get_all()
{
	$query = $this->db->query('SELECT * from apoorv03 ORDER by ts DESC');
	return $query->result_array();
}
}

?>
