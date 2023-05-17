<?php
$data[ 'title' ] = '';
$data[ 'description' ] = 'Highzeal offers best Digital Marketing, Website Design and Development services for Small Businesses at an affordable price. Get a quote today!';
$this->load->view( 'templates/header', $data );
?>

<div class="pagetitle">
  <h1> Account Settings</h1>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-end d-flex align-items-center"> <a href="#" class="text-primary me-md-2 text-4 text-secondary-500" type="button" data-bs-toggle="modal" data-bs-target="#viewLoginHistory">View Login History</a> <a href="<?php echo base_url('change-password'); ?>" class="btn btn-primary" role="button"><i class="bi bi-gear"></i> Change Password</a> </div>
<div class="row">
  <div class="col-md-9 col-lg-7">
    <div class="card mt-5">
      <div class="card-body py-2 px-3">
        <div class="d-flex flex-wrap flex-sm-nowrap">
          <div class="px-2 "><img src="https://highzeal.com/hr/images/default-photo-large.jpg" alt="profile" class="rounded-circle img-fluid" width="52" height="52"></div>
          <div class="px-2 flex-fill"><span class="text-4 text-secondary-500 text-dark">Tammineedi Hemalatha</span>
            <p class="text-5 text-secondary text-regular">Emp ID: 10806</p>
          </div>
          <div class="px-2 flex-fill">
            <label class="text-secondary text-regular text-5">Official Birthday:</label>
            <span class="text-dark text-5 text-secondary-500">08 jul</span>
            <div class="d-block">
              <label class="text-secondary text-regular text-5">Department:</label>
              <span class="text-dark text-5 text-secondary-500">IT</span></div>
          </div>
          <div class="px-2 flex-fill">
            <label class="text-secondary text-regular text-5">Location:</label>
            <span class="text-dark text-5 text-secondary-500">Hyderabad</span>
            <div class="d-block">
              <label class="text-secondary text-regular text-5">Designation:</label>
              <span class="text-dark text-5 text-secondary-500">SEO Executive</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-10 col-lg-8">
    <div class="card">
      <div class="card-header bg-light text-3 text-secondary"> My Profile </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <div class="d-flex mb-1">
            <div class="p-2 w-100 text-4 text-secondary text-secondary-500">Profile</div>
            <div class="p-2 flex-shrink-1"><i class="bi bi-pen text-info"></i></div>
          </div>
          <div class="d-flex">
            <div class="p-2 flex-fill text-5 text-secondary text-secondary-500">Nickname</div>
            <div class="p-2 flex-fill text-5 text-secondary text-secondary-500">Wish me on</div>
            <div class="p-2 flex-fill"></div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="d-flex mb-3">
            <div class="me-auto p-2 text-4 text-secondary text-secondary-500">Timezone</div>
            <div class="p-2 mt-1 text-secondary fs-8">editing...</div>
            <div class="p-2 d-flex align-items-center gap-2"><a href="#" class="text-4 text-secondary-500">Save Changes</a> <i class="bi bi-x-circle text-secondary"></i></div>
          </div>
          <div class="p-2 mb-3 col-4">
            <label class="text-5 text-secondary text-secondary-500">Timezone</label>
            <div class="input-group">
              <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                <option selected>Select timezone</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="d-flex my-3">
            <div class="p-2 w-100 text-4 text-secondary text-secondary-500">Biography</div>
            <div class="p-2 flex-shrink-1"><i class="bi bi-pen text-info"></i></div>
          </div>
        </li>
        <li class="list-group-item">
          <div class="d-flex my-3">
            <div class="p-2 w-100 text-4 text-secondary text-secondary-500">Social Media</div>
            <div class="p-2 flex-shrink-1"><i class="bi bi-pen text-info"></i></div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="modal fade " id="viewLoginHistory" tabindex="-1" aria-labelledby="viewLoginHistoryLabel">
  <div class="modal-dialog ">
    <div class="modal-content ">
      <div class="modal-header">
        <h1 class="modal-title" id="viewLoginHistoryLabel">Login History</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-4 text-secondary text-regular">
        <div class="d-flex">
          <div class="p-2 flex-fill ">Last Login
            <p class="text-brand">26 April 2023 17:18:14</p>
          </div>
          <div class="p-2 flex-fill ">Last Login Failure
            <p class="text-brand">23 Feb 2023 10:57:12</p>
          </div>
          <div class="p-2 flex-fill ">Last Password Changed
            <p class="text-brand">20 Jul 2021 12:37:48</p>
          </div>
        </div>
        <div class="fs-8">
          <div class="card text-4 text-regular">
            <div class="card-header">
              <div class="d-flex text-secondary fs">
                <div class="p-2 flex-grow-1">Date</div>
                <div class="p-2">IP Address</div>
              </div>
            </div>
            <div class="d-flex">
              <div class="p-2 flex-grow-1 text-brand">26 Apr 2023<span class="text-secondary">16:38:54</span></div>
              <div class="p-2">61.1.166.145</div>
            </div>
            <div class="d-flex">
              <div class="p-2 flex-grow-1 text-brand">26 Apr 2023 <span class="text-secondary">16:38:54</span></div>
              <div class="p-2">103.161.31.34</div>
            </div>
            <div class="d-flex">
              <div class="p-2 flex-grow-1 text-brand">25 Apr 2023 <span class="text-secondary">16:38:54</span></div>
              <div class="p-2">103.161.31.34</div>
            </div>
            <div class="d-flex">
              <div class="p-2 flex-grow-1 text-brand">25 Apr 2023 <span class="text-secondary">16:38:54</span></div>
              <div class="p-2">103.161.31.34</div>
            </div>
            <div class="d-flex">
              <div class="p-2 flex-grow-1 text-brand">25 Apr 2023 <span class="text-secondary">16:38:54</span></div>
              <div class="p-2">103.161.31.34</div>
            </div>
          </div>
          <div class="text-center"><a href="#" class="text-4 text-secondary-500">Load 5 more...</a></div> </div>
      </div>
    </div>
  </div>
</div>
<?php
$this->load->view( 'templates/footer' );
?>
