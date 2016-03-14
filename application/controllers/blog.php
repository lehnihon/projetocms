<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        echo "contrutor<br>";
        
    }

	public function index()
	{
		echo "Hello World<br>";
	}

   public function comments()
    {
        echo 'Look at this!<br>';
    }	

    public function shoes($sandals, $id)
    {
            echo $sandals."<br>";
            echo $id."<br>";
    }

	public function _output($output)
	{
	        echo $output."teste";
	}

}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */