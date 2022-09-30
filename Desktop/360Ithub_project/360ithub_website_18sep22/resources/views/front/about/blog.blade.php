@extends('front.layout.app')

@section('maincontent') 
 <!-- Start Page Banner -->

 <div class="page-banner-area item-bg1">

<div class="m-auto">

    <div class="">

        <div class="container">

            <div class="page-banner-content">

                <h2>Our Latest Blog</h2>

                <ul>

                    <li>

                        <a href="index.html">Home</a>

                    </li>

                    <li>Blog</li>

                </ul>

            </div>

        </div>

    </div>

</div>

</div>

<!-- End Page Banner -->



<!--Start Blog Area -->

<section class="blog-area bg-color">

<div class="container">

    <div class="main-heading sec-title4 text-center mb-4">

        <div class="sub-title mb-1">Blog</div>

        <h1>Read The <span class="red">Latest Articles From Us</span></h1>

        <div class="section-heading-line"></div>

    </div>



    <div class="row">

        <div class="col-lg-4 col-md-6">

            <div class="single-blog">

                <div class="image">

                    <a href="#!">

                        <img src="website-assets-22/images/blog/blog-1.jpg" alt="image">

                    </a>

                </div>

                <div class="content">

                    <span>January 20, 2021</span>

                    <h3>

                        <a href="#!">The security risks of changing package owners</a>

                    </h3>

                    <a href="#!" class="blog-btn">Read More... <i class='bx bx-chevrons-right'></i></a>

                </div>

            </div>

        </div>



        <div class="col-lg-4 col-md-6">

            <div class="single-blog">

                <div class="image">

                    <a href="#!">

                        <img src="website-assets-22/images/blog/blog-2.jpg" alt="image">

                    </a>

                </div>

                <div class="content">

                    <span>January 19, 2021</span>

                    <h3>

                        <a href="#!">Tips to Protecting Your Business and Family</a>

                    </h3>

                    <a href="#!" class="blog-btn">Read More... <i class='bx bx-chevrons-right'></i></a>

                </div>

            </div>

        </div>



        <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">

            <div class="single-blog">

                <div class="image">

                    <a href="#!">

                        <img src="website-assets-22/images/blog/blog-3.jpg" alt="image">

                    </a>

                </div>

                <div class="content">

                    <span>January 18, 2021</span>

                    <h3>

                        <a href="#!">Protect Your Workplace from Cyber Attacks</a>

                    </h3>

                    <a href="#!" class="blog-btn">Read More... <i class='bx bx-chevrons-right'></i></a>

                </div>

            </div>

        </div>

    </div>

</div>

</section>

<!-- End Blog Area -->



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
                 <div class="footer-form">
                    <p>Hi There, <br>
                       I’d love to hear from you!  Got an idea?  Want to see me make something specific?  What’s on your mind?  Talk to me!
                    </p>
                    <div class="mb-3">
                       <input type="text" class="form-control" id="name" placeholder="Name" required="">
                    </div>
                    <div class="mb-3">
                       <input type="tel" class="form-control" id="mobile" placeholder="Mobile">
                    </div>
                    <div class="mb-3">
                       <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                       <textarea class="form-control" id="comments" rows="3" placeholder="Enter your query"></textarea>
                    </div>
                    <div class="d-flex justify-content-start">
                       <button class="btn button_secondary" id="submitbtn">
                       Submit <span><i class="fa fa-long-arrow-right"></i></span>
                       </button>
                    </div>
                 </div>
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