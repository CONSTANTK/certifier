
@extends('front.layout.app')


@section('content')

        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{asset('front/assets/img/hero/about.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>Add Certificates</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item"><a href="front.ce">Educational Certificates</a></li>

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
                             <div class="col-md-6">    
              <!--form starts here-->
              <form>
                 <div class=" panel panel-default">
                       <div class="panel  panel-header">
                          <div class=" panel panel-heading"  style=" background-color:#55f;" align="center"><h1 style=" font-size:20px;">CERTIFICATE ENTRY FORM</h1></div>
                       
                       </div>
                       <div align="center"

                       <div class=" panel panel-body">
                          <div class="input-group">
                              <span class="input-group-addon">First name</span>
                              <input class="form-control" type="text" autofocus />
                            </div><br/>

                            <div class="input-group">
                              <span class="input-group-addon">Last name</span>
                              <input class="form-control" type="text" />
                          </div><br/>
                          <div class="input-group">
                              <span class="input-group-addon">Other names</span>
                              <input class="form-control" type="text" />
                          </div><br/>
                          <div class="input-group">
                            <span class="input-group-addon"> Date of birth</span>
                            <input class="form-control" type="date"/>
                          </div><br>
                      <div class="input-group">
                        <span class="input-group-addon">Gender</span>
                         <select>
                              <b>
                             <option>Select gender</option>
                              <option>Male</option>
                             <option>Female</option>
                             <option>Other</option>
                             </b>
                    </div>
                     </select>
                    </div><br>
                   <div class="input-group">
                          <span class="input-group-addon"> Name of Institution</span>
                          <input class="form-control" type="text"/>
                   </div><br>
                   <div class="input-group">
                            <span class="input-group-addon"> Institution ID</span>
                            <input class="form-control" type="text"/>
                       </div><b><br>  
                        <div class="input-group">
                            <span class="input-group-addon"> Faculty / Department</span>
                            <input class="form-control" type="text"/>
                     </div><b><br>
                      <div class="input-group">
                        <span class="input-group-addon">Course / Course type</span>
                         <select>
                             <option>Select Program /Course Type</option>
                             <option>BA</option>
                            <option>BA Honours</option>
                            <option>BBA</option>
                            <option>BSc / BS</option>
                            <option>BSc / BS Hon.</option>
                            <option>BEd</option>
                            <option>BEng</option>
                            <option>BTech </option>
                            <option>Certificate</option>
                            <option>Diploma</option>
                            <option>DBE</option>
                            <option>DBS</option>
                            <option>HND Diploma</option>
                            <option>MA</option>
                            <option>MEd</option>
                            <option>MSc</option>
                            <option>MPhils</option>
                            <option>MRes</option>
                            <option>MTech</option>
                            <option>Post Graduate Certificated</option>
                            <option>Post Graduate Diploma</option>
                            <option>SSSCE / WASSCE</option>
                            <option>GCE "A" LEVEL</option>
                            <option>GCE "O" LEVEL</option>
                            <option>NVTI</option>
                    </div>
                     </select>
                    </div><br>
                     <div class="input-group">
                            <span class="input-group-addon"> Program Name /Title</span>
                            <input class="form-control" type="text"/>
                     </div><b><br>
                      <div class="input-group">
                            <span class="input-group-addon"> Index Number</span>
                            <input class="form-control" type="text"/>
                     </div><b><br>
                     <div class="input-group">
                            <span class="input-group-addon"> Certificate Number</span>
                            <input class="form-control" type="text"/>
                     </div><b><br>
                      <div class="input-group">
                        <span class="input-group-addon">Graduating Class</span>
                         <select>
                            <option>Select Graduating Class</option>
                            <option>First Class Honours</option>
                            <option>Second Class (Upper Division)</option>
                            <option>Second Class (Lower Division)</option>
                            <option>Third Class </option>
                            <option>Pass</option>
                            <option>Fail</option>
                            <option>Distinction</option>
                    </div>
                     </select>
                    </div><br>
                    <div class="input-group">
                            <span class="input-group-addon"> Date of entry</span>
                            <input class="form-control" type="date"/>
                     </div><b><br>
                     <div class="input-group">
                            <span class="input-group-addon">Date of completion</span>
                            <input class="form-control" type="date"/>
                     </div><b><br>
                     <div class="input-group">
                            <input class="form-control" type="button" value="Submit" align="center">
                     </div><br>
                     
                    <div class="panel  panel-header">
                           <i>
                          <div class=" panel panel-heading" style=" background-color:#55f; foreground-color:#fff;" align="center"><h3 style=" font-size:17px; foreground-color:red">Welcome to CERTFIER<br>Copyright@2017 </h3></div>
                          ></div>
                          </i>
                       </div>
                     </div><br>
                     

                 </div>
               </div>
              </div>

             </div>
                 </form>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-team mb-30 text-center">
                            <div class="team-img">
                                <img src="{{asset('front/assets/img/gallery/team2.png')}}" alt="">
                                <div class="team-caption">
                                    <h3><a href="#">Verify Certificates</a></h3>
            
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
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-team mb-30 text-center">
                            <div class="team-img">
                                <img src="{{asset('front/assets/img/gallery/team3.png')}}" alt="">
                                <div class="team-caption">
                                    <h3><a href="#">Add Certificate</a></h3>
                                    
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
                </div>
            </div>
        </div>
        <!-- Team Ara End -->
        
          </div>
        </div>
        <!-- Blog Area End -->

@stop
