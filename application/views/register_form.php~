<!doctype html>
<html>
	<head>
		   
		<title>Register Form</title>
		<meta name="description" content="register page">
		<meta name="keywords" content="login using php,profile,registration">

		<link rel="stylesheet" href="<?php echo(CSS.'bootstrap.css'); ?>" type="text/css" />	<!-- Main Bootstrap CSS inclusion --> 
		<link rel="stylesheet" href="<?php echo(CSS.'bootstrap-responsive.css'); ?>" type="text/css" />	<!-- Responsive Bootsrap CSS inclusion --> 

		<link rel="stylesheet" href="<?php echo(CSS.'style.css'); ?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo(CSS.'header.css'); ?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo(CSS.'error.css'); ?>" type="text/css" />
	
		<?php $this->load->helper('url');       
		$data['css'] = $this->config->item('css');  ?>

	</head>

	<body>
		<header>
			<h1>OOP-PHP ASSIGNMENT-1</h1>
		</header>

		<section class="container">
			<div class="span6 offset2 clearfix pull-left">

				<h3> Register </h3>

				<?php echo form_open_multipart('control_login/do_upload');?>
					<div class="clear-left pull-left">
						<p class="clear-left pull-left"> 
							<label>Name:</label>
							<input id="username" name="username" type="text" placeholder="User Name" value="<?php echo set_value('username'); ?>"/> 
						</p>
						<label id="php_username_error" class="clear-left pull-left"><?php echo form_error('username'); ?></label>
					</div>

					<div class="clear-left pull-left">
						<p class="clear-left pull-left"> 
							<label>Password:</label>
							<input id="password" name ="password" type="password" placeholder="Password" value="<?php echo set_value('password'); ?>"/> 
						</p>
						<label id="php_pass_error" class="clear-left pull-left"><?php echo form_error('password'); ?></label>
					</div>

					<div class="clear-left pull-left">
						<p class="clear-left pull-left"> 
							<label>Email:</label>
							<input id="email" type = "text" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>" /> 
							
							
						</p>
						<label id="php_email_error" class="clear-left pull-left"><?php echo form_error('email'); ?></label>
					</div>

					<p class="clear-left pull-left"> 
						<label>Upload Photo:</label>
						<input type="file" name="userfile" value="upload" size="21" />
						<label id="file_error"></label>
					</p>

					<p class="clear-left pull-left"> 
						<label>Date Of Birth</label>
						<select id="birthDay2" class="pull-left" name="birthDay"> 
							<option><?php echo date("d"); ?></option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select> 
						<select id="birthMonth2" class="pull-left" name="birthMonth">
							<option><?php echo date("F"); ?></option>
							<option label="January" value="1">January</option>
							<option label="February" value="2">February</option>
							<option label="March" value="3">March</option>
							<option label="April" value="4">April</option>
							<option label="May" value="5">May</option>
							<option label="June" value="6">June</option>
							<option label="July" value="7">July</option>
							<option label="August" value="8">August</option>
							<option label="September" value="9">September</option>
							<option label="October" value="10">October</option>
							<option label="November" value="11">November</option>
							<option label="December" value="12">December</option>
						</select> 
						
						<select id="birthYear2" class="pull-left" name="birthYear"> 
							<option><?php echo date("o"); ?></option>
							<option label="2012" value="2012">2012</option>
							<option label="2011" value="2011">2011</option>
							<option label="2010" value="2010">2010</option>
							<option label="2009" value="2009">2009</option>
							<option label="2008" value="2008">2008</option>
							<option label="2007" value="2007">2007</option>
							<option label="2006" value="2006">2006</option>
							<option label="2005" value="2005">2005</option>
							<option label="2004" value="2004">2004</option>
							<option label="2003" value="2003">2003</option>
							<option label="2002" value="2002">2002</option>
							<option label="2001" value="2001">2001</option>
							<option label="2000" value="2000">2000</option>
							<option label="1999" value="1999">1999</option>
							<option label="1998" value="1998">1998</option>
						</select> 
					</p>

					<div class="clear-left pull-left">
						<input type="submit" class="btn submit_btn clear-left pull-left" name="upload" id="reg-user" value="upload"/>
					</div>

					<div class="clear-left pull-left">
						<label id="pass_success">You have successfully Updated your Password</label>
						<label id="pass_unsuccess">Failed to Update</label>
					</div>
				</form>
			</div>
		</section>
	</body>

</html>
