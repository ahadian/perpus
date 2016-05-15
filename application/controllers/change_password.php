<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


 /*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */

class Change_Password extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$data['instansi'] 	= $this->db->query("SELECT * FROM config LIMIT 1")->row();
        $this->load->view('home/index',$data);
	}
	
	public function index()
	{
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		$data['judul'] = "Change Password";
	    $data['data'] = $this->db->query("SELECT * FROM admin WHERE id = '1'")->row();
		$this->load->view('settings/password', $data);
        
    }
    
    public function save()
    {
        
        $id	= $this->uri->segment(2);
		
        
		$user = $this->session->userdata('user');
        $pass = $this->session->userdata('pass');
        
        $passlama				= md5($this->input->post('p2'));
		$passbaru				= md5($this->input->post('p3'));
		/*var_dump($passlama);
        var_dump($passbaru);
        var_dump($pass);die;*/
		if ($passlama == $pass ){
      		$this->db->query("UPDATE admin SET  password = '$passbaru' WHERE username = '$user'");
            $this->session->set_flashdata("k", "<div class=\"alert alert-info\">Passwod has been changed</div>");
            $this->session->sess_destroy();
        }else {
    		$this->session->set_flashdata("k", "<div class=\"alert alert-error\">Old password is not match in the database</div>");
            }
        
		redirect('change_password');
        
    }
    
    
	
	
	
    
	
	
	
}
