<?php
class Setting_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	

	//-----------------------------------------------------
	public function get_general_settings(){
		$this->db->where('id', 1);
		$query = $this->db->get('ci_general_settings');
        return $query->row_array();
	}

	public function get_all_languages()
	{
		$this->db->where('status',1);
		return $this->db->get('ci_language')->result_array();
	}


	function get_email_templates()
	{
		return $this->db->get('ci_email_templates')->result_array();
	}


	function get_email_template_content_by_id($id)
	{
		return $this->db->get_where('ci_email_templates',array('id' => $id))->row_array();
	}

	function get_email_template_variables_by_id($id)
	{
		return $this->db->get_where('ci_email_template_variables',array('template_id' => $id))->result_array();
	}

	
}
?>