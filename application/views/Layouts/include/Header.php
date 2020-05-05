<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>The Game Store</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">The Game Store</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
            <?php if(!$this->session->userdata('logged_in')) :?>
			<li><a href="<?php base_url();?>User/Create">Create a new account</a></li>
            <?php endif;?>
          </ul>
		  <?php if(!$this->session->userdata('logged_in')) :?>
		  <form action="<?php echo base_url();?>User/login" method="post" class="navbar-form navbar-right">
        <div class="form-group">
          <input name="user_name" type="text" class="form-control" placeholder="User Name">
        </div>
		<div class="form-group">
          <input name="password" type="password" class="form-control" placeholder="*******">
        </div>
        <button name="submit" type="submit" class="btn btn-default">Login</button>
      </form>
	  <?php else :?>
		<form action="<?php echo base_url();?>User/logout" method="post" class="navbar-form navbar-right">
		  
		<button type="link" class="btn btn-default">logout</button>
		</form>
	  <?php endif; ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="cart-area">
					<table width="100%" cellpadding="6" cellspacing="1">
					<form action="<?php echo base_url('Cart/update');?>" method="post">	
						<th>QTY</th>
						<th>Product</th>
						<th>Price
						</th>
						<?php $i=1;?>
						<?php foreach($this->cart->contents() as $items) :?>
						<input type="hidden" name="<?php echo $i.'[rowid]'; ?>" value="<?php echo $items['rowid']; ?>" />
                  <tr>
                    <td><input type="text" name="<?php echo $i.'[qty]'; ?>" value="<?php echo $items['qty']; ?>" maxlength="3" size="5" class="qty" /></td>
                    <td><?php echo $items['name']; ?></td>
                    <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
                  </tr>
						<?php $i++;?>
						<?php endforeach;?>
						<tr>
							<td>
							</td>
							<td>
							<strong>Total</strong>
							</td>
							<td>
								<?php echo $this->cart->format_number($this->cart->total()); ?>
							</td>
						</tr>
					</table>
					<p><button type="submit" class="btn btn-default">Update Cart</button> 
					 
					</form>
					<a href="Cart/Details">
					<button type="link" class="btn btn-default">Go to Cart</button>
					</a>
					</p>
				</div>
				
			<div class="panel panel-default ">
				  <!-- Default panel contents -->
				  <div class="panel-heading heading-dark">Categories</div>
				  <ul class="list-group">
					<?php foreach(getCategories_h() as $c):?>
						<li class="list-group-item"><?php echo $c->name;?></li>
				   <?php endforeach;?>
				  </ul>
			</div>
			<div class="panel panel-default ">
				  <!-- Default panel contents -->
				  <div class="panel-heading heading-dark">Most Popular Games</div>
				  <ul class="list-group">
					<li class="list-group-item">Cras justo odio</li>
					<li class="list-group-item">Dapibus ac facilisis in</li>
					<li class="list-group-item">Morbi leo risus</li>
				  </ul>
			</div>
			</div>
			<div class="col-md-8">
				<div class="panel panel-default">
				  <!-- Default panel contents -->
				  <div class="panel-heading heading-green">The Gaming details</div>
				  <div class="panel-body game">
					
					
