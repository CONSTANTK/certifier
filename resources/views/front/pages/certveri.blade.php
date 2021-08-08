
@extends('front.layout.app')


@section('content')

        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{asset('front/assets/img/hero/about.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>About us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item"><a href="front.about.php">About</a></li>

                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        <!--? contact-form start -->
        <section class="contact-form-area section-bg  pt-115 pb-120 fix" data-background="{{asset('front/assets/img/gallery/section_bg02.jpg')}}">
            <div class="container">
                <div class="row justify-content-end">
                    <!-- Contact wrapper -->
                    <div class="col-xl-8 col-lg-9">
                        <div class="contact-form-wrapper">
                            <!-- From tittle -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Section Tittle -->
                                    <div class="section-tittle mb-50">
                                        <span>Make a Request For Free</span>
                                        <h2>Request a Free Service</h2>
                                        <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- form -->
                            <form action="#" class="contact-form">
                                <div class="row ">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-form">
                                            <input type="text" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-form">
                                            <input type="text" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-form">
                                            <input type="text" placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="select-items">
                                            <select name="select" id="select1">
                                                <option value="">Educational Certificate</option>
                                                <option value="">Business Certificate</option>
                                                <option value="">Birth & Death Certificate</option>
                                                <option value="">DVLA License / Certificate</option>
                                                <option value="">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                 
                                    <!-- Radio Button -->
                                   
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-form end -->
        <!--Team Ara Start -->
        
                
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-team mb-30 text-center">
                            <div class="team-img">
                                <img src="{{asset('front/assets/img/gallery/team2.png')}}" alt="">
                                <div class="team-caption">
                                    <h3><a href="#">Mike-Berg Sitsofe Afu</a></h3>
                                    <p>Chief Software Engineer / Technical Advisor</p>
                                    <!-- Blog Social -->
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 
        <!-- Team Ara End -->
        
          </div>
        </div>
        <!-- Blog Area End -->

@stop
