<head>
		<meta charset="utf-8">
		<link href="<?php echo base_url('assets/bootstrap/css/style.css');?>" rel='stylesheet' type='text/css' />
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
	
				<div class="login-form">
						<h1>Sign In</h1>
						<h2><a href="<?php echo base_url();?>page_ctr/reg_opt">Create Account</a></h2>
				<form action="<?php echo base_url();?>login_ctr/masuk" method="POST">
					<li>
						<input type="text" class="text" name="username" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" ><a href="#" class=" icon user"></a>
					</li>
					<li>
						<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><a href="#" class=" icon lock"></a>
					</li>
					
					 <div class ="forgot">
						<input type="submit" onclick="myFunction()" value="Sign In" > <a href="#" class=" icon arrow"></a>              
					</div>
				</form>
			</div>
</body>