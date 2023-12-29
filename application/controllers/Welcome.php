
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
		$portfolio['name'] = 'Harsh Gupta';
		$portfolio['title'] = 'Experienced Flutter Developer';
		$portfolio['subtitle'] = 'I build exceptional and accessible digital experiences for the Android.';
		$portfolio['overview'] = 'I build exceptional and accessible digital experiences for the Android.';
		$portfolio['experience'] = array(
			'time'=>'about',
			'position'=>'experience',
			'company'=>'projects',
			'company_url'=>'projects',
			'technologies'=>'projects',
			'projects'=>'projects',
			'projects_url'=>'projects',
		);		
		// echo "<pre>";
		// print_r($portfolio);
		// die;
		$this->load->view('main', $portfolio);
	}
		
}
// $portfolio['tabs'] = array(
// 	'about'=>'about',
// 	'experience'=>'experience',
// 	'projects'=>'projects',
// );