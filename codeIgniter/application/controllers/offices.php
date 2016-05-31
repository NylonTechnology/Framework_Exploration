<?php
class Offices extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('offices_model');
	}

	public function index()
	{
		$data['offices'] = $this->offices_model->get_offices();

		$this->load->view('templates/header', $data);
		$this->load->view('offices/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($id)
	{
		$data['office'] = $this->offices_model->get_offices($id);

		if (empty($data['office']))
		{
			show_404();
		}

		$this->load->view('templates/header', $data);
		$this->load->view('offices/view', $data);
		$this->load->view('templates/footer');
	}

}