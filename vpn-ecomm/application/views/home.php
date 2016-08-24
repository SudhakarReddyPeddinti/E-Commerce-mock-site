<!DOCTYPE html>
<html>
      <head>
    <meta http-equiv="content-type" content="text/html; charset=Cp1252">
    <title>Shopping Cart</title>
    <link href="<?php echo base_url(); ?>assets/css/home.css" media="screen" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.3.2.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/core.js"></script>
    </head>
    <body>
        <ul>
            <li><a href="">New Arrivals</a></li>
            <li><a href="">Men</a></li>
            <li><a href="">Women</a></li>
            <li style="float:right"><a class="active" href="#about">Login</a></li>
        </ul>
    
        <?php
        $this->load->library('table');
        $this->table->set_heading('Id', 'Name', 'Price', 'Quantity', 'Buy');
        
        foreach ($result as $product)
            $this->table->add_row($product->product_id, $product->product_name, $product->price, $product->quantity, anchor("shoppingcart/buy/".$product->product_id, 'Order'));
        $tmpl = array ( 'table_open'  => '<table border="1" cellpadding="2" cellspacing="3" cellspacing="3">' );
        $this->table->set_template($tmpl);
        echo $this->table->generate();
        ?>
    </body>
</html>