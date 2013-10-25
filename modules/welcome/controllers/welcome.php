<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Welcome
 * 
 * Description...
 * 
 * @package welcome
 * @author Pierre <pierre.silva@lab3.com.co>
 * @version 0.0.0
 */
class Welcome extends MX_Controller {

public function __construct() {
    parent::__construct();

    // load welcome config
    //$this->load->config('welcome');
    // load welcome library    
    //$this->load->library('welcome');
    // load welcome lang    
    //$this->load->lang('welcome');
    $this->load->helper('welcome');

    }

    public function index() {
        $data = array();
        $data['mybar'] = 1;
        $data['myfoo'] = 'foo';
        $data['myarray'] = array('arr1'=>1,'arr2'=>2,'arr3'=>3);
        $this->parser->parse('welcome/index',$data);
    }
    
    public function datastring() {
        
        $fruits = array(array('name'=>'apple', 'color'=>'red'), array('name'=>'banana', 'color'=>'yellow'), array('name'=>'orange', 'color'=>'green'), array('name'=>'lemon', 'color'=>'white'));

        for ($i = 0; $i<10; $i++)
        {
             $fruit = $fruits[array_rand($fruits)];

             $data['fruits'][] = array('index' => $i, 'fruit' => $fruit);
        } 
        
        $return = $this->parser->parse('welcome/data',$data, array('show' => FALSE));
        
        return $return;
        
    }
    public function dataarray($as = '',$vars = '') {
        
        
        $fruits = array('name'=>'apple', 'color'=>'red', 'name'=>'banana', 'color'=>'yellow', 'name'=>'orange', 'color'=>'green', 'name'=>'lemon', 'color'=>'white');

        for ($i = 0; $i<10; $i++)
        {
             $fruit = $fruits[array_rand($fruits)];

             $data[$as][] = array('index' => $i, 'fruit' => $fruit);
        }                 
        
        //$data[$as]['estavar'] = $vars['var3'];
        
        return $data;
        
    }
    
    public function datatables_test() {
       

    }
}

/* End of file welcome.php */