<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('login');
        $this->load->library('user_agent');
		
        if( isset( $_GET['session_id'] ) ) 
            $_COOKIE[$this->sess_cookie_name] = $_GET['session_id'];   

    }

    public function index() {
        $data['sitenya'] = array(
			'title' => 'Arsip PPBT+',
			'url' => site_url('/'),
			'error' => $error
		);

		if ($this->session->userdata('logged')==1) {
            $data['user'] = $this->session->all_userdata();
			$data['status_login'] = '1';

			$this->load->view('auth/auth_main', $data);
		}else{
            $data['status_login'] = '0';
			redirect(site_url('auth/login'));
		}
    }

    public function login($error = NULL) {
        $data = array(
            'title' => 'Login Page',
            'action' => site_url('auth/login'),
            'error' => $error
        );

		if ($this->session->userdata('logged')==1) {
			redirect(site_url('/'));
		}else{
			$this->load->view('signin', $data);
		}
    }

    function proses(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');


        if ($this->agent->is_browser())
        {
            $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
            $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
            $agent = $this->agent->mobile();
        }
        else
        {
            $agent = 'Unidentified User Agent';
        }     


        $a = $this->login->set_login($username,$password);
        if(count($a)>0){
            foreach($a as $key){
                    $id_user = $key->ID_USER;
                    $nama_user = $key->NAMA_USER;
                    $passwd = $key->PASSWD;
                    $link_profile = $key->LINK_PROFILE;
                    $jabatan = $key->JABATAN;
					$motto = $key->MOTTO;
                    $disable_user = $key->DISABLE;
					$level_user = $key->LEVEL_USER;
            }

                $usersession = array(
								'logged' => TRUE,
                                'id_user'=>$id_user,
                                'nama_user'=>$nama_user,
                                'passwd'=>$passwd,
                                'link_profile'=>$link_profile,
								'jabatan'=>$jabatan,
                                'motto'=>$motto,
                                'disable_user'=>$disable_user,
                                'level_user'=>$level_user,
                                'loginstate'=>1,
                                'ip_address'=>$this->input->ip_address(),
                                'user_agent'=>$this->agent->platform(). ' - '.$agent,
                                'id_session'=>$_COOKIE['ci_session'],
                            );
                $this->session->set_userdata($usersession);
                //var_dump($this->session->userdata); //exit;                               

                $this->login->save_log_user($usersession);   
				redirect(site_url('auth'));
        }
        else{
            //$this->form_validation->set_message('Maaf Username atau Password Anda Salah');
			//$this->form_validation->set_message('check_database', 'Invalid username or password');
			//$error = 'User / Password Salah';
			//$this->index($error);
            //$this->load->view('vlogin');
			redirect(site_url('/'));
        }

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