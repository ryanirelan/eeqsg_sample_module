<?php

/**
 * ExpressionEngine Sample Module
 *
 * @package			Sample Module
 * @subpackage		Modules
 * @category		Modules
 * @author			Ryan Irelan
 * @link			http://eequickstartguide.com
 */
 
 class Sample_module_mcp {
 
	 /**
	 * Constructor
	 */
 	function Sample_module_mcp($switch = TRUE)
 	{
 		//make local reference to EE super object
 		$this->EE =& get_instance();
 	}
 	
 	/**
 	* Module Homepage
 	*/
 	function index()
 	{
 		$this->EE->cp->set_variable('cp_page_title', $this->EE->lang->line('sample_module_module_name'));
 		
 		
 		$vars['placeholder_text'] = $this->EE->lang->line('sample_module_text');
 		
		return $this->EE->load->view('index', $vars, TRUE);
 	}
 	
 }