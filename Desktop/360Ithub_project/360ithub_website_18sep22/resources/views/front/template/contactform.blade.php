<form action="{{url('contactmail')}}" method="post">
    @csrf
    <div class="footer-form">
    <p>Hi There, <br>
        I’d love to hear from you!  Got an idea?  Want to see me make something specific?  What’s on your mind?  Talk to me!
    </p>
    <div class="mb-3">
        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="" autocomplete="off">
    </div>
    <div class="mb-3">
        <input type="tel" class="form-control mask_mobile" id="mobile" name="mobile" placeholder="Mobile" autocomplete="off">
    </div>
    <div class="mb-3">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off">
    </div>
    <div class="mb-3">
        <textarea class="form-control" id="comments" name="comments" rows="3" placeholder="Enter your query" autocomplete="off"></textarea>
    </div>
    <div class="d-flex justify-content-start">
        <button class="btn button_secondary" id="submitbtn">
        Submit <span><i class="fa fa-long-arrow-right"></i></span>
        </button>
    </div>
    </div>
</form>
