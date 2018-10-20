<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Novi Tekst Page | Poljoportal.com</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/ahome">POLJOPORTAL ADMIN</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if ($this->session->userdata('admin')){ ?>
				<li><a href="<?php echo base_url(); ?>index.php/aprofile">Zdravo <?php echo $this->session->userdata('uname'); ?></a></li>
				<li><a href="<?php echo base_url(); ?>index.php/atekstovi">Tekstovi</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/aoglasi">Oglasi</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/akorisnici">Korisnici</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/ahome/logout">Izlogujte se</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/asignup">Registracija</a></li>
				<?php } ?>	
			</ul>
		</div>
	</div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 well">
			<?php $attributes = array("name" => "textform");
			echo form_open("anovitekst/index", $attributes);?>
			<legend>Tekst</legend>
			<div class="form-group">
				<label for="name">Naslov</label>
				<input class="form-control" name="title" placeholder="Naslov" type="text" value="<?php echo set_value('title'); ?>" />
				<span class="text-danger"><?php echo form_error('title'); ?></span>
			</div>	
			<div class="form-group">
				<label for="text">Tekst</label>
				<textarea class="form-control" rows="10" name="text" placeholder="Tekst" type="textarea" value="<?php echo set_value('text'); ?>"></textarea>
				<span class="text-danger"><?php echo form_error('text'); ?></span>
			</div>
			<div class="form-group">
				<button name="submit" type="submit" class="btn btn-info">Potvrdite</button>
				<button name="cancel" type="reset" class="btn btn-info">Odustanite</button>
			</div>
			<?php echo form_close(); ?>
			<?php echo $this->session->flashdata('msg'); ?>
		</div>
	</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>