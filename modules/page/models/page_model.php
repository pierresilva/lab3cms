<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Page_model
 * 
 * Description...
 * 
 * @package page
 * @author Pierre <pierre.silva@lab3.com.co>
 * @version 0.0.0
 */

class Page_model extends MY_Model {

	protected $table                = 'page'; //Table name
	protected $key                  = 'id';//Table primary key 
	protected $soft_deletes     	= TRUE;//field deleted set to 1
        protected $deleted_by_field 	= 'deleted_by';
	protected $date_format          = 'datetime';
	protected $log_user             = FALSE;
	
	protected $set_created	        = TRUE;
	protected $created_field        = 'created_on';
	protected $created_by_field     = 'created_by';
	
	protected $set_modified		= TRUE;
	protected $modified_field	= 'modified_on';
	protected $modified_by_field    = 'modified_by';
	
    // Observers
	protected $before_insert	= array();
	protected $after_insert		= array();
	protected $before_update	= array();
	protected $after_update		= array();
	protected $before_find		= array();
	protected $after_find		= array();
	protected $before_delete	= array();
	protected $after_delete		= array();


}

/* End of file page_model.php */