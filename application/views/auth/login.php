<?php
if (isset($this->session->userdata['logged_in'])) {
	base_url('login');
}
?>

<div class="row mt-5">
	<div class="col-lg-8 mt-3">
		<div class="card">
			<div style="display: flex; flex: 1 1 auto;">
				<div class="img-square-wrapper">
					<img src="<?php echo base_url().'assets/images/user.jpg'?>" height="150"/>
				</div>
				<div class="card-body">
					<?php echo form_open('users/validateUser'); ?>

					<div class="form-group-sm mb-2">
						<label  class="mb-0" for="username">Username</label>
						<input type="text" class="form-control form-control-sm" name="username" placeholder="Username">
					</div>
					<div class="form-group">
						<label class="mb-0" for="password">Password</label>
						<input type="text" class="form-control form-control-sm" name="password" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-outline-primary float-right">Login</button>

				</div>

			</div>

			<?php if (isset($logout_message)) { ?>
				<div class='bg-success p-2'><?php echo $logout_message; ?></div>
			<?php } ?>

			<?php if (isset($message_display)) { ?>
				<div class='message'><?php echo $message_display; ?></div>";
			<?php } ?>

			<div class=' text-danger ml-3'>
				<?php if (isset($error_message)) {
					echo $error_message;
				}
				echo validation_errors(); ?>
			</div>
			<?php echo form_close(); ?>

		</div>
	</div>
</div>
