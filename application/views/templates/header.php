<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title ?></title>
		
    	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css">
		<!--<script> javascript </script> -->
	</head>
	<body>
	
		<nav id="navmenu">

		</nav>

			<!-- Menu -->
			<div id="login-form">
				<?php echo form_open(base_url() . 'logincontroller/login'); ?>
					<!-- Login --> 
					<div id="login">
						<table>
							<tr>
								<td> Login: </td>
								<td> </td>
								<td> <?php echo form_input(array('name' => 'email', 'id' => 'email', 'value' => '', 'placeholder' => 'E-mail', 'required' => '')); ?> </td>
								<td> </td>
								<td> <?php echo form_password(array('name' => 'password', 'id' => 'password', 'value' => '', 'placeholder' => 'Wachtwoord', 'required' => '')); ?></td>
							</tr>
						</table> 
					</div>
				<?php echo form_submit('submit', 'Submit'); ?>
				<?php echo form_close(); ?>
			</div>
