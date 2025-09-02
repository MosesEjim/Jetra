@extends('layout')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Jetra Logo" class="logo-img">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#work" class="nav-link">Work</a></li>
                <li class="nav-item"><a href="#partner" class="nav-link">Partners</a></li>
                <li class="nav-item"><a href="#contact-section" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<section class="hero-wrap degree-right js-fullheight">
    <div class="home-slider js-fullheight owl-carousel">
        <div class="slider-item js-fullheight" style="background-image:url(images/bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="absolute">
                            <h4 class="number" data-number="100">0</h4>
                            <p style="font-size:20px; font-weight:800">More than a hundred successful projects</p>
                        </div>
                        <div class="text">
                            <h1 class="mb-4">You set the challenge &amp; we provide the solutions</h1>
                            {{-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> --}}
                            <p class="mb-0"><a href="#contact-section" class="btn btn-primary py-md-3 py-2 px-2 px-md-4">Start Project</a></p>
                        </div>
                    </div>
                    {{-- <a href="https://vimeo.com/45830194" class="img-video popup-vimeo d-flex align-items-center justify-content-center">
                        <span class="fa fa-play"></span>
                    </a> --}}
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image:url(images/bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="absolute">
                            <h4 class="number" data-number="25">0</h4>
                            <p style="font-size:20px; font-weight:800;">Years of Experience</p>
                        </div>
                        <div class="text">
                            <h1 class="mb-4">You set the challenge &amp; we provide the solutions</h1>
                            {{-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> --}}
                            <p class="mb-0"><a href="#work" class="btn btn-primary py-md-3 py-2 px-2 px-md-4">Explore Projects</a></p>
                        </div>
                    </div>
                    {{-- <a href="https://vimeo.com/45830194" class="img-video popup-vimeo d-flex align-items-center justify-content-center">
                        <span class="fa fa-play"></span>
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section" id="about">
    <div class="container">
        <div class="row justify-content-center no-gutters">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <h2 class="mb-2" style="font-family: 'Capsmall'">About us</h2>
            </div>
        </div>
        <div class="row wrap-about my-5">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 order-md-last ftco-animate d-flex">
                        <div class="img w-100" style="background-image: url(images/about.jpg);"></div>
                    </div>
                    <div class="col-md-6 ftco-animate">
                        <div class="text text-md-right">
                            <p style="font-size: 20px">At JETRA, we turn challenges into solutions. For over 25 years, our certified engineers and project managers have delivered world-class integrated systems and I.T. services to Governments, Educational Institutions, Military, Hotels, and Private Companies.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="text">
                    <p style="font-size: 20px">From cyber security, data centers, and call center solutions to network infrastructure, VoIP, enterprise surveillance, and smart city innovations—we design, deploy, and support technology that drives performance, security, and growth. At JETRA, we go beyond technology deployment—we partner with clients to build resilient, secure, and future-ready infrastructure.</p>
                    <p><a href="#work" class="btn btn-primary">View all projects</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-portfolio bg-light" id="work">
    <div class="row justify-content-center no-gutters">
        <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <h2 class="mb-2">Our Works</h2>
        </div>
    </div>

    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12 portfolio-wrap mt-0">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-5 img" style="background-image: url(images/work_1.png);">
                        
                    </div>
                    <div class="col-md-7">
                        <div class="text pt-5 pl-0 pl-lg-5 pl-md-4 ftco-animate">
                            <div class="px-4 px-lg-4">
                                <div class="desc">
                                    <div class="top">
                                        <span class="subheading">Fusion Center Deployment</span>
                                        <h2 class="mb-2" style="font-family: 'Capsmall';"><a href="work.html">Fusion Center</a></h2>
                                    </div>
                                    <div class="absolute">
                                        <p style="font-family: 'Capsmall'; font-size: 18px">design and implementation of mission-critical command and control centers</p>
                                        {{-- <div class="icon d-flex align-items-center mb-4">
                                            <div class="img" style="background-image: url(images/person_1.jpg);"></div>
                                            <div class="position pl-3">
                                                <h4 class="mb-0">Jamie Jonson</h4>
                                                <span>avo.com</span>
                                            </div>
                                        </div>
                                        <p><a href="#" class="custom-btn">View Portfolio</a></p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 portfolio-wrap">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-5 order-md-last img" style="background-image: url(images/work_2.jpg);">
                        
                    </div>
                    <div class="col-md-7">
                        <div class="text pt-5 pr-md-5 ftco-animate">
                            <div class="px-4 px-lg-4">
                                <div class="desc text-md-right">
                                    <div class="top">
                                        <span class="subheading">Call Center Solutions</span>
                                        <h2 class="mb-2" style="font-family: 'Capsmall';"><a href="work.html">Call Center</a></h2>
                                    </div>
                                    <div class="absolute">
                                        <p style="font-family: 'Capsmall'; font-size: 18px">enterprise-grade customer engagement and support platforms.</p>
                                        {{-- <div class="d-flex w-100">
                                            <div class="icon d-flex align-items-center ml-md-auto mb-4">
                                                <div class="img" style="background-image: url(images/person_2.jpg);"></div>
                                                <div class="position pl-3 text-left">
                                                    <h4 class="mb-0">Jamie Jonson</h4>
                                                    <span>avo.com</span>
                                                </div>
                                            </div>
                                        </div>
                                        <p><a href="#" class="custom-btn">View Portfolio</a></p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 portfolio-wrap">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-5 img" style="background-image: url(images/work_3.jpg);">
                        
                    </div>
                    <div class="col-md-7">
                        <div class="text pt-5 pl-md-5 pl-md-4 ftco-animate">
                            <div class="px-4 px-lg-4">
                                <div class="desc">
                                    <div class="top">
                                        <span class="subheading">Cybersecurity Solutions </span>
                                        <h2 class="mb-2" style="font-family: 'Capsmall';"><a href="work.html">Cybersecurity</a></h2>
                                    </div>
                                    <div class="absolute">
                                        <p style="font-family: 'Capsmall'; font-size: 18px">comprehensive defense against digital threats with proactive monitoring and risk management</p>
                                        {{-- <div class="icon d-flex align-items-center mb-4">
                                            <div class="img" style="background-image: url(images/person_3.jpg);"></div>
                                            <div class="position pl-3">
                                                <h4 class="mb-0">Jamie Jonson</h4>
                                                <span>avo.com</span>
                                            </div>
                                        </div>
                                        <p><a href="#" class="custom-btn">View Portfolio</a></p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 portfolio-wrap">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-5 order-md-last img" style="background-image: url(images/work_4.jpg);">
                        
                    </div>
                    <div class="col-md-7">
                        <div class="text pt-5 pr-md-5 ftco-animate">
                            <div class="px-4 px-lg-4">
                                <div class="desc text-md-right">
                                    <div class="top">
                                        <span class="subheading">Data Centers</span>
                                        <h2 class="mb-2" style="font-family: 'Capsmall';"><a href="#">Data Centers</a></h2>
                                    </div>
                                    <div class="absolute">
                                        <p style="font-family: 'Capsmall'; font-size: 18px">design, deployment, and management of scalable and secure data center infrastructures.</p>
                                        {{-- <div class="d-flex w-100">
                                            <div class="icon d-flex align-items-center ml-md-auto mb-4">
                                                <div class="img" style="background-image: url(images/person_2.jpg);"></div>
                                                <div class="position pl-3 text-left">
                                                    <h4 class="mb-0">Jamie Jonson</h4>
                                                    <span>avo.com</span>
                                                </div>
                                            </div>
                                        </div>
                                        <p><a href="#" class="custom-btn">View Portfolio</a></p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 portfolio-wrap">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-5 img" style="background-image: url(images/work_5.jpg);">
                        
                    </div>
                    <div class="col-md-7">
                        <div class="text pt-5 pl-md-5 pl-md-4 ftco-animate">
                            <div class="px-4 px-lg-4">
                                <div class="desc">
                                    <div class="top">
                                        <span class="subheading">Wired & Wireless Network Infrastructure</span>
                                        <h2 class="mb-2" style="font-family: 'Capsmall';"><a href="work.html">Network Infrastructure</a></h2>
                                    </div>
                                    <div class="absolute">
                                        <p style="font-family: 'Capsmall'; font-size: 18px">robust connectivity solutions for organizations of all sizes.</p>
                                        {{-- <div class="icon d-flex align-items-center mb-4">
                                            <div class="img" style="background-image: url(images/person_2.jpg);"></div>
                                            <div class="position pl-3">
                                                <h4 class="mb-0">Jamie Jonson</h4>
                                                <span>avo.com</span>
                                            </div>
                                        </div>
                                        <p><a href="#" class="custom-btn">View Portfolio</a></p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 portfolio-wrap">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-5 order-md-last img" style="background-image: url(images/work_6.jpg);">
                        
                    </div>
                    <div class="col-md-7">
                        <div class="text pt-5 pr-md-5 ftco-animate">
                            <div class="px-4 px-lg-4">
                                <div class="desc text-md-right">
                                    <div class="top">
                                        <span class="subheading">VoIP Networks</span>
                                        <h2 class="mb-2" style="font-family: 'Capsmall';"><a href="work.html">VoIP Networks</a></h2>
                                    </div>
                                    <div class="absolute">
                                        <p style="font-family: 'Capsmall'; font-size: 18px">enterprise voice communication systems for cost efficiency and reliability.</p>
                                        {{-- <div class="d-flex w-100">
                                            <div class="icon d-flex align-items-center ml-md-auto mb-4">
                                                <div class="img" style="background-image: url(images/person_2.jpg);"></div>
                                                <div class="position pl-3 text-left">
                                                    <h4 class="mb-0">Jamie Jonson</h4>
                                                    <span>avo.com</span>
                                                </div>
                                            </div>
                                        </div>
                                        <p><a href="#" class="custom-btn">View Portfolio</a></p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="degree-left"></div>
</section>

<section class="ftco-section testimony-section" id="partner" style="padding-bottom: 6em">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center heading-section ftco-animate">
                {{-- <h2 class="mb-3">Meet Our Partners</h2> --}}
            </div>
        </div>
        <div class="row ftco-animate mb-4">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/partner_1.png)"></div>
                                    <div class="pl-3">
                                        <p class="name">HPE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/partner_2.png)"></div>
                                    <div class="pl-3">
                                        <p class="name">CISCO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/partner_3.png)"></div>
                                    <div class="pl-3">
                                        <p class="name">FANVIL</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/partner_4.png)"></div>
                                    <div class="pl-3">
                                        <p class="name">MIKROTIK</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/partner_5.png)"></div>
                                    <div class="pl-3">
                                        <p class="name">UBIQUITI</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
  
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/partner_6.png)"></div>
                                    <div class="pl-3">
                                        <p class="name">AWS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/partner_7.png); background-size: contain;"></div>
                                    <div class="pl-3">
                                        <p class="name">YEASTAR</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/partner_8.png); background-size: contain;"></div>
                                    <div class="pl-3">
                                        <p class="name">YEALINK</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/partner_9.png); background-size: contain;"></div>
                                    <div class="pl-3">
                                        <p class="name">HODUSOFT</p>
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

<section class="ftco-section contact-section ftco-no-pb" id="contact-section" style="padding-top: 0em">
    <div class="container">
     <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Contact us</span>
        <h2 class="mb-4">Do you have a Project?</h2>
      </div>
    </div>
  
    <div class="row block-9">
      <div class="col-md-8">
        <form action="{{ route('contact.submit') }}" method="POST" class="p-4 p-md-5 contact-form">
          @csrf
          
          @if(session('success'))
            <div class="alert alert-success mb-3">
              {{ session('success') }}
            </div>
          @endif
          
          @if(session('error'))
            <div class="alert alert-danger mb-3">
              {{ session('error') }}
            </div>
          @endif
          
         <div class="row">
          <div class="col-md-6">
           <div class="form-group">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Your Name" value="{{ old('name') }}" required>
            @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Your Email" value="{{ old('email') }}" required>
            @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" value="{{ old('subject') }}" required>
            @error('subject')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <textarea name="message" cols="30" rows="7" class="form-control @error('message') is-invalid @enderror" placeholder="Message" required>{{ old('message') }}</textarea>
            @error('message')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
          </div>
        </div>
      </div>
    </form>
    
  </div>
  
  <div class="col-md-4 d-flex pl-md-5">
   <div class="row">
     <div class="dbox w-100 d-flex ftco-animate">
      <div class="icon d-flex align-items-center justify-content-center">
       <span class="fa fa-map-marker"></span>
     </div>
     <div class="text">
       <p><span>Address:</span> 5 King Solomon’s Layout Road, Waduruk, JOS PLATEAU STATE, NIGERIA</p>
     </div>
   </div>
   <div class="dbox w-100 d-flex ftco-animate">
    <div class="icon d-flex align-items-center justify-content-center">
     <span class="fa fa-phone"></span>
   </div>
   <div class="text">
     <p><span>Phone:</span> <a href="tel://08036125887">+2348036125887</a></p>
   </div>
  </div>
  <div class="dbox w-100 d-flex ftco-animate">
    <div class="icon d-flex align-items-center justify-content-center">
     <span class="fa fa-paper-plane"></span>
   </div>
   <div class="text">
     <p><span>Email:</span> <a href="mailto:info@yoursite.com">jetrainfo@gmail.com</a></p>
   </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>	
	

<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Social Links</h2>
                    <ul class="ftco-footer-social list-unstyled mt-5">
                        <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map"></span><span class="text" style="font-size: 20px; font-weight:600">5 King Solomon’s Layout Road, Waduruk, JOS PLATEAU STATE, NIGERIA</span></li>
                            <li><a href="#"><span class="icon fa fa-phone"></span><span class="text" style="font-size: 20px; font-weight:600">+2348036125887</span></a></li>
                            <li><a href="#"><span class="icon fa fa-envelope pr-4"></span><span class="text" style="font-size: 20px; font-weight:600">jetrainfo@gmail.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                
                {{-- <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p> --}}
                </div>
            </div>
        </div>
    </footer>
@endsection