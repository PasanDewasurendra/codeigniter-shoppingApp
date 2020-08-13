

<div class="container mb-4">
	<div class="row">
		<div class="col-12">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
					<tr>
						<th scope="col"> </th>
						<th scope="col">Product</th>
						<th scope="col">Available</th>
						<th scope="col" class="text-center">Quantity</th>
						<th scope="col" class="text-right">Price</th>
						<th> </th>
					</tr>
					</thead>
					<tbody>
					<?php if ($this->cart->total_items() > 0){
						foreach ($orders as $order){  ?>
					<tr>
						<td>
							<?php $imageURL = !empty($order["image"])?base_url('assets/images/phones/'.$order["image"]):base_url('assets/images/logo.png'); ?>
							<img src="<?php echo $imageURL; ?>" width="50"/>
						</td>
						<td><?php echo $order['name']?></td>
						<td>In stock</td>
						<td><input class="form-control" type="text" value="<?php echo $order['qty']?>" /></td>
						<td class="text-right"><?php echo 'Rs.'.$order['price']?></td>
						<td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
					</tr>

					<?php }}else{ ?>
					<tr>
						<td colspan="6"><p>Cart is empty!</p></td>
					</tr>

					<?php } ?>

					<?php if ($this->cart->total_items() > 0){ ?>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><strong>Total</strong></td>
						<td class="text-right"><strong><?php echo 'Rs.'.$this->cart->total()?></strong></td>
					</tr>

					<?php } ?>

					</tbody>
				</table>
			</div>
		</div>
		<div class="col mb-2">
			<div class="row">
				<div class="col-sm-12  col-md-6">
					<button class="btn btn-block btn-light">Continue Shopping</button>
				</div>
				<div class="col-sm-12 col-md-6 text-right">
					<button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
				</div>
			</div>
		</div>
	</div>
</div>