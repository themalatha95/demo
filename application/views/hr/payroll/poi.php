<?php
$data[ 'title' ] = '';
$data[ 'description' ] = 'Highzeal offers best Digital Marketing, Website Design and Development services for Small Businesses at an affordable price. Get a quote today!';
$this->load->view( 'templates/header', $data );
?>
<div class="pagetitle">
  <h1>
Proof Of Investment</h1>
</div>
<div class="mb-3 d-flex justify-content-end">
            <div class="">
              <select class="form-select" aria-label="Default select example">
          
                <option value="1" selected="">  2023-2024 </option>
                <option value="1">   2022-2023  </option>
               <option value="1">   2021-2022  </option>
             
              </select>
            </div>
          </div>
<div class="bg-white gt-well-no-border mb-5"><div class="d-flex justify-content-end"><span class="text-4 text-secondary text-regular flex-grow-1">POI Status 2023-2024 : <span  class="text-silent text-4 text-secondary-500">NOT YET RELEASED</span></span><div><a  href="#" class="text-4 text-secondary-500">Hide </a></div></div>
<div class="text-5 text-secondary text-regular">Proof of investment is an yearly process, where you have to provide necessary document as a proof for your investments. </div></div>
<div class="card align-items-center justify-content-center text-center">
            <div class="card-body"><img src="https://highzeal.com/hr/images/poi.svg" alt="empty payslip" class="img-fluid mt-5 mb-3" width="343" height="131" loading="lazy">
             
              <p class="text-4 text-silent text-secondary-500 mb-1">Sigh! POI is not yet released </p>
				<p class="text-5 text-regular text-muted">You can now seamlessly submit your investments proof here.</p>
            </div>
          </div>
  
</div>
<?php
$this->load->view( 'templates/footer' );
?>
