<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {
    private $title;
    private $content;

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

	public function save(){
        $this->db->insert('entries', 
        	array(
        		'title' => $this->title,
        		'content' => $this->content
        	));
	}

    /**
     * Gets the value of title.
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the value of title.
     *
     * @param mixed $title the title
     *
     * @return self
     */
    public function _setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Gets the value of content.
     *
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets the value of content.
     *
     * @param mixed $content the content
     *
     * @return self
     */
    public function _setContent($content)
    {
        $this->content = $content;

        return $this;
    }

}

/* End of file blog_model.php */
/* Location: ./application/models/blog_model.php */