<?php
$this->load->view( 'templates/header' );
$last_id = '';
?>
<style>
/* Custom style */
.income-plus .accordion-button::after {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='%23333' xmlns='http://www.w3.org/2000/svg'%3e%3cpath fill-rule='evenodd' d='M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z' clip-rule='evenodd'/%3e%3c/svg%3e");
    transform: scale(.7) !important;
    margin-left: 0!important;
}
.income-plus .accordion-button:not(.collapsed)::after {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='%23333' xmlns='http://www.w3.org/2000/svg'%3e%3cpath fill-rule='evenodd' d='M0 8a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1z' clip-rule='evenodd'/%3e%3c/svg%3e");
}
.income-plus .accordion-button {
    width: 0;
    background-color: #fff;
    padding: 0;
}
.income-plus .accordion-button:not(.collapsed) {
    box-shadow: none;
}
.it-statement .accordion-header {
    padding: 13px 0px;
}
.ps-35 {
    padding-left: 35px;
}
.income-arrow::before {
    float: right !important;
    font-family: bootstrap-icons !important;
    content: "\F229";
    color: #7f8fa4!important;
    padding-right: 5px;
}
.income-arrow.collapsed:before {
    float: left !important;
    content: "\F231";
    color: #7f8fa4!important;
}
</style>
<div class="pagetitle">
  <h1>IT-Statement</h1>
