<html>

<head>

	<title>Test_CI3</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>

<body>

<nav class="navbar navbar-expand-sm navbar-light">
	<div class="container">
	<a class="navbar-brand" >Test_CI3</a>
	</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo base_url(); ?>"><?= $this->lang->line('home') ?></a>
				</li>

				<li class="nav-item active">
					<a class="nav-link" href="<?php echo base_url(); ?>about"><?= $this->lang->line('about') ?></a>
				</li>

				<li class="nav-item active">
					<a class="nav-link" href="<?php echo base_url(); ?>posts"><?= $this->lang->line('news') ?></a>
				</li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?= $this->lang->line('language') ?><?php echo $this->session->userdata('language');?>
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo base_url(); ?>languages/english">english</a>
						<a class="dropdown-item" href="<?php echo base_url(); ?>languages/german">german</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>
<br>

<div class="container">

