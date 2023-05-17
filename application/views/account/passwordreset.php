<?php
$data[ 'title' ] = 'Reset Password';
$this->load->view( 'templates/header', $data );
?>
<section class="text-white">
  <div class="container">
    <form id="myForm" action="<?php echo base_url('passwordreset'); ?>" method="POST">
      <div class="form-group">
        <label>New Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="" autocomplete="off" value="">
          <input type="hidden" name="username" value="<?php echo $this->input->get( 'username', TRUE );?>">
      </div>
      <div class="form-group">
        <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block">Save</button>
      </div>
    </form>
  </div>
</section>
<?php
$this->load->view( 'templates/footer', $data );
?>
