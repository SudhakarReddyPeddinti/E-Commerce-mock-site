<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function index($index = 0)
    {
        $this->load->model("mproduct");
        $data['result'] = $this->mproduct->findAll();
        $this->load->view('landing', $data);
    }
}
    