</div>
<div class="row">
  <div class="col-md-12 col-lg-11">
    <div class="mb-3 d-flex justify-content-end">
      <div class="d-flex">
        <button type="button" class="btn btn-primary me-2 px-4 h-30 lh-16"><i class="bi bi-arrow-down-square"></i></button>
        <select class="form-select" aria-label="Default select example">
          <option>Open this select menu</option>
          <option value="1" selected>Jan 2023</option>
          <option value="1">Feb 2023</option>
          <option value="1">Mar 2023</option>
          <option selected="">Apr 2023</option>
          <option value="1">May 2023</option>
          <option value="1">Jun 2023</option>
        </select>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5">
      <div class="col">
        <div class="card">
          <div class="py-2 px-3 border-bottom">
            <h6 class="text-secondary text-regular text-center mb-0 text-6">TAX CACULATED AS PER</h6>
          </div>
          <div class="py-2 my-3 text-center">
            <p class="text-5 text-success text-secondary-500 mb-0"><span>OLD TAX REGIME</span></p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="py-2 px-3 border-bottom">
            <h6 class="text-secondary text-regular text-center mb-0 text-6"> NET TAX IN ₹ </h6>
          </div>
          <div class="my-3 text-center">
            <p class="fs-4 text-black text-secondary-500 mb-0"><span>0.00</span></p>
          </div>
        </div>
      </div>
		<div class="col">
        <div class="card">
          <div class="py-2 px-3 border-bottom">
            <h6 class="text-secondary text-regular text-center mb-0 text-6"> TOTAL TAX DUE IN ₹ </h6>
          </div>
          <div class="my-3 text-center">
            <p class="fs-4 text-black text-secondary-500 mb-0"><span>0.00</span></p>
          </div>
        </div>
      </div>
		<div class="col">
        <div class="card">
          <div class="py-2 px-3 border-bottom">
            <h6 class="text-secondary text-regular text-center mb-0 text-6"> TAX DEDUCTIBLE PER MONTH IN ₹ </h6>
          </div>
          <div class="my-3 text-center">
            <p class="fs-4 text-black text-secondary-500 mb-0"><span>0.00</span></p>
          </div>
        </div>
      </div>
		<div class="col">
        <div class="card">
          <div class="py-2 px-3 border-bottom">
            <h6 class="text-secondary text-regular text-center mb-0 text-6"> REMAINING MONTHS (APR 2023 ONWARDS)</h6>
          </div>
          <div class="my-3 text-center">
            <p class="fs-4 text-black text-secondary-500 mb-0"><span>0</span></p>
          </div>
        </div>
      </div>
    </div>
	  <div class="d-flex justify-content-between">
		  <div><button type="button" class="btn btn-light me-2 px-4 h-30 lh-16">Expand all</button></div>
		  <div><p class="text-secondary text-regular text-5">Value in ₹</p></div>
	  </div>
	  <div class="accordion it-statement" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <div class="d-flex justify-content-between align-items-center px-4 income-plus">
              <span class="d-flex align-items-center">
                <span class="accordion-button collapsed" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"></span> <span class="text-4 text-secondary-500 ps-35">A. Income</span></span> <span class="text-regular text-secondary text-4">₹6,50,731.00</span> </div>
          </h2>
        </div>
      </div>
	  <div class="multi-collapse collapse" id="multiCollapseExample1" style="">
        <div class="accordion-body px-0">
          <div class="table-responsive">
            <table class="table mb-0 border mt-1 bg-white">
              <thead style="background-color:#ecf5ff;color:#7f7f7f;" class="text-5 text-regular header-cell">
                <tr>
                  <td class="ps-4">Items</td>
                  <td class="text-end border-end pe-4">Total</td>
                  <td class="text-end">Apr 2022</td>
                  <td class="text-end">May 2022</td>
                  <td class="text-end">Jun 2022</td>
                  <td class="text-end">Jul 2022</td>
                  <td class="text-end">Aug 2022</td>
                  <td class="text-end">Sep 2022</td>
                  <td class="text-end">Oct 2022</td>
                  <td class="text-end">Nov 2022</td>
                  <td class="text-end">Dec 2022</td>
					<td class="text-end">Jan 2023</td>
					<td class="text-end">Feb 2023</td>
					
                </tr>
              </thead>
              <tbody><tr>
                <td colspan="13"><div class="d-flex justify-content-between align-items-center px-3 py-1"><span class="d-flex align-items-center"><a class="income-arrow show" style="font-size:14px;" data-bs-toggle="collapse" href="#monthlyIncomeExample1" role="button" aria-expanded="false" aria-controls="monthlyIncomeExample1"></a> <span class="text-4 text-secondary-500 ps-3">Monthly Income</span></span> </div></td>
              </tr>
              </tbody><tbody class="monthly-income collapse show" id="monthlyIncomeExample1" style="">
                <tr class="text-5 text-regular header-cell" style="border-color:transparent;">
                  <td class="ps-4 text-regular text-4 text-black">Basic</td>
                  <td class="text-end border-end pe-4">2,96,700.00</td>
                  <td class="text-end">21,500.00</td>
                  <td class="text-end">21,500.00</td>
                  <td class="text-end">21,500.00</td>
                  <td class="text-end">21,500.00</td>
                  <td class="text-end">21,500.00</td>
                  <td class="text-end">21,500.00</td>
                  <td class="text-end">27,950.00</td>
                  <td class="text-end">27,950.00</td>
                  <td class="text-end">27,950.00</td>
					<td class="text-end">27,950.00</td>
                  <td class="text-end">27,950.00</td>
                 
                </tr>
				   <tr class="text-5 text-regular header-cell" style="border-color:transparent;">
                  <td class="ps-4 text-regular text-4 text-black">HRA</td>
                  <td class="text-end border-end pe-4">1,48,350.00</td>
                  <td class="text-end">10,750.00</td>
                  <td class="text-end">10,750.00</td>
                  <td class="text-end">10,750.00</td>
                  <td class="text-end">10,750.00</td>
                  <td class="text-end">10,750.00</td>
                  <td class="text-end">10,750.00</td>
                  <td class="text-end">13,975.00</td>
                  <td class="text-end">13,975.00</td>
                  <td class="text-end">13,975.00</td>
					   <td class="text-end">13,975.00</td>
                  <td class="text-end">13,975.00</td>
                 
                </tr>
				   <tr class="text-5 text-regular header-cell">
                  <td class="ps-4 text-regular text-4 text-black">Other Allowance</td>
                  <td class="text-end border-end pe-4">49,446.00</td>
                  <td class="text-end">3,583.00</td>
                  <td class="text-end">3,583.00</td>
                  <td class="text-end">3,583.00</td>
                  <td class="text-end">3,583.00</td>
                  <td class="text-end">3,583.00</td>
                  <td class="text-end">3,583.00</td>
                  <td class="text-end">4,658.00</td>
                  <td class="text-end">4,658.00</td>
                  <td class="text-end">4,658.00</td>
					    <td class="text-end">4,658.00</td>
                  <td class="text-end">4,658.00</td>
                 
                </tr>
				   <tr class="text-5 text-regular header-cell border">
                  <td class="ps-4 text-regular text-4 text-black text-secondary-500">Sub Total</td>
                  <td class="text-end border-end pe-4">4,94,496.00</td>
                  <td class="text-end">35,833.00</td>
                  <td class="text-end">35,833.00</td>
                  <td class="text-end">35,833.00</td>
                  <td class="text-end">35,833.00</td>
                  <td class="text-end">35,833.00</td>
                  <td class="text-end">35,833.00</td>
                  <td class="text-end">46,583.00</td>
                  <td class="text-end">46,583.00</td>
                  <td class="text-end">46,583.00</td>
					    <td class="text-end">46,583.00</td>
                  <td class="text-end">46,583.00</td>
                 
                </tr>
              </tbody>
				<tbody><tr>
                <td colspan="13"><div class="d-flex justify-content-between align-items-center px-3 py-1"><span class="d-flex align-items-center"><a class="income-arrow show" style="font-size:14px;" data-bs-toggle="collapse" href="#adhocIncomeExample1" role="button" aria-expanded="false" aria-controls="adhocIncomeExample1"></a> <span class="text-4 text-secondary-500 ps-3">Adhoc Income</span></span> </div></td>
              </tr>
				</tbody><tbody class="monthly-income collapse show" id="adhocIncomeExample1" style="">
                <tr class="text-5 text-regular header-cell" style="border-color:transparent;">
                  <td class="ps-4 text-regular text-4 text-black">Other Earnings</td>
                  <td class="text-end border-end pe-4">2,96,700.00</td>
                  <td class="text-end">21,500.00</td>
                  <td class="text-end">21,500.00</td>
                  <td class="text-end">21,500.00</td>
                  <td class="text-end">21,500.00</td>
                  <td class="text-end">21,500.00</td>
                  <td class="text-end">21,500.00</td>
                  <td class="text-end">27,950.00</td>
                  <td class="text-end">27,950.00</td>
                  <td class="text-end">27,950.00</td>
					<td class="text-end">27,950.00</td>
                  <td class="text-end">27,950.00</td>
                 
                </tr>
				   <tr class="text-5 text-regular header-cell" style="border-color:transparent;">
                  <td class="ps-4 text-regular text-4 text-black">Arrears</td>
                  <td class="text-end border-end pe-4">1,48,350.00</td>
                  <td class="text-end">10,750.00</td>
                  <td class="text-end">10,750.00</td>
                  <td class="text-end">10,750.00</td>
                  <td class="text-end">10,750.00</td>
                  <td class="text-end">10,750.00</td>
                  <td class="text-end">10,750.00</td>
                  <td class="text-end">13,975.00</td>
                  <td class="text-end">13,975.00</td>
                  <td class="text-end">13,975.00</td>
					   <td class="text-end">13,975.00</td>
                  <td class="text-end">13,975.00</td>
                 
                </tr>
				   
				   <tr class="text-5 text-regular header-cell border">
                  <td class="ps-4 text-regular text-4 text-black text-secondary-500">Sub Total</td>
                  <td class="text-end border-end pe-4">4,94,496.00</td>
                  <td class="text-end">35,833.00</td>
                  <td class="text-end">35,833.00</td>
                  <td class="text-end">35,833.00</td>
                  <td class="text-end">35,833.00</td>
                  <td class="text-end">35,833.00</td>
                  <td class="text-end">35,833.00</td>
                  <td class="text-end">46,583.00</td>
                  <td class="text-end">46,583.00</td>
                  <td class="text-end">46,583.00</td>
					    <td class="text-end">46,583.00</td>
                  <td class="text-end">46,583.00</td>
                 
                </tr>
					 <tr class="text-5 text-regular text-secondary-500 header-cell border" style="background-color: rgba(163,178,199,.15);color: #3b4452;">
                  <td class="ps-4 text-regular text-4 text-black text-secondary-500">Total</td>
                  <td class="text-end border-end pe-4">4,94,496.00</td>
                  <td class="text-end">35,833.00</td>
                  <td class="text-end">35,833.00</td>
                  <td class="text-end">35,833.00</td>
                  <td class="text-end">35,833.00</td>
                  <td class="text-end">35,833.00</td>
                  <td class="text-end">35,833.00</td>
                  <td class="text-end">46,583.00</td>
                  <td class="text-end">46,583.00</td>
                  <td class="text-end">46,583.00</td>
					    <td class="text-end">46,583.00</td>
                  <td class="text-end">46,583.00</td>
                 
                </tr>

                

              </tbody>

              

            </table>

            


          </div>
        
          
          
        </div>

        


      </div>
	  <div class="accordion it-statement" id="accordionPanelsStayOpenExample2">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <div class="d-flex justify-content-between align-items-center px-4 income-plus">
        <span class="d-flex align-items-center">
        <span class="accordion-button collapsed" data-bs-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2"></span> <span class="text-4 text-secondary-500 ps-35">B. Deductions</span></span> <span class="text-regular text-secondary text-4">₹39,135.00</span> </div>
    </h2>
  </div>
