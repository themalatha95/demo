<?php
$this->load->view( 'templates/header' );
$last_id = '';
?>
<style>
	.header-tag
	{
		background-color: rgba(163,178,199,.15);
		
	}
	.declaration
	{
		background-color: #e9f7ff;
	}
	.p-12
	{
		padding:12px;
	}
</style>
<div class="pagetitle">
  <h1>IT Declaration</h1>
</div>
<div class="mb-3 d-flex justify-content-end flex-row gap-2">
  <div class="">
    <button type="button" class="btn btn-primary me-2 h-30 lh-16">My Tax Planner</button>
  </div>
  <div>
    <select class="form-select" aria-label="Default select example">
      <option>2023-2024</option>
      <option value="1">2022-2023</option>
    </select>
  </div>
</div>
<div class="row d-flex align-items-center justify-content-center">
  <div class="col-md-8">
    <div class="card d-inline-flex">
      <div class="card-body p-2"> <i class="bi bi-exclamation-circle text-danger"></i> <span class="text-4 text-muted text-secondary-500"> Declaration window is open till <span class="text-black ms-1">01 May 2023</span></span> </div>
    </div>
    <p class="text-3 text-black text-secondary-500 text-center">Apr 2023</p>
  </div>
  <div class="col-md-4"></div>
</div>
<div class="row">
  <div class="col-md-8">
    <div class="card">
      <ul class="list-group list-group-flush">
        <li class="list-group-item header-tag p-12">
          <div class="d-flex">
            <div class="flex-grow-1 text-secondary text-4 text-secondary-500">Section 80C(Max Limit 1.5 lakh)</div>
            <div class="text-5 text-black text-secondary-500"><span class="text-secondary text-5 text-regular">Max limit in ₹ :</span> 1,50,000.00</div>
           
          </div>
        </li>
        <li class="list-group-item declaration p-12">
          <div class="d-flex float-end text-5"> Declared amount in ₹ </div>
        </li>
        <li class="list-group-item p-12">
          <div class="d-flex ">
            <div class="flex-grow-1 text-5 text-secondary-500">80C-<span class="text-secondary text-regular text-5">Children Tuition Fees</span></div>
            <div class="text-5 text-black text-regular">75,000.00</div>
           
          </div>
        </li>
		   <li class="list-group-item p-12">
          <div class="d-flex ">
            <div class="flex-grow-1 text-5 text-secondary-500">80C-<span class="text-secondary text-regular text-5">Sukanya Samriddhi Yojana</span></div>
            <div class="text-5 text-black text-regular">75,000.00</div>
           
          </div>
        </li>
      
        <li class="list-group-item header-tag p-12">
          <div class="d-flex ">
            <div class="flex-grow-1 text-secondary text-4 text-secondary-500">House Rent Allowance</div>
           
          </div>
        </li>
        <li class="list-group-item p-12">
          <div class="d-flex ">
            <div class="flex-grow-1 text-secondary text-4 text-secondary-500">House on Rent 1</div>
            <div class="text-5 text-regular text-black">Declared amount in ₹: 99,600.00</div>
            <!-- <div class="p-2">Third flex item</div> --> 
          </div>
        </li>
        <li class="list-group-item p-12">
          <div class="row">
            <div class="col-md-6">
              <div class="d-flex">
                <div class="flex-grow-1 text-5 text-secondary text-secondary-500">From-To
                  <p class="text-4 text-black text-secondary-500">Apr 2023 - Mar 2024</p>
                </div>
              </div>
              <div class="d-flex">
                <div class="flex-grow-1 text-5 text-secondary text-secondary-500">Mounthly Rent in ₹
                  <p class="text-4 text-black text-secondary-500">₹8,300.00</p>
                </div>
              </div>
              <div class="d-flex">
                <div class="flex-grow-1 text-5 text-secondary text-secondary-500">Landlord Name
                  <p class="text-4 text-black text-secondary-500">-</p>
                </div>
              </div>
              <div class="d-flex">
                <div class="flex-grow-1 text-5 text-secondary text-secondary-500">Landlord PAN</div>
				  <p class="text-4 text-black text-secondary-500"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex">
                <div class="flex-grow-1 text-5 text-secondary text-secondary-500">Annual Rent in ₹
                  <p class="text-4 text-black text-secondary-500">₹99,600.00</p>
                </div>
              </div>
              <div class="d-flex">
                <div class="flex-grow-1 text-5 text-secondary text-secondary-500">Full Address
                  <p class="text-4 text-black text-secondary-500">Shanvitha Women's pg Hostel, durgam cheruvu,hyderabad,500081</p>
                </div>
              </div>
              <div class="d-flex">
                <div class="flex-grow-1 text-5 text-secondary text-secondary-500">Landlord Address
                  <p class="text-4 text-black text-secondary-500">-</p>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="col-md-4">
    <div class="info-well my-2">
      <div class="text-regular text-silent d-flex justify-content-between text-4 list-type"><span class="">Declaration Status : <span  class="text-success">OPEN</span></span> <a href="" class="text-bold">Hide</a> </div>
      <p class="text-5 text-secondary text-regular"> Declaration window is open  till 01 May 2023</p>
    </div>
    <div class="info-well">
      <div class="text-regular text-silent d-flex justify-content-between text-4 list-type"><span class="text-5 text-regular text-5"><i class="bi bi-exclamation-circle text-danger me-1"></i> Your IT Declaration is not yet submitted</span> </div>
      <p class="text-center my-2"><a href="<?php echo base_url('payroll/edit-form'); ?>" role="button" class="btn btn-primary px-3">Edit</a></p>
      <p class="text-5 text-secondary text-regular"> You can recieve your submission while the window is open</p>
    </div>
  </div>
</div>
</div>
</div>
</div>
<?php
$this->load->view( 'templates/footer' );
?>
