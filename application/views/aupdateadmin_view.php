<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Izmena Admina Page | Poljoportal.com</title>
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
			<?php $attributes = array("name" => "updateform");
			echo form_open("aupdateadmin/index/".$id, $attributes);?>
			<legend>Admin</legend>
			<div style="display:none;" class="form-group">
				<label for="id">ID</label>
				<input class="form-control" name="id"  placeholder="id" type="text" value="<?php echo set_value('id', $user[0]->id); ?>" />
				<span class="text-danger"><?php echo form_error('id'); ?></span>
			</div>		
			<div class="form-group">
				<label for="name">Ime</label>
				<input class="form-control" name="fname" placeholder="Ime" type="text" value="<?php echo set_value('fname', $user[0]->fname); ?>" />
				<span class="text-danger"><?php echo form_error('fname'); ?></span>
			</div>		
			<div class="form-group">
				<label for="name">Prezime</label>
				<input class="form-control" name="lname" placeholder="Prezime" type="text" value="<?php echo set_value('lname', $user[0]->lname); ?>" />
				<span class="text-danger"><?php echo form_error('lname'); ?></span>
			</div>		
			<div class="form-group">
				<label for="name">Email</label>
				<input class="form-control" name="email" placeholder="Email" type="text" value="<?php echo set_value('email', $user[0]->email); ?>" />
				<span class="text-danger"><?php echo form_error('email'); ?></span>
			</div>	
			<div class="form-group">
				<label for="subject">Lozinka</label>
				<input class="form-control" name="password" placeholder="Lozinka" type="password" value="<?php echo set_value('password', null); ?>" />
				<span class="text-danger"><?php echo form_error('password'); ?></span>
			</div>
			<div class="form-group">
				<label for="subject">Ponovite lozinku</label>
				<input class="form-control" name="cpassword" placeholder="Ponovite lozinku" type="password" value="<?php echo set_value('password', null); ?>" />
				<span class="text-danger"><?php echo form_error('cpassword'); ?></span>
			</div>
			<div class="form-group">
				<button name="submit" type="submit" class="btn btn-info">Izmeni</button>				
				<button name="cancel" type="reset" class="btn btn-info">Odustanite</button>
			</div>
			<?php echo form_close(); ?>
			<?php echo $this->session->flashdata('msg'); ?>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>