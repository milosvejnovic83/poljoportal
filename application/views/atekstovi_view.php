<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Tekstovi Page | Poljoportal.com</title>
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
	<h4>Tekstovi</h4>
	<a href="<?php echo base_url(); ?>index.php/anovitekst">Dodaj novi tekst</a>
	<?php for ($i = 0; $i < count($textlist); ++$i) { ?>
		<div class="panel panel-default"> 
		<div class="panel-heading"><h4><?php echo $textlist[$i]->title; ?></h4></a><a href="
			<?php echo base_url() . "index.php/atekstovi/deleteText/" . $textlist[$i]->id;?>">Obrisi</a><a href="
			<?php echo base_url() . "index.php/aupdatetekst/index/" . $textlist[$i]->id;?>">, Izmeni</a>
		</div>
		<div class="panel-body"><?php echo $textlist[$i]->text; ?></div>
		<div class="panel-footer">Datum: <?php echo $textlist[$i]->date; ?></div>
		</div>
	<?php } ?>
	<?php echo $pagination; ?>
</div>	  
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>