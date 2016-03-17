<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Livrariateste {

    private $CI;

    public function __construct()
    {
        // Assign the CodeIgniter super-object
        $this->CI =& get_instance();
    }

    public function foo()
    {
        $this->CI->load->helper('url');
        redirect();
    }

    public function bar()
    {
        echo $this->CI->config->item('base_url');
    }
}
/* End of file libraryName.php */
/* Location: ./application/libraries/libraryName.php */
