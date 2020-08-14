

<form method="post" action="https://sandbox.payhere.lk/pay/checkout">

	<div class="row">

		<div class="col-lg-8 mt-3">
			<div class="card">
				<?php if ($this->cart->total_items() > 0){
					$items = $orders;
				foreach ($items as $item){  ?>
				<div style="display: flex; flex: 1 1 auto;">
					<div class="img-square-wrapper">
						<?php $imageURL = !empty($item["image"])?base_url('assets/images/phones/'.$item["image"]):base_url('assets/images/logo.png'); ?>
						<img src="<?php echo $imageURL; ?>" height="150"/>
					</div>
					<div class="card-body">
						<h4 class="card-title"><?php echo $item['name']?></h4>
						<div class="card-text py-1"><?php echo 'Rs.'.$item['price']?></div>
						<div class="card-text"><?php echo $item['qty'].' item(s)'?></div>
						<button class="btn btn-sm btn-danger float-right"
								onclick="return confirm('Confirm to remove this item !')?window.location.href=
										'<?php echo base_url('cart/removeItem/'.$item['rowid']);?>':false;">
							<i class="fa fa-trash"></i>
						</button>
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


		<div class="col-lg-4 mt-3 card p-2 ">

			<h4 class="p-1">Customer Details</h4>
			<hr>

			<div class="form-group">
				<label for="first_name">First Name</label>
				<input class="form-control" type="text" name="first_name" value="Saman" placeholder="First Name">



			</div>
			<div class="form-group">
				<label for="last_name">Last Name</label>
				<input class="form-control" type="text" name="last_name" value="Perera" placeholder="Last Name">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control" type="text" name="email" value="samanp@gmail.com" placeholder="Email Address">
			</div>
			<div class="form-group">
				<label for="phone">Phone</label>
				<input class="form-control" type="text" name="phone" value="0771234567" placeholder="Mobile Number">
			</div>
			<div class="form-group">
				<label for="city">City</label>
				<input class="form-control" type="text" name="city" value="Colombo" placeholder="City">
			</div>
			<div class="form-group">
				<label for="address">Address</label>
				<textarea class="form-control" name="address" placeholder="Delivery Address">No.1, Galle Road </textarea>
			</div>
			<input type="hidden" name="country" value="Sri Lanka">
			<input type="hidden" name="order_id" value="ItemNo12345">
			<input type="hidden" name="items" value="Door bell wireless"><br>
			<input type="hidden" name="currency" value="LKR">
			<input type="hidden" name="amount" value="1000">
			<input class="btn btn-outline-success float-right" type="submit" value="Buy Now">
		</div>
	</div>

</form>



