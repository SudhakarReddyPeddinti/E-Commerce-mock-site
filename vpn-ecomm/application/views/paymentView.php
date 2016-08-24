<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage</title>

    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/index.css"); ?>" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/core.js"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/index.js"); ?>"></script>
    
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Custom CSS -->
    <link href="<?php echo base_url("assets/css/shop-homepage.css"); ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
        h2.bg-success{
    padding: 15px;
}

.required-lbl{
    color: red;
}

label[for="billinginformation"]{
    display: inline;
    float: left;
    margin:0px 45px 0px 0px;
}

.card-expiry{
    padding-left: 0px;
}

.confirm-btn{
    float:right;
}

.bg-primary{
    padding: 10px;
}

label{
    margin-bottom :0px;
}
    </style>

</head>

<body>
     <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('product'); ?>">Traders</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo site_url('product'); ?> ">New Arrivals</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
<?php 
    $this->load->helper("form");
    echo form_open("payment");
                           ?>
<!-- Shipping info -->
<div class="container">
	<div class="row">
		
        <div class="form-group col-md-12 bg-default">
            <label class="control-label" for="billinginformation">Shipping Information</label>
        </div>
        <hr style="width: 100%; color: gray;" />
        
        <div class="shipping-info">
            <div class="form-group col-md-6">
              <span class="required-lbl">* </span><label class="control-label" for="firstname">First Name</label>
              <div class="controls">
                <?php echo form_error('firstname'); ?>
                <input id="firstname" name="firstname" type="text" placeholder="" class="form-control" required="">
              </div>
            </div>
            
            <div class="form-group col-md-6">
              <span class="required-lbl">* </span><label class="control-label" for="lastname">Last Name</label>
              <div class="controls">
                  <?php echo form_error('lastname'); ?>
                <input id="lastname" name="lastname" type="text" placeholder="" class="form-control" required="">
              </div>
            </div>
            
            <div class="form-group col-md-6">
              <span class="required-lbl">* </span><label class="control-label" for="shippingaddress1">Shipping Address 1</label>
              <div class="controls">
                  <?php echo form_error('shippingaddress1'); ?>
                <input id="shippingaddress1" name="shippingaddress1" type="text" placeholder="" class="form-control" required="">
              </div>
            </div>
            
            <div class="form-group col-md-6">
              <label class="control-label" for="shippingaddress2">Shipping Address 2</label>
              <div class="controls">
                <input id="shippingaddress2" name="shippingaddress2" type="text" placeholder="" class="form-control">
              </div>
            </div>
            
            <div class="form-group col-md-6">
              <span class="required-lbl">* </span><label class="control-label" for="shippingcountry">Shipping Country</label>
              <div class="controls">
                 <div class="controls">
                  <?php echo form_error('shippingcountry'); ?>
                    <select id="shippingcountry" name="shippingcountry" class="input-xlarge">
                      <option>United States</option>
                      <option>India</option>
                      <option>Other</option>
                    </select>
                  </div>
              </div>
            </div>
            
             <div class="form-group col-md-6">
              <span class="required-lbl">* </span><label class="control-label" for="shippingstate">Shipping State</label>
              <div class="controls">
                  <?php echo form_error('shippingstate'); ?>
                <select id="shippingstate" name="shippingstate" class="input-xlarge">
                  <option>Missouri</option>
                  <option>New York</option>
                  <option>Texas</option>
                  <option>Washington</option>
                  <option>Florida</option>
                  <option>Kansas</option>
                  <option>Arizona</option>
                  <option>Utah</option>
                  <option>California</option>
                  <option>Other</option>
                </select>
              </div>
            </div>
            
            <div class="form-group col-md-6">
              <span class="required-lbl">* </span><label class="control-label" for="shippingcity">Shipping City</label>
              <div class="controls">
                  <?php echo form_error('shippingcity'); ?>
                <input id="shippingcity" name="shippingcity" type="text" placeholder="" class="form-control" required="">
              </div>
            </div>
            
            <div class="form-group col-md-6">
              <span class="required-lbl">* </span><label class="control-label" for="postcode">Post Code</label>
              <div class="controls">
                  <?php echo form_error('postcode'); ?>
                <input id="postcode" name="postcode" type="text" placeholder="" class="form-control" required="">
              </div>
            </div>
            
            <hr/>
            
            <div class="form-group col-md-12 bg-default" style="margin-top:60px">
             <div class="control-group">
                  
                  <div class="controls">
                  <label class="control-label" for="billinginformation">Billing Information</label>
               
                  </div>
                </div>
            </div>
            
        <hr style="width: 100%; color: gray;" />
            
            
            <div class="form-group col-md-6">
                <div class="control-group">
                    <span class="required-lbl">* </span><label class="control-label" for="firstnameonaccount">First Name on Account</label>
                    <div class="controls">
                  <?php echo form_error('firstnameonaccount'); ?>
                        <input id="firstnameonaccount" name="firstnameonaccount" type="text" placeholder="" class="form-control" required="">
                    </div>
                </div>
            </div>
            
            <div class="form-group col-md-6">
                <div class="control-group">
                    <span class="required-lbl">* </span><label class="control-label" for="lastnameonaccount">Last Name on Account</label>
                    <div class="controls">
                  <?php echo form_error('lastnameonaccount'); ?>
                        <input id="lastnameonaccount" name="lastnameonaccount" type="text" placeholder="" class="form-control" required="">
                    </div>
                </div>
            </div>
            
            <div class="form-group col-md-6">
                <div class="control-group">
                    <span class="required-lbl">* </span><label class="control-label" for="cardnumber">Card Number</label>
                    <div class="controls">
                  <?php echo form_error('cardnumber'); ?>
                        <input id="cardnumber" name="cardnumber" type="text" placeholder="" class="form-control" required="">
                    </div>
                </div>
            </div>
            
             <div class="form-group col-md-6 card-expiry">
                <div class="control-group col-md-4">
                    <span class="required-lbl">* </span><label class="control-label" for="cvv">CVV</label>
                    <div class="controls">
                        <input id="cvv" name="cvv" type="text" placeholder="" class="form-control" required="">
                    </div>
                </div>
                <div class="control-group col-md-4">
                   <div class="control-group">
                      <label class="control-label" for="month">Expiration Date</label>
                      <div class="controls">
                  <?php echo form_error('month'); ?>
                        <select id="month" name="month" class="input-xlarge">
                          <option>Select Month</option>
                          <option>01</option>
                          <option>02</option>
                          <option>03</option>
                          <option>04</option>
                          <option>05</option>
                          <option>06</option>
                          <option>07</option>
                          <option>08</option>
                          <option>09</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                        </select>
                      </div>
                    </div>
                </div>
                
                <div class="control-group col-md-4">
                    <div class="control-group">
                      <label class="control-label" for="selectyear"></label>
                      <div class="controls">
                  <?php echo form_error('selectyear'); ?>
                        <select id="selectyear" name="selectyear" class="input-xlarge">
                          <option>Select Year</option>
                          <option>14</option>
                          <option>15</option>
                          <option>16</option>
                          <option>17</option>
                          <option>18</option>
                          <option>19</option>
                          <option>20</option>
                          <option>21</option>
                          <option>22</option>
                          <option>23</option>
                          <option>24</option>
                          <option>25</option>
                          <option>26</option>
                          <option>27</option>
                          <option>28</option>
                          <option>29</option>
                          <option>30</option>
                        </select>
                      </div>
                    </div>
                </div>
                
            </div>
            
            <div class="form-group col-md-6">
            </div>
            
        <hr/>
            
        <div class="form-group col-md-12 bg-default" style="margin-top:60px">
            <label class="control-label" for="billinginformation">Billing Address</label>
        </div>
        <hr style="width: 100%; color: gray;" />
        
        <div class="form-group col-md-6">
              <span class="required-lbl">* </span><label class="control-label" for="billingaddress1">Address 1</label>
              <div class="controls">
                  <?php echo form_error('billingaddress1'); ?>
                <input id="billingaddress1" name="billingaddress1" type="text" placeholder="" class="form-control" required="">
              </div>
            </div>
            
            <div class="form-group col-md-6">
              <label class="control-label" for="billingaddress2">Address 2</label>
              <div class="controls">
                  <?php echo form_error('billingaddress2'); ?>
                <input id="billingaddress2" name="billingaddress2" type="text" placeholder="" class="form-control">
              </div>
            </div>
            
            <div class="form-group col-md-6">
              <span class="required-lbl">* </span><label class="control-label" for="billingcountry">Billing Country</label>
              <div class="controls">
                 <div class="controls">
                  <?php echo form_error('billingcountry'); ?>
                    <select id="billingcountry" name="billingcountry" class="input-xlarge">
                      <option>United States</option>
                      <option>India</option>
                    </select>
                  </div>
              </div>
            </div>
            
             <div class="form-group col-md-6">
              <span class="required-lbl">* </span><label class="control-label" for="billingstate">Billing State</label>
              <div class="controls">
                  <?php echo form_error('billingstate'); ?>
                <select id="billingstate" name="billingstate" class="input-xlarge">
                   <option>Missouri</option>
                   <option>Alabama</option>
	               <option>Alaska</option>
	               <option>Arizona</option>
	               <option>Arkansas</option>
	               <option>California</option>
	               <option>Colorado</option>
	               <option>Connecticut</option>
	               <option>Delaware</option>
	               <option>Hawaii</option>
	               <option>Idaho</option>
	               <option>Illinois</option>
	               <option>Indiana</option>
	               <option>Iowa</option>
	               <option>Kansas</option>
	               <option>Kentucky</option>
                </select>
              </div>
            </div>
            
            <div class="form-group col-md-6">
              <span class="required-lbl">* </span><label class="control-label" for="billingcity">Billing City</label>
              <div class="controls">
                  <?php echo form_error('billingcity'); ?>
                <input id="billingcity" name="billingcity" type="text" placeholder="" class="form-control" required="">
              </div>
            </div>
            
            <div class="form-group col-md-6">
              <span class="required-lbl">* </span><label class="control-label" for="billingpostcode">Post Code</label>
              <div class="controls">
                  <?php echo form_error('billingpostcode'); ?>
                <input id="billingpostcode" name="billingpostcode" type="text" placeholder="" class="form-control" required="">
              </div>
            </div>
            
            <div class="form-group col-md-12 bg-default" style="margin-top:60px">
                <label class="control-label" for="contactinformation">Contact Information:</label>
            </div>
                <hr style="width: 100%; color: gray;" />
            <div class="form-group col-md-6">
              <span class="required-lbl">* </span><label class="control-label" for="emailaddress">Email Address</label>
              <div class="controls">
                  <?php echo form_error('email'); ?>
                <input id="email" name="email" type="email" placeholder="" class="form-control" required="">
              </div>
            </div>
            
            <div class="form-group col-md-6">
              <span class="required-lbl">* </span><label class="control-label" for="phone">Phone</label>
              <div class="controls">
                  <?php echo form_error('phone'); ?>
                <input id="phone" name="phone" type="text" placeholder="" class="form-control" required="">
              </div>
            </div>
            
            <div class="form-group col-md-6">
              <label class="control-label" for="organization">Organization</label>
              <div class="controls">
                <input id="organization" name="organization" type="text" placeholder="" class="form-control">
              </div>
            </div>
            
            <div class="form-group col-md-12">
                <div class="control-group confirm-btn">
                  <label class="control-label" for="placeorderbtn"></label>
                  <div class="controls">
                    <?php 
                    echo form_submit("Success","Pay Now", "class='btn btn-primary btn-lg active'");
                    echo form_close(); ?>
                      
                  </div>
                </div>
            </div>
            
        </div>
        
    
	</div>
</div>

</body>
</html>