</div>
	  <div class="multi-collapse collapse" id="multiCollapseExample2" style="">
  <div class="accordion-body px-0">
    <div class="table-responsive">
      <table class="table mb-0 border mt-1 bg-white">
        <thead style="background-color:#ecf5ff;color:#7f7f7f;" class="text-5 text-regular header-cell">
          <tr>
            <td class="ps-4">Items</td>
            <td class="text-end border-end pe-4">Total</td>
            <td class="text-end">Apr 2022</td>
            <td class="text-end">May 2022</td>
            <td class="text-end">Jun 2022</td>
            <td class="text-end">Jul 2022</td>
            <td class="text-end">Aug 2022</td>
            <td class="text-end">Sep 2022</td>
            <td class="text-end">Oct 2022</td>
            <td class="text-end">Nov 2022</td>
            <td class="text-end">Dec 2022</td>
    <td class="text-end">Jan 2023</td>
    <td class="text-end">Feb 2023</td>
    
          </tr>
        </thead>

        <tbody class="monthly-income collapse show" id="monthlyIncomeExample1" style="">
          <tr class="text-5 text-regular header-cell" style="border-color:transparent;"> 
            <td class="ps-4 text-regular text-4 text-black">PF</td>
            <td class="text-end border-end pe-4">21,600.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
    <td class="text-end">27,950.00</td>
            <td class="text-end">27,950.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell" style="border-color:transparent;">
            <td class="ps-4 text-regular text-4 text-black">prof Tax</td>
            <td class="text-end border-end pe-4">2,400.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
       <td class="text-end">13,975.00</td>
            <td class="text-end">13,975.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell">
            <td class="ps-4 text-regular text-4 text-black">Income Tax</td>
            <td class="text-end border-end pe-4">15,135.00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">5,909.00</td>
            <td class="text-end">4,498.00</td>
            <td class="text-end">4,728.00</td>
        <td class="text-end">4,658.00</td>
            <td class="text-end">4,658.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell border">
            <td class="ps-4 text-regular text-4 text-black text-secondary-500">Total</td>
            <td class="text-end border-end pe-4">39,135.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">7,909.00</td>
            <td class="text-end">6,498.00</td>
            <td class="text-end">6,728.00</td>
        <td class="text-end">46,583.00</td>
            <td class="text-end">46,583.00</td>
           
          </tr>
        </tbody>
  <tbody><tr>


          

        </tr></tbody>

        

      </table>

      


    </div>
  
    
    
  </div>

  


</div>
	  <div class="accordion it-statement" id="accordionPanelsStayOpenExample3">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <div class="d-flex justify-content-between align-items-center px-4 income-plus">
        <span class="d-flex align-items-center">
        <span class="accordion-button collapsed" data-bs-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false" aria-controls="multiCollapseExample3"></span> <span class="text-4 text-secondary-500 ps-35">C. Perquisties</span></span> <span class="text-regular text-secondary text-4">₹0.00</span> </div>
    </h2>
  </div>
</div>
	  <div class="multi-collapse collapse" id="multiCollapseExample3" style="">
  <div class="accordion-body px-0">
    <div class="table-responsive">
      <table class="table mb-0 border mt-1 bg-white">
        <thead style="background-color:#ecf5ff;color:#7f7f7f;" class="text-5 text-regular header-cell">
          
        </thead>

        <tbody class="monthly-income collapse show" id="monthlyIncomeExample3" style="">
        


     <tr class="text-5 text-regular header-cell border">
            

            <td class="text-center">No data to display </td>
           
          </tr>
        </tbody>
  <tbody><tr>


          

        </tr></tbody>

        

      </table>

      


    </div>
  
    
    
  </div>

  


</div>
	  <div class="accordion it-statement" id="accordionPanelsStayOpenExample4">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <div class="d-flex justify-content-between align-items-center px-4 income-plus">
        <span class="d-flex align-items-center">
        <span class="accordion-button collapsed" data-bs-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false" aria-controls="multiCollapseExample4"></span> <span class="text-4 text-secondary-500 ps-35">D. Income Excluded From Tax</span></span> <span class="text-regular text-secondary text-4">₹0.00</span> </div>
    </h2>
  </div>
</div>
	  <div class="multi-collapse collapse" id="multiCollapseExample4" style="">
  <div class="accordion-body px-0">
    <div class="table-responsive">
      <table class="table mb-0 border mt-1 bg-white">
        <thead style="background-color:#ecf5ff;color:#7f7f7f;" class="text-5 text-regular header-cell">
          
        </thead>

        <tbody class="monthly-income collapse show" id="monthlyIncomeExample4" style="">
        


     <tr class="text-5 text-regular header-cell border">
            

            <td class="text-center">No data to display </td>
           
          </tr>
        </tbody>
  <tbody><tr>


          

        </tr></tbody>

        

      </table>

      


    </div>
  
    
    
  </div>

  


</div>
	  <div class="accordion it-statement" id="accordionPanelsStayOpenExample5 ">
  <div class="accordion-item bg-secondary-subtle">
    <h2 class="accordion-header ">
      <div class="d-flex justify-content-between align-items-center px-4 income-plus ">
        <span class="d-flex align-items-center ">
        <span class="accordion-button collapsed " data-bs-toggle="collapse" href="#multiCollapseExample5" role="button" aria-expanded="false" aria-controls="multiCollapseExample5"></span> <span class="text-4 text-secondary-500 ps-35">E. Gross Salary(A+C-D)</span></span> <span class="text-regular text-secondary text-4 ">₹6,50,731.00</span> </div>
    </h2>
  </div>
</div>
	  <div class="accordion it-statement" id="accordionPanelsStayOpenExample6">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <div class="d-flex justify-content-between align-items-center px-4 income-plus">
        <span class="d-flex align-items-center">
        <span class="accordion-button collapsed"  data-bs-toggle="collapse" href="#multiCollapseExample6" role="button" aria-expanded="false" aria-controls="multiCollapseExample6"></span> <span class="text-4 text-secondary-500 ps-35">F.Exemption Under Section 10</span></span> <span class="text-regular text-secondary text-4">₹0.00</span> </div>
    </h2>
  </div>
