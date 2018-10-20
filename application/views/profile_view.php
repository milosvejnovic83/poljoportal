<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Profile | Poljoportal.com</title>
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
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h4>Profil</h4>
			<td><a href="<?php $id=$this->session->userdata('uid'); echo base_url() . "index.php/updateuser/index/" . $id; ?>">Izmeni</a></td>
			<hr/>
			<p>Ime: <?php echo $uname; ?></p>
			<p>Email: <?php echo $uemail; ?></p>
		</div>
		<div class="col-md-8">
			<h4>Moji oglasi</h4>
			<a href="<?php echo base_url(); ?>index.php/novioglas">Dodaj novi oglas</a>
				<table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Autor</th>
                            <th>Naslov</th>
							<th>Lokacija</th>
							<th>Vreme</th>
							<th></th>
							<th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < count($postlist); ++$i) { ?>
                            <tr>
                                <td><?php echo ($page+$i+1); ?></td>
								<td><?php echo $postlist[$i]->fname; ?></td>
                                <td><?php echo $postlist[$i]->title; ?></td>
                                <td><?php echo $postlist[$i]->location; ?></td>
								<td><?php echo $postlist[$i]->date; ?></td>
								<td><a href="<?php echo base_url() . "index.php/oglas/post/" . $postlist[$i]->id; ?>">Detaljnije</a></td>
								<td><a href="<?php echo base_url() . "index.php/updatepost/index/" . $postlist[$i]->id; ?>">Izmeni</a></td>
								<td><a href="<?php echo base_url() . "index.php/oglasi/deletePost/" . $postlist[$i]->id; ?>">Obrisi</a></td>
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