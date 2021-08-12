@extends('front.layout.app')


@section('content')
    <!--? slider Area Start-->
    <div class="slider-area ">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center"
             data-background="{{asset('front/assets/img/hero/about.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap">
                            <h2>Dashboard</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('front.welcome')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('front.dashboard')}}">Dashboard</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
                                  
                                           
                                
                <script>
                    function initMap() {
                        var uluru = {
                            lat: -25.363,
                            lng: 131.044
                        };
                        var grayStyles = [{
                            featureType: "all",
                            stylers: [{
                                saturation: -90
                            },
                                {
                                    lightness: 50
                                }
                            ]
                        },
                            {
                                elementType: 'labels.text.fill',
                                stylers: [{
                                    color: '#ccdee9'
                                }]
                            }
                        ];
                        var map = new google.maps.Map(document.getElementById('map'), {
                            center: {
                                lat: -31.197,
                                lng: 150.744
                            },
                            zoom: 9,
                            styles: grayStyles,
                            scrollwheel: false
                        });
                    }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
                </script>

            </div>
            
       @csrf
         <div class="container">
            <div class="row" style="  margin:20px;">
                <div class="col-md-3">
                </div>
                      <div class="col-md-6">  

                         <form>
                            <div class="panel panel-default">
                                <div class="panel panel-header">
                                    <div class="panel panel-heading" align="center"><h1 style="font-size:15px">  
                                    Welcome To CERTFIER</h1><br/>
                                     
                
                                    <div class="input-group">
                                    
                                    <div class="header-right-btn d-none d-lg-block ml-20" align="center">
                                   <button type="submit" class="btn header-btn" style="background-color:green;"><a href="{{route('front.addcert')}}"> Add Certificate</a></button> 
                               
                    </div><br><br><br>
                     <div class="panel panel-default">
                                <div class="panel panel-header">
                                    <div class="input-group">
                                        <div class="header-right-btn d-none d-lg-block ml-20" align="center">
                                   <button type="submit" class="btn header-btn" style="background-color:green;"><a href="{{route('front.certveri')}}"> Verify Certificate</a></button> 
                               
                    </div>
                    </div>
                    </div>
                            
                     </div><br>
                   
                                            
                     <div class="col-md-3"> 
                </form>

                       </div>
                       </div> 
                </div>
            </div>     
       
      </form>
                                                                                                                                                                                                                                  
    </section>
    <!-- ================ contact section end ================= -->
@stop
