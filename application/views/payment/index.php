<?php
if (isset($this->session->userdata['logged_in'])) {
	echo 'vvv'.validation_errors();
	?>


<!--	https://sandbox.payhere.lk/pay/checkout-->
<form method="post"action="<?= validation_errors() == '' ? base_url().'payment/BuyNow' :  'https://sandbox.payhere.lk/pay/checkout' ?>">

	<div class="row mb-5">

		<div class="col-lg-8 mt-3">
			<div class="card">
				<?php if ($this->cart->total_items() > 0){
				foreach ($this->cart->contents() as $item){ ?>

				<div style="display: flex; flex: 1 1 auto;">
					<div class="img-square-wrapper">
						<?php $imageURL = !empty($item["image"])?base_url('assets/images/phones/'.$item["image"]):base_url('assets/images/logo.png'); ?>
						<img src="<?php echo $imageURL; ?>" height="150"/>
					</div>
					<div class="card-body">
						<h4 class="card-title"><?php echo $item['name']?></h4>
						<div class="card-text py-1"><?php echo 'Rs.'.$item['price']?></div>
						<div class="card-text"><?php echo $item['qty'].' item(s)'?></div>

						<a class="btn btn-sm btn-danger float-right"
								href="<?php echo base_url('payment/removeItem/'.$item['rowid']);?>">
								<i class="fa fa-trash"></i>
						</a>
						<a href="<?php echo base_url('cart/');?>" class="btn btn-sm btn-outline-secondary mx-1 float-right ">
							<i class="fa fa-shopping-cart"><span class="ml-2">Edit</span></i>
						</a>

					</div>
				</div>
					<hr class="m-0">
				<?php }} ?>
				<div class="card-footer bg-dark text-light">
					<div class="text-light h5 float-left">Total : <?php echo 'Rs.'.$this->cart->total(); ?></div>
					<input class="btn btn-outline-success float-right" type="submit" value="Buy Now">
				</div>
			</div>
		</div>


		<div class="col-lg-4 mt-3 card p-0">

			<h4 class="p-1 bg-light text-primary text-center p-2 m-0">Shipping Details</h4>
			<hr class="mt-0">

			<div class="form-group px-2">
				<label for="first_name">First Name</label>
				<input class="form-control" type="text" name="first_name" value="<?php echo $customer[0]->name?>" placeholder="First Name">
				<span class="text-danger"><?php echo form_error('first_name'); ?></span>
			</div>
			<div class="form-group px-2">
				<label for="last_name">Last Name</label>
				<input class="form-control" type="text" name="last_name" value="" placeholder="Last Name">
				<span class="text-danger"><?php echo form_error('last_name'); ?></span>
			</div>
			<div class="form-group px-2">
				<label for="email">Email</label>
				<input class="form-control" type="text" name="email" value="<?php echo $customer[0]->email?>" placeholder="Email Address">
				<span class="text-danger"><?php echo form_error('email'); ?></span>
			</div>
			<div class="form-group px-2">
				<label for="phone">Phone</label>
				<input class="form-control" type="text" name="phone" value="<?php echo $customer[0]->phone?>" placeholder="Mobile Number">
				<span class="text-danger"><?php echo form_error('phone'); ?></span>
			</div>
			<div class="form-group px-2">
				<label for="city">City</label>
				<input class="form-control" type="text" name="city" value="" placeholder="City">
				<span class="text-danger"><?php echo form_error('city'); ?></span>
			</div>
			<div class="form-group px-2">
				<label for="address">Address</label>
				<textarea class="form-control" name="address" placeholder="Delivery Address"><?php echo $customer[0]->address?></textarea>
				<span class="text-danger"><?php echo form_error('address'); ?></span>
			</div>

			<input type="hidden" name="merchant_id" value="1215196">    <!-- Replace your Merchant ID -->
			<input type="hidden" name="return_url" value="http://sample.com/return">
			<input type="hidden" name="cancel_url" value="http://sample.com/cancel">
			<input type="hidden" name="notify_url" value="http://sample.com/notify">
			<input type="hidden" name="country" value="Sri Lanka">

			<input type="hidden" name="order_id" value="ItemNo12345">
			<input type="hidden" name="items" value="Mobile Phone"><br>
			<input type="hidden" name="currency" value="LKR">
			<input type="hidden" name="amount" value="<?php echo $this->cart->total(); ?>">

		</div>
	</div>

</form>

<?php
}else{ ?>

		<div class="card lead bg-light text-center mt-5 p-5">
			<span class="fa fa-info-circle"></span>
			To Make Payment, First you have to login with valid account! <br>
			<a href="<?php echo base_url()?>login">Login Here</a>
		</div>

<?php }
?>



