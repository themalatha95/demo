<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sign Up - Highzeal</title>
<link rel="icon" href="<?php echo base_url('images/highzeal-icon.svg'); ?>">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --> 
<!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]--> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<!-- Google Tag Manager --> 
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NVS586V');</script> 
<!-- End Google Tag Manager -->
<style>
.signup {
    display: flex;
    align-items: center;
    min-height: 100vh;
}
</style>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NVS586V"
height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<section class="signup">
  <div class="container" style="max-width:320px;">
    <p class="text-center" style="margin-bottom:30px;"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('images/highzeal-logo.svg'); ?>" alt="Highzeal" class="img-responsive center-block"></a></p>
    <h1 class="h3" style="margin-bottom: 30px;">Sign Up</h1>
    <?php echo ($this->session->flashdata('msg')) ? '<p>'.$this->session->flashdata('msg').'</p>' : ''; ?>
    <form id="myForm" action="<?php echo base_url('signup'); ?>" method="POST">
      <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" id="email" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" id="password" autocomplete="off">
      </div>
      <div class="checkbox small">
        <label>
          <input type="checkbox" name="email_subscription" checked value="1">
          Send me occasional product updates, announcements, and offers. </label>
      </div>
      <div id="alert"></div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Create account</button>
      </div>
      <p class="text-center">Already have an account? <a href="<?php echo base_url('login'); ?>">Login</a></p>
      <p class="help-block small text-center">By creating your account, you agree to the <a href="<?php echo base_url(); ?>terms">Terms of Service</a> and <a href="<?php echo base_url(); ?>privacy">Privacy Policy</a></p>
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
			email: {
				required: true,
				email: true,
				remote: {
					type: 'POST',
					url: '<?php echo base_url('check_username_availability'); ?>'
				}
			},
			password: {
				required: true,
			}
		},
		messages: {
			email: {
				remote: "Email is invalid or already taken"
			}
		}
	});
});
</script>
</body>
</html>
