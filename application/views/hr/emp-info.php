<?php
$data[ 'title' ] = '';
$data[ 'description' ] = '';
$this->load->view( 'templates/header', $data );
?>
<div class="pagetitle">
  <h1>Employee information</h1>
</div>
<div class="tab-content mt-5" id="pills-tabContentLeave">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <section>
      <div class="row">
        <div class="col-md-3 col-lg-2">
          <div class="d-flex align-items-start">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <a class="nav-link active" aria-current="page" href="#" id="v-pills-leave-tab" data-bs-toggle="pill" data-bs-target="#v-pills-leave" type="button" role="tab" aria-controls="v-pills-leave" aria-selected="true">Personal</a> <a class="nav-link" href="#" id="v-pills-leave-rh-tab" data-bs-toggle="pill" data-bs-target="#v-pills-leave-rh" type="button" role="tab" aria-controls="v-pills-leave-rh" aria-selected="false" tabindex="-1">Account &amp; Statutory</a> <a class="nav-link" href="#" id="v-pills-leave-cancel-tab" data-bs-toggle="pill" data-bs-target="#v-pills-leave-cancel" type="button" role="tab" aria-controls="v-pills-leave-cancel" aria-selected="false" tabindex="-1">Family</a> <a class="nav-link" href="#" id="v-pills-employement-tab" data-bs-toggle="pill" data-bs-target="#v-pills-employement" type="button" role="tab" aria-controls="v-pills-employement" aria-selected="false" tabindex="-1">Employement &amp; job</a> <a class="nav-link" href="#" id="v-pills-assets-tab" data-bs-toggle="pill" data-bs-target="#v-pills-assets" type="button" role="tab" aria-controls="v-pills-assets" aria-selected="false" tabindex="-1">Assets</a> </div>
          </div>
        </div>
        <div class="col-md-9 col-lg-9">
          <div class="tab-content" id="v-pills-tabContentLeave">
            <div class="tab-pane fade active show" id="v-pills-leave" role="tabpanel" aria-labelledby="v-pills-leave-tab">
              <div class="tab-content" id="v-pills-tabContentLeave">
                <div class="mb-3"> <span class="text-5 text-secondary text-regular pe-2">JUMP TO</span><a href="#profile" class="text-4 text-secondary-500 pe-1">Profile</a> <a href="#personal" class="text-4 text-secondary-500 pe-1">Personal</a> <a href="#address" class="text-4 text-secondary-500 pe-1">Address</a> <a href="#education" class="text-4 text-secondary-500">Education</a></div>
                <section class="" id="profile">
                  <div class="card"> 
                    <!-- <div class="card-body">Profile</div>
      
               -->
                    <div class="accordion accordion-flush card-body py-0" id="accordionFlushExample-profile">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"> <span class="text-secondary text-5 text-uppercase text-secondary-500">Profile</span> </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" style="">
                          <div class="accordion-body row">
                            <div class="col-12 col-sm-4"> <img src="https://highzeal.com/hr/images/default-photo-large.jpg" alt="Profile" class="rounded-circle img-fluid" width="90" height="90">
                              <div class="pt-3"> <span class="ms-2 ps-1 pt-4 mt-4 fs-8">Location</span><br>
                                <span class="ms-2 fs-7">Hyderbad</span> </div>
                            </div>
                            <div class="col-12 col-sm-4">
                              <div class="pb-1"> <span class="fs-8">Name</span><br>
                                <span class="fs-7">Tammineedi Hemalatha</span><br>
                              </div>
                              <div class="pb-1"> <span class="fs-8">Employee Id</span><br>
                                <span class="fs-7">10806</span><br>
                              </div>
                              <div class="pb-1"> <span class="fs-8">Primary Contact No.</span><br>
                                <span class="fs-7">9618251698</span><br>
                              </div>
                            </div>
                            <div class="col-12 col-sm-4">
                              <div class="pb-1 pt-5"> <span class="fs-8">Company Email</span><br>
                                <span class="fs-7">hemalathanekkanti95@gmail.com</span><br>
                              </div>
                              <div class="pb-1"> <span class="fs-8">Extension</span><br>
                                <span class="fs-7">---</span><br>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <!-- </div> --> 
                  </div>
                </section>
                <section class="" id="personal">
                  <div class="card">
                    <div class="accordion accordion-flush card-body py-0" id="accordionFlushExample2">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading2">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne2" aria-expanded="false" aria-controls="flush-collapseOne"> <span class="text-secondary text-5 text-uppercase text-secondary-500">Personal<i class="bi bi-pen px-2 fs-8 pen-color"></i></span> </button>
                        </h2>
                        <div id="flush-collapseOne2" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne2" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body row">
                            <div class="col-12 col-sm-4">
                              <div class="pb-1"> <span class="fs-8">Blood Group</span><br>
                                <span class="fs-7">---</span><br>
                              </div>
                              <div class="pb-1"> <span class="fs-8">Marital Status</span><br>
                                <span class="fs-7">---</span><br>
                              </div>
                              <div class="pb-1"> <span class="fs-8">Place of Birth</span><br>
                                <span class="fs-7">---</span><br>
                              </div>
                              <div class="pb-1"> <span class="fs-8">Religion</span><br>
                                <span class="fs-7">---</span><br>
                              </div>
                            </div>
                            <div class="col-12 col-sm-4">
                              <div class="pb-1"> <span class="fs-8">Date of Birth</span><br>
                                <span class="fs-7">08 JUL 1997</span><br>
                              </div>
                              <div class="pb-1"> <span class="fs-8">Marriage Date</span><br>
                                <span class="fs-7">---</span><br>
                              </div>
                              <div class="pb-1"> <span class="fs-8">Physically Challenged</span><br>
                                <span class="fs-7">NO</span><br>
                              </div>
                              <div class="pb-1"> <span class="fs-8">Primary Contact No.</span><br>
                                <span class="fs-7">9618251698</span><br>
                              </div>
                            </div>
                            <div class="col-12 col-sm-4">
                              <div class="pb-1"> <span class="fs-8">Nationality</span><br>
                                <span class="fs-7">---</span><br>
                              </div>
                              <div class="pb-1"> <span class="fs-8">Spouse</span><br>
                                <span class="fs-7">---</span><br>
                              </div>
                              <div class="pb-1"> <span class="fs-8">Father Name</span><br>
                                <span class="fs-7">N Venkateswara Rao</span><br>
                              </div>
                              <div class="pb-1"> <span class="fs-8">International Employee</span><br>
                                <span class="fs-7"></span><br>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="" id="address">
                  <div class="card">
                    <div class="accordion accordion-flush card-body py-0" id="accordionFlushExample3">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne3">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne3" aria-expanded="false" aria-controls="flush-collapseOne"> <span class="text-secondary text-5 text-uppercase text-secondary-500"> Address<i class="bi bi-pen px-2 fs-8 pen-color"></i></span> </button>
                        </h2>
                        <div id="flush-collapseOne3" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne3" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body row">
                            <div class="col-12 col-sm-4">
                              <div class="pb-1">
                                <div class="dropdown">
                                  <button class="btn btn-light dropdown-toggle border" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> Contact Address </button>
                                 <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="#">Contact Address</a></li>
                              <li><a class="dropdown-item" href="#">Emergency Contact/Ad..</a></li>
                              <li><a class="dropdown-item" href="#">Permanent Address</a></li>
                              <li><a class="dropdown-item" href="#">Present Address</a></li>
                              <li><a class="dropdown-item" href="#">Spouse Address</a></li>
                            </ul>
                                </div>
                                <span class="fs-8">Address</span><br>
                                <span class="fs-7">---</span><br>
                              </div>
                              <div class="pb-1"> <span class="fs-8">Name</span><br>
                                <span class="fs-7">---</span><br>
                              </div>
                              <div class="pb-1"> <span class="fs-8">Phone</span><br>
                                <span class="fs-7">---</span><br>
                              </div>
                              <div class="pb-1"> <span class="fs-8">Extension</span><br>
                                <span class="fs-7">---</span><br>
                              </div>
                            </div>
                            <div class="col-12 col-sm-4 mt-2">
                              <div class="pb-1 pt-5 mt-5 align-items-end justify-content-end" style="padding-top: 60px;"> <span class="fs-8 mt-4" style="margin-top:px;">Phone2</span><br>
                                <span class="fs-7">---</span><br>
                              </div>
                              <div class="pb-1"> <span class="fs-8">Fax</span><br>
                                <span class="fs-7">---</span><br>
                              </div>
                            </div>
                            <div class="col-12 col-sm-4">
                              <div class="pb-1 pt-5"> <span class="fs-8">Email</span><br>
                                <span class="fs-7">---</span><br>
                              </div>
                              <div class="pb-1"> <span class="fs-8">Mobile</span><br>
                                <span class="fs-7">---</span><br>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="" id="education">
                  <div class="card">
                    <div class="accordion accordion-flush card-body py-0" id="accordionFlushExample4">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne4">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne4" aria-expanded="false" aria-controls="flush-collapseOne"> <span class="text-secondary text-5 text-uppercase text-secondary-500">Education</span> </button>
                        </h2>
                        <div id="flush-collapseOne4" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne4" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body pb-3"> <span class="fs-7">No Data Found</span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
            <div class="tab-pane fade pb-4" id="v-pills-leave-rh" role="tabpanel" aria-labelledby="v-pills-leave-rh-tab">
              <section> <a href="#profile" class="underlined-link  px-1 fs-7 text-secondary text-5 text-regular">JUMP TO</a> <a href="#personal" class="underlined-link text-primary px-1 fs-7">Bank Account </a> <a href="#address" class="underlined-link px-1 fs-7 text-primary">PF Account</a> <a href="#education" class="underlined-link px-1 fs-7 text-primary">Other IDs</a>
                <div class="" id="profile">
                  <div class="card mt-2">
                    <div class="card-body py-0">
                      <div class="accordion accordion-flush" id="accordionFlushExample3">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne3" aria-expanded="false" aria-controls="flush-collapseOne"> <span class="text-5 text-secondary-500">BANK ACCOUNT</span> </button>
                          </h2>
                          <div id="flush-collapseOne3" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne3" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body row">
                              <div class="col-12 col-sm-3">
                                <div class="pb-1"> <span class="fs-8">Bank Name</span><br>
                                  <span class="fs-7">AXIS Bank</span><br>
                                </div>
                              </div>
                              <div class="col-12 col-sm-3 ">
                                <div class="pb-1"> <span class="fs-8">Bank Account Number</span><br>
                                  <span class="fs-7">920000000677770</span><br>
                                </div>
                              </div>
                              <div class="col-12 col-sm-3">
                                <div class="pb-1"> <span class="fs-8">Bank Branch</span><br>
                                  <span class="fs-7">jublee hills</span><br>
                                </div>
                              </div>
                              <div class="col-12 col-sm-3"> <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#bankAccount">more</a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="" id="personal">
                  <div class="card">
                    <div class="card-body py-0">
                      <div class="accordion accordion-flush" id="accordionFlushExample5">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne5" aria-expanded="false" aria-controls="flush-collapseOne"> <span class="text-5 text-secondary-500">PF ACCOUNT</span> </button>
                          </h2>
                          <div id="flush-collapseOne5" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne5" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body row">
                              <div class="col-12 col-sm-3">
                                <div class="pb-1"> <span class="fs-8">PF NUMBER</span><br>
                                  <span class="fs-7">---</span><br>
                                </div>
                                <div class="pb-2"> <span class="fs-8">Eligibility</span><br>
                                  <button class="fs-7 btn btn-success text-light">ELIGIBLE</button>
                                  <br>
                                </div>
                                <div class="pb-1"> <span class="fs-8">KYC Status</span><br>
                                  <span class="fs-7">
                                  <input class="form-check-input mt-1 px-2" type="checkbox" value="" aria-label="Checkbox for following text input">
                                  Not Done</span><br>
                                </div>
                              </div>
                              <div class="col-12 col-sm-3 ">
                                <div class="pb-1 pt-5"> <span class="fs-8">UAN</span><br>
                                  <span class="fs-7">101713831441</span><br>
                                </div>
                              </div>
                              <div class="col-12 col-sm-3 pt-5">
                                <div class="pb-1"> <span class="fs-8">PF Join Date</span><br>
                                  <span class="fs-7">---</span><br>
                                </div>
                                <div class="pb-1"> <span class="fs-8">KYC Document</span><br>
                                  <span class="fs-7">---</span><br>
                                </div>
                              </div>
                              <div class="col-12 col-sm-3 d-flex align-content-end flex-wrap"> <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#pfAccount">more</a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="" id="education">
                  <div class="card">
                    <div class="card-body py-0">
                      <div class="">
                        <div class="accordion accordion-flush" id="accordionFlushExample04">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne04">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne04" aria-expanded="false" aria-controls="flush-collapseOne"> <span class="text-5 text-secondary-500">OTHER IDS</span> </button>
                            </h2>
                            <div id="flush-collapseOne04" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body row">
                                <div class="col-12 col-sm-3">
                                  <div class="pb-1"> <span class="fs-8">Bank Name</span><br>
                                    <span class="fs-7">AXIS Bank</span><br>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-3 ">
                                  <div class="pb-1"> <span class="fs-8"></span><br>
                                    <span class="fs-7"></span><br>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                  <div class="pb-1"> <span class="fs-7"><a href="#">Unverifed</a></span><br>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-3"> <a href="#" class="text-primary" data-bs-toggle="tooltip" data-bs-html="true" data-bs-original-title="<span>Name of Document</span><br> <span>Hemalatha Tammineedi</span>">
                                 more
                                </a> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <div class="tab-pane fade" id="v-pills-leave-cancel" role="tabpanel" aria-labelledby="v-pills-leave-cancel-tab">
              <section> <span class="ps-2 fs-7 text-secondary text-5 text-regular">JumpTo</span> <a href="#personal" class="underlined-link text-secondary-500 text-4">Father</a>
                <div class="" id="profile">
                  <div class="card mt-2">
                    <div class="card-body py-0">
                      <div class="accordion accordion-flush" id="accordionFlushExample5">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne5">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne5" aria-expanded="true" aria-controls="flush-collapseOne"> <span class="text-5 text-secondary-500">FATHER</span> </button>
                          </h2>
                          <div id="flush-collapseOne5" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne5" data-bs-parent="#accordionFlushExample" style="">
                            <div class="accordion-body row">
                              <div class="col-12 col-sm-3">
                                <div class="pb-1"> <span class="fs-8">Name</span><br>
                                  <span class="fs-7">N Venkateswara Rao</span><br>
                                </div>
                                <div class="pb-2"> <span class="fs-8">Gender</span><br>
                                  <span class="fs-7">---</span> <br>
                                </div>
                                <div class="pb-1"> <span class="fs-8">Additional</span><br>
                                  <span class="fs-7">
                                  <input class="form-check-input " type="checkbox" value="">
                                  <a href="#" class="text-4 text-secondary-500 ms-2">See details</a></span><br>
                                </div>
                              </div>
                              <div class="col-12 col-sm-3 ">
                                <div class="pb-1"> <span class="fs-8">Date Of Birth</span><br>
                                  <span class="fs-7">---</span><br>
                                </div>
                                <div class="pb-1"> <span class="fs-8">Nationality</span><br>
                                  <span class="fs-7">---</span><br>
                                </div>
                              </div>
                              <div class="col-12 col-sm-3 pt-5">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="">
                                  <label class="form-check-label" for=""> <a href="#" class="text-4 text-secondary-500">See details</a> </label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <div class="tab-pane fade" id="v-pills-employement" role="tabpanel" aria-labelledby="v-pills-employement-tab">
              <h6 class="border-start border-info"> Employement &amp; Job</h6>
              <div class="card">
                <div class="card-body"> <span class="fs-7 text-secondary text-5 text-regular">Jump To:</span> <a href="#profile" class="underlined-link text-primary px-1 fs-7">Current Position</a> </div>
              </div>
              <div class="profile" id="profile">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-12 d-flex justify-content-between  bg-light pt-2">
                        <p class="fs-7"> Current Position</p>
                        <p class="fs-8"><a href="#" class="me-3">Resign</a>
                          <a href="<?php echo base_url('employment'); ?>" role="button" class="btn btn-primary">View Timeline</a>
                        </p>
                      </div>
                      <div class="col-12 col-sm-3">
                        <div class="pb-1"> <span class="fs-8">Attendance Scheme</span><br>
                          <span class="fs-8">09:00 To 18:00</span><br>
                        </div>
                        <div class="pb-2"> <span class="fs-8">Designation</span><br>
                          <span class="fs-7">SEO Executive</span><br>
                        </div>
                        <div class="pb-1"> <span class="fs-8">Location</span><br>
                          <span class="fs-7"> Hyderbad</span><br>
                        </div>
                      </div>
                      <div class="col-12 col-sm-3">
                        <div class="pb-1"> <span class="fs-8">Costcenter</span><br>
                          <span class="fs-7">NA</span><br>
                        </div>
                        <div class="pb-2"> <span class="fs-8">Division</span><br>
                          <span class="fs-7">NA</span><br>
                        </div>
                        <div class="pb-1"> <span class="fs-8">Reporting To</span><br>
                          <span class="fs-7">Namita Verma</span><br>
                        </div>
                      </div>
                      <div class="col-12 col-sm-3">
                        <div class="pb-1"> <span class="fs-8">Department</span><br>
                          <span class="fs-7">IT</span><br>
                        </div>
                        <div class="pb-2"> <span class="fs-8">Grade</span><br>
                          <span class="fs-7">NA</span><br>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-assets" role="tabpanel" aria-labelledby="v-pills-assets-tab">
              <section> <span class="ps-2 fs-7 text-secondary text-5 text-regular">JumpTo</span> <a href="#personal" class="underlined-link fs-7 text-primary px-2">Access Card Details</a>
                <div class="" id="profile">
                  <div class="card mt-2">
                    <div class="card-body py-0">
                      <div class="accordion accordion-flush" id="accordionFlushExample5">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="flush-headingOne5">
                            <button class="accordion-button fs-7" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne5" aria-expanded="true" aria-controls="flush-collapseOne"> <span class="text-5 text-secondary-500">ACCESS CARD DETAILS</span> </button>
                          </h2>
                          <div id="flush-collapseOne5" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne5" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body row">
                              <div class="col-12 col-sm-6">
                                <div class="pb-1"> <span class="fs-8">Card No</span><br>
                                  <span class="fs-7">---</span><br>
                                </div>
                                <div class="pb-2"> <span class="fs-8">PREVIOUS</span><br>
                                  <span class="fs-7">No data Found.</span> <br>
                                </div>
                              </div>
                              <div class="col-12 col-sm-6">
                                <div class="pb-1"> <span class="fs-8">Validity</span><br>
                                  <span class="fs-7">---</span><br>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<div class="modal fade " id="bankAccount" tabindex="-1" aria-labelledby="bankAccountLabel">
  <div class="modal-dialog ">
    <div class="modal-content ">
      <div class="modal-header">
        <h1 class="modal-title" id="bankAccountLabel">Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-4 text-secondary text-regular">
        <div class="row">
          <div class="col-12">
            <div class="mb-2"> <span class="fs-8">Bank Name</span><br>
              <span class="text-4 fw-500 text-black">AXIS Bank</span> </div>
          </div>
          <div class="col-4">
            <div class="mb-2"> <span class="fs-8">Bank Account Number</span><br>
              <span class="text-4 fw-500 text-black">921010051494426</span> </div>
            <div class="mb-2"> <span class="fs-8">DD Payabl3e At</span><br>
              <span class="text-4 fw-500 text-black">---</span> </div>
            <div class="mb-2"> <span class="fs-8">Name As Per Bank Records</span><br>
              <span class="text-4 fw-500 text-black">---</span> </div>
          </div>
          <div class="col-4">
            <div class="mb-2"> <span class="fs-8">Bank Branch</span><br>
              <span class="text-4 fw-500 text-black">Jubilee Hills</span> </div>
            <div class="mb-2"> <span class="fs-8">Payment Type</span><br>
              <span class="text-4 fw-500 text-black">Bank Transfer</span> </div>
          </div>
          <div class="col-4">
            <div class="mb-2"> <span class="fs-8">IFSC</span><br>
              <span class="text-4 fw-500 text-black">UTIB0000030</span> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade " id="pfAccount" tabindex="-1" aria-labelledby="pfAccountLabel">
  <div class="modal-dialog ">
    <div class="modal-content ">
      <div class="modal-header">
        <h1 class="modal-title" id="pfAccountLabel">PF Account</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body  text-4 text-secondary text-regular">
        <div class="row">
          <div class="col-12">
            <div class="pb-1"> <span class="fs-8 text-regular">PF Number</span><br>
              <span class="text-4 fw-500 text-black">---</span><br>
            </div>
          </div>
          <div class="col-6">
            <div class="pb-1"> <span class="fs-8 text-regular">UAN</span><br>
              <span class="text-4 fw-500 text-black">101713831441</span><br>
            </div>
          </div>
          <div class="col-3">
            <div class="pb-1"> <span class="fs-8 text-regular">PF Join Date</span><br>
              <span class="text-4 fw-500 text-black">---</span><br>
            </div>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-6">
            <div class="pb-1"> <span class="fs-8 text-regular">Other PF Information</span><br>
              <span class="text-4 text-regular text-black">
              <input class="form-check-input mt-1 me-1" type="checkbox" value="" aria-label="Checkbox for following text input">
              is existing members of EPS</span><br>
              <span class="text-4 text-regular text-black">
              <input class="form-check-input mt-1 me-1" type="checkbox" value="" aria-label="Checkbox for following text input">
              Allow EPF excess contribution</span><br>
              <span class="text-4 text-regular text-black">
              <input class="form-check-input mt-1 me-1" type="checkbox" value="" aria-label="Checkbox for following text input">
              Allow EPF excess contribution</span><br>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="pb-1 mt-1"> <span class="fs-8 py-0 text-regular">KYC Status</span><br>
              <span class="text-4 text-regular text-black">
              <input class="form-check-input mt-2  me-1" type="checkbox" value="" aria-label="Checkbox for following text input">
              Not Done</span><br>
            </div>
          </div>
          <div class="col-6 mt-1">
            <div class="pb-1"> <span class="fs-8 text-regular">KYC Document</span><br>
              <span class="text-4 text-regular text-black">---</span><br>
            </div>
          </div>
          <div class="col-4">
            <div class="pb-1"> <span class="fs-8 text-regular">Document Number</span><br>
              <span class="text-4 text-regular text-black">---</span><br>
            </div>
          </div>
          <div class="col-12">
            <div class="pb-1"> <span class="fs-8 text-regular">Name in Document</span><br>
              <span class="text-4 text-regular text-black">---</span><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$this->load->view( 'templates/footer' );
?>
