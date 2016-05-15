<?php

/*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */
 
class Religion_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	function getAllreligion(){
	   
       $this->db->from("agama");
       return $this->db->get();
	}
    
    function getreligion($id)
	{
		
        $this->db->where('id', $id);
        $this->db->select("*");
        $this->db->from("agama");
        
        return $this->db->get();
	}

	function addreligion($data)
	{
		//untuk insert data ke database
		$this->db->insert('agama', $data);
	}

	function updatereligion($data, $religion)
	{
			
        $this->db->where($religion);
        $this->db->update('agama', $data);
	}

	function deletereligion($id)
	{
		//delete produk berdasarkan id
        $this->db->where('id', $id);
        $this->db->delete('agama');
	}
    
    
}
