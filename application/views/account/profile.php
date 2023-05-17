<?php
$data[ 'title' ] = 'My Account';
$this->load->view( 'templates/admin/header', $data );
?>
<div class="container">
    <h2>Plan</h2>
    <p>Active plan: Premium</p>
    <a href="<?php echo base_url('app/billing'); ?>" class="btn btn-primary">Manage Billing</a>
  <div class="row">
    <div class="col-sm-6">
      <h1>Profile <small>View or change profile details</small></h1>
    </div>
    <div class="col-sm-6 text-end">
      <button type="button" class="btn btn-primary" style="margin-top: 10px;">Save Changes</button>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-8">
      <div class="card">
        <div class="card-body">
       
            <fieldset>
              <legend>PROFILE DETAILS</legend>
              <div class="form-group">
                <label class="col-sm-6 control-label">Your name:</label>
                <div class="col-sm-6">
                  <input type="text" name="name" class="form-control" value="">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-6 control-label">Your email:</label>
                <div class="col-sm-6">
                  <input type="text" name="email" class="form-control" value="">
                </div>
              </div>
            </fieldset>
            <fieldset>
              <legend>PASSWORD</legend>
              <div class="form-group">
                <label class="col-sm-6 control-label">Current Password:</label>
                <div class="col-sm-6">
                  <input type="password" name="current_password" class="form-control" placeholder="Current Password">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-6 control-label">New Password:</label>
                <div class="col-sm-6">
                  <input type="password" name="new_password" class="form-control" placeholder="New Password">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-6 control-label">Confirm New Password:</label>
                <div class="col-sm-6">
                  <input type="password" name="confirm_password" class="form-control" placeholder="Confirm New Password">
                </div>
              </div>
            </fieldset>
       
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <p align="center"><strong>Vijay</strong><br>
            rainbowalways@gmail.com</p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$this->load->view( 'templates/admin/footer', $data );
?>