</div>
<div class="multi-collapse collapse" id="multiCollapseExample6" style="">
  <div class="accordion-body px-0">
    <div class="table-responsive">
      <table class="table mb-0 border mt-1 bg-white">
        <thead style="background-color:#ecf5ff;color:#7f7f7f;" class="text-5 text-regular header-cell">
          <tr>
            <td class="ps-4">Items</td>
            <td class="text-end border-end pe-4">Total</td>
            <td class="text-end">Apr 2022</td>
            <td class="text-end">May 2022</td>
            <td class="text-end">Jun 2022</td>
            <td class="text-end">Jul 2022</td>
            <td class="text-end">Aug 2022</td>
            <td class="text-end">Sep 2022</td>
            <td class="text-end">Oct 2022</td>
            <td class="text-end">Nov 2022</td>
            <td class="text-end">Dec 2022</td>
    <td class="text-end">Jan 2023</td>
    <td class="text-end">Feb 2023</td>
    
          </tr>
        </thead>

        <tbody class="monthly-income collapse show" id="monthlyIncomeExample6" style="">
          <tr class="text-5 text-regular header-cell" style="border-color:transparent;"> 
            <td class="ps-4 text-regular text-4 text-black">PF</td>
            <td class="text-end border-end pe-4">21,600.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
    <td class="text-end">27,950.00</td>
            <td class="text-end">27,950.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell" style="border-color:transparent;">
            <td class="ps-4 text-regular text-4 text-black">prof Tax</td>
            <td class="text-end border-end pe-4">2,400.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
       <td class="text-end">13,975.00</td>
            <td class="text-end">13,975.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell">
            <td class="ps-4 text-regular text-4 text-black">Income Tax</td>
            <td class="text-end border-end pe-4">15,135.00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">5,909.00</td>
            <td class="text-end">4,498.00</td>
            <td class="text-end">4,728.00</td>
        <td class="text-end">4,658.00</td>
            <td class="text-end">4,658.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell border">
            <td class="ps-4 text-regular text-4 text-black text-secondary-500">Total</td>
            <td class="text-end border-end pe-4">39,135.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">7,909.00</td>
            <td class="text-end">6,498.00</td>
            <td class="text-end">6,728.00</td>
        <td class="text-end">46,583.00</td>
            <td class="text-end">46,583.00</td>
           
          </tr>
        </tbody>
  <tr>


          

        </tbody>

        

      </table>

      


    </div>
  
    
    
  </div>

  


</div>



<div class="accordion it-statement" id="accordionPanelsStayOpenExample7">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <div class="d-flex justify-content-between align-items-center px-4 income-plus">
        <span class="d-flex align-items-center">
        <span class="accordion-button collapsed"  data-bs-toggle="collapse" href="#multiCollapseExample7" role="button" aria-expanded="false" aria-controls="multiCollapseExample7"></span> <span class="text-4 text-secondary-500 ps-35">G.Income From Previous Employer</span></span> <span class="text-regular text-secondary text-4">₹0.00</span> </div>
    </h2>
  </div>
</div>
<div class="multi-collapse collapse" id="multiCollapseExample7" style="">
  <div class="accordion-body px-0">
    <div class="table-responsive">
      <table class="table mb-0 border mt-1 bg-white">
        <thead style="background-color:#ecf5ff;color:#7f7f7f;" class="text-5 text-regular header-cell">
          <tr>
            <td class="ps-4">Items</td>
            <td class="text-end border-end pe-4">Total</td>
            <td class="text-end">Apr 2022</td>
            <td class="text-end">May 2022</td>
            <td class="text-end">Jun 2022</td>
            <td class="text-end">Jul 2022</td>
            <td class="text-end">Aug 2022</td>
            <td class="text-end">Sep 2022</td>
            <td class="text-end">Oct 2022</td>
            <td class="text-end">Nov 2022</td>
            <td class="text-end">Dec 2022</td>
    <td class="text-end">Jan 2023</td>
    <td class="text-end">Feb 2023</td>
    
          </tr>
        </thead>

        <tbody class="monthly-income collapse show" id="monthlyIncomeExample7" style="">
          <tr class="text-5 text-regular header-cell" style="border-color:transparent;"> 
            <td class="ps-4 text-regular text-4 text-black">PF</td>
            <td class="text-end border-end pe-4">21,600.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
    <td class="text-end">27,950.00</td>
            <td class="text-end">27,950.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell" style="border-color:transparent;">
            <td class="ps-4 text-regular text-4 text-black">prof Tax</td>
            <td class="text-end border-end pe-4">2,400.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
       <td class="text-end">13,975.00</td>
            <td class="text-end">13,975.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell">
            <td class="ps-4 text-regular text-4 text-black">Income Tax</td>
            <td class="text-end border-end pe-4">15,135.00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">5,909.00</td>
            <td class="text-end">4,498.00</td>
            <td class="text-end">4,728.00</td>
        <td class="text-end">4,658.00</td>
            <td class="text-end">4,658.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell border">
            <td class="ps-4 text-regular text-4 text-black text-secondary-500">Total</td>
            <td class="text-end border-end pe-4">39,135.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">7,909.00</td>
            <td class="text-end">6,498.00</td>
            <td class="text-end">6,728.00</td>
        <td class="text-end">46,583.00</td>
            <td class="text-end">46,583.00</td>
           
          </tr>
        </tbody>
  <tr>


          

        </tbody>

        

      </table>

      


    </div>
  
    
    
  </div>

  


</div>



<div class="accordion it-statement" id="accordionPanelsStayOpenExample8">
  <div class="accordion-item bg-secondary-subtle">
    <h2 class="accordion-header ">
      <div class="d-flex justify-content-between align-items-center px-4 income-plus ">
        <span class="d-flex align-items-center ">
        <span class="accordion-button collapsed "  data-bs-toggle="collapse" href="#multiCollapseExample8" role="button" aria-expanded="false" aria-controls="multiCollapseExample5"></span> <span class="text-4 text-secondary-500 ps-35">H. Income After Exemption(E-F+G)</span></span> <span class="text-regular text-secondary text-4 ">₹6,50,731.00</span> </div>
    </h2>
  </div>
</div>



