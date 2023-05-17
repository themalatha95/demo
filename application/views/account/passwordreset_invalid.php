<?php
$data[ 'title' ] = 'Reset Password';
$this->load->view( 'templates/header', $data );
?>
<section>
  <div class="container">
    <h1>This reset URL is invalid.</h1>
    <p>Please check that you clicked the right link in your password reset email, and that you copied the text correctly into your browser. Consider clicking the link from an incognito window. If you're still
    <p>having trouble, try clearing your browser cache and cookies, and try again.</p>
    It's also possible that you've already reset your password using this link, or it’s been more than 24 hours since we sent the link to you. You can request another password reset <a href="<?php if($this->input->get('username', TRUE)) { echo base_url('forgot?email='.$this->input->get('username', TRUE)); } else { echo base_url('forgot'); } ?>">here</a>.
    </p>
  </div>
</section>
<?php
$this->load->view( 'templates/footer', $data );
?>
