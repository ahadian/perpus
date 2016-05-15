<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
   $data['instansi'] 	= $this->db->query("SELECT * FROM config LIMIT 1")->row();
   $this->load->helper(array('form'));
   $this->load->view('header', $data);
   $this->load->view('login_view');
   $this->load->view('index', $data);
   
 }
 
 
 
 public function do_login() {
		$u = $this->security->xss_clean($this->input->post('username'));
        $p = $this->security->xss_clean($this->input->post('password'));
         
		$q_cek	= $this->db->query("SELECT * FROM admin WHERE username = '".$u."' AND password = '".md5($p)."'");
		$j_cek	= $q_cek->num_rows();
		$d_cek	= $q_cek->row();
		
		
        if($j_cek == 1) {
            $data = array(
                    'user' => $d_cek->username,
                    'pass' => $d_cek->password,
                    'role' => $d_cek->role,
                    'name' => $d_cek->nama,
					'validated' => true
                    );
            $this->session->set_userdata($data);
            redirect('home');
            
            
        } else {	
			$this->session->set_flashdata("k", "<div class=\"alert alert-error\">Username or Password is not valid</div>");
			redirect('login');
		}
	}
    
    public function logout(){
        $this->session->sess_destroy();
		redirect('login');
    }
 
}
 
?>