<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mail extends CI_Controller {

	public function index()
	{
                              /*  $to      = 'srxw3@mail.umkc.edu';
                                $subject = 'Suspecting fradulant transaction!';
                                $message = 'The user "'.$this->input->post('firstname').'" is placing orders with different cards!!';
                                $headers = 'From: srxw3@mail.umkc.edu' . "\r\n" .
                                            'X-Mailer: PHP/' . phpversion();

                                mail($to, $subject, $message, $headers);
        
        */
                                $to      = 'srxw3@mail.umkc.edu';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
    }
}