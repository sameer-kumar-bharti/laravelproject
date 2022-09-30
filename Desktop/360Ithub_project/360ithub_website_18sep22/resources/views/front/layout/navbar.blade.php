<nav class="navbar navbar-expand-lg bg-white shadow-sm bg-light">
            <div class="container-fluid">
               <a class="navbar-brand d-flex align-items-center" href="{{url('/')}}">
               <img src="website-assets-22/images/logo/black-logo.png" alt="" />
               </a>
               <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
               <i class="fa fa-bars" aria-hidden="true" style="color: #fff;"></i>
               </button>
               <div class="collapse navbar-collapse" id="navbar4">
                  <ul class="navbar-nav mr-auto mx-auto">
                     <li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Home</a> </li>
                     <li class="nav-item dropdown d-menu">
                        <a class="nav-link" href="#!" id="A0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           About
                           <svg id="Svg0" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <polyline points="6 9 12 15 18 9"></polyline>
                           </svg>
                        </a>
                        <div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01">
                           <a class="dropdown-item" href="{{route('about.index')}}">About Us</a>
                           <a class="dropdown-item" href="{{url('gallery')}}">Gallery</a>
                           <a class="dropdown-item" href="{{url('directormessage')}}">Director-Message</a>
                           <!--<a class="dropdown-item" href="career.html">Career</a>-->
                           <a class="dropdown-item" href="{{url('blog')}}">Our Blog</a>
                        </div>
                     </li>
                     <li class="nav-item dropdown d-menu">
                        <a class="nav-link dropdown-toggle" href="#!" id="A1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cryptocurrency
                           <svg id="Svg1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <polyline points="6 9 12 15 18 9"></polyline>
                           </svg>
                        </a>
                        <div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01">
                           <a class="dropdown-item" href="{{url('cryptocurrency_development')}}">cryptocurrency Development Services</a>
                           <a class="dropdown-item" href="{{url('ico_development')}}">ICO Development Services</a>
                           <a class="dropdown-item" href="{{url('ieo_development')}}">IEO Development Services</a>
                           <a class="dropdown-item" href="{{url('token_development')}}">Token Development Services</a>
                           <a class="dropdown-item" href="{{url('white_paper_development')}}">White Paper Development</a>
                           <a class="dropdown-item" href="{{url('dapp_development')}}">DApp Development Services</a>
                           <a class="dropdown-item" href="{{url('smart_contract_development')}}">Smart Contract Development</a>
                           <a class="dropdown-item" href="{{url('smart_contract_mlm')}}">Smart Contract MLM Software</a>
                           <a class="dropdown-item" href="{{url('crypto_ico_marketing_agency')}}">Crypto ICO Marketing Agency</a>
                        </div>
                     </li>
                     <li class="nav-item dropdown d-menu">
                        <a class="nav-link dropdown-toggle" href="{{route('portfolio.index')}}" id="A2" aria-haspopup="true" aria-expanded="false">
                           Portfolio
                        </a>
                     </li>
                     <li class="nav-item dropdown d-menu">
                        <a class="nav-link dropdown-toggle" href="{{route('blockchain.index')}}" id="A3" aria-haspopup="true" aria-expanded="false">
                           Blockchain
                        </a>
                     </li>
                     <!-- <li class="nav-item dropdown d-menu">
                        <a class="nav-link dropdown-toggle" href="portfolio.html" id="A2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Portfolio
                        </a>
                     </li>
                     <li class="nav-item dropdown d-menu">
                        <a class="nav-link dropdown-toggle" href="blockchain-development.html" id="A3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Blockchain
                        </a>
                     </li> -->
                     <!--li class="nav-item dropdown d-menu">
                        <a class="nav-link dropdown-toggle" href="#!" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hire Developers
                           <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <polyline points="6 9 12 15 18 9"></polyline>
                           </svg>
                        </a>
                        <div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01">
                           <a class="dropdown-item" href="#!">Hire Ethereum Developers</a>
                           <a class="dropdown-item" href="#!">Hire React JS Developers</a>
                           <a class="dropdown-item" href="#!">Hire React Native Developers</a>
                           <a class="dropdown-item" href="#!">Hire Crypto MLM Developers</a>
                           <a class="dropdown-item" href="#!">Hire Cryptocurrency Developers</a>
                           <a class="dropdown-item" href="#!">Hire Crypto Exchange Developers</a>
                           <a class="dropdown-item" href="#!">Hire Cryptocurrency Wallet Developers</a>
                        </div>
                     </li-->
                     <li class="nav-item"><a class="nav-link" href="{{route('career.index')}}">Career</a> </li>
                     <li class="nav-item"><a class="nav-link" href="{{route('hire.index')}}">Hire Developers</a> </li>
                     <li class="nav-item"><a class="nav-link" href="{{route('contact.index')}}">Contact</a> </li>
                  </ul>
                  <ul class="navbar-nav social-icon-2">
                     <li class="nav-item"><a class="nav-link facebook social-icon" href="https://www.facebook.com/360ithub" target="_blank">
                        <i class="fa fa-facebook"></i><span class="d-lg-none ml-3">Facebook</span>
                        </a>
                     </li>
                     <li class="nav-item"><a class="nav-link instagram social-icon" href="https://www.instagram.com/360ithub" target="_blank">
                        <i class="fa fa-instagram" aria-hidden="true"></i><span class="d-lg-none ml-3">Instagram</span>
                        </a>
                     </li>
                     <li class="nav-item"><a class="nav-link twitter social-icon" href="https://twitter.com/360ithub">
                        <i class="fa fa-twitter"></i><span class="d-lg-none ml-3">Twitter</span>
                        </a>
                     </li>
                     {{-- <li class="nav-item"><a class="nav-link social-icon linkedin-in" href="https://in.linkedin.com/company/e-safe-solution" target="_blank"> --}}
                     <li class="nav-item"><a class="nav-link social-icon linkedin-in" href="https://in.linkedin.com/company/360ithub" target="_blank">
                        <i class="fa fa-linkedin"></i><span class="d-lg-none ml-3">Linkedin</span>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
