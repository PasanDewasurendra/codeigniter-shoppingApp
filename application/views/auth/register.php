
<div class="row justify-content-center mt-3">
	<div class="card">
		<div style="display: flex; flex: 1 1 auto;">
			<div class="img-square-wrapper">
				<img style="opacity: 0.5;" src="<?php echo base_url()?>assets/images/software-cover.jpg" />
			</div>

			<div class="card-body">
				<h2 class="text-dark display-4">Register Us</h2>
				<hr/>

				<?php echo form_open('users/createUser'); ?>

				<div class="form-group-sm mb-2">
					<label  class="mb-0" for="first_name">First Name</label>
					<input type="text" class="form-control form-control-sm" name="first_name" placeholder="First Name">
					<span class="text-danger"><?php echo form_error('first_name'); ?></span>
				</div>
				<div class="form-group-sm mb-2">
					<label  class="mb-0" for="last_name">Last Name</label>
					<input type="text" class="form-control form-control-sm" name="last_name" placeholder="Last Name">
					<span class="text-danger"><?php echo form_error('last_name'); ?></span>
				</div>
				<div class="form-group-sm mb-2">
					<label  class="mb-0" for="phone">Phone</label>
					<input type="text" class="form-control form-control-sm" name="phone" placeholder="Mobile Number">
					<span class="text-danger"><?php echo form_error('phone'); ?></span>
				</div>
				<div class="form-group-sm mb-2">
					<label  class="mb-0" for="email">Email</label>
					<input type="text" class="form-control form-control-sm" name="email" placeholder="Email">
					<span class="text-danger"><?php echo form_error('email'); ?></span>
				</div>
				<div class="form-group-sm mb-2">
					<label  class="mb-0" for="address">Address</label>
					<input type="text" class="form-control form-control-sm" name="address" placeholder="Address">
					<span class="text-danger"><?php echo form_error('address'); ?></span>
				</div>
				<div class="form-group-sm mb-2">
					<label  class="mb-0" for="password">Password</label>
					<input type="text" class="form-control form-control-sm" name="password" placeholder="Password">
					<span class="text-danger"><?php echo form_error('password'); ?></span>
				</div>

				<a href="<?php echo base_url() ?>login ">Already have an account? Sign In</a>
				<div>
					<button type="submit" class="btn btn-outline-primary float-right mt-5">Create Account</button>
				</div>

				<?php echo form_close(); ?>

			</div>
		</div>
	</div>

</div>
