<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Signup Form | Poljoportal.com</title>
	<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
<nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/home">POLJOPORTAL</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if ($this->session->userdata('login')){ ?>
				<li><a href="<?php echo base_url(); ?>index.php/profile">Zdravo <?php echo $this->session->userdata('uname'); ?></a></li>
				<li><a href="<?php echo base_url(); ?>index.php/oglasi">Oglasi</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/home/logout">Izlogujte se</a></li>
				<?php } else { ?>
				<li><a href="<?php echo base_url(); ?>index.php/login">Ulogujte se</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/oglasi">Oglasi</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/signup">Registracija</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<?php $attributes = array("name" => "signupform");
			echo form_open("signup/index", $attributes);?>
			<legend>Registracija</legend>
			
			<div class="form-group">
				<label for="name">Ime</label>
				<input class="form-control" name="fname" placeholder="Ime" type="text" value="<?php echo set_value('fname'); ?>" />
				<span class="text-danger"><?php echo form_error('fname'); ?></span>
			</div>	
			<div class="form-group">
				<label for="name">Prezime</label>
				<input class="form-control" name="lname" placeholder="Prezime" type="text" value="<?php echo set_value('lname'); ?>" />
				<span class="text-danger"><?php echo form_error('lname'); ?></span>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control" name="email" placeholder="Email" type="text" value="<?php echo set_value('email'); ?>" />
				<span class="text-danger"><?php echo form_error('email'); ?></span>
			</div>
			<div class="form-group">
				<label for="subject">Lozinka</label>
				<input class="form-control" name="password" placeholder="Lozinka" type="password" />
				<span class="text-danger"><?php echo form_error('password'); ?></span>
			</div>
			<div class="form-group">
				<label for="subject">Ponovite lozinku</label>
				<input class="form-control" name="cpassword" placeholder="Ponovite lozinku" type="password" />
				<span class="text-danger"><?php echo form_error('cpassword'); ?></span>
			</div>
			<div class="form-group">
				<button name="submit" type="submit" class="btn btn-info">Registracija</button>
				<button name="cancel" type="reset" class="btn btn-info">Odustanite</button>
			</div>
			<?php echo form_close(); ?>
			<?php echo $this->session->flashdata('msg'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		Postojeći korisnik? <a href="<?php echo base_url(); ?>index.php/login">Ulogujte se ovde</a>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>