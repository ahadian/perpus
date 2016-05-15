<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');


 /*
 * @author		Budi
 * @link		http://mifk32.website
 * @version		Version 1.0
 */

class Tanggal extends CI_Controller
{
	public function __construct() {
        parent::__construct();
        $this->load->helper('fungsidate'); //kita load helper yang kita buat cukup hanya menuliskan nama depannya saja
    }
 
    public function index()
    {
        $tanggal1  = "2015-03-20"; //format tanggal mysql
        $tanggal2 = "1427174163"; //timestamp
 
        echo tgl_indo($tanggal1);
        echo"</br>";
        echo tgl_indo_timestamp($tanggal2);
    }

	
	
}
