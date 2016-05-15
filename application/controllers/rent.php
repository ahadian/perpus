<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


 /*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */

class rent extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("rent_model");
        $this->load->model("book_model");
        $this->load->model("member_model");
        $data['instansi'] 	= $this->db->query("SELECT * FROM config LIMIT 1")->row();
        $this->load->view('home/index',$data);
        $this->load->helper('fungsidate');
	}
	
	public function index()
	{
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
        
        $data['title'] = "List Rent";
        $data['judul_tabel'] = "List Rent";
        $data['tombol'] = "Add Rent";
        $data['listrent'] = $this->rent_model->getAllrent();
        $data['js_files'] = array(base_url('template/js/rent.js'), base_url('template/js/jquery-ui-1.8.23.custom.min.js'));
		$this->load->view('rent/rent_view', $data);
        
        
    }
	
	public function addrent()
	{
		$data['title'] = "Add Rent";
        $this->load->view('rent/add_rent_view', $data);
        
        
    }
    
    public function viewdetailrent()
	{
		
        $data['title'] = "Rent Detail";
        $this->load->view('rent/rent_view_detail', $data);
        
	}
    
    public function refund()
	{
		
        $id_anggota		= $this->uri->segment(3);
		$id_buku		= $this->uri->segment(4);
		$id_trans		= $this->uri->segment(5);
		$telat			= $this->uri->segment(6);
		$denda			= $this->uri->segment(7);
			
		$data['data']		= $this->db->query("UPDATE trans SET stat = '1', telat = '$telat', denda = '$denda'  WHERE id = '$id_trans'");
		$data['data']		= $this->db->query("UPDATE buku SET stat_pinjam = '1' WHERE id = '$id_buku'");
		$this->session->set_flashdata("k", "<div class=\"alert alert-info\">Data has been changed </div>");
		redirect('rent/viewdetailrent/'.$id_anggota);
        
	}
    
    public function renew()
	{
		$id1					= $this->uri->segment(3);
		$id2					= $this->uri->segment(4);
        $instansi	= $this->db->query("SELECT * FROM config LIMIT 1")->row();
        $data['maks_hari']	= $instansi->maks_hari;
        $data['data'] = $this->db->query("UPDATE trans SET tgl_kembali = '".adddate($data['maks_hari'])."' WHERE id = '$id1'");
		
        $this->session->set_flashdata("k", "<div class=\"alert alert-info\">Data has been changed </div>");
		redirect('rent/viewdetailrent/'.$id2);
    }
    
    public function addrentitem()
	{
		$data['project_data'] = FALSE;
        $data['act'] = 'add';
        
        $this->load->view('rent/rent_item_view',$data);
        
	}
    
    function save(){	
		$user_role = $this->session->userdata('user_role');
		if(empty($user_role)) 
			redirect(site_url());	
		$this->rent_model->save($this->input->post('data'),'json');
	}

	public function addrentDb()
	{
		$id_anggota		= $this->input->post('id_anggota');
		$jumlah_buku	= $this->input->post('jml_buku');
		$cek_peminjam	= $this->db->query("SELECT *, COUNT(id_anggota) AS jml FROM trans WHERE stat = '2' AND id_anggota = '$id_anggota' GROUP BY id_anggota")->num_rows();
			
		if ($cek_peminjam > 0) {
				$this->session->set_flashdata("k", "<div class=\"alert alert-error\">The borrower still has a loan that has not been returned.. </div>");
				redirect('rent/addrent');
			} else {
				$data['det_anggota']	= $this->db->query("SELECT * FROM anggota WHERE id = '$id_anggota'")->row();
				$data['data']		= $this->db->query("SELECT * FROM trans WHERE id_anggota = '$id_anggota' AND stat = '2' ORDER BY id DESC")->result();
				$data['jml_buku']	= $jumlah_buku;
				$data['title'] = "Add Rent";
                $this->load->view('rent/rent_item_view', $data);
		} 
	}
    
    public function addrentitemDb()
	{
		$id_anggota	= $this->input->post('id_anggota');
        $tgl_pinjam	= addslashes($this->input->post('tgl_pinjam'));
        $tgl_kembali = addslashes($this->input->post('tgl_kembali'));
		$ket = addslashes($this->input->post('ket'));
		$jml_buku = addslashes($this->input->post('jml_buku'));
        
        for ($i = 1; $i <= $jml_buku; $i++) {
		$this->db->query("INSERT INTO trans VALUES ('', '".$this->input->post('id_buku_'.$i)."', '$id_anggota', '$tgl_pinjam', '$tgl_kembali', '2', '$ket', '0', '0')");
		$this->db->query("UPDATE buku SET stat_pinjam = '2' WHERE id = '".$this->input->post('id_buku_'.$i)."'");
		}
		$this->session->set_flashdata("k", "<div class=\"alert alert-info\">Data has been added</div>");
		redirect('rent'); 
	}

	public function updaterent($id)
	{
		$data['rent'] = $this->rent_model->getrent($id); 
        $this->load->view('rent/update_rent_view', $data);
	}

	public function updaterentDb()
	{
		
        $data = array(
					'isbn' => $this->input->post('isbn'),
                    'rent_date' => $this->input->post('rent_date'),
                    'due_date' => $this->input->post('due_date'),
                    'member' => $this->input->post('member')
    				);
        $condition['id'] = $this->input->post('id');
        
		$this->rent_model->updaterent($data, $condition);

		redirect('rent');
	}

	public function deleterentDb($id)
	{
		
        $this->rent_model->deleterent($id);
        redirect('rent');
	}
    
    public function deleterentitemDb($id)
	{
		
        $this->rent_model->deleterentitem($id);
        $rent_no = $this->input->post('rent_no');
        $member = $this->input->post('member');
        redirect('rent/addrentitem/norent/'.$rent_no.'/member/'.$member);
	}
	
    
    
    public function search_kode() {
		$kata_kunci			=  empty($_POST['kata_kunci']) ? $_GET['kata_kunci'] : $_POST['kata_kunci'];
		$id_baris			=  empty($_POST['id_baris']) ? $_GET['id_baris'] : $_POST['id_baris'];
		
		$q_data				=  $this->db->query("SELECT * FROM buku WHERE (judul LIKE '%$kata_kunci%') AND stat_pinjam = '1' ORDER BY id DESC");
		$data				=  $q_data->result();
		$jumlah_hasil		=  $q_data->num_rows();
		
		if (strlen($kata_kunci) < 4) {
			echo '<div class="alert alert-error">Keywords at least 3 letters!</a>';
		} else if (!empty($data)) {
			echo ' 	<div class="alert alert-info">Founded <b>'.$jumlah_hasil.'</b> data</div>';
			echo '	<table class="table table-bordered">
						<thead>
							<tr>
								<th width="60%">Title</th>
								<th width="30%">Author</th>
								<th width="10%">Select</th>
							</tr>
						</thead>
						<tbody>';
			foreach ($data as $d) {
				echo '	<tr>
							<td>'.$d->judul.'</td>
							<td>'.getPengarang($d->pengarang).'</td>
							<td><a href="#" class="btn btn-success btn-sm" onclick="return isikan_kode(\''.$id_baris.'\', \''.$d->id.'\', \''.$d->judul.'\');">OK</a></td>
						</tr>';
			}
			echo '	</tbody></table>';
		} else {
			echo '<a><div class="alert alert-error">Not Found</div></a>';
		}
	}
	
	
}
