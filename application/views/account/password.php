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
    <div class="mr-24">vroyyuru@selectsysamerica.com<i class="fa fa-check-circle-o text-success ps-4"></i></div>
    <div class="mr-24"><span>ID:</span> 9008047</div>
    <div><span>Registration date: </span> Jul 6, 2021</div>
  </div>
</div>
<div class="container">
<div> 
  
  <!-- Nav tabs -->
  <ul class="nav nav-pills" role="tablist">
    <li role="presentation"><a href="<?php echo base_url('account'); ?>">Account Info</a></li>
    <li role="presentation" class="active"><a href="#password" aria-controls="password" role="tab" data-toggle="tab">Password</a></li>
  </ul>
  
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="password">
      <div class="card">
        <div class="card-header">Change password</div>
        <div class="card-body">
          <form action="<?php echo base_url('account/password'); ?>" method="post">
            <div class="form-horizontal">
              <div class="row">
                <div class="col-md-8"> 
                  <!--
                <div class="form-group">
                  <label for="" class="col-sm-3">Current password</label>
                  <div class="col-sm-6 eye-icon">
                    <input type="password" class="form-control" name="old_password" placeholder="">
                    <i class="fa fa-eye"></i> </div>
                </div>
-->
                  <div class="form-group">
                    <label for="" class="col-sm-3">New password</label>
                    <div class="col-sm-6 eye-icon">
                      <input type="password" class="form-control" name="password" placeholder="">
                      <i class="fa fa-eye"></i> </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Change password</button>
                </div>
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
