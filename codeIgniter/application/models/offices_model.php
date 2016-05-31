<?php
class Offices_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_offices($id = null)
	{
		if (is_null($id))
		{
			$query = $this->db->get('offices');
			return $query->result_array();
		}

		$query = $this->db->get_where('offices', array('id' => $id));
		return $query->row_array();
	}

	public function get_contact_offices($contact_id = null)
	{
		if (is_null($contact_id))
		{
			return array();
		}

		$this->db->select('*');
		$this->db->from('contact_office_jn');
		$this->db->join('offices', 'offices.id = contact_office_jn.office_id', 'left');
		$this->db->where(array('contact_office_jn.contact_id' => $contact_id));
		$this->db->order_by('offices.sort', 'asc');
		$query = $this->db->get();

		return $query->result_array();

	}	

}