<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Denny extends CI_Controller {


	public function index()
	{
        $api = new RestClient([
    'base_url' => "https://ibnux.github.io/BMKG-importer",
    'format' => "json" 
]);
        $data=[];
        $data ['nama'] = "Denny Gunawan";
        $result  = $api->get("cuaca/501320");
        $data ['data'] = $result->decode_response();
        $this->load->view('denny', $data);


           #$item->jamCuaca, $item->cuaca, $item->tempC);
}     
	}
