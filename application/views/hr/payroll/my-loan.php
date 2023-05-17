<?php
$data[ 'title' ] = '';
$data[ 'description' ] = 'Highzeal offers best Digital Marketing, Website Design and Development services for Small Businesses at an affordable price. Get a quote today!';
$this->load->view( 'templates/header', $data );
?>
<div class="pagetitle">
  <h1>Loans and Advances</h1>
</div>

 <ul class="nav nav-pills mb-3 border-bottom loan" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link text-secondary-500" id="pills-myLoan-tab" data-bs-toggle="pill" data-bs-target="#pills-myLoan" type="button" role="tab" aria-controls="pills-myLoan" aria-selected="true">My Loan</a>
  </li>
  
</ul>
<div class="tab-content loan" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-myLoan" role="tabpanel" aria-labelledby="pills-myLoan-tab">
	  <div class="mt-90 d-flex flex-column align-items-center justify-content-center">
	  <img src="https://highzeal.com/hr/images/no-data.svg" alt="Profile" class="img-fluid" width="224" height="144">
	  <p class="text-base text-regular mb-1 mt-3 text-black"> Nothing to show! </p>
	<p class="text-sm text-regular mb-1"> Your loan details will show up here after approval. </p>
	  </div></div>
  
</div>
<?php
$this->load->view( 'templates/footer' );
?>
