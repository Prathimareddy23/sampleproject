<?php defined('BASEPATH') OR exit('No direct script access allowed');



class shipmentcontroller extends My_Controller {



	public function __construct(){

		parent::__construct();

		auth_check(); // check login auth

		$this->rbac->check_module_access();

		if($this->uri->segment(3) != '')
		$this->rbac->check_operation_access();

		$this->load->model('admin/dashboard_model', 'dashboard_model');

	}

	//--------------------------------------------------------------------------

	public function index(){

		$data['title'] = 'Shipment';

		$this->load->view('admin/includes/_header', $data);
		$this->load->view('admin/shipment/general');
    	$this->load->view('admin/includes/_footer');

	}


}
?>	