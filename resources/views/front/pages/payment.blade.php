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
                            <h2>Register</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Register</a></li>
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
                                            <span class="input-group-addon" >First Name:</span>
                                            <input class="form-control" type="text" size="20" autofocus/>
                                    </div><br> 
                                     <div class="input-group">
                                            <span class="input-group-addon" >Middle Name:</span>
                                            <input class="form-control" type="text" size="20" />
                                    </div><br>  
                                     <div class="input-group">
                                            <span class="input-group-addon" >Username:</span>
                                            <input class="form-control" type="text" size="20" autofocus/>
                                    </div><br> 

                                    <div class="input-group">
                                            <span class="input-group-addon">Password:</span>
                                            <input class="form-control" type="password" size="10" />
 
                                    </div><br>  
                                      
                                    <div class="input-group">
                                            <span class="input-group-addon">Confirm Password:</span>
                                            <input class="form-control" type="password" size="10" />
 
                                    </div><br> 
                                    <div class="header-right-btn d-none d-lg-block ml-20" align="center">
                                   <button type="submit" class="btn header-btn" style="background-color:green;"> Register</a></button> 
                               
                    </div>
                                    <div class="input-group">
                            
                     </div><br>
                   
                      <div class="panel  panel-header" >
                          <i>
                          <div class=" panel panel-heading" style="font-color:red;" font-color="color:red" align="center"><h5 style=" font-size:17px;">Welcome to CERTFIER<br>Copyright@2017 </h5></div>
                          </i>

                       </div>
                     </div><br/>
                                    
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
