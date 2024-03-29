<?php $this->load->view("include/include_form")	?>

<style>
	div.error{
		color: red;
	}
</style>	
<div class="container">
	<div class="row">
		<div class="col-md-6" style="margin:0 auto;">
			<?php
			if ($this->session->flashdata("success")){
				?>
				<div class="btn btn-success">
					<?php echo $this->session->flashdata("success")?>
				</div>
				<?php
			}
			?>
			<p>
				<?php
				//echo validation_errors();
				?>
			</p>
			<a href="<?php echo site_url('users/list') ?>" class="btn btn-primary pull-right">List User</a>
			<h3>User Form</h3>
			
			<?php
			echo form_open(site_url('helpers/form-submit'));
			?>
			<div class="form-group">
				<label for="txt_name">Name</label>
				<input type="text" value="<?php echo set_value('txt_name') ?>" class="form-control" name="txt_name" id="txt_name" placeholder="Enter name">
				<?php echo form_error("txt_name", "<div class='error'>", "</div>")?>
			</div>
			<div class="form-group">
				<label for="txt_email">Email:</label>
				<input type="email" value="<?php echo set_value('txt_email') ?>" class="form-control" id="email" placeholder="Enter email" name="txt_email">
				<?php echo form_error("txt_email", "<div class='error'>", "</div>")	?>
			</div>
			<div class="form-group">
				<label for="txt_phone">Phone no:</label>
				<input type="text" value="<?php echo set_value('txt_phone') ?>" class="form-control" id="txt_phone" placeholder="Enter email" name="txt_phone">
				<?php echo form_error("txt_phone", "<div class='error'>", "</div>")	?>
			</div>
			<div class="form-group">
				<label for="txt_salary">Salary:</label>
				<input type="text" value="<?php echo set_value('txt_salary') ?>" class="form-control" id="txt_salary" placeholder="Enter email" name="txt_salary">
				<?php echo form_error("txt_salary", "<div class='error'>", "</div>")	?>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
</body>

</html>
