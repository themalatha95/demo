<?php
$data[ 'title' ] = 'My Account';
$this->load->view( 'templates/admin/header', $data );
?>
<style>
.page-title h2 {
    font-size: 20px;
    font-weight: 600;
    line-height: 24px;
}
.my-8 {
    margin: 8px 0;
}
.info {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    font-size: 14px;
    font-weight: 400;
    line-height: 20px;
}
.ps-4 {
    padding-left: 4px;
}
.mr-24 {
    margin-right: 24px;
}
.nav-pills {
    margin-top: 5px;
    border-bottom: 1px solid #c4c7cf;
    margin-bottom: 16px;
	padding-bottom: 8px;
}
.nav>li>a:focus, .nav>li>a:hover {
    background-color: transparent;
}
.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    color: #191b23;
    background-color: transparent;
    font-weight: 500;
    border-bottom: 2px solid #fe6666;
    border-radius: 0;
}
.nav>li>a {
    color: #191b23;
    font-weight: 500;
   padding: 8px 15px;
}
.panel-default>.panel-heading {
    background-color: #fff;
    font-size: 16px;
    font-weight: 700;
}
.panel-body {
    padding: 20px;
}
.eye-icon {
    position: relative;
}
.eye-icon i {
    position: absolute;
    right: 25px;
    bottom: 12px;
}
</style>
<div class="container page-title">
  <nav class="my-8">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url('app/dashboard'); ?>">Dashboard </a></li>
      <li class="breadcrumb-item active">Profile Settings</li>
    </ol>
  </nav>
  <h2 class="my-8">Profile settings</h2>
  <div class="d-flex info my-8">
    <div class="mr-24"><?php echo $user->email; ?><i class="fa fa-check-circle-o text-success ps-4"></i></div>
    <div class="mr-24"><span>ID:</span> <?php echo $user->id; ?></div>
    <div><span>Registration date: </span> <?php echo date('M d, Y', strtotime($user->created_date)); ?></div>
  </div>
</div>
<div class="container">
<div> 
  
  <!-- Nav tabs -->
  <ul class="nav nav-pills" role="tablist">
    <li role="presentation" class="active"><a href="#account-info" aria-controls="account-info" role="tab" data-toggle="tab">Account Info</a></li>
    <li role="presentation"><a href="<?php echo base_url('account/password'); ?>">Password</a></li>
  </ul>
  
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="account-info">
      <div class="card">
        <div class="card-header">Account Info</div>
        <div class="card-body">
          <form action="<?php echo base_url('account'); ?>" method="post">
           
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="" class="col-sm-2">First name</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="firstname" placeholder="First name" value="<?php echo $user->firstname; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-2">Last name</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="lastname" placeholder="Last name" value="<?php  echo $user->lastname; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-2">Phone</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="phone" placeholder="Phone" value="<?php echo $user->phone; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-2">Company</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="company" placeholder="Company" value="<?php echo $user->company; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-2">Country</label>
                    <div class="col-sm-6">
                      <select class="form-control" name="country">
                        <?php
                        foreach ( $countries as $country ) {
                          if ( $country->name == $user->country ) {
                            $selected = 'selected';
                          } else {
                            $selected = '';
                          }
                          echo '<option value="' . $country->name . '" ' . $selected . '>' . $country->name . '</option>';
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="" class="col-sm-2">Time zone</label>
                    <div class="col-sm-6">
                      <select class="form-control" name="time_zone">
                        <?php
                        foreach ( $timezones as $timezone ) {
                          if ( $timezone->name == $user->time_zone ) {
                            $selected = 'selected';
                          } else {
                            $selected = '';
                          }
                          echo '<option value="' . $timezone->name . '" ' . $selected . '>' . $timezone->name . '</option>';
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                  <div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    <a href="#" class="btn btn-outline-primary">Cancel</a> </div>
                </div>
              </div>
         
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$this->load->view( 'templates/admin/footer', $data );
?>
