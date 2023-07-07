<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login');
        $this->load->library('user_agent');

        if (isset($_GET['session_id']))
            $_COOKIE[$this->sess_cookie_name] = $_GET['session_id'];
    }

    public function index()
    {
        $data['sitenya'] = array(
            'title' => 'Arsip PPBT+',
            'url' => site_url('auth'),
            'error' => $error
        );

        if ($this->session->userdata('logged') == 1) {
            $data['user'] = $this->session->all_userdata();
            $data['status_login'] = '1';

            $this->load->view('auth/auth_main', $data);
        } else {
            $data['status_login'] = '0';
            redirect(site_url('auth/login'));
        }
    }

    public function input()
    {
        $data['sitenya'] = array(
            'title' => 'Arsip PPBT+',
            'url' => site_url('/'),
            'error' => $error
        );

        if ($this->session->userdata('logged') == 1) {
            $data['user'] = $this->session->all_userdata();
            $data['status_login'] = '1';

            $this->load->view('input', $data);
        } else {
            $data['status_login'] = '0';
            redirect(site_url('auth/login'));
        }
    }

    public function tambah()
    {
        $data['sitenya'] = array(
            'title' => 'Arsip PPBT+',
            'url' => site_url('/'),
            'error' => $error
        );

        if ($this->session->userdata('logged') == 1) {
            $data['user'] = $this->session->all_userdata();
            $data['status_login'] = '1';

		    $this->load->view('header', $data);
            $this->load->view('auth/tambah-doc', $data);
        } else {
            $data['status_login'] = '0';
            redirect(site_url('auth/login'));
        }
    }

    public function proses_tambah($error = NULL)
    {
		
        $incident = $this->input->post('incident');
		//dd($incident);
		// $data['kontenid'] = $this->konten_id = uniqid();
		$option1 = $this->input->post('myselect');
		
		if($option1 == 0){
			$data['kontenid'] = $this->konten_id = uniqid();
			$data['judul-doc'] = $this->input->post('judul-doc');
			$data['permasalahan-doc'] = $this->input->post('permasalahan-doc');
			$data['penyelesaian-doc'] = $this->input->post('penyelesaian-doc');
			/* $data['time1'] = $this->input->post('time1');
			$data['time2'] = $this->input->post('time2'); */
			$data['pengecekan-doc'] = $this->input->post('pengecekan-doc');
			$data['tag-doc'] = $this->input->post('tag-doc');
			$date1 = date("Y-m-d");
			$kategori = 'DOCUMENTATION';
			$object = [
			'KONTEN_ID' => $data['kontenid'],
			'JUDUL' => $data['judul-doc'],
			'PERMASALAHAN' => $data['permasalahan-doc'],
			'PENYELESAIAN' => $data['penyelesaian-doc'],
			'KATEGORI' => $kategori,
			'TAGS' => $data['tag-doc']
			
			
			
		];
        $this->db->insert('FADHILAH_HADI.WEB_KONTEN', $object);
		$this->session->set_flashdata('success', 'berhasil ditambahkan');
		redirect(base_url('auth/tambah'));
			
		}
		
		if($option2 == 1){
        $data['owner'] = $this->input->post('owner');
        $data['judul'] = $this->input->post('judul');
       
        $data['permasalahan'] = $this->input->post('permasalahan');
        
        $data['penyelesaian'] = $this->input->post('penyelesaian');
        
        $data['time1'] = $this->input->post('time1');
        $data['time2'] = $this->input->post('time2');
        $data['pengecekan'] = $this->input->post('pengecekan');
		}
		
		
        // echo "<pre>";
		// echo "test";
		// echo $kategori. "</br>";
		// echo $date1. "</br>";
		// var_dump($data);
        // echo "</pre>";
		
		
		/* $kontenid = $this->konten_id = uniqid();
		$incident = $this->input->post('incident')
		$judul = $this->input->post('judul');
		echo "<pre>";
		echo "test";
        echo $kontenid."<br />";
        echo $incident."<br />";
        echo $judul."<br />";
        echo $permasalahan."<br />";
        echo $penyelesaian."<br />";
        echo $time1."<br />";
        echo $time2."<br />";
        echo $pengecekan."<br />";
        echo "</pre>";
		
		$date = date("Y-m-d");
		$object = [
			'KONTEN_ID' => $kontenid,
			'JUDUL' => $judul,
			'ISI_KOMENTAR' => $this->input->post('komentar'),
		];
		$this->db->set('TANGGAL', "to_date('$date', 'YYYY-MM-DD')", false);
		$this->db->insert('FADHILAH_HADI.WEB_KONTEN', $object);
		$this->session->set_flashdata('success', 'Komentarmu sudah ditambahkan');
		redirect(base_url('auth/tambah')); */
    }



    public function login($error = NULL)
    {
        $data = array(
            'title' => 'Login Page',
            'action' => site_url('auth/login'),
            'error' => $error
        );

        if ($this->session->userdata('logged') == 1) {
            redirect(site_url('/'));
        } else {
            $this->load->view('signin', $data);
        }
    }

    function proses()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');


        if ($this->agent->is_browser()) {
            $agent = $this->agent->browser() . ' ' . $this->agent->version();
        } elseif ($this->agent->is_robot()) {
            $agent = $this->agent->robot();
        } elseif ($this->agent->is_mobile()) {
            $agent = $this->agent->mobile();
        } else {
            $agent = 'Unidentified User Agent';
        }


        $a = $this->login->set_login($username, $password);
        if (count($a) > 0) {
            foreach ($a as $key) {
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
                'id_user' => $id_user,
                'nama_user' => $nama_user,
                'passwd' => $passwd,
                'link_profile' => $link_profile,
                'jabatan' => $jabatan,
                'motto' => $motto,
                'disable_user' => $disable_user,
                'level_user' => $level_user,
                'loginstate' => 1,
                'ip_address' => $this->input->ip_address(),
                'user_agent' => $this->agent->platform() . ' - ' . $agent,
                'id_session' => $_COOKIE['ci_session'],
            );
            $this->session->set_userdata($usersession);
            //var_dump($this->session->userdata); //exit;                               

            $this->login->save_log_user($usersession);
            redirect(site_url('auth'));
        } else {
            //$this->form_validation->set_message('Maaf Username atau Password Anda Salah');
            //$this->form_validation->set_message('check_database', 'Invalid username or password');
            //$error = 'User / Password Salah';
            //$this->index($error);
            //$this->load->view('vlogin');
            redirect(site_url('/'));
        }
    }
    function logout()
    {

        $id_user = $this->session->userdata('id_user');
        $ip_address = $this->session->userdata('ip_address');
        $id_session = $this->session->userdata('id_session');

        $this->login->save_log_out($id_user, $ip_address, $id_session);
        $this->session->sess_destroy();
        redirect(site_url('/'));
    }
}
