<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');

/**
 * @author Budi
 * @copyright 2015
 */

class Tools extends CI_Controller
{
    
    function __construct()
	{
		parent::__construct();
		$this->load->helper('download');
        $this->load->dbutil();
        $data['instansi'] = $this->db->query("SELECT * FROM config LIMIT 1")->row();
        $this->load->view('home/index',$data);
	}

    public function index()
	{
		if(! $this->session->userdata('validated')){
            redirect('login');
        }
        
        $this->load->view('tools/tools_view');
        
    }
    
    public function backup()
      {
         
         $nama_file	= 'backup_perpus_'.date('Y-m-d-h-i-s');
         $prefs = array(
             'format'      => 'txt',             
             'filename'    => $nama_file.'.sql',    
             'add_drop'    => TRUE,              
             'add_insert'  => TRUE,              
             'newline'     => "\n"               
         );
         
         $this->dbutil->backup($prefs);
         $backup =& $this->dbutil->backup(); 
         force_download($nama_file.'.sql', $backup);
		 $this->session->set_flashdata("k", "<div class=\"alert alert-info\">Backup database berhasil</div>");
		 redirect('tools');
     }
     
    public function restore()
      {
         $config['upload_path'] 	= './upload/temp';
		 $config['allowed_types'] 	= 'sql';
		 $config['max_size']		= '8000';
		 $config['max_width']  		= '10000';
		 $config['max_height'] 		= '10000';
         
		 $this->load->library('upload', $config);
         
         if ($this->upload->do_upload('file_backup')) {
				$up_data	 	= $this->upload->data();
				
				$direktori		= './upload/temp/'.$up_data['file_name'];
				
				$isi_file		= file_get_contents($direktori);
				$_satustelu		= substr($isi_file, 0, 103);
				
				$string_query	= rtrim($isi_file, "\n;" );
				$array_query	= explode(";", $string_query);
				
				foreach ($array_query as $query){
					$this->db->query(trim($query));
				}
				
				$path			= './upload/temp/';
				$this->load->helper("file"); // load the helper
				delete_files($path, true);
				$this->session->set_flashdata("k", "<div class=\"alert alert-info\" id=\"alert\">Restore data sukses</div>");
				redirect('tools');
			} else {
				$this->session->set_flashdata("k", "<div class=\"alert alert-danger\" id=\"alert\">".$this->upload->display_errors()."</div>");
				redirect('tools');
			}
     } 
 
 }

?>