<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class ShoppingCart extends CI_Controller 
{
    public function buy($id = null)
    {
        $this->load->library('session');
        $this->load->helper('url');
        
        if( !$this->session->userdata('logged_in'))
        {
            redirect('login');
        }
        
        if($id) {
            $this->load->model('mproduct');
            
            $product = $this->mproduct->findById($id);

            
            $data = array(
                'id'   => $product->product_id,
                'qty'  => 1,
                'price'=> $product->price,
                'name' => $product->product_name
            );

            $this->cart->insert($data);
        }
        
        
        $this->load->view('cart');
    }
    
    public function delete($rowid)
    {
        $this->cart->update(array('rowid' => $rowid, 'qty'=>0));
        $this->load->view('cart');
    }
    
    public function update()
    {
        $i = 1;
        foreach ($this->cart->contents() as $item)
        {
            $this->cart->update(array('rowid' => $item['rowid'], 'qty' => $_POST['qty'.$i]));
            $i++;
        }
        $this->load->view('cart');
    }
}
?>
