<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller {

	function index()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
        $this->form_validation->set_rules('firstname', 'First Name', 'required');

		if ($this->form_validation->run() == false)
		{
			$this->load->view('paymentView');
		}
		else
		{
            $this->load->model('mproduct');
         
            $user =  $this->input->post('firstname');
            $attribute = 'user_name';
            $table = 'User_details';
            
            $user = $this->mproduct->find($table, $attribute, $user);
            
            if( $user->num_rows() > 0)
            {
                foreach ($user->result() as $row)
                {
                    $user_id = $row->user_id;
                    $table = 'card';
                    $attribute = 'user_id';
                    
                    $card = $this->mproduct->find($table, $attribute, $user_id);
                    if( $card->num_rows() >0 ){
                        $card_usage_count = 0;
                        foreach ($card->result() as $card_row){
                            if ($card_row->card_number != $this->input->post('cardnumber'));
                               {
                                   $card_usage_count++;
                               }
                            }
                        if($card_usage_count >= 0)
                           {
                                $to      = 'srxw3@mail.umkc.edu';
                                $subject = 'Suspecting fradulant transaction!';
                                $message = 'The user "'.$this->input->post('firstname').'" is placing orders with different cards!!';
                                $headers = 'From: Ecommerce@monitering.com' . "\r\n" .
                                            'X-Mailer: PHP/' . phpversion();

                                mail($to, $subject, $message, $headers);
                            }
                        else {
                            $shipping_address1 = $this->input->post('shippingaddress1');
                            $billing_address1 = $this->input->post('billingaddress1');
                            if ($shipping_address1 != $billing_address1){
                                    
                                $to      = 'srxw3@mail.umkc.edu';
                                $subject = 'Suspecting fradulant transaction!';
                                $message = 'The user "'.$this->input->post('firstname').'" is placing orders with different shipping                   address & billing address!!!';
                                $headers = 'From: Ecommerce@monitering.com' . "\r\n" .
                                            'X-Mailer: PHP/' . phpversion();

                                mail($to, $subject, $message, $headers);
                                }
                            }
                        }
                    }
                
            }
            /*
            $shipping = array(
                "address_line1" => $this->input->post('shippingaddress1'),
                "address_line2" => $this->input->post('shippingaddress2'),
                "city" => $this->input->post('shippingcity'),
                "state" => $this->input->post('shippingstate'),
                "country" => $this->input->post('shippingcountry'),
                "postcode" => $this->input->post('postcode'),
            ); 
            $this->mproduct->insert_shipping_address($shipping);
            
            $billing = array(
                "address_line1" => $this->input->post('billingaddress1'),
                "address_line2" => $this->input->post('billingaddress2'),
                "city" => $this->input->post('billingcity'),
                "state" => $this->input->post('billingstate'),
                "country" => $this->input->post('billingcountry'),
                "zipcode" => $this->input->post('billingpostcode'),
            );
            $this->mproduct->insert_billing_address($billing);
            
            $card = array(
                "card_number" => $this->input->post('cardnumber'),
                "cvv" => $this->input->post('cvv'),
                "month" => $this->input->post('month'),
                "year" => $this->input->post('selectyear'),
            );
            $this->mproduct->insert_card_details($card);
            
            $order = array(
                "email" => $this->input->post('email'),
                "phone" => $this->input->post('phone'),
                "organization" => $this->input->post('organization'),
            );
            $this->mproduct->insert_order_info($order);
            */
			$this->load->view('orderSummary');
		}
	}
}
/*
    public function loadWithValidate(){
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('paymentView');
		}
		else
		{
            echo "HI";
			$this->load->view('order_summary');
		}
    }
}*/
?>