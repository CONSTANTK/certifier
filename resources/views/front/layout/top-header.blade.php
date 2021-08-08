<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li>Phone: +233 (0) 246 623 172 / (0) 204 038 261</li>
                                    <li>Email: info@certifier.com</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom  header-sticky">
      
                        <!-- Logo -->
                        <div class="col-xl-10 col-lg-10">
                            <div class="logo">
                                <a href="index.html"><img src="{{asset('front/assets/img/logo/logo.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                   <nav>
                                        <ul id="navigation">
                                            <li><a href="{{route('front.welcome')}}">Home</a></li>
                                            <li><a href="{{route('front.about')}}">About</a></li> 
                                                                                       
                                            <li><a href="{{route('front.services')}}">Services</a>
                                                <ul class="submenu">
                                                @foreach(get_services() as $service)
                                                    <li><a href="{{route('front.services.show',$service->id)}}">
                                                    {{$service->title}}</a></li>
                                                @endforeach
                                                </ul>
                                           </li>
        

                                            <li><a href="{{route('front.contact.us')}}">Contact</a></li>
                                          </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn d-none d-lg-block ml-20 ">
                                    <a href="{{route('front.login')}}" class="btn header-btn" style="background-color:green;" >Login</a>
                                </div>
                                <!-- Header-btn -->
                                <div class="header-right-btn d-none d-lg-block ml-20">
                               <a href="{{route('front.register')}}" class="btn header-btn">Register</a>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
