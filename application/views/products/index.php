<div class="container ">
	<h3 class="h3 py-3 text-dark">Products</h3>
	<div class="row">
		<?php if(!empty($product)){
			foreach ($product as $item){ ?>

		<div class="col-md-3 col-sm-6">
			<div class="product-grid5">
				<div class="product-image5" >
					<a href="#" >
						<img class="pic-1" src="<?php echo base_url('assets/images/phones/'.$item['image'])?>">
						<img class="pic-2" src="<?php echo base_url('assets/images/phones/2/'.$item['image'])?>">
					</a>
					<ul class="social">
						<li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
						<li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
						<li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
					</ul>
					<a href="<?php echo base_url('home/addToCart/'.$item['id'])?>" class="select-options"><i class="fa fa-arrow-right"></i> Add To Cart</a>
				</div>
				<div class="product-content">
					<h3 class="title"><a href="#"><?php echo $item['name']?></a></h3>
					<div class="price"><?php echo $item['price']?></div>
				</div>
			</div>
		</div>

		<?php
			}
		}else{ ?>
			<div class="justify-content-center" style="flex: auto">
			<div class="card lead bg-light text-center mt-5 p-5">
				<span class="fa fa-info-circle"></span>
				Oops! , There is no product in the list at right now.
			</div>
			</div>

		<?php } ?>


	</div>
</div>
<hr>
