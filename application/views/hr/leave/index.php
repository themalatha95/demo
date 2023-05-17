<?php
$this->load->view( 'templates/header' );
$last_id = '';
?>
<style>
.nav-pills .nav-link.active {
    border-left: 2px solid #3b4452;
    border-radius: 0;
    background-color: transparent;
    color: #fe6666;
}
.nav-link {
    margin-top: 12px;
    padding: 0 0 0 10px;
    font-weight: 600;
}
.gt-info-well {
    background: #ffffe8;
    padding: 11px 13px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
label {
    margin-bottom: 5px;
    font-weight: 600;
}
.form-group {
    margin-bottom: 20px;
}
	.holiday-group-border
	{
	border-left: 1px solid #cbd5e1;
    padding-left: 10px;
		margin: 30px 0;
	}
	.bi-plus-circle
	{
		font-size: 32px;
    color: #a3b2c7;
	}
</style>
<div class="pagetitle">
  <h1>Leave Apply</h1>
</div>
<div class="tab-content" id="v-pills-tabContent">
  <div class="tab-pane fade show active" id="v-pills-home1" role="tabpanel" aria-labelledby="v-pills-home-tab1">
    <ul class="nav nav-pills mb-3 justify-content-center d-flex btn-group d-flex text-center" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button type="button" class="btn btn-outline-primary rounded-0 px-4 rounded-start active px-4" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" style="border-top-left-radius: 8px;">Apply</button>
      </li>
      <li class="nav-item" role="presentation">
        <button type="button" class="btn btn-outline-primary rounded-0 px-2 border-end-0 px-4" id="pills-pending-tab" data-bs-toggle="pill" data-bs-target="#pills-pending" role="tab" aria-controls="pills-pending" aria-selected="false" tabindex="-1">Pending</button>
      </li>
      <li class="nav-item" role="presentation">
        <button type="button" class="btn btn-outline-primary rounded-0 px-4 rounded-end px-4" id="pills-history-tab" data-bs-toggle="pill" data-bs-target="#pills-history" role="tab" aria-controls="pills-history" aria-selected="false" tabindex="-1">history</button>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContentLeave">
      <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <section>
          <div class="row">
            <div class="col-md-3 col-lg-2">
              <div class="d-flex align-items-start">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link active" aria-current="page" href="#" id="v-pills-leave-tab" data-bs-toggle="pill" data-bs-target="#v-pills-leave" type="button" role="tab" aria-controls="v-pills-leave" aria-selected="true">Leave</a> <a class="nav-link" href="#" id="v-pills-leave-rh-tab" data-bs-toggle="pill" data-bs-target="#v-pills-leave-rh" type="button" role="tab" aria-controls="v-pills-leave-rh" aria-selected="false" tabindex="-1">Restricted Holidays</a> <a class="nav-link" href="#" id="v-pills-leave-cancel-tab" data-bs-toggle="pill" data-bs-target="#v-pills-leave-cancel" type="button" role="tab" aria-controls="v-pills-leave-cancel" aria-selected="false" tabindex="-1">Leave Cancel</a> <a class="nav-link" href="#" id="v-pills-leave-grant-tab" data-bs-toggle="pill" data-bs-target="#v-pills-leave-grant" type="button" role="tab" aria-controls="v-pills-leave-grant" aria-selected="false" tabindex="-1">Comp Off Grant</a> </div>
              </div>
            </div>
            <div class="col-md-9 col-lg-9">
              <div class="tab-content" id="v-pills-tabContentLeave">
                <div class="tab-pane fade card active show" id="v-pills-leave" role="tabpanel" aria-labelledby="v-pills-leave-tab">
                  <div class="card-body p-4">
                    <div class="gt-info-well"><span class="text-5 text-regular" >leave is earned by an employee and granted by the employer to take time off work,The employee is free to avail this leave in accordance with the company policy</span><a href="#" class="text-5">Hide</a></div>
                    <p class="text-4 text-secondary-500 mb-2">Applying for Leave</p>
                    <form>
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="text-secondary text-5">Leave type<sup class="text-danger">*</sup></label>
                            <select class="form-select" aria-label="Default select example">
                              <option selected="">Select Type</option>
                              <option>Earned Leave</option>
                              <option value="1">Earned Leave 1</option>
                              <option value="1"> Loss Of Pay </option>
                              <option value="1"> Compensatory Off </option>
                              <option > Work From Home </option>
                            </select>
                          </div>
                        </div>
                      </div>
						<div class="row">
							<div class="col-md-12 col-lg-9">    <div class="row">
                        <div class="col-sm-4">
							 <div class="form-group">
                          <label class="text-secondary text-5"> From date<sup class="text-danger">*</sup></label>
                          <input type="date" class="form-control" placeholder="Select date" aria-label="First name">
							</div>
                        </div>
                        <div class="col-sm-4">
							 <div class="form-group">
								  <label class="text-secondary text-5"> sessions<sup class="text-danger">*</sup></label>
                            <select class="form-select" aria-label="Default select example">
                              <option selected=""> Session 1 </option>
                              <option> Session 2 </option>
                            </select>
							</div>
						  </div>
                      </div>
						<div class="row">
                        <div class="col-sm-4">
							 <div class="form-group">
                          <label class="text-secondary text-5"> From date<sup class="text-danger">*</sup></label>
                          <input type="date" class="form-control" placeholder="Select date" aria-label="First name">
							</div>
                        </div>
                        <div class="col-sm-4">
							 <div class="form-group">
								  <label class="text-secondary text-5"> sessions<sup class="text-danger">*</sup></label>
                            <select class="form-select" aria-label="Default select example">
                              <option> Session 1 </option>
                              <option selected=""> Session 2 </option>
                            </select>
							</div>
						  </div>
                      </div></div>
							<div class="col-md-4 col-lg-3"><div class="holiday-group-border"><div><span class="text-5 text-secondary text-secondary-500"> Balance: </span><span class="text-5"> </span></div><div><span class="text-5 text-secondary text-secondary-500"> Applying for: </span><span class="text-5"></span></div></div></div>
						</div>
                  
            
                    
                    </form>
                    <div class="row">
                      <div class="dropdown" style="margin-top:20px;">
                        <button class="  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="border:none; background: white;">
                    <img src="https://highzeal.com/hr/images/profile.svg" alt="Profile" class="rounded-circle img-fluid" width="43" height="42">
                        <span style="font-size: 14px;">Applying to</span> </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#"><div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="">
            <span class="input-group-text" id=""><i class="bi bi-search"></i></span> </div></a></li>
                          
                        </ul>
                      </div>
                    </div>
                    <div class="row" style="margin-top:10px;">
                      <div class="col-12 col-sm-4" style="margin-left: 6px;"> <label class="text-5 text-secondary">CC to</label>
						  <div class="d-flex align-items-center">
                        <a href="">
                        <i class="bi bi-plus-circle me-2"></i>
                       </a>
						   <span class="text-5 text-secondary"> Add</span></div>
						</div>
                    </div>
					       <div class="row">
                        <div class="col-sm-3">
                          <div class="form-group">
                            <label class="text-secondary text-5">Contact details</label>
                            <input type="text" class="form-control" placeholder="">
                          </div>
                        </div>
                      </div>
					  <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <label class="text-secondary text-5">Reason</label>
							  <textarea type="text" class="form-control"rows="2">Enter a reason</textarea>
                          </div>
							<a href="#" class="text-5 text-secondary"><i class="bi bi-paperclip fs-5 text-secondary text-bold"></i><span>Attach File</span> <span class="ms-4">File Type:pdf,xls,xlsx,doc,docx,txt,ppt,pptx,gif,jpg,ipeg,png</span></a>
                        </div>
                      </div>
                    
                    
                    <div class="row">
                      <div class="col-12 align-contant-center">
                        <center>
							<button class="btn btn-primary" type="button">Submit</button>
							<button class="btn btn-outline-primary" type="button">cancel</button>
                        
                        </center>
                      </div>
                    </div>
                    
                    <!-- <img src="images/review-icon-13.png" alt="" width="200" height="200" class="img-fluid mx-auto d-block">
         --> 
                    
                  </div>
                </div>
                <div class="tab-pane fade p-3" id="v-pills-leave-rh" role="tabpanel" aria-labelledby="v-pills-leave-rh-tab">
                  <div class="card">
               
                
                    <div class="card-body">
						  <div class="gt-info-well"><span class="text-5 text-regular" >Restricted Holidays (RH) are a set of holidays allocated by the company that are optional for the employee to utilize. The company sets a limit on the amount of holidays that can be used.</span><a href="#" class="text-5">Hide</a></div>
                    
                      <span class="text-4 text-secondary-500 text-black">Applying for Restricted Holiday</span>
						<div class="d-flex justify-content-center flex-column my-5"><img src="https://highzeal.com/hr/images/review-list-empty.svg" alt="Profile" class="rounded mx-auto d-block" width="235" height="116"> 
                    <span class="text-4 text-secondary-500 text-center mt-3" style="color: #a3b2c7;">You have no restricted holiday balance, as per our record.</span></div> </div></div>
                </div>
                <div class="tab-pane fade" id="v-pills-leave-cancel" role="tabpanel" aria-labelledby="v-pills-leave-cancel-tab">
                  <div class="card">
					  <div class="card-body"> <div class="gt-info-well"><span class="text-5 text-regular" >Leave Cancel enables you to apply for cancellation of approved leave applications. Please select a leave type to get started.</span><a href="#" class="text-5">Hide</a></div>
                    
                      <span class="text-4 text-secondary-500 text-black">Applying for Leave Cancel</span>
					  </div>
   
                    <div class="container mt-2">
                      <div class="border">
                        <div class="row border-bottom mx-1 py-2 fs-7">
                          <div class="col-3 d-flex justify-content-end"> <span class="ms-1">Leave Type</span></div>
                          <div class="col-2">From Date</div>
                          <div class="col-2">To Date</div>
                          <div class="col-2">Days </div>
                          <div class="col-2">Reason</div>
                        </div>
                        <div class="row mx-2 py-3 fs-8">
                          <div class="col-3 d-flex justify-content-between"><span>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            </span>
                            <p><span class="fs-7">work from home<br>
                              </span><span>applied:15 jan</span></p>
                          </div>
                          <div class="col-2 d-flex ">
                            <p><span class="fs-7">13 jan 2023<br>
                              </span><span>Session 1</span></p>
                          </div>
                          <div class="col-2 d-flex ">
                            <p><span class="fs-7">13 jan 2023<br>
                              </span><span>Session 1</span></p>
                          </div>
                          <div class="col-2 d-flex ">
                            <p><span class="fs-7">13 jan 2023<br>
                              </span><span>Session 1</span></p>
                          </div>
                          <div class="col-2 d-flex ">
                            <p><span class="fs-7">13 jan 2023<br>
                              </span><span>Session 1</span></p>
                          </div>
                        </div>
                        <div class="row mx-2 py-3 fs-8">
                          <div class="col-3 d-flex justify-content-between"><span>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            </span>
                            <p><span class="fs-7">work from home<br>
                              </span><span>applied:15 jan</span></p>
                          </div>
                          <div class="col-2 d-flex ">
                            <p><span class="fs-7">13 jan 2023<br>
                              </span><span>Session 1</span></p>
                          </div>
                          <div class="col-2 d-flex ">
                            <p><span class="fs-7">13 jan 2023<br>
                              </span><span>Session 1</span></p>
                          </div>
                          <div class="col-2 d-flex ">
                            <p><span class="fs-7">13 jan 2023<br>
                              </span><span>Session 1</span></p>
                          </div>
                          <div class="col-2 d-flex ">
                            <p><span class="fs-7">13 jan 2023<br>
                              </span><span>Session 1</span></p>
                          </div>
                        </div>
                        <div class="row mx-2 py-3 fs-8">
                          <div class="col-3 d-flex justify-content-between"><span>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            </span>
                            <p><span class="fs-7">work from home<br>
                              </span><span>applied:15 jan</span></p>
                          </div>
                          <div class="col-2 d-flex ">
                            <p><span class="fs-7">13 jan 2023<br>
                              </span><span>Session 1</span></p>
                          </div>
                          <div class="col-2 d-flex ">
                            <p><span class="fs-7">13 jan 2023<br>
                              </span><span>Session 1</span></p>
                          </div>
                          <div class="col-2 d-flex ">
                            <p><span class="fs-7">13 jan 2023<br>
                              </span><span>Session 1</span></p>
                          </div>
                          <div class="col-2 d-flex ">
                            <p><span class="fs-7">13 jan 2023<br>
                              </span><span>Session 1</span></p>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="dropdown" style="margin-top:20px;">
                          <button class="  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="border:none; background: white;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
                          </svg>
                          <span style="font-size: 14px;">Applying to</span> </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="row" style="margin-top:10px;">
                        <div class="col-12 col-sm-4" style="margin-left: 6px;"> <span style="margin-left: 10px;">cc</span><br>
                          <span>
                          <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
                          </svg>
                          Add To</span> </div>
                      </div>
                      <!-- <div class="row" style="margin-top: 15px;">
              <div class="col-12 col-sm-12"> <span>Reason</span><br>
                <from>
                  <input type="text" name="" value="" placeholder="">
                </from>
              </div>
            </div> -->
                      <div class="row py-5">
                        <div class="col-12 col-sm-12" style="margin-top: 12px;"> <span>Reason</span>
                          <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="v-pills-leave-grant" role="tabpanel" aria-labelledby="v-pills-leave-grant-tab">
                  <div class="card-body p-4"> <a href="#" style="float:right; margin-left:5px; font-size: 12px; margin-top: 6px;">Hide</a> <span style="font-size: 12px;
                 background: #e9dec2; margin-bottom: 10px;">leave is earned by an employee and granted by the employer to take time off work,The employee is free to avail this leave in accordance with the company policy</span>
                    <h6 style="padding-top: 15px;">Appllying for Leave</h6>
                    <form>
                      <span style="font-size: 13px;
                    background: white;">Leave type<sup style="color:red;">*</sup></span>
                      <select class="form-select" aria-label="Default select example" style="width: 30%;
                  height: 33px;
                  font-size: 12px;">
                        <option selected="">Open this select menu</option>
                        <option value="1">Select leave type</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                      <div class="from-1">
                        <div class="row">
                          <div class="col-6 col-sm-4 form1-sub">
                            <label> <span style="font-size: 13px;
                          background: white;">From date<sup style="color:red;">*</sup></span></label>
                            <input type="date" class="form-control" placeholder="Select date" aria-label="First name">
                          </div>
                          <div class="col-6 col-sm-4 form1-sub">
                            <label> <span style="font-size: 13px;
                          background: white;">sessions<sup style="color:red;">*</sup></span></label>
                            <input type="text" class="form-control" placeholder="sessions" aria-label="Last name">
                          </div>
                        </div>
                      </div>
                      <div class="from-1">
                        <div class="row">
                          <div class="col-6 col-sm-4 form1-sub">
                            <label> <span style="font-size: 13px;
                        background: white;">From date<sup style="color:red;">*</sup></span></label>
                            <input type="date" class="form-control" placeholder="Select date" aria-label="First name">
                          </div>
                          <div class="col-6 col-sm-4 form1-sub">
                            <label> <span style="font-size: 13px;
                        background: white;">sessions<sup style="color:red;">*</sup></span></label>
                            <input type="text" class="form-control" placeholder="sessions" aria-label="Last name">
                          </div>
                        </div>
                      </div>
                      <div style="float:right; margin-top: -109px; font-size: 12px;  ">
                        <p>Balance:</p>
                        <p>AP:</p>
                      </div>
                    </form>
                    <div class="row">
                      <div class="dropdown" style="margin-top:20px;">
                        <button class="  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="border:none; background: white;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
                        </svg>
                        <span style="font-size: 14px;">Applying to</span> </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="row" style="margin-top:10px;">
                      <div class="col-12 col-sm-4" style="margin-left: 6px;"> <span style="margin-left: 10px;">cc</span><br>
                        <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
                        </svg>
                        Add To</span> </div>
                    </div>
                    <div class="row" style="margin-top: 15px;">
                      <div class="col-12 col-sm-12"> <span>Reason</span><br>
                        <from>
                          <input type="text" name="" value="" placeholder="">
                        </from>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-sm-12" style="margin-top: 12px;"> <span>Reason</span>
                        <div class="form-floating">
                          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                          <p style="font-size: 14px; margin-top:10px;"> <span style="margin-right:10px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
                              <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"></path>
                            </svg>
                            Attach File</span> File Type:pdf,xls,xlsx,doc,docx,txt,ppt,pptx,gif,jpg,ipeg,png</p>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 align-contant-center">
                        <center>
                          <button style="background: rgb(60, 121, 212); color:white; border-radius: 3px; border:none;">Submit</button>
                          <button style="
                          background: white;">cancel</button>
                        </center>
                      </div>
                    </div>
                    
                    <!-- <img src="images/review-icon-13.png" alt="" width="200" height="200" class="img-fluid mx-auto d-block">
             --> 
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="tab-pane fade" id="pills-pending" role="tabpanel" aria-labelledby="pills-pending-tab">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <div class="card text-center">
              <div class="card-body d-flex align-items-center justify-content-center p-5 m-5"> <img src="https://highzeal.com/hr/images/review-list-empty.svg" alt="Profile" class="rounded mx-auto d-block" width="235" height="116"> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade justify-content-around" id="pills-history" role="tabpanel" aria-labelledby="pills-history-tab">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <div class="card">
              <div class="">
                <div class="row">
                  <div class="accordion accordion-flush" id="accordionFlushExample1">
                    <div class="accordion-item">
                      <h2 class="accordion-header border-bottom p-3" id="flush-headingOne1">
                        <div class="row fs-6 ">
                          <div class="col-sm-3 mt-2"> <span class="fs-8">Category</span><br>
                            <span class="fs-7">Leave Grant</span> </div>
                          <div class="col-sm-3 mt-2"> <span class="fs-8">Leave Type</span><br>
                            <span class="fs-7">Compensatory Off</span> </div>
                          <div class="col-sm-3 mt-2"> <span class="fs-8">no.of days</span><br>
                            <span class="fs-7">2</span> </div>
                          <div class="col-sm-3 fs-6">
                            <button class="accordion-button collapsed sucess" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne1" aria-expanded="false" aria-controls="flush-collapseOne" style="color:#5bc67e;font-size:14px;"> APPROVED </button>
                          </div>
                        </div>
                      </h2>
                    </div>
                  </div>
                </div>
                <div id="flush-collapseOne1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne1" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body p-0">
                    <p class="ps-3 mb-1 py-1"><span class="fs-8">Duration :</span><span class="item-text"><span class="date fs-7">01 Apr 2023</span><span class="fs-7"> (Session 1) </span><span class="to fs-7">to</span><span class="date fs-7">02 Apr 2023</span><span class="fs-7"> (Session 2) </span></span></p>
                    <p class="px-3 fs-8"><span class="fs-8">Reason :</span><span class="item-text"></span></p>
                    <div class="card-footer fs-7">
                      <p class="fs-8">Applied on</p>
                      03 Apr, 2023 </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="">
                <div class="row">
                  <div class="accordion accordion-flush" id="accordionFlushExample2">
                    <div class="accordion-item">
                      <h2 class="accordion-header border-bottom p-3" id="flush-headingOne2">
                        <div class="row fs-6 ">
                          <div class="col-sm-3 mt-2"> <span class="fs-8">Category</span><br>
                            <span class="fs-7">Leave Grant</span> </div>
                          <div class="col-sm-3 mt-2"> <span class="fs-8">Leave Type</span><br>
                            <span class="fs-7">Compensatory Off</span> </div>
                          <div class="col-sm-3 mt-2"> <span class="fs-8">no.of days</span><br>
                            <span class="fs-7">2</span> </div>
                          <div class="col-sm-3 fs-6">
                            <button class="accordion-button collapsed sucess" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne2" aria-expanded="false" aria-controls="flush-collapseOne" style="color:#5bc67e;font-size:14px;"> APPROVED </button>
                          </div>
                        </div>
                      </h2>
                    </div>
                  </div>
                </div>
                <div id="flush-collapseOne2" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body p-0">
                    <p class="ps-3 mb-1 py-1"><span class="fs-8">Duration :</span><span class="item-text"><span class="date fs-7">01 Apr 2023</span><span class="fs-7"> (Session 1) </span><span class="to fs-7">to</span><span class="date fs-7">02 Apr 2023</span><span class="fs-7"> (Session 2) </span></span></p>
                    <p class="px-3 fs-8"><span class="fs-8">Reason :</span><span class="item-text"></span></p>
                    <div class="card-footer fs-7">
                      <p class="fs-8">Applied on</p>
                      03 Apr, 2023 </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="">
                <div class="row">
                  <div class="accordion accordion-flush" id="accordionFlushExample3">
                    <div class="accordion-item">
                      <h2 class="accordion-header border-bottom p-3" id="flush-headingOne3">
                        <div class="row fs-6 ">
                          <div class="col-sm-3 mt-2"> <span class="fs-8">Category</span><br>
                            <span class="fs-7">Leave Grant</span> </div>
                          <div class="col-sm-3 mt-2"> <span class="fs-8">Leave Type</span><br>
                            <span class="fs-7">Compensatory Off</span> </div>
                          <div class="col-sm-3 mt-2"> <span class="fs-8">no.of days</span><br>
                            <span class="fs-7">2</span> </div>
                          <div class="col-sm-3 fs-6">
                            <button class="accordion-button collapsed sucess" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne3" aria-expanded="false" aria-controls="flush-collapseOne" style="color:#5bc67e;font-size:14px;"> APPROVED </button>
                          </div>
                        </div>
                      </h2>
                    </div>
                  </div>
                </div>
                <div id="flush-collapseOne3" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body p-0">
                    <p class="ps-3 mb-1 py-1"><span class="fs-8">Duration :</span><span class="item-text"><span class="date fs-7">01 Apr 2023</span><span class="fs-7"> (Session 1) </span><span class="to fs-7">to</span><span class="date fs-7">02 Apr 2023</span><span class="fs-7"> (Session 2) </span></span></p>
                    <p class="px-3 fs-8"><span class="fs-8">Reason :</span></p>
                    <div class="card-footer fs-7">
                      <p class="fs-8">Applied on</p>
                      03 Apr, 2023 </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="">
                <div class="row">
                  <div class="accordion accordion-flush" id="accordionFlushExample4">
                    <div class="accordion-item">
                      <h2 class="accordion-header border-bottom p-3" id="flush-headingOne4">
                        <div class="row fs-6 ">
                          <div class="col-sm-3 mt-2"> <span class="fs-8">Category</span><br>
                            <span class="fs-7">Leave Grant</span> </div>
                          <div class="col-sm-3 mt-2"> <span class="fs-8">Leave Type</span><br>
                            <span class="fs-7">Compensatory Off</span> </div>
                          <div class="col-sm-3 mt-2"> <span class="fs-8">no.of days</span><br>
                            <span class="fs-7">2</span> </div>
                          <div class="col-sm-3 fs-6">
                            <button class="accordion-button collapsed sucess" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne4" aria-expanded="false" aria-controls="flush-collapseOne" style="color:#5bc67e;font-size:14px;"> APPROVED </button>
                          </div>
                        </div>
                      </h2>
                    </div>
                  </div>
                </div>
                <div id="flush-collapseOne4" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body p-0">
                    <p class="ps-3 mb-1 py-1"><span class="fs-8">Duration :</span><span class="item-text"><span class="date fs-7">01 Apr 2023</span><span class="fs-7"> (Session 1) </span><span class="to fs-7">to</span><span class="date fs-7">02 Apr 2023</span><span class="fs-7"> (Session 2) </span></span></p>
                    <p class="px-3 fs-8"><span class="fs-8">Reason :</span><span class="item-text"></span></p>
                    <div class="card-footer fs-7">
                      <p class="fs-8">Applied on</p>
                      03 Apr, 2023 </div>
                  </div>
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
