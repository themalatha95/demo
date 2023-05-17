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
          <button type="button" class="btn btn-outline-primary rounded-0 px-4 rounded-start active border-end-0" id="pills-payslip-tab" data-bs-toggle="pill" data-bs-target="#pills-payslip" role="tab" aria-controls="pills-payslip" aria-selected="false" style="border-top-left-radius: 8px;">Payslip</button>
        </li>
        <li class="nav-item" role="presentation">
          <button type="button" class="btn btn-outline-primary rounded-0 px-2 border-end-0" id="pills-ctc-payslip-tab" data-bs-toggle="pill" data-bs-target="#pills-ctc-payslip" role="tab" aria-controls="pills-ctc-payslip" aria-selected="false">CTC Payslip </button>
        </li>
        <li class="nav-item" role="presentation">
          <button type="button" class="btn btn-outline-primary rounded-0 px-2 rounded-end" id="pills-reimbursement-payslip-tab" data-bs-toggle="pill" data-bs-target="#pills-reimbursement-payslip" role="tab" aria-controls="pills-reimbursement-payslip" aria-selected="true">Reimb. Payslip </button>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContentLeave">
        <div class="tab-pane fade  active show" id="pills-payslip" role="tabpanel" aria-labelledby="pills-payslip-tab">
          <div class="mb-3 d-flex justify-content-end">
            <div class="d-flex">
              <button type="button" class="btn btn-primary me-2 px-4 h-30 lh-16"><i class="bi bi-arrow-down-square"></i></button>
              <select class="form-select" aria-label="Default select example">
                <option>Open this select menu</option>
                <option value="1">Jan 2023</option>
                <option value="1">Feb 2023</option>
                <option value="1">Mar 2023</option>
                <option selected="">Apr 2023</option>
                <option value="1">May 2023</option>
                <option value="1">Jun 2023</option>
              </select>
            </div>
          </div>
          <div class="row py-5">
            <div class="col-md-8 col-lg-8">
              <div class="row">
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-header text-4 rounded-0 border-bottom-0"> <span>Earnings</span> </div>
                    <div class="card-body p-0 amount-types">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item amount-detail text-muted text-end text-4 text-bold p-0"><span>Amount in (₹)</span></li>
                        <li class="list-group-item border-0 d-flex justify-content-between text-4 list-type"><span>BASIC</span><span>27,950.00</span> </li>
                        <li class="list-group-item border-0 d-flex justify-content-between text-4 list-type"><span>HRA</span><span>13,975.00</span> </li>
                        <li class="list-group-item border-0 d-flex justify-content-between text-4 list-type"><span>OTHER ALLOWANCE</span><span>4,658.00</span> </li>
                        <li class="list-group-item border-0 d-flex justify-content-between text-4 list-type"><span>OTHER EARNINGS</span><span>13,524.10</span> </li>
                        <li class="list-group-item border-0 d-flex justify-content-between text-4 list-type"><span>ARREARS</span><span>1,288.01</span> </li>
                        <li class="list-group-item border-0 d-flex justify-content-between text-4 list-type"><span>Mobile or Internet Exp Reimbursement</span><span>709.00</span> </li>
                      </ul>
                    </div>
                    <div class="list-group-item border-0 d-flex justify-content-between text-4 list-type total p-10"><span>Total</span> <span>62,104.11</span> </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card h-359">
                    <div class="card-header text-4 rounded-0 border-bottom-0"> <span>Deductions</span> </div>
                    <div class="card-body p-0 amount-types">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item amount-detail text-muted text-end text-4 text-bold p-0"><span>Amount in (₹)</span></li>
                        <li class="list-group-item border-0 d-flex justify-content-between text-4 list-type"><span>PF</span><span>1,800.00</span> </li>
                        <li class="list-group-item border-0 d-flex justify-content-between text-4 list-type"><span>PROF TAX</span><span>200.00</span> </li>
                        <li class="list-group-item border-0 d-flex justify-content-between text-4 list-type"><span>EMPLOYER PF DEDUCTION</span><span>1,800.00</span> </li>
                      </ul>
                    </div>
                    <div class="list-group-item border-0 d-flex justify-content-between text-4 list-type total mt-auto p-10"><span>Total</span> <span>3,800.00</span> </div>
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
                      <span class="text-4 text-regular d-block"> 10806 </span></div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-block">
                      <label class="text-secondary text-regular text-5">Name</label>
                      <span class="text-4 text-regular d-block"> Tammineedi Hemalatha </span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="info-block">
                      <label class="text-secondary text-regular text-5">Bank</label>
                      <span class="text-4 text-regular d-block"> AXIS Bank </span></div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-block">
                      <label class="text-secondary text-regular text-5"> Bank Account No</label>
                      <span class="text-4 text-regular d-block"> 921010051494426 </span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="info-block">
                      <label class="text-secondary text-regular text-5">Joining Date</label>
                      <span class="text-4 text-regular d-block"> 19 Jul 2021 </span></div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-block">
                      <label class="text-secondary text-regular text-5">PF No</label>
                      <span class="text-4 text-regular d-block"> </span></div>
                  </div>
                </div>
              </div>
              <div class="bg-white">
                <div class="text-4 net-pay-words text-regular mb-2">Net Pay for Mar 2023 </div>
                <div class="text-3 highlight-success">₹58,304.11</div>
                <div class="text-5 text-secondary text-regular" style="margin-top: 10px;">Rupees Fifty Eight Thousand Three Hundred Four and Eleven Paise Only</div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-ctc-payslip" role="tabpanel" aria-labelledby="pills-ctc-payslip-tab">
          <div class="mb-3 d-flex justify-content-end">
            <div class="d-flex">
              <button type="button" class="btn btn-primary me-2 px-4"><i class="bi bi-arrow-down-square"></i></button>
              <select class="form-select" aria-label="Default select example">
                <option>Open this select menu</option>
                <option value="1">Jan 2023</option>
                <option value="1">Feb 2023</option>
                <option value="1">Mar 2023</option>
                <option selected="">Apr 2023</option>
                <option value="1">May 2023</option>
                <option value="1">Jun 2023</option>
              </select>
            </div>
          </div>
          <div class="row py-5">
            <div class="col-md-8 col-lg-8">
              <div class="card">
                <div class="card-header text-4 rounded-0 border-bottom-0"> <span>Items</span> </div>
                <div class="card-body p-0 amount-types">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item amount-detail text-muted text-end text-4 text-bold p-0"><span>Amount in (₹)</span></li>
                    <li class="list-group-item border-0 d-flex justify-content-between text-4 list-type"><span>FULL BASIC</span><span>27,950.00</span> </li>
                    <li class="list-group-item border-0 d-flex justify-content-between text-4 list-type"><span>FULL HRA</span><span>13,975.00</span> </li>
                    <li class="list-group-item border-0 d-flex justify-content-between text-4 list-type"><span>FULL OTHER ALLOWANCE</span><span>4,658.00</span> </li>
                    <li class="list-group-item border-0 d-flex justify-content-between text-4 list-type"><span>FULL EMPLOYER PF</span><span>1,800.00</span> </li>
                  </ul>
                </div>
                <div class="list-group-item border-0 d-flex justify-content-between text-4 list-type total p-10"><span>Total</span> <span>48,383.00</span> </div>
              </div>
            </div>
            <div class="col-md-4 col-lg-4">
              <div class="info-well">
                <div class="text-regular text-silent d-flex justify-content-between text-4 list-type"><span class="">Employee details</span> <a href="" class="text-bold">Hide</a> </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="info-block">
                      <label class="text-secondary text-regular text-5">Employee No</label>
                      <span class="text-4 text-regular d-block"> 10806 </span></div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-block">
                      <label class="text-secondary text-regular text-5">Name</label>
                      <span class="text-4 text-regular d-block"> Tammineedi Hemalatha </span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="info-block">
                      <label class="text-secondary text-regular text-5">Bank</label>
                      <span class="text-4 text-regular d-block"> AXIS Bank </span></div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-block">
                      <label class="text-secondary text-regular text-5"> Bank Account No</label>
                      <span class="text-4 text-regular d-block"> 921010051494426 </span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="info-block">
                      <label class="text-secondary text-regular text-5">Joining Date</label>
                      <span class="text-4 text-regular d-block"> 19 Jul 2021 </span></div>
                  </div>
                  <div class="col-md-6">
                    <div class="info-block">
                      <label class="text-secondary text-regular text-5">PF No</label>
                      <span class="text-4 text-regular d-block"> </span></div>
                  </div>
                </div>
              </div>
              <div class="bg-white">
                <div class="text-4 net-pay-words text-regular mb-2">Net Pay for Mar 2023 </div>
                <div class="text-3 highlight-success">₹48,383.00</div>
                <div class="text-5 text-secondary text-regular" style="margin-top: 10px;">Rupees Fifty Eight Thousand Three Hundred Four and Eleven Paise Only</div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade justify-content-around" id="pills-reimbursement-payslip" role="tabpanel" aria-labelledby="pills-reimbursement-payslip-tab">
          <div class="mb-3 d-flex justify-content-end">
            <div class="">
              <select class="form-select" aria-label="Default select example">
                <option>Open this select menu</option>
                <option value="1">Jan 2023</option>
                <option value="1">Feb 2023</option>
                <option value="1">Mar 2023</option>
                <option selected="">Apr 2023</option>
                <option value="1">May 2023</option>
                <option value="1">Jun 2023</option>
              </select>
            </div>
          </div>
          <div class="card align-items-center justify-content-center text-center">
            <div class="card-body"><img src="https://highzeal.com/hr/images/empty-payslip-state.svg" alt="empty payslip" class="img-fluid mt-5" width="180" height="122" loading="lazy">
              <p  class="text-bold text-muted text-4 mt-4">It’s lonely here !</p>
              <p class="text-5"> Looks like your payslip has not been generated yet. Drop by later and <br>
                we'll have it ready for you </p>
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
