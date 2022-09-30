@extends('front.layout.app')

@section('maincontent')
<section class="ptb-70">
          <div class="container">

              <div class="row">

                  <div class="col-lg-2">
                  </div>
                  <div class="col-lg-8"  id="main-career">
                      <form class="row g-3">
                        <div class="col-md-12 mb-3">
                            <div class="text-center">
                                <h3>Job Application <span class="red">Form</span></h3>
                                <p>
                                    Hi there! This form records the entry for your Job Application for various profiles at 360 IT HUB. Go ahead and fill in the form with complete and accurate details that are best to your knowledge!
                                </p>
                                <p>
                                    In case of any query or assistance, reach us out at <br>
                                    <a href="mailto:support@360 IT HUB.in">support@360 IT HUB.in</a> OR Call us Tel: +91 9513777001
                                </p>
                            </div>
                        </div>
                      <div class="col-md-6 mb-3">
                        <label for="inputEmail4" class="form-label">First Name*</label>
                        <input type="text" class="form-control" required  id="inputEmail4" placeholder="First Name">
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="inputPassword4" class="form-label">Last Name</label>
                        <input type="text" required  class="form-control" id="inputPassword4" placeholder="Last Name">
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="inputEmail4" class="form-label">Email*</label>
                        <input type="email" required  class="form-control" id="inputEmail4" placeholder="Enter Your Vadlid Email Address">
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="inputPassword4" class="form-label">Mobile No*</label>
                        <input type="number" required  class="form-control" id="inputPassword4" placeholder="Mobile No">
                      </div>

                      <!-- <div class="col-md-6 mb-3">
                        <label for="inputPassword4" class="form-label">Qualification*</label>
                        <select class="form-select apply-select">
                          <option selected>Select Qualification</option>
                          <option value="1">BBA</option>
                          <option value="2">B.A</option>
                          <option value="3">B.com</option>
                          <option value="4">BCA</option>
                          <option value="5">B.Sc</option>
                          <option value="6">B.Tech</option>
                          <option value="7">MBA</option>
                          <option value="8">MCA</option>
                          <option value="9">MA</option>
                        </select>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="inputPassword4" class="form-label">Requisition Profile*</label>
                        <select class="form-select apply-select">
                          <option selected>Select Profile Name</option>
                          <option value="1">WordPress Developer</option>
                          <option value="2">React Developer</option>
                          <option value="3">Software Developer</option>
                          <option value="4">iOS Developer</option>
                          <option value="5">UI Developer</option>
                          <option value="6">Technical Trainer</option>
                          <option value="7">Fullstack Developer</option>
                          <option value="8">Graphic Designer</option>
                          <option value="9">HR</option>
                          <option value="10">Accountant</option>
                          <option value="11">Sales Manager</option>
                          <option value="12">Web Designer</option>
                        </select>
                      </div>

                      <div class="col-md-6 mb-3">
                        <label for="inputPassword4" class="form-label">Requisition Type*</label>
                        <select class="form-select apply-select">
                          <option selected>Select Requisition Type </option>
                          <option value="1"> Fresher </option>
                          <option value="2"> Experienced</option>
                        </select>
                      </div>-->
                      <div class="col-6 mb-3">
                        <label for="inputAddress" class="form-label">Attachment Your CV*</label>
                        <input type="file" class="form-control" id="inputAddress" placeholder="Enter Text">
                      </div>
                      <div class="col-12 mb-3">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                           Accept Terms And Conditions
                          </label>
                        </div>
                      </div>
                      <div class="col-12 mb-3 mt-3">
                        <div class="hire-deve-sum text-center">
                             <a href="#!" class="btn consult_btn cryptmlmwhatsappbtn_color main-button" name="button">Submit Application</a>
                          </div>
                      </div>
                  </form>
              </div>
                  <div class="col-lg-2">
                  </div>
              </div>
          </div>
      </section>

@endsection

@section('extra-script')
<script>

</script>
@endsection
