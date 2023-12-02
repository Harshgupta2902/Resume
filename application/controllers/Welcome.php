
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');

    }
	public function index()
	{
		// $data['data'] = $this->db->query('select id,image,type,url from projects')->result_array();
		// // print_r($data['0']['title']);
		// print_r($data);

		// $this->load->view('index', $data);
		$this->load->view('index');
	}
		
}
