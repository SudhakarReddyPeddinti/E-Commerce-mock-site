<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class OrderSummary extends CI_Controller
{
    public function index(){
        $this->session->sess_destroy();
        
        redirect('product', 'refresh');
    }
}