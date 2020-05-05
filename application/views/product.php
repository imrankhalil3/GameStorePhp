<?php if($this->session->flashdata('login_success')):?>
	<div class="alert alert-success">
	<?php echo $this->session->flashdata('login_success');?>
	</div>
<?php endif;?>

<?php if($this->session->flashdata('login_fail')) :?>
	<div class="alert alert-danger">
	<?php echo $this->session->flashdata('login_fail');?>
	</div>
<?php endif; ?>

<?php if($this->session->flashdata('register')) :?>
	<div class="alert alert-success">
	<?php echo $this->session->flashdata('register');?>
	</div>
<?php endif; ?>
<?php foreach($products as $p) :?>
	<div class="col-md-4">
		<div class="game-price"><?php echo $p->price;?></div>
		<img src="<?php echo base_url();?>assets/images/<?php echo $p->image;?>">
		<div class="game-name"><?php echo $p->title;?></div>
		<form action="<?php echo base_url('Cart/add');?>" method="post">
		
		<input name="id" type="hidden" value="<?php echo $p->id;?>">
		<input name="name" type="hidden" value="<?php echo $p->title;?>">
		<input name="price" type="hidden" value="<?php echo $p->price;?>">
		QTY<input name="qty" type="text" class="qty" placeholder="1" />
		<button class="btn btn-primary" type="submit">Add to Cart</button>
		</form>
	</div>
<?php endforeach;?>
