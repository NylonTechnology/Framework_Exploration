<?php
class Contacts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('contacts_model');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['contacts'] = $this->contacts_model->get_contacts();

		$this->load->view('templates/header', $data);
		$this->load->view('contacts/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($id)
	{
		$data['contact'] = $this->contacts_model->get_contacts($id);

		if (empty($data['contact']))
		{
			show_404();
		}

		$this->load->model('offices_model');
		$data['offices'] = $this->offices_model->get_contact_offices($id);

		$this->load->view('templates/header', $data);
		$this->load->view('contacts/view', $data);
		$this->load->view('templates/footer');
	}

}