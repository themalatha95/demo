<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $title; ?></title>
<link rel="icon" href="<?php echo base_url('images/highzeal-icon.svg'); ?>">
<link href="<?php echo base_url('cdn/bootstrap5/css/bootstrap.min.css'); ?>" rel="stylesheet">
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
.login {
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

<section class="login text-white">
  <div class="container" style="max-width:320px;">
    <p class="text-center" style="margin-bottom:30px;"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('images/highzeal-logo.svg'); ?>" alt="Highzeal" class="img-responsive center-block" style="height: 50px;"></a></p>
    <?php if ($this->session->flashdata('msg') != 'sent') { ?>
    <h1 class="h3">Reset your password</h1>
    <?php echo ($this->session->flashdata('msg')) ? '<p>'.$this->session->flashdata('msg').'</p>' : ''; ?>
    <form id="myForm" action="<?php echo base_url('forgot'); ?>" method="POST">
      <div class="form-group mb-3">
        <label class="text-white">Email</label>
        <input type="text" class="form-control" name="username" id="username" placeholder="" autocomplete="off" value="<?php echo $this->input->get('email', TRUE); ?>">
      </div>
		<div class="form-group mb-3 d-grid gap-2">
                <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block">Reset your password</button>
              </div>
   
      <p>Go back to <a href="<?php echo base_url('login'); ?>">Login</a></p>
    </form>
    <?php } else { ?>
    <h1>The reset link has been sent!</h1>
	  <p>If you don’t receive an email in the next 24 hours, please contact our support team via <a href="<?php echo base_url('contact'); ?>">contact form</a> or by email at <a href="mailto:support@highzeal.com">support@highzeal.com</a></p>
    <p><a href="<?php echo base_url('login'); ?>">Login</a></p>
    <?php } ?>
  </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js" crossorigin></script> 
<script src="<?php echo base_url('cdn/bootstrap5/js/bootstrap.bundle.min.js'); ?>"></script> 
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
				email: true,
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
				remote: "Couldn't find your Email Address"
			}
		}
	});
});
</script>
</body>
</html>
