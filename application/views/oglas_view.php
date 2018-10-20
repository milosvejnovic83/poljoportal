<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Oglas | Poljoportal.com</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
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
<div class="container-fluid">
        <div class="col-lg-6 col-sm-6">
			<h4>Oglas</h4>
				<table class="table table-bordered">
                   
                    <tbody>
					<tr class="info">
                        <td>Autor: <?php echo $oname; ?></td>
					</tr>
                    </tbody>
					 <tbody>
					<tr class="warning">
                        <td>Naslov: <?php echo $otitle; ?></td>	
					</tr>
                    </tbody>
					 <tbody>
					<tr class="info">
                        <td>Lokacija: <?php echo $olocation; ?></td>	
					</tr>
                    </tbody>
					 <tbody>
					 <tr class="warning">
                        <td>Tekst oglasa: <?php echo $otext; ?></td>
					</tr>						
                    </tbody>
					
					 <tbody>
					 <tr class="info">
                    <td>Kontakt: <?php echo $onumber; ?></td>	
                    </tr>
					</tbody>
					
					 <tbody>
					 <tr class="warning">
                        <td>Datum: <?php echo $odate; ?></td>	
                    </tr>
					</tbody>
                </table>
        </div>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>