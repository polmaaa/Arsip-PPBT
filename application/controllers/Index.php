<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct() {
		parent::__construct();
		// $this->load->model('mdata1');
		$this->load->model('mdata1'); 
	}

	public function index()
	{
		$data['sitenya'] = array(
			'title' => 'Arsip PPBT+',
			'url' => site_url('/'),
			'error' => $error
		);

		if($this->session->userdata('logged')==1){
			$data['user'] = $this->session->all_userdata();
			$data['status_login'] = '1';
		}else{
			$data['status_login'] = '0';
		}
		$this->load->view('header',$data);
		$this->load->view('konten', $data);
	}

    function logout() {
        
		$id_user = $this->session->userdata('id_user');
		$ip_address = $this->session->userdata('ip_address');
		$id_session = $this->session->userdata('id_session');
		
		$this->login->save_log_out($id_user, $ip_address, $id_session);
        $this->session->sess_destroy();
        redirect(site_url('/'));
    } 
}

