<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine Sample Module
 *
 * @package			Sample Module
 * @subpackage		Modules
 * @category		Modules
 * @author			Ryan Irelan
 * @link			http://eequickstartguide.com
 */
 
/**
 * Sample Module
 *
 * @author Ryan Irelan
 */

class Sample_module_upd
{
	var $version = '1.0';
	
	/**
	 * Update function
	 *
	 * @author Ryan Irelan
	 */
	
	function Sample_module_upd( $switch = TRUE)
	{
		// Make a local reference to the EE super object
		$this->EE =& get_instance();
	}
	
	/**
	 * Install the module
	 *
	 * @author Ryan Irelan
	 * @access public
	 * @return bool
	 */
	function install()
	{
		$this->EE->load->dbforge();
		
		$data = array(
				'module_name' => 'Sample_module',
				'module_version' => $this->version,
				'has_cp_backend' => 'y'
				);
				
		$this->EE->db->insert('modules', $data);
		
		return TRUE;						
	}
	
	/**
	 * Uninstalls the module
	 *
	 * @author Ryan Irelan
	 * @access public
	 * @return bool
	 */
	function uninstall()
	{
		$this->EE->load->dbforge();
		
		$this->EE->db->select('module_id');
		$query = $this->EE->db->get_where('modules', array('module_name' => 'Sample Module'));
		
		$this->EE->db->where('module_id', $query->row('module_id'));
		$this->EE->db->delete('module_member_groups');
		
		$this->EE->db->where('module_name', 'Fortunes');
		$this->EE->db->delete('modules');
		
		$this->EE->db->where('class', 'Sample_module');
		$this->EE->db->delete('actions');
		
		$this->EE->db->where('class', 'Sample_module_mcp');
		$this->EE->db->delete('actions');
		
		return TRUE;
	}
	
	/**
	 * Update the module
	 *
	 * @author Ryan Irelan
	 * @access public
	 * @return bool
	 */
	function update($current = '')
	{
		$this->EE->load->dbforge();
		return TRUE;		
	}
}
 