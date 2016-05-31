<?php
class Contacts_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_contacts($id = null)
	{
		if (is_null($id))
		{
			$query = $this->db->get('contacts');
			return $query->result_array();
		}

		$query = $this->db->get_where('contacts', array('id' => $id));
		return $query->row_array();
	}

}