<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->output->enable_profiler(TRUE);
        echo "<h1>header</h1>";
        
    }

    public function index()
    {
        $data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');

        $data['title'] = "My Real Title";
        $data['heading'] = "My Real Heading";

        $this->load->view('blog_view', $data);
    }

    public function insert(){
        $this->load->model('blog_model');
        $blog_model = $this->blog_model;
        $blog_model->_setTitle('Titulo de teste');
        $blog_model->_setContent('Conteudo de teste');
        $blog_model->save();
        echo "Salvo com sucesso!";        
    }

    public function testehelper(){
        $this->load->helper('teste');
        echo teste_helper();
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

    public function testelivraria(){
        $this->load->library('livrariateste');
        $this->livrariateste->bar();
    }

	public function _output($output)
	{
	    echo $output."<h2>footer</h2>";
	}


}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */