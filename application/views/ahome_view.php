<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Home Page | Poljoportal.com</title>
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
        <div class="col-lg-6 col-sm-6">
			<h4>Administratori</h4>
			<a href="<?php echo base_url(); ?>index.php/asignup">Dodaj novog administratora</a>
				<table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Ime</th>
                            <th>Prezime</th>
							<th>Email</th>
							<th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < count($adminlist); ++$i) { ?>
                            <tr>
                                <td><?php echo ($page+$i+1); ?></td>
                                <td><?php echo $adminlist[$i]->fname; ?></td>
                                <td><?php echo $adminlist[$i]->lname; ?></td>
								<td><?php echo $adminlist[$i]->email; ?></td>
								<td><?php $id = $adminlist[$i]->id; ?></td>
								<?php  if($id == 6 || $id == 7) { ?>
								<td><a href="<?php echo base_url() . "index.php/adminprofile/admin/" . $adminlist[$i]->id; ?>">Detaljnije</a></td>
								<td><a></a></td>
								<td><a></a></td>
								
								<?php } else { ?>
								<td><a href="<?php echo base_url() . "index.php/adminprofile/admin/" . $adminlist[$i]->id; ?>">Detaljnije</a></td>
								<td><a href="<?php echo base_url() . "index.php/aupdateadmin/index/" . $adminlist[$i]->id; ?>">Izmeni</a></td>
								<td><a href="<?php echo base_url() . "index.php/ahome/deleteAdmin/" . $adminlist[$i]->id; ?>">Obrisi</a></td>
								<?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>
				</table>
			<?php echo $pagination; ?>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>