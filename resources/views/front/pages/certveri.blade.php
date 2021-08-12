
@extends('front.layout.app')


@section('content')

        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{asset('front/assets/img/hero/about.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>Certificate Verification</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="front.pages.welcome">Home</a></li>
                                        <li class="breadcrumb-item"><a href="front.pages.certveri">Certificate Verification</a></li>

                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
       
        <!--Team Ara Start -->
        <form>
                <div class="panel panel-default">
                                <div class="panel panel-header">
                                    <div class="panel panel-heading" align="center"><h1 style="font-size:15px">  
                                    Welcome To CERTIFIER</h1><br/>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-team mb-30 text-center">
                     
                      <div class="input-group">
                                            <span class="input-group-addon" >User ID:</span>
                                            <input class="form-control" type="varchar" size="20" autofocus autoincrement="true"/>
                                    </div><br>   
                                    <div class="input-group">
                                            <span class="input-group-addon" >Certificate Number:</span>
                                            <input class="form-control" type="text" size="20"/>
                                    </div><br> 
                                    <div class="input-group">
                        <span class="input-group-addon">Certificate Type</span>
                         <select>
                             <option>Select Certificate Type</option>
                             <option>Educational</option>
                            <option>Business</option>
                            <option>Birth and Death</option>
                            <option>DVLA</option>
                            
                    </div>
                     </select>
                    </div><br> 

                                    <div class="input-group">
                                            <span class="input-group-addon" >Date Issued:</span>
                                            <input class="form-control" type="date" />
                                    </div><br>
                                    
                                    <div class="header-right-btn d-none d-lg-block ml-20" align="center">
                                   <button type="submit" class="btn header-btn" style="background-color:green;"> Verify</a></button> 
                               
                    </div>
                    </div>
                    </div>
                    </div>
                    </form>
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
