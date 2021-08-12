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
                            <h2>Add Certificate</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('front.welcome')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('front.addcert')}}">Add Certificate</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
              <!--form starts here-->
              <form >
                 <div class=" panel panel-default">
                       <div class="panel  panel-header">
                      
                         <div class="panel panel-heading" align="center"><h1 style="font-size:15px">
                          <div class=" panel panel-heading" align="center"><h1 style=" font-size:20px;">CERTIFICATE ENTRY FORM</h1></div>
                       
                       </div>
                       <div class="input-group">
                           
                     </div><b><br>
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
                     <form action="upload.php" method="post" enctype="multipart/form-data">
                     Picture: <input type="File" name="Picture" id="image" /><br/><br/>
                    <input type="submit" value="Upload Picture" name="submit">
                    </form>
                    <form action="upload.php" method="post" enctype="multipart/form-data"><br/>
                    Certificate: <input type="File" name="Certificate" id="image" />
                    <input type="submit" value="Upload Certificate" name="submit">
                    </form>
                       <div class="input-group">
                     <div class="header-right-btn d-none d-lg-block ml-20" align="center">
                    <button type="submit" class="btn header-btn" style="background-color:green;"><a href="{{route('front.dashboard')}}"> Save</a></button> 
                               
                    </div><br>

                 </div>
               </div>
              </div>

             </div>
                
               
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
             
@stop
