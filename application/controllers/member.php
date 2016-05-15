<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


 /*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */

class Member extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("member_model");
        $this->load->model("gender_model");
        $data['instansi'] 	= $this->db->query("SELECT * FROM config LIMIT 1")->row();
        $this->load->view('home/index',$data);
        
	}
	
	public function index()
	{
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
        
        $data['data'] = $this->db->query("SELECT * FROM anggota ORDER BY id DESC")->result();
		$data['judul'] = "List Member";
        $data['judul2'] = "Print Member Card";
        $data['judul3'] = "Add Member";
        $this->load->view('member/member_view', $data);
        
    }
	
	public function addMember()
	{
		$data['judul'] = "Add Member";
        $this->load->view('member/add_member_view', $data);
	}

	public function addMemberDb()
	{
		$data = array(
				'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'jk' => $this->input->post('jk'),
                'agama' => $this->input->post('agama'),
                'tmp_lahir' => $this->input->post('tmp_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'stat' => $this->input->post('status'),
                'tgl_daftar' => $this->input->post('tgl_daftar')
                );
		$this->member_model->addMember($data); 
        
		redirect('member'); 
	}

	public function updateMember($id)
	{
		$data['member'] = $this->member_model->getMember($id); 
        $this->load->view('member/update_member_view', $data);
	}

	public function updateMemberDb()
	{
		
        $data = array(
					'name' => $this->input->post('name'),
                    'gender' => $this->input->post('gender'),
                    'phone' => $this->input->post('phone'),
                    'email' => $this->input->post('email'),
                    'username' => $this->input->post('username'),
                    'status' => $this->input->post('status'),
                    'birth' => $this->input->post('birth'), 
                    'address' => $this->input->post('address'),
                    'postal_code' => $this->input->post('postal_code'),
                    'province' => $this->input->post('province'),
                    'city' => $this->input->post('city'),
                    'role' => $this->input->post('role')
    				);
        $condition['id'] = $this->input->post('id');
        
		$this->member_model->updateMember($data, $condition);

		redirect('member');
	}

	public function deleteMemberDb($id)
	{
		
        $this->member_model->deleteMember($id);
        redirect('member');
	}
	
    public function historyMember($id){
        $data['judul'] = "History Member";
        $query = $this->member_model->historyMember($id);
        $data['history'] = $query;
        $this->load->view('member/history', $data);
    }
	
	public function printCardMember() {
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
		
		$data['data']		= $this->db->query("SELECT * FROM anggota ORDER BY id ASC")->result();
		$this->load->view('member/cetak_kartu', $data);
	}
	
}
