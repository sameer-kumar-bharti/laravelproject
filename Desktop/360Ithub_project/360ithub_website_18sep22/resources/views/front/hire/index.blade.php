@extends('front.layout.app')

@section('maincontent')
<section class="ptb-70">
          <div class="container">

              <div class="row">

                  <div class="col-lg-2">
                  </div>
                  <div class="col-lg-8"  id="main-career">
                      <form action="{{url('hireemail')}}" method="post" class="row g-3">
                        @csrf
                        <div class="col-md-12 mb-3">
                            <div class="text-center">
                                <h3>Hire Developers <span class="red">From Us</span></h3>
                                <p>
                                    In case of any query or assistance, reach us out at <br>
                                    <a href="mailto:support@360ithub.com">support@360ithub.com</a> OR Call us Tel: +91 9513777001
                                </p>
                            </div>
                        </div>

                      <div class="col-md-6 mb-3 col-lg-12">
                        <label for="inputEmail4" class="form-label">Designation*</label>
                        <input type="text" class="form-control" required name="designation" id="inputEmail4" placeholder="Designetion">
                      </div>
                      <div class="col-md-6 mb-3 col-lg-12" >
                          <label for="inputPassword4" class="form-label">Hire Developers*</label>
                          <select class="form-select apply-select" name="hire_developer" required>
                            <option selected>Select Technology</option>
                            <option value="1">Laravel Developers</option>
                            <option value="2">CI Developers</option>
                            <option value="3">Web Designer</option>
                            <option value="4">PHP Developers</option>
                          </select>
                        </div>
                      <div class="col-md-6 mb-3">
                        <label for="client_name" class="form-label">Client Name*</label>
                        <input type="text" required  class="form-control" name="client_name" id="inputPassword4" placeholder="Client Name">
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" required  class="form-control" name="email" id="inputEmail4" placeholder="Enter Your Vadlid Email Address">
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="mobile" class="form-label">Mobile No*</label>
                        <input type="number" required  class="form-control" name="mobile" id="inputPassword4" placeholder="Mobile No">
                      </div>

                      <div class="col-md-6 mb-3">
                        <label for="requisition_type" class="form-label">Requisition Type*</label>
                        <select class="form-select apply-select" name="requisition_type" required>
                          <option selected>Select Requisition Type </option>
                          <option value="1"> Fresher </option>
                          <option value="2"> Experienced</option>
                        </select>
                      </div>
                      <div class="col-12 mb-3 mt-3">
                        <div class="hire-deve-sum text-center">
                             <button type="submit" class="btn consult_btn cryptmlmwhatsappbtn_color main-button" name="button">Submit</button>
                             {{-- <a href="#!" class="btn consult_btn cryptmlmwhatsappbtn_color main-button" name="button">Submit</a> --}}
                          </div>
                      </div>
                  </form>
              </div>
                  <div class="col-lg-2">
                  </div>
              </div>
          </div>
      </section>





      <!-- ========our-happy-clients-start========= -->
                <section class="client-bg">
                    <div class="container ptb-100">
                        <div class="main-heading client-headin">
                            <h1>Our Happy <span class="red">Clients</span></h1>
                            <div class="section-heading-line"></div>
                        </div>
                        <div class="slider">
                           <div class="slide-track">
                            <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/7.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/12.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/3.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/4.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/14.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/26.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/1.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/8.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/9.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/10.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/11.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/27.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/13.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/5.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/15.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/16.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/17.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/18.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/19.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/20.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/21.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/22.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/23.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/24.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/25.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/26.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/2.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/28.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/29.png"/>
                                  </a>
                               </div>
                               <div class="slide">
                                 <a href="#!">
                                     <img src="website-assets-22/images/our-clients/30.png"/>
                                  </a>
                               </div>
                           </div>
                        </div>
                    </div>
                </section>
            <!-- ========our-happy-clients-end========= -->


           <!-- =========contact-us-area-start========= -->
              <section class="ptb-70">
                 <div class="container">
                    <div class="row">
                       <div class="mapouter">
                          <div class="map-area">
                             <div class="gapmap">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d486.1137690173753!2d77.6309191413908!3d12.913495999999991!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae148d4936affd%3A0x86b081e17a52a7af!2s434%2C%2016th%20A%20Cross%20Rd%2C%20Sector%206%2C%20HSR%20Layout%2C%20Bengaluru%2C%20Karnataka%20560102!5e0!3m2!1sen!2sin!4v1663405233279!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                             </div>
                          </div>
                          <div class="map-form">
                            @include('front.template.contactform')
                          </div>
                       </div>
                    </div>
                 </div>
              </section>
            <!-- =========contact-us-area-end========= -->









@endsection

@section('extra-script')
<script>

</script>
@endsection
