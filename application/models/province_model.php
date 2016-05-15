<?php

/*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */
 
class province_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	function getAllprovince(){
	   
       $this->db->from("province");
       $this->db->order_by('name','asc');
       return $this->db->get();
	}
    
    function getprovince($id)
	{
		
        $this->db->where('id', $id);
        $this->db->select("*");
        $this->db->from("province");
        
        return $this->db->get();
	}

	function addprovince($data)
	{
		//untuk insert data ke database
		$this->db->insert('province', $data);
	}

	function updateprovince($data, $condition)
	{
			
        $this->db->where($condition);
        $this->db->update('province', $data);
	}

	function deleteprovince($id)
	{
		//delete produk berdasarkan id
        $this->db->where('id', $id);
        $this->db->delete('province');
	}
    
    
}
