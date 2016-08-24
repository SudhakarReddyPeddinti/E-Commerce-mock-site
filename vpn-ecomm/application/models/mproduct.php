<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Mproduct extends CI_Model 
{
     function __construct()
    {
        parent::__construct();
    }
    
    public function findAll()
    {
        return $this->db->get('products')->result();
    }
    
    public function findUser($user_name)
    {
        $this->db->where('user_name', $user_name);
        return $this->db->get('User_details');
    }
    public function findById($id)
    {
        $this->db->where('product_id', $id);
        return $this->db->get('products')->row();
    }
    
    public function find($table, $attribute, $id)
    {
        $this->db->where($attribute, $id);
        return $this->db->get($table);
    }
    
    public function insert_shipping_address($shipping_data = array())
    {
     $this->db->insert('shipping_address', $shipping_data);
        return $this->db->insert_id();
    }
    
    public function insert_billing_address($billing_data = array())
    {
     $this->db->insert('billing_address', $billing_data);
        return $this->db->insert_id();
    }
    
    public function insert_card_details($card_data = array())
    {
     $this->db->insert('card', $card_data);
        return $this->db->insert_id();
    }
    
    public function insert_order_info($order_data = array())
    {
     $this->db->insert('order_details', $order_data);
        return $this->db->insert_id();
    }
}
?>
