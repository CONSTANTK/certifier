
@extends('front.layout.app')


@section('content')

        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{asset('front/assets/img/hero/about.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>{{$pageTitle}}</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('front.welcome')}}">Home</a></li>
                                        <li class="breadcrumb-item"><a href="{{route('front.services')}}">Services</a></li>

                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? About Area Start -->
        <div class="about-low-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                              <div class="col-lg-6">
                                        <div class="select-items">
                                            <select name="select" id="select1">
                                                <option value=""><a href="{{route('front.educert')}}">Educational Certificate</a></option>
                                                <option value="">Business Certificate</option>
                                                <option value="">Birth & Death Certificate</option>
                                                <option value="">DVLA License / Certificate</option>
                                                <option value="">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    </div><br><br>
                         <div class="col-lg-6">
                                    <div class="select-items">
                                    Other Services
                                        <select name="select" id="select1">
                                            <option value="">Software for Business solutions</option>
                                            <option value="">Smart Computer laboratories</option>
                                            <option value="">Education / school management system</option>
                                            <option value="">Farm management system</option>
                                            <option value="">Hospital management system</option>
                                            <option value="">Computer Networking</option>
                                            <option value="">Computer Hardware and Repairs</option>
                                        </select>
                                    </div>
                                </div>
                 
                </div>
            </div>
        </div>
    
@stop
