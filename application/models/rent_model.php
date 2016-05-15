<?php

/*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */
 
class Rent_Model extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	function getConfig(){
	   
       $this->db->select("denda");
       $this->db->from('config');
       return $this->db->get();
	}
    
    function getAllrent(){
	   
       $this->db->select("trans.*,anggota.nama, COUNT(trans.id_anggota) AS jml_pinjam");
       $this->db->from('trans');
       $this->db->join('anggota', 'trans.id_anggota = anggota.id');
       $this->db->where('trans.stat','2');
       $this->db->group_by('trans.id_anggota','desc');
       return $this->db->get();
    }
    
    function getAllrentItem($rent_no){
	   
       $this->db->select("rent_detail.id,rent_detail.isbn,member.name,book.title,rent_detail.rent_date,rent_detail.due_date");
       $this->db->from('rent_detail');
       $this->db->join('book', 'book.isbn = rent_detail.isbn');
       $this->db->join('member', 'member.id = rent_detail.member');
       $this->db->like('rent_no',$rent_no);
       return $this->db->get();
	}
    
    function getAllrentDetail($id){
	   
       $this->db->select("rent_detail.id,rent_detail.isbn,member.name,book.title,rent_detail.rent_date,rent_detail.due_date");
       $this->db->from('rent_detail');
       $this->db->join('book', 'book.isbn = rent_detail.isbn');
       $this->db->join('member', 'member.id = rent_detail.member');
       $this->db->like('rent_no',$id);
       return $this->db->get();
	}
    
    function getrent($id)
	{
		
        $this->db->where('id', $id);
        $this->db->select("*");
        $this->db->from("rent");
        
        return $this->db->get();
	}

	function addrent($data)
	{
		//untuk insert data ke database
		$this->db->insert('rent', $data);
	}
    
    function addrentitem($data)
	{
		//untuk insert data ke database
		$this->db->insert('rent_detail', $data);
	}

	function updaterent($data, $condition)
	{
			
        $this->db->where($condition);
        $this->db->update('rent', $data);
	}

	function deleterent($id)
	{
		//delete produk berdasarkan id
        $this->db->where('id', $id);
        $this->db->delete('rent');
	}
    
    function deleterentitem($id)
	{
		//delete produk berdasarkan id
        $this->db->where('id', $id);
        $this->db->delete('rent_detail');
	}
    
    
}