<div class="accordion it-statement" id="accordionPanelsStayOpenExample9">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <div class="d-flex justify-content-between align-items-center px-4 income-plus">
        <span class="d-flex align-items-center">
        <span class="accordion-button collapsed"  data-bs-toggle="collapse" href="#multiCollapseExample9" role="button" aria-expanded="false" aria-controls="multiCollapseExample9"></span> <span class="text-4 text-secondary-500 ps-35">I.Less Deduction undersection 16</span></span> <span class="text-regular text-secondary text-4">₹52,400.00</span> </div>
    </h2>
  </div>
</div>
<div class="multi-collapse collapse" id="multiCollapseExample9" style="">
  <div class="accordion-body px-0">
    <div class="table-responsive">
      <table class="table mb-0 border mt-1 bg-white">
        <thead style="background-color:#ecf5ff;color:#7f7f7f;" class="text-5 text-regular header-cell">
          <tr>
            <td class="ps-4">Items</td>
            <td class="text-end border-end pe-4">Total</td>
            <td class="text-end">Apr 2022</td>
            <td class="text-end">May 2022</td>
            <td class="text-end">Jun 2022</td>
            <td class="text-end">Jul 2022</td>
            <td class="text-end">Aug 2022</td>
            <td class="text-end">Sep 2022</td>
            <td class="text-end">Oct 2022</td>
            <td class="text-end">Nov 2022</td>
            <td class="text-end">Dec 2022</td>
    <td class="text-end">Jan 2023</td>
    <td class="text-end">Feb 2023</td>
    
          </tr>
        </thead>

        <tbody class="monthly-income collapse show" id="monthlyIncomeExample9" style="">
          <tr class="text-5 text-regular header-cell" style="border-color:transparent;"> 
            <td class="ps-4 text-regular text-4 text-black">PF</td>
            <td class="text-end border-end pe-4">21,600.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
    <td class="text-end">27,950.00</td>
            <td class="text-end">27,950.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell" style="border-color:transparent;">
            <td class="ps-4 text-regular text-4 text-black">prof Tax</td>
            <td class="text-end border-end pe-4">2,400.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
       <td class="text-end">13,975.00</td>
            <td class="text-end">13,975.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell">
            <td class="ps-4 text-regular text-4 text-black">Income Tax</td>
            <td class="text-end border-end pe-4">15,135.00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">5,909.00</td>
            <td class="text-end">4,498.00</td>
            <td class="text-end">4,728.00</td>
        <td class="text-end">4,658.00</td>
            <td class="text-end">4,658.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell border">
            <td class="ps-4 text-regular text-4 text-black text-secondary-500">Total</td>
            <td class="text-end border-end pe-4">39,135.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">7,909.00</td>
            <td class="text-end">6,498.00</td>
            <td class="text-end">6,728.00</td>
        <td class="text-end">46,583.00</td>
            <td class="text-end">46,583.00</td>
           
          </tr>
        </tbody>
  <tr>


          

        </tbody>

        

      </table>

      


    </div>
  
    
    
  </div>

  


</div>

<div class="accordion it-statement" id="accordionPanelsStayOpenExample10">
  <div class="accordion-item bg-secondary-subtle">
    <h2 class="accordion-header ">
      <div class="d-flex justify-content-between align-items-center px-4 income-plus ">
        <span class="d-flex align-items-center ">
        <span class="accordion-button collapsed "  data-bs-toggle="collapse" href="#multiCollapseExample10" role="button" aria-expanded="false" aria-controls="multiCollapseExample10"></span> <span class="text-4 text-secondary-500 ps-35">j. Income Chargeable Under the Head Salaries(H-I)</span></span> <span class="text-regular text-secondary text-4 ">₹5,98,331.00</span> </div>
    </h2>
  </div>
</div>


<div class="accordion it-statement" id="accordionPanelsStayOpenExample11">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <div class="d-flex justify-content-between align-items-center px-4 income-plus">
        <span class="d-flex align-items-center">
          <span class="accordion-button collapsed"  data-bs-toggle="collapse" href="#multiCollapseExample11" role="button" aria-expanded="false" aria-controls="multiCollapseExample11"></span> <span class="text-4 text-secondary-500 ps-35">K. Income From Other Sources(Including House Properties)</span></span> <span class="text-regular text-secondary text-4">₹0.00</span> </div>
    </h2>
  </div>
