<?php

/*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */
 
class Location_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	function getAlllocation(){
	   
       $this->db->from("lokasi");
       return $this->db->get();
	}
    
    function getlocation($id)
	{
		
        $this->db->where('id', $id);
        $this->db->select("*");
        $this->db->from("lokasi");
        
        return $this->db->get();
	}

	function addlocation($data)
	{
		//untuk insert data ke database
		$this->db->insert('lokasi', $data);
	}

	function updatelocation($data, $location)
	{
			
        $this->db->where($location);
        $this->db->update('lokasi', $data);
	}

	function deletelocation($id)
	{
		//delete produk berdasarkan id
        $this->db->where('id', $id);
        $this->db->delete('lokasi');
	}
    
    
}
