<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class subGroupProduct_model extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->load->database();		
    }

	public function getGroup()
    {
		$groupproduct = $this->db->query("SELECT * from m_groupproduct");
		return $groupproduct->result();
    }
}
?>
