<?php
$data[ 'title' ] = '';
$data[ 'description' ] = '';
$this->load->view( 'templates/header', $data );
?>
<style>
.nav-pills .nav-link.active {
    background: #f6f9ff;
    border-left: 1px solid #fe6666;
    border-radius: 0;
}
.nav-link:hover {
    background-color: rgba(247,247,247,0.5);
}
</style>
<div class="pagetitle">
  <h1> Feeds</h1>
</div>
<div class="row">
  <div class="col-sm-2">
    <div class="card d-flex vh-100">
      <div class="card-body p-0 mt-4">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <div class="nav-link text-dark text-3" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled="" tabindex="-1">GROUPS</div>
          <a class="nav-link text-secondary active rounded-0" id="v-pills-feeds-tab" data-bs-toggle="pill" data-bs-target="#v-pills-feeds" type="button" role="tab" aria-controls="v-pills-feeds" aria-selected="true">All Feeds</a> 
			<a class="nav-link text-secondary" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false" tabindex="-1">Everyone</a>
			<a class="nav-link text-secondary" id="v-pills-events-tab" data-bs-toggle="pill" data-bs-target="#v-pills-events" type="button" role="tab" aria-controls="v-pills-events" aria-selected="false" tabindex="-1">Events</a> 
			<a class="nav-link text-secondary" id="v-pills-companyNews-tab" data-bs-toggle="pill" data-bs-target="#v-pills-companyNews" type="button" role="tab" aria-controls="v-pills-companyNews" aria-selected="false" tabindex="-1">Company News</a> 
			<a class="nav-link text-secondary" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false" tabindex="-1">Appreciations</a>
          <div> <a href="#" class="text-4 text-regular nav-link" > See more <i class="bi bi-chevron-down "></i> </a> </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-10">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade active show" id="v-pills-feeds" role="tabpanel" aria-labelledby="v-pills-feeds-tab" tabindex="0">
        <div class="card">
          <div class="card-body">
            <div class="flex flex-col">
              <h4 class="fs-20 border-start border-info ps-2 mb-0">All Feeds</h4>
              <span class="fs-8 ps-2 text-regular">Groups</span></div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
		  <div class="card">
          <div class="card-body">
            <div class="flex flex-col">
              <h4 class="fs-20 border-start border-info ps-2 mb-0">Everyone</h4>
              <span class="fs-8 ps-2 text-regular">Groups</span></div>
          </div>
        </div>
		</div>
      <div class="tab-pane fade" id="v-pills-events" role="tabpanel" aria-labelledby="v-pills-events-tab" tabindex="0">
		  <div class="card">
          <div class="card-body">
            <div class="flex flex-col">
              <h4 class="fs-20 border-start border-info ps-2 mb-0">Events</h4>
              <span class="fs-8 ps-2 text-regular">Groups</span></div>
          </div>
        </div>
		</div>
      <div class="tab-pane fade" id="v-pills-companyNews" role="tabpanel" aria-labelledby="v-pills-companyNews-tab" tabindex="0">
      <div class="card">
          <div class="card-body">
            <div class="flex flex-col">
              <h4 class="fs-20 border-start border-info ps-2 mb-0">Company News</h4>
              <span class="fs-8 ps-2 text-regular">Groups</span></div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0"><div class="card">
          <div class="card-body">
            <div class="flex flex-col">
              <h4 class="fs-20 border-start border-info ps-2 mb-0">Appreciations</h4>
              <span class="fs-8 ps-2 text-regular">Groups</span></div>
          </div>
        </div></div>
    </div>
  </div>
</div>
<?php
$this->load->view( 'templates/footer' );
?>
