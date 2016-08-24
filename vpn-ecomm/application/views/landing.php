<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- <link href="<?php echo base_url(); ?>assets/css/home.css" media="screen" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/index.css"); ?>" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/core.js"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/index.js"); ?>"></script>
    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
                <a class="navbar-brand" href="<?php echo site_url('product')?>">Traders</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo site_url('product'); ?> ">New Arrivals</a>
                    </li>
                    
                </ul>
                <ul class="nav navbar-nav" style="float:right"  >
                    <li>
                        <a href="<?php echo site_url('shoppingcart/buy/');?>"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
                    </li>
                    <li>
                        <a href="#">Register</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            
            <div class="col-md-12">

                <div class="row">
                    
            <!-- $this->table->add_row($product->product_id, $product->product_name, $product->price, $product->quantity, anchor("shoppingcart/buy/".$product->product_id, 'Order')); -->
                     
       <?php 
        foreach ($result as $product)
                {
                    ?>
                    
                   <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo $product->img_url; ?>" alt="">
                            <div class="caption">
                            <h4 class="pull-right">$<?php echo $product->price; ?></h4>
                                <h4><?php echo $product->product_name; ?></h4>
                                <p><?php echo $product->description; ?></p>
                              <a class="btn btn-primary" href="<?php echo site_url('shoppingcart/buy/'.$product->product_id); ?>">Order</a>
                            </div>
                        </div>
                    </div>
                    <?php }; ?>

                </div>

            </div> 

        </div> 

    </div>
    <!-- /.container -->

</body>

</html>
