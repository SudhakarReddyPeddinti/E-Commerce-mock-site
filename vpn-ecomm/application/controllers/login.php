<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Login extends CI_Controller {

	function index()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
        
        $this->form_validation->set_error_delimiters('<div class="login-form-main-message show error">', '</div>');
        
		$this->form_validation->set_rules('lg_username', 'Username', 'required');
		$this->form_validation->set_rules('lg_password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('index');
		}
		else
		{
			$this->load->model('mproduct');
            $user_name = $this->input->post('lg_username');
            $user = $this->mproduct->findUser($user_name);
               
            if ($user->num_rows() > 0){
                $newdata = array(
                   'username'  => $user_name,
                   'logged_in' => TRUE
               );

 $this->session->set_userdata($newdata);
                redirect('product');
            }
            else {
                echo "failed";
            }
            
		}
	}
}
?>