<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<script src="<?php echo base_url("assets/js/jquery-1.11.3.min.js"); ?>"></script>
	<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
</head>
<body>
	<div class="container">
		
		<?php if (isset($error)): ?> 
			<p class="bg-danger">
				<?php echo $error; ?>
			</p>	
		<?php endif; ?>

		<?php echo form_open('/home/login', array('class'=> '')); ?>
			<div class="form-group">
				<label for="user">
					User:
				</label>
				<input type="text" name="user" class="form-control">
			</div>
			<div class="form-group">
				<label for="pass">Pass:</label>
				<input type="password" name="pass" class="form-control">
			</div>
			<input type="submit" value="Login!" class="btn btn-primary">
		<?php echo form_close();?>
	</div>
</body>
</html>