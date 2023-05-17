<?php
$data[ 'title' ] = '';
$data[ 'description' ] = 'Highzeal offers best Digital Marketing, Website Design and Development services for Small Businesses at an affordable price. Get a quote today!';
$this->load->view( 'templates/header', $data );
?>

<div class="pagetitle">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item fs-6"><a href="<?php echo base_url('emp-info'); ?>">Employee Information</a></li>
          <li class="breadcrumb-item active fs-6" aria-current="page">Employment Timeline</li>
        </ol>
      </nav>
</div>
      <div class="d-flex">
        <div class="flex-shrink-0">
            <img src="https://highzeal.com/hr/images/default-photo-large.jpg" alt="Profile" class="rounded-circle img-fluid" width="34" height="34">
        </div>
        <div class="flex-grow-1 ms-3 d-flex">
            <div>
         <div class="p-0">
            <span class="text-4 text-secondary-500 text-black">Tammineedi Hemalatha's Employment Timeline</span><br>
            <span class="text-4 fw-500 text-black ">Jul 2021-PRESENT</span>
         </div>
         
        
        </div>
      </div>
  </div>
  <div class="card mt-2 ">
    <div class="card-body py-2 row d-flex">
        <div class="col-2 d-flex justify-content-end">
           <span class="text-5 text-secondary-500 mt-1">PRESENT<svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-circle ms-1" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
          </svg></span>
      </div>
      <div class="col-10 p-0 mt-0">
        <span class="text-4 text-secondary-500 text-black">Selectsys Indian private Limited</span><br>
        <span class="fs-8">Jul 2021 PRESENT</span><br>
        <span><a href="#" class="text-5 fw-500">View Details</a></span>
    </div>

    </div>
  </div>


<?php
$this->load->view( 'templates/footer' );
?>
