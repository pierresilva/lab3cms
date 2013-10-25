<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Page
 * 
 * Description...
 * 
 * @package page
 * @author Pierre <pierre.silva@lab3.com.co>
 * @version 0.0.0
 */
class Page extends MX_Controller {

public function __construct() {
    parent::__construct();

    // load page config
    //$this->load->config('page');
    // load page library    
    //$this->load->library('page');
    // load page lang    
    $this->load->language('page');

    }

    public function index() {
        $data['block']['services-1'] = '<b>Servicio 1</b>';
        $data['block']['services-2'] = '<b>Servicio 2</b><!-- MODULE welcome/welcome/dataarray AS fruits VARS var1={myfoo},var2=1,var3={myarray} --><ul><!-- BEGIN fruits AS fru--><li>{fru.index} <br/> <!-- BEGIN fru.fruit AS fr --> {fr:name} - {fr:color}<br/><!-- END fr --></li><!-- END fru --></ul><!-- END MODULE welcome/welcome/dataarray -->';
        $data['block']['services-3'] = '<b>Servicio 3</b><br><!-- BEGIN myarray2 -->{myarray2.name}<br/><!-- END myarray2 -->';
        
        $data['myarray2'] = array(array('name'=>'michel'),array('name'=>'andres'),array('name'=>'santiago'));
        
        $this->parser->parse('page/index',$data);
        
    }
    public function get_page($home = '', $slug = '') {
        if($home === 1 AND $slug === '' ){
            $home = "AND 01_pages.home='".$home."'";
        }else{
            $home = '';
        }
        $qry = "
            SELECT 
            01_pages_blocks.name AS block_name, 
            01_pages_blocks.id AS block_id, 
            01_pages_blocks.page_id AS block_page_id, 
            01_pages_blocks.content AS block_content, 
            01_pages_blocks.type AS block_type, 
            01_pages.id, 
            01_pages.name, 
            01_pages.title, 
            01_pages.slug, 
            01_pages.meta_title, 
            01_pages.meta_description, 
            01_pages.meta_keywords, 
            01_pages.menu, 
            01_pages.menu_title, 
            01_pages.categories, 
            01_pages.home, 
            01_pages.visits, 
            01_pages.template, 
            01_pages.ordering, 
            01_pages.created_by, 
            01_pages.modified_by, 
            01_pages.created_on, 
            01_pages.modified_on, 
            01_pages.deleted_by, 
            01_pages.deleted
            FROM (
            01_pages
            LEFT JOIN 
            01_pages_blocks ON 01_pages_blocks.page_id=01_pages.id
            )
            WHERE 01_pages.slug='".$slug."' 
            ".$home."
            ";
        $query = $this->db->query($qry);
    }

}

/* End of file page.php */