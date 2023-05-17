<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Log In - Highzeal</title>
<meta name="Description" content="">
<link rel="icon" href="https://highzeal.com/images/highzeal-icon.svg">
<link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --> 
<!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]--> 
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js" crossorigin></script> 
<script src="<?php echo base_url('js/bootstrap.bundle.min.js'); ?>"></script>
<style>
.login {
    display: flex;
    align-items: center;
    min-height: 100vh;
}
.btn-primary {
    height: 38px;
}
</style>
</head>
<body>
<section class="login">
  <div class="container" style="max-width:320px;">
    <p class="text-center" style="margin-bottom:30px;"><a href="<?php echo base_url(); ?>"><img src="https://highzeal.com/images/highzeal-logo.svg" alt="Highzeal" class="img-responsive center-block" style="height: 50px;"></a></p>
    <h1 class="h3" style="margin-bottom: 30px;">Log In</h1>
    <?php echo ($this->session->flashdata('msg')) ? '<p>'.$this->session->flashdata('msg').'</p>' : ''; ?>
    <form id="myForm" action="<?php echo base_url('login'); ?>" method="POST">
      <div class="mb-3">
        <label clas="form-label">Email</label>
        <input type="text" class="form-control" name="username" id="username" placeholder="" autocomplete="off">
      </div>
      <div class="mb-3">
        <label clas="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="" autocomplete="off">
      </div>
      <!-- <div class="form-group text-right"><a href="forgot">Forgot your password?</a></div>-->
      <div id="alert"></div>
      <div class="d-grid mx-auto">
        <button type="submit" name="submit" id="submit" class="btn btn-primary">Log In</button>
      </div>
      
      <!--<p class="text-center" style="margin-top:30px; margin-bottom:30px;">Don't have a Highzeal account? <a href="<?php echo base_url('signup'); ?>">Sign up</a></p>-->
    </form>
  </div>
</section>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script> 
<script>
$(document).ready(function(){
	$.validator.setDefaults({
		highlight: function(element) {
			$(element).closest('.form-group').addClass('has-error');
		},
		unhighlight: function(element) {
			$(element).closest('.form-group').removeClass('has-error');
		},
		errorElement: 'span',
		errorClass: 'help-block',
		errorPlacement: function(error, element) {
			if(element.parent('.input-group').length) {
				error.insertAfter(element.parent());
			} else {
				error.insertAfter(element);
			}
		}
	});
	$('#myForm').validate({
		rules: {
			username: {
				required: true,
				remote: {
					type: 'POST',
					url: '<?php echo base_url('check_username'); ?>'
				}
			},
			password: {
				required: true
			}
		},
		messages: {
			username: {
				remote: "Couldn't find your Account"
			}
		}
	});
});
</script>
</body>
</html>