</div>
<div class="multi-collapse collapse" id="multiCollapseExample11" style="">
  <div class="accordion-body px-0">
    <div class="table-responsive">
      <table class="table mb-0 border mt-1 bg-white">
        <thead style="background-color:#ecf5ff;color:#7f7f7f;" class="text-5 text-regular header-cell">
          <tr>
            <td class="ps-4">Items</td>
            <td class="text-end border-end pe-4">Total</td>
            <td class="text-end">Apr 2022</td>
            <td class="text-end">May 2022</td>
            <td class="text-end">Jun 2022</td>
            <td class="text-end">Jul 2022</td>
            <td class="text-end">Aug 2022</td>
            <td class="text-end">Sep 2022</td>
            <td class="text-end">Oct 2022</td>
            <td class="text-end">Nov 2022</td>
            <td class="text-end">Dec 2022</td>
    <td class="text-end">Jan 2023</td>
    <td class="text-end">Feb 2023</td>
    
          </tr>
        </thead>
        <tr>
          <td colspan="13"><div class="d-flex justify-content-between align-items-center px-3 py-1"><span class="d-flex align-items-center"><a class="income-arrow show" style="font-size:14px;" data-bs-toggle="collapse" href="#monthlyIncomeExample1" role="button" aria-expanded="false" aria-controls="monthlyIncomeExample1"></a> <span class="text-4 text-secondary-500 ps-3">other incomes</span></span> </div></td>
        </tr>
        <tbody class="monthly-income collapse show" id="monthlyIncomeExample11" style="">
          <tr class="text-5 text-regular header-cell" style="border-color:transparent;">
            <td class="ps-4 text-regular text-4 text-black">Basic</td>
            <td class="text-end border-end pe-4">2,96,700.00</td>
            <td class="text-end">21,500.00</td>
            <td class="text-end">21,500.00</td>
            <td class="text-end">21,500.00</td>
            <td class="text-end">21,500.00</td>
            <td class="text-end">21,500.00</td>
            <td class="text-end">21,500.00</td>
            <td class="text-end">27,950.00</td>
            <td class="text-end">27,950.00</td>
            <td class="text-end">27,950.00</td>
    <td class="text-end">27,950.00</td>
            <td class="text-end">27,950.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell" style="border-color:transparent;">
            <td class="ps-4 text-regular text-4 text-black">HRA</td>
            <td class="text-end border-end pe-4">1,48,350.00</td>
            <td class="text-end">10,750.00</td>
            <td class="text-end">10,750.00</td>
            <td class="text-end">10,750.00</td>
            <td class="text-end">10,750.00</td>
            <td class="text-end">10,750.00</td>
            <td class="text-end">10,750.00</td>
            <td class="text-end">13,975.00</td>
            <td class="text-end">13,975.00</td>
            <td class="text-end">13,975.00</td>
       <td class="text-end">13,975.00</td>
            <td class="text-end">13,975.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell">
            <td class="ps-4 text-regular text-4 text-black">Other Allowance</td>
            <td class="text-end border-end pe-4">49,446.00</td>
            <td class="text-end">3,583.00</td>
            <td class="text-end">3,583.00</td>
            <td class="text-end">3,583.00</td>
            <td class="text-end">3,583.00</td>
            <td class="text-end">3,583.00</td>
            <td class="text-end">3,583.00</td>
            <td class="text-end">4,658.00</td>
            <td class="text-end">4,658.00</td>
            <td class="text-end">4,658.00</td>
        <td class="text-end">4,658.00</td>
            <td class="text-end">4,658.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell border">
            <td class="ps-4 text-regular text-4 text-black text-secondary-500">Sub Total</td>
            <td class="text-end border-end pe-4">4,94,496.00</td>
            <td class="text-end">35,833.00</td>
            <td class="text-end">35,833.00</td>
            <td class="text-end">35,833.00</td>
            <td class="text-end">35,833.00</td>
            <td class="text-end">35,833.00</td>
            <td class="text-end">35,833.00</td>
            <td class="text-end">46,583.00</td>
            <td class="text-end">46,583.00</td>
            <td class="text-end">46,583.00</td>
        <td class="text-end">46,583.00</td>
            <td class="text-end">46,583.00</td>
           
          </tr>
        </tbody>
  <tr>
          <td colspan="13"><div class="d-flex justify-content-between align-items-center px-3 py-1"><span class="d-flex align-items-center"><a class="income-arrow show" style="font-size:14px;" data-bs-toggle="collapse" href="#adhocIncomeExample1" role="button" aria-expanded="false" aria-controls="adhocIncomeExample1"></a> <span class="text-4 text-secondary-500 ps-3">Income/ loss from house properties</span></span> </div></td>
        </tr>
  <tbody class="monthly-income collapse show" id="adhocIncomeExample1" style="">
          <tr class="text-5 text-regular header-cell" style="border-color:transparent;">
            <td class="ps-4 text-regular text-4 text-black">Other Earnings</td>
            <td class="text-end border-end pe-4">2,96,700.00</td>
            <td class="text-end">21,500.00</td>
            <td class="text-end">21,500.00</td>
            <td class="text-end">21,500.00</td>
            <td class="text-end">21,500.00</td>
            <td class="text-end">21,500.00</td>
            <td class="text-end">21,500.00</td>
            <td class="text-end">27,950.00</td>
            <td class="text-end">27,950.00</td>
            <td class="text-end">27,950.00</td>
    <td class="text-end">27,950.00</td>
            <td class="text-end">27,950.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell" style="border-color:transparent;">
            <td class="ps-4 text-regular text-4 text-black">Arrears</td>
            <td class="text-end border-end pe-4">1,48,350.00</td>
            <td class="text-end">10,750.00</td>
            <td class="text-end">10,750.00</td>
            <td class="text-end">10,750.00</td>
            <td class="text-end">10,750.00</td>
            <td class="text-end">10,750.00</td>
            <td class="text-end">10,750.00</td>
            <td class="text-end">13,975.00</td>
            <td class="text-end">13,975.00</td>
            <td class="text-end">13,975.00</td>
       <td class="text-end">13,975.00</td>
            <td class="text-end">13,975.00</td>
           
          </tr>
     
     <tr class="text-5 text-regular header-cell border">
            <td class="ps-4 text-regular text-4 text-black text-secondary-500">Sub Total</td>
            <td class="text-end border-end pe-4">4,94,496.00</td>
            <td class="text-end">35,833.00</td>
            <td class="text-end">35,833.00</td>
            <td class="text-end">35,833.00</td>
            <td class="text-end">35,833.00</td>
            <td class="text-end">35,833.00</td>
            <td class="text-end">35,833.00</td>
            <td class="text-end">46,583.00</td>
            <td class="text-end">46,583.00</td>
            <td class="text-end">46,583.00</td>
        <td class="text-end">46,583.00</td>
            <td class="text-end">46,583.00</td>
           
          </tr>
     <tr class="text-5 text-regular text-secondary-500 header-cell border" style="background-color: rgba(163,178,199,.15);color: #3b4452;">
            <td class="ps-4 text-regular text-4 text-black text-secondary-500">Total</td>
            <td class="text-end border-end pe-4">4,94,496.00</td>
            <td class="text-end">35,833.00</td>
            <td class="text-end">35,833.00</td>
            <td class="text-end">35,833.00</td>
            <td class="text-end">35,833.00</td>
            <td class="text-end">35,833.00</td>
            <td class="text-end">35,833.00</td>
            <td class="text-end">46,583.00</td>
            <td class="text-end">46,583.00</td>
            <td class="text-end">46,583.00</td>
        <td class="text-end">46,583.00</td>
            <td class="text-end">46,583.00</td>
           
          </tr>

          

        </tbody>

        

      </table>

      


    </div>
  
    
    
  </div>

  


</div>



<div class="accordion it-statement" id="accordionPanelsStayOpenExample12">
  <div class="accordion-item bg-secondary-subtle">
    <h2 class="accordion-header ">
      <div class="d-flex justify-content-between align-items-center px-4 income-plus ">
        <span class="d-flex align-items-center ">
        <span class="accordion-button collapsed "  data-bs-toggle="collapse" href="#multiCollapseExample12" role="button" aria-expanded="false" aria-controls="multiCollapseExample12"></span> <span class="text-4 text-secondary-500 ps-35">L. Gross Total income(j+k)</span></span> <span class="text-regular text-secondary text-4 ">₹5,98,331.00</span> </div>
    </h2>
  </div>
</div>


<div class="accordion it-statement" id="accordionPanelsStayOpenExample13">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <div class="d-flex justify-content-between align-items-center px-4 income-plus">
        <span class="d-flex align-items-center">
        <span class="accordion-button collapsed"  data-bs-toggle="collapse" href="#multiCollapseExample13" role="button" aria-expanded="false" aria-controls="multiCollapseExample13"></span> <span class="text-4 text-secondary-500 ps-35">M.Deduction under chapter VI A</span></span> <span class="text-regular text-secondary text-4">₹1,50,000.00</span> </div>
    </h2>
  </div>
