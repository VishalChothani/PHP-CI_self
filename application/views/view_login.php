<!doctype html>
<html>
	<head>
		   
		<title>HomePage</title>
		<meta name="description" content="home page">
		<meta name="keywords" content="login using php,profile,registration">

		<link rel="stylesheet" href="<?php echo(CSS.'bootstrap.css'); ?>" type="text/css" />	<!-- Main Bootstrap CSS inclusion --> 
		<link rel="stylesheet" href="<?php echo(CSS.'bootstrap-responsive.css'); ?>" type="text/css" />	<!-- Responsive Bootsrap CSS inclusion --> 

		<link rel="stylesheet" href="<?php echo(CSS.'style.css'); ?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo(CSS.'header.css'); ?>" type="text/css" />
	
		<?php $this->load->helper('url');       
		$data['css'] = $this->config->item('css');  ?>

	</head>

	<body>
		<header>
			<h1>OOP-PHP ASSIGNMENT-1</h1>
		</header>

		<section class="container">
			<div class="span6 offset2 clearfix pull-left">
				<h3> Session Information </h3>
				<p> <?php echo "Session Id :- ".$this->session->userdata('session_id'); ?> <br/>
					<?php echo "IP Address :- ".$this->session->userdata('ip_address'); ?> <br/>
					<?php echo "User Agent :- ".$this->session->userdata('user_agent'); ?> <br/>
					<?php echo "Last Activity :- ".$this->session->userdata('last_activity'); 
				?></p>

				<p>
					<?php echo $agent;
				?></p>

				<label><a href="index.php/control_login/form">Click here</a> to register</label>
			</div>
		</section>
	</body>

</html>
