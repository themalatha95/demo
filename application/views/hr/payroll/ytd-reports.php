<?php
$this->load->view( 'templates/header' );
$last_id = '';
?>
  <div class="pagetitle">
    <h1>Payslips</h1>
  </div>
  <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home1" role="tabpanel" aria-labelledby="v-pills-home-tab1">
      <ul class="nav nav-pills mb-3 justify-content-center d-flex btn-group d-flex text-center" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button type="button" class="btn btn-outline-primary rounded-0 px-2 rounded-start active border-end-0" id="pills-ytd-statement-tab" data-bs-toggle="pill" data-bs-target="#pills-ytd-statement" role="tab" aria-controls="pills-ytd-statement" aria-selected="false" style="border-top-left-radius: 8px;">YTD Statement</button>
        </li>
        <li class="nav-item" role="presentation">
          <button type="button" class="btn btn-outline-primary rounded-0 px-2 rounded-end" id="pills-pf-statement-tab" data-bs-toggle="pill" data-bs-target="#pills-pf-statement" role="tab" aria-controls="pills-pf-statement" aria-selected="false">PF YTD Statement</button>
        </li>
       
      </ul>
      <div class="tab-content" id="pills-tabContentLeave">
        <div class="tab-pane fade  active show" id="pills-ytd-statement" role="tabpanel" aria-labelledby="pills-ytd-statement-tab">
         <div class="mb-3 d-flex justify-content-end">
            <div class="">
              <select class="form-select" aria-label="Default select example">
                <option>Open this select menu</option>
                <option value="1" selected> Apr 2023 - Mar 2024 </option>
                <option value="1"> Apr 2022 - Mar 2023 </option>
                <option value="1"> Apr 2021 - Mar 2022 </option>
                <option selected=""> Apr 2020 - Mar 2021 </option>
                <option value="1">Apr 2019 - Mar 2020</option>
                <option value="1">Apr 2018 - Mar 2019</option>
				  <option value="1">Apr 2017 - Mar 2018</option>
              </select>
            </div>
          </div>
          <div class="card align-items-center justify-content-center text-center">
            <div class="card-body"><img src="https://highzeal.com/hr/images/empty-payslip-state.svg" alt="empty payslip" class="img-fluid mt-5" width="180" height="122" loading="lazy">
             
              <p class="text-5"> Hi Tammineedi Hemalatha, looks like your YTD Statement has not been generated yet, Drop by later and we'll have it ready for you. </p>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-pf-statement" role="tabpanel" aria-labelledby="pills-pf-statement-tab">
          <div class="mb-3 d-flex justify-content-end">
            <div class="d-flex">
              <button type="button" class="btn btn-primary me-2 px-4"><i class="bi bi-arrow-down-square"></i></button>
              <select class="form-select" aria-label="Default select example">
                <option>Open this select menu</option>
                 <option value="1" selected> Apr 2023 - Mar 2024 </option>
                <option value="1"> Apr 2022 - Mar 2023 </option>
                <option value="1"> Apr 2021 - Mar 2022 </option>
                <option selected=""> Apr 2020 - Mar 2021 </option>
                <option value="1">Apr 2019 - Mar 2020</option>
                <option value="1">Apr 2018 - Mar 2019</option>
				  <option value="1">Apr 2017 - Mar 2018</option>
              </select>
            </div>
          </div>
			<div class="row py-5">
            <div class="col-md-8 col-lg-8">
              <div class="card">
               
                <div class="card-body p-0 amount-types">
					<div class="table-responsive">
                  <table class="table table-bordered mb-0">
              <thead>
                <tr>
                  <td colspan="4" class="text-4 text-secondary-500 text-silent ps-4">PF YTD Summary</td>
                </tr>
              </thead>
              <tbody>
                <tr class="table-primary text-5 text-secondary text-regular">
                 
                  <td colspan="2"></td> 
                  
                  <td class="ps-4">Employee Contribution</td>
                  
                  <td class="ps-4">Employer's Contribution</td>
                </tr>

                <tr class="table-primary text-5 text-secondary text-regular"> 
                  <td colspan="2"  >
                    <span class="ps-3">Month</span>
                    <span class="float-end"> Earning In</span>
                  </td>
                  <td>
                    <span class="ps-3">PF</span>
                    <span class="float-end">VPF</span>
                  </td>
                  <td>
                    <span class="ps-3">PF</span>
                    <span class="float-end">VPF</span>
                  </td>
                </tr>
                <tr class="fs-7"> 
                  <td colspan="2">
                    <span class="ps-3 text-black text-4 text-regular">Mar 2023</span>
                    <span class="float-end text-5 text-regular"> 15,000.00</span>
                  </td>
                  <td class="text-5 text-regular text-black">
                    <span class="ps-3">18,000.00</span>
                    <span class="float-end">0.00</span>
                  </td>
                  <td class="text-5 text-regular text-black">
                    <span class="ps-3">18,000.00</span>
                    <span class="float-end">0.00</span>
                  </td>
                </tr>
                <tr class="fs-7 table-secondary"> 
                  <td colspan="2">
                    <span class="ps-3 text-secondary-500 text-4 text-black">Total</span>
                    <span class="float-end text-5 text-regular text-black"> 15,000.00</span>
                  </td>
                  <td class="text-5 text-regular text-black">
                    <span class="ps-3">18,000.00</span>
                    <span class="float-end">0.00</span>
                  </td>
                  <td class="text-5 text-regular text-black">
                    <span class="ps-3">18,000.00</span>
                    <span class="float-end">0.00</span>
                  </td>
                </tr>
              </tbody>
              <thead class="">
                <tr>
                  <th scope="col" colspan="4" class="p-4"></th>
                </tr>
              </thead>
            </table>
						</div>
                </div>
               
              </div>
            </div>
            <div class="col-md-4 col-lg-4">
              <div class="info-well">
                <div class="text-regular text-silent d-flex justify-content-between text-4 list-type"><span class="">Employee details</span> <a href="" class="text-bold">Hide</a> </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="info-block">
                      <label class="text-secondary text-regular text-5">Employee No</label>
                      <span class="text-4 text-regular d-block">  </span></div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-block">
                      <label class="text-secondary text-regular text-5">Name</label>
                      <span class="text-4 text-regular d-block">  </span></div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-6">
                    <div class="info-block">
                      <label class="text-secondary text-regular text-5">Joining Date</label>
                      <span class="text-4 text-regular d-block">  </span></div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-block">
                      <label class="text-secondary text-regular text-5">PF No</label>
                      <span class="text-4 text-regular d-block"> </span></div>
                  </div>
                </div>
				  <div class="row">
                  <div class="col-md-6">
                    <div class="info-block">
                      <label class="text-secondary text-regular text-5">UAN</label>
                      <span class="text-4 text-regular d-block">  </span></div>
                  </div>
                  
                </div>
              </div>
             
            </div>
          </div>
          
        </div>
      
      </div>
    </div>
    
    <!-- Tab panes --> 
    
  </div>
<?php
$this->load->view( 'templates/footer' );
?>
