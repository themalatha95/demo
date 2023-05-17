<?php
$data[ 'title' ] = '';
$data[ 'description' ] = 'Highzeal offers best Digital Marketing, Website Design and Development services for Small Businesses at an affordable price. Get a quote today!';
$this->load->view( 'templates/header', $data );
?>

<div class="pagetitle">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item fs-6"><a href="<?php echo base_url('payroll/income-tax-declaration'); ?>">IT Declaration</a></li>
          <li class="breadcrumb-item active fs-6" aria-current="page">Edit Form</li>
        </ol>
      </nav>
</div>
   <div class="card d-inline-flex">
      <div class="card-body p-2"> <i class="bi bi-exclamation-circle text-danger"></i> <span class="text-4 text-muted text-secondary-500"> Declaration window is open till <span class="text-black ms-1">01 May 2023</span></span> </div>
    </div>
<div class="mb-3 d-flex justify-content-end">
<div class="input-group">
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="">
            <span class="input-group-text" id=""><i class="bi bi-search"></i></span> </div></div>

<?php
$this->load->view( 'templates/footer' );
?>