</div>
<div class="multi-collapse collapse" id="multiCollapseExample13" style="">
  <div class="accordion-body px-0">
    <div class="table-responsive">
      <table class="table mb-0 border mt-1 bg-white">
        <thead style="background-color:#ecf5ff;color:#7f7f7f;" class="text-5 text-regular header-cell">
          <tr>
            <td class="ps-4">Items</td>
            <td class="text-end border-end pe-4">Total</td>
            <td class="text-end">Apr 2022</td>
            <td class="text-end">May 2022</td>
            <td class="text-end">Jun 2022</td>
            <td class="text-end">Jul 2022</td>
            <td class="text-end">Aug 2022</td>
            <td class="text-end">Sep 2022</td>
            <td class="text-end">Oct 2022</td>
            <td class="text-end">Nov 2022</td>
            <td class="text-end">Dec 2022</td>
    <td class="text-end">Jan 2023</td>
    <td class="text-end">Feb 2023</td>
    
          </tr>
        </thead>

        <tbody class="monthly-income collapse show" id="monthlyIncomeExample9" style="">
          <tr class="text-5 text-regular header-cell" style="border-color:transparent;"> 
            <td class="ps-4 text-regular text-4 text-black">PF</td>
            <td class="text-end border-end pe-4">21,600.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
    <td class="text-end">27,950.00</td>
            <td class="text-end">27,950.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell" style="border-color:transparent;">
            <td class="ps-4 text-regular text-4 text-black">prof Tax</td>
            <td class="text-end border-end pe-4">2,400.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
       <td class="text-end">13,975.00</td>
            <td class="text-end">13,975.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell">
            <td class="ps-4 text-regular text-4 text-black">Income Tax</td>
            <td class="text-end border-end pe-4">15,135.00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">5,909.00</td>
            <td class="text-end">4,498.00</td>
            <td class="text-end">4,728.00</td>
        <td class="text-end">4,658.00</td>
            <td class="text-end">4,658.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell border">
            <td class="ps-4 text-regular text-4 text-black text-secondary-500">Total</td>
            <td class="text-end border-end pe-4">39,135.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">7,909.00</td>
            <td class="text-end">6,498.00</td>
            <td class="text-end">6,728.00</td>
        <td class="text-end">46,583.00</td>
            <td class="text-end">46,583.00</td>
           
          </tr>
        </tbody>
  <tr>


          

        </tbody>

        

      </table>

      


    </div>
  
    
    
  </div>

  


</div>



<div class="accordion it-statement" id="accordionPanelsStayOpenExample14">
  <div class="accordion-item bg-secondary-subtle">
    <h2 class="accordion-header ">
      <div class="d-flex justify-content-between align-items-center px-4 income-plus ">
        <span class="d-flex align-items-center ">
        <span class="accordion-button collapsed "  data-bs-toggle="collapse" href="#multiCollapseExample14" role="button" aria-expanded="false" aria-controls="multiCollapseExample14"></span> <span class="text-4 text-secondary-500 ps-35">N.Taxable Income(L+M)</span></span> <span class="text-regular text-secondary text-4 ">₹4,48,331.00</span> </div>
    </h2>
  </div>
</div>



<div class="accordion it-statement" id="accordionPanelsStayOpenExample15">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <div class="d-flex justify-content-between align-items-center px-4 income-plus">
        <span class="d-flex align-items-center">
        <span class="accordion-button collapsed"  data-bs-toggle="collapse" href="#multiCollapseExample15" role="button" aria-expanded="false" aria-controls="multiCollapseExample15"></span> <span class="text-4 text-secondary-500 ps-35">O.Annual Tax</span></span> <span class="text-regular text-secondary text-4">₹0.00</span> </div>
    </h2>
  </div>
</div>
<div class="multi-collapse collapse" id="multiCollapseExample15" style="">
  <div class="accordion-body px-0">
    <div class="table-responsive">
      <table class="table mb-0 border mt-1 bg-white">
        <thead style="background-color:#ecf5ff;color:#7f7f7f;" class="text-5 text-regular header-cell">
          <tr>
            <td class="ps-4">Items</td>
            <td class="text-end border-end pe-4">Total</td>
            <td class="text-end">Apr 2022</td>
            <td class="text-end">May 2022</td>
            <td class="text-end">Jun 2022</td>
            <td class="text-end">Jul 2022</td>
            <td class="text-end">Aug 2022</td>
            <td class="text-end">Sep 2022</td>
            <td class="text-end">Oct 2022</td>
            <td class="text-end">Nov 2022</td>
            <td class="text-end">Dec 2022</td>
    <td class="text-end">Jan 2023</td>
    <td class="text-end">Feb 2023</td>
    
          </tr>
        </thead>

        <tbody class="monthly-income collapse show" id="monthlyIncomeExample15" style="">
          <tr class="text-5 text-regular header-cell" style="border-color:transparent;"> 
            <td class="ps-4 text-regular text-4 text-black">PF</td>
            <td class="text-end border-end pe-4">21,600.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
    <td class="text-end">27,950.00</td>
            <td class="text-end">27,950.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell" style="border-color:transparent;">
            <td class="ps-4 text-regular text-4 text-black">prof Tax</td>
            <td class="text-end border-end pe-4">2,400.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
       <td class="text-end">13,975.00</td>
            <td class="text-end">13,975.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell">
            <td class="ps-4 text-regular text-4 text-black">Income Tax</td>
            <td class="text-end border-end pe-4">15,135.00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">5,909.00</td>
            <td class="text-end">4,498.00</td>
            <td class="text-end">4,728.00</td>
        <td class="text-end">4,658.00</td>
            <td class="text-end">4,658.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell border">
            <td class="ps-4 text-regular text-4 text-black text-secondary-500">Total</td>
            <td class="text-end border-end pe-4">39,135.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">7,909.00</td>
            <td class="text-end">6,498.00</td>
            <td class="text-end">6,728.00</td>
        <td class="text-end">46,583.00</td>
            <td class="text-end">46,583.00</td>
           
          </tr>
        </tbody>
  <tr>


          

        </tbody>

        

      </table>

      


    </div>
  
    
    
  </div>

  


</div>


