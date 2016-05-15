<?php

/*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */
 
class Member_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	function getAllMember(){
	   
        $this->db->select('*');
        $this->db->from('anggota');
        $this->db->order_by('nama','asc');
        $query = $this->db->get();
        return $query->result();
	}
    
    
    function getMember($id)
	{
		
        $this->db->where('id', $id);
        $this->db->select("*");
        $this->db->from("member");
        
        return $this->db->get();
	}

	function addMember($data)
	{
		//untuk insert data ke database
		$this->db->insert('anggota', $data);
        
	}

	function updateMember($data, $condition)
	{
			
        $this->db->where($condition);
        $this->db->update('member', $data);
	}

	function deleteMember($id)
	{
		
        $this->db->where('id', $id);
        $this->db->delete('anggota');
	}
    
    function getProvince()
	{
		$this->db->from("province");
        $this->db->order_by("name","asc");
        return $this->db->get();
	}
    
    function getGender()
	{
		$this->db->from("gender");
        $this->db->order_by("name","asc");
        return $this->db->get();
	}
    
    function getReligion()
	{
		$this->db->from("agama");
        $this->db->order_by("agama","asc");
        return $this->db->get();
	}
    
    function getRole()
	{
		$this->db->from("role");
        $this->db->order_by("name","asc");
        return $this->db->get();
	}
    
    function getMemberid()
	{
		$this->db->select("id,nama");
        $this->db->from('anggota');
        $this->db->order_by("nama","asc");
        return $this->db->get();
	}
    
    function historyMember($id)
	{
	    $this->db->where('id_anggota', $id);
        $this->db->select("*");
        $this->db->from("trans");
        return $this->db->get();
	}
}
