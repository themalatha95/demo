<?php
$data[ 'title' ] = '';
$data[ 'description' ] = 'Highzeal offers best Digital Marketing, Website Design and Development services for Small Businesses at an affordable price. Get a quote today!';
$this->load->view( 'templates/header', $data );
?>
  <div class="pagetitle">
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="profile.html">Account Settings</a></li>
        <li class="breadcrumb-item active"> 
Change Password</li>
      </ol>
    </nav>
  </div>
<section><div class="row">
	<div class="col-md-8">
		<div class="card">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">

                    <div class="row">
                      <div class="col-md-4">

                        <div class="mb-3">
                          <label for="" class="form-label text-4 text-secondary">Old password</label>
                          <input type="email" class="form-control" id="" placeholder="Current Password">
                        </div>
                        

                      </div>
                      <!-- <div class="p-2 flex-fill"></div>
                      <div class="p-2 flex-fill"></div> -->
                    </div>

                  </li>
                  <li class="list-group-item">

                    <div class="row">
                      <div class="col-md-6">

                        <div class="mb-3">
                          <span><label for="" class="form-label text-4 text-secondary">New password</label>
                          <input type="email" class="form-control w-50 d-flex" id="" placeholder="New Password">
                        </span></div>

                      </div>
                      <div class="col-md-6">
                        

                        <div class="mb-3">
                          <label for="" class="form-label text-4 text-secondary">Confirm new password</label>
							<div class="d-flex align-items-center">
                          <input type="email" class="form-control w-50 " id="" placeholder="New Password again"><a href="" class="text-4 text-secondary-500 ms-2">show</a></div>
                        </div>


                      </div>
                   
                    </div>

                  </li>
                </ul>
              </div>
	
              
                <div class="text-center"><button class="btn btn-light border-dark disabled" type="button">Save Password</button></div>
               
           
	</div>
	<div class="col-md-4"><div class="card border-none p-2" style=" background-color: #ffffe8;border-color: #d8d8d8;border-radius: 4px;">
                <ul class="list-unstyled list">
                  <li class="text-6 text-secondary text-regular"><i class="bi bi-check-circle-fill"></i> Password should contain minimum of 4characters</li>
                  <li class="text-6 text-secondary text-regular"><i class="bi bi-check-circle-fill"></i> Password should contain minimum of 50 characters</li>
                  <li class="text-6 text-secondary text-regular"><i class="bi bi-check-circle-fill"></i> Password should contain at least one of the following special characters &amp;,*,(,),$,%,^,#,@.</li>
                </ul>
              </div></div>
	</div></section>
<?php
$this->load->view( 'templates/footer' );
?>