<div class="accordion it-statement" id="accordionPanelsStayOpenExample16">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <div class="d-flex justify-content-between align-items-center px-4 income-plus">
        <span class="d-flex align-items-center">
        <span class="accordion-button collapsed"  data-bs-toggle="collapse" href="#multiCollapseExample16" role="button" aria-expanded="false" aria-controls="multiCollapseExample16"></span> <span class="text-4 text-secondary-500 ps-35">P.Tax Paid till date</span></span> <span class="text-regular text-secondary text-4">₹15,135.00</span> </div>
    </h2>
  </div>
</div>
<div class="multi-collapse collapse" id="multiCollapseExample16" style="">
  <div class="accordion-body px-0">
    <div class="table-responsive">
      <table class="table mb-0 border mt-1 bg-white">
        <thead style="background-color:#ecf5ff;color:#7f7f7f;" class="text-5 text-regular header-cell">
          <tr>
            <td class="ps-4">Items</td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end">Raw Tax</td>
            <td class="text-end"></td>
            <td class="text-end">Surcharge</td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end">Health & Edu.Cess</td>
            <td class="text-end"></td>
    <td class="text-end"></td>
    <td class="text-end">Total</td>
    
          </tr>
        </thead>

        <tbody class="monthly-income collapse show" id="monthlyIncomeExample16" style="">
          <tr class="text-5 text-regular header-cell" style="border-color:transparent;"> 
            <td class="ps-4 text-regular text-4 text-black">PF</td>
            <td class="text-end border-end pe-4">21,600.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
            <td class="text-end">1,800.00</td>
    <td class="text-end">27,950.00</td>
            <td class="text-end">27,950.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell" style="border-color:transparent;">
            <td class="ps-4 text-regular text-4 text-black">prof Tax</td>
            <td class="text-end border-end pe-4">2,400.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
            <td class="text-end">200.00</td>
       <td class="text-end">13,975.00</td>
            <td class="text-end">13,975.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell">
            <td class="ps-4 text-regular text-4 text-black">Income Tax</td>
            <td class="text-end border-end pe-4">15,135.00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">00</td>
            <td class="text-end">5,909.00</td>
            <td class="text-end">4,498.00</td>
            <td class="text-end">4,728.00</td>
        <td class="text-end">4,658.00</td>
            <td class="text-end">4,658.00</td>
           
          </tr>
     <tr class="text-5 text-regular header-cell border">
            <td class="ps-4 text-regular text-4 text-black text-secondary-500">Total</td>
            <td class="text-end border-end pe-4">39,135.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">2,000.00</td>
            <td class="text-end">7,909.00</td>
            <td class="text-end">6,498.00</td>
            <td class="text-end">6,728.00</td>
        <td class="text-end">46,583.00</td>
            <td class="text-end">46,583.00</td>
           
          </tr>
        </tbody>
  <tr>


          

        </tbody>

        

      </table>

      


    </div>
  
    
    
  </div>

  


</div>


<div class="accordion it-statement" id="accordionPanelsStayOpenExample17">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <div class="d-flex justify-content-between align-items-center px-4 income-plus">
        <span class="d-flex align-items-center">
        <span class="accordion-button collapsed"  data-bs-toggle="collapse" href="#multiCollapseExample17" role="button" aria-expanded="false" aria-controls="multiCollapseExample17"></span> <span class="text-4 text-secondary-500 ps-35">Q.Balance Payable</span></span> <span class="text-regular text-secondary text-4">₹0.00</span> </div>
    </h2>
  </div>
</div>
<div class="multi-collapse collapse" id="multiCollapseExample17" style="">
  <div class="accordion-body px-0">
    <div class="table-responsive">
      <table class="table mb-0 border mt-1 bg-white">
        <thead style="background-color:#ecf5ff;color:#7f7f7f;" class="text-5 text-regular header-cell">
          <tr>
            <td class="ps-4">Raw Tax</td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end">Surcharge</td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end">Health & Edu.Cess</td>
    <td class="text-end"></td>
    <td class="text-end">Total</td>
    
          </tr>
        </thead>

        <tr class="text-5 text-regular header-cell" style="border-color:transparent;"> 
          <td class="ps-4 text-regular text-4 text-black">0.00</td>
          <td class="text-end pe-4"></td>
          <td class="text-end"></td>
          <td class="text-end"></td>
          <td class="text-end">0.00</td>
          <td class="text-end"></td>
          <td class="text-end"></td>
          <td class="text-end"></td>
          <td class="text-end"></td>
          <td class="text-end"></td>
          <td class="text-end">0.00</td>
  <td class="text-end"></td>
          <td class="text-end">0.00</td>
         
        </tr>

     
     
        </tbody>
  <tr>


          

        </tbody>

        

      </table>

      


    </div>
  
    
    
  </div>

  


</div>



<div class="accordion it-statement" id="accordionPanelsStayOpenExample18">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <div class="d-flex justify-content-between align-items-center px-4 income-plus">
        <span class="d-flex align-items-center">
        <span class="accordion-button collapsed"  data-bs-toggle="collapse" href="#multiCollapseExample18" role="button" aria-expanded="false" aria-controls="multiCollapseExample18"></span> <span class="text-4 text-secondary-500 ps-35">R.TDS Recovered im current Month</span></span> <span class="text-regular text-secondary text-4">₹0.00</span> </div>
    </h2>
  </div>
</div>
<div class="multi-collapse collapse" id="multiCollapseExample18" style="">
  <div class="accordion-body px-0">
    <div class="table-responsive">
      <table class="table mb-0 border mt-1 bg-white">
        <thead style="background-color:#ecf5ff;color:#7f7f7f;" class="text-5 text-regular header-cell">
          <tr>
            <td class="ps-4">(i)Monthly tax</td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end"></td>
    <td class="text-end"></td>
    <td class="text-end"></td>
    
          </tr>


          <tr>
            <td class="ps-4">Raw Tax</td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end">Surcharge</td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end">Health & Edu.Cess</td>
    <td class="text-end"></td>
    <td class="text-end">Total</td>
    
          </tr>
        </thead>

        <tbody class="monthly-income collapse show" id="monthlyIncomeExample18" style="">
          <tr class="text-5 text-regular header-cell" style="border-color:transparent;"> 
            <td class="ps-4 text-regular text-4 text-black">0.00</td>
            <td class="text-end pe-4"></td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end">0.00</td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end"></td>
            <td class="text-end">0.00</td>
    <td class="text-end"></td>
            <td class="text-end">0.00</td>
           
          </tr>


 
        </tbody>
  <tr>


          

        </tbody>

        

      </table>

      


    </div>
  
    
    
  </div>

  


</div>



    </div>

  </div>
</div>
<?php
$this->load->view( 'templates/footer' );
?>
