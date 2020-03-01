<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Denny extends CI_Controller {


	public function index()
	{
        $data=[];
        $data ['nama'] = "Denny Gunawan";
		$this->load->view('denny', $data);
	}
}
