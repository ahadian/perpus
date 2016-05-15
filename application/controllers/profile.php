<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


 /*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */

class Profile extends CI_Controller
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
		$data['judul'] = "Profile";
		$data['data'] = $this->db->query("SELECT * FROM config LIMIT 1")->row();
		$this->load->view('settings/profile', $data);
        
    }
    
    public function save()
    {
        
        $config['upload_path'] 		= 'img';
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
		$config['max_size']			= '2000';
		$config['max_width']  		= '2000';
		$config['max_height']  		= '2000';
		
		//$this->load->library('upload', $config);
		$this->upload->initialize($config);
		
        $id1	= $this->uri->segment(2);
		$id2	= $this->uri->segment(3);

		
		$idp			= addslashes($this->input->post('id'));
		$nama			= addslashes($this->input->post('nama'));
		$alamat			= addslashes($this->input->post('alamat'));
		$pimpinan		= addslashes($this->input->post('pimpinan'));
		$pimpinan_nip	= addslashes($this->input->post('pimpinan_nip'));
		$petugas		= addslashes($this->input->post('petugas'));
		$petugas_nip	= addslashes($this->input->post('petugas_nip'));
		$profil			= addslashes($this->input->post('profil'));
        
        $data['judul'] = "Profile";
		$data['data'] = $this->db->query("SELECT * FROM config LIMIT 1")->row();
        
        if ($_FILES['logo']['name'] != "") {	
				if ($this->upload->do_upload('logo')) {
					$up_data = $this->upload->data();
                    $this->db->query("UPDATE config SET nama = '$nama', alamat = '$alamat', logo = '".$up_data['file_name']."', pimpinan = '$pimpinan', pimpinan_nip = '$pimpinan_nip', petugas = '$petugas', petugas_nip = '$petugas_nip', profil = '$profil' WHERE id = '$idp'");
					$this->session->set_flashdata("k", "<div class=\"alert alert-info\">Data has been updated</div>");
					redirect('profile');
				} else {
					$this->session->set_flashdata("k", "<div class=\"alert alert-error\">".$this->upload->display_errors()."</div>");
					redirect('profile');
				}
			} else {
				$this->db->query("UPDATE config SET nama = '$nama', alamat = '$alamat', pimpinan = '$pimpinan', pimpinan_nip = '$pimpinan_nip', petugas = '$petugas', petugas_nip = '$petugas_nip', profil = '$profil' WHERE id = '$idp'");
				$this->session->set_flashdata("k", "<div class=\"alert alert-info\">Data has been updated</div>");
				redirect('profile');
			}
        redirect('profile');
    }
    
    
	
	
	
    
	
	
	
}
