<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Certifier</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
<style>
li{
  list-style-type: none;
}

a{
  text-decoration: none;
}

nav{
  width: 100vw;
}

nav{
  width: 100vw;
  background-color: #D6EFFF;
}

ul{
  margin: 0;
  padding: 0;
}

body{
  margin: 0;
}

ul{
  margin: 0;
  padding: 0;
  
  /*this option by default dispose the elements in a row (flex-direction: row)*/
  display: flex;
}

li{
  list-style-type: none;  
  
  /*when I specify 2 values to margin, the first one is for the top and bottom side, the second for the left and right side*/
  margin: 0 2vw;
}

li{
  list-style-type: none;  
  margin: 0 2vw;
  /* our font-size will be 3% of the height of the viewport */
  font-size: 3vh;
}

a{
  text-decoration: none;
  
  /*below I changed the color*/
  color: black;
  /*I added some padding*/
  padding: 2vw;
  /*also changed the font family but that's totally irrelevant*/
  font-family: monospace;
}

a:hover{
  background-color: #C6E9FF;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.navbar {
  overflow: hidden;
  background-color: #333; 
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: white;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: white;
  foreground-color:Black;
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}

</style>
 <script type="text/javascript">
    $("document").ready(function(){
  $("button").click(function(){
      if($("button").text() == "☰"){
  $("button").text("✖");
}else{        
  $("button").text("☰");      
}
  });
});

    $("li").toggle("slow");
    </script>
</style>
        
    </head>
    <body class="antialiased">
    <nav>
        
        <ul>
            <li> 
            <a class="activ" href='{!! url('index'); !!}'>Home</a>
            </li>
            <li> 
            <a class="activ" href='{!! url('about'); !!}'>About Us</a>
            </li>
            <li> 
            <a class="activ" href='{!! url('contact'); !!}'>Contact Us</a>
            </li>
            
            <li> 
            <a class="activ" href='{!! url('ourservices'); !!}'>Our Services</a>
            </li>
    
             <li> 
            <a class="activ" href='{!! url('register'); !!}'>Register</a>
            </li>

            <li> 
            <a class="activ" href='{!! url('user_login'); !!}'>Login</a>
            </li>
        </ul>
    </nav>

    <h6 align="center" style="font-size:20px"><b>Welcome To CERTIFIER</b></h6>
     

<h5  align="center" style="color:blue;" style="font-size:20px"><b>INSTITUTION REGISTRATION</b></h5>


<div class="form-group" align="center" >
        <label class="control-label col-sm-2" for="fname" ><b>First Name:</b><em ></em></label> <br>
                <div class="col-sm-8" align="center" >            
            <input type="text" name="fname" size="50" id="first name="" " required="true" class="form-control" value="Enter first name" autofocus/> <br>
            <br>
        </div>
        <div class="form-group" align="center" >
        <label class="control-label col-sm-2" for="mname" ><b>Middle Name:</b><em ></em></label> <br>
                <div class="col-sm-8" align="center" >            
            <input type="text" name="mname" size="50" id="middle name="" " required="false" class="form-control" value="Enter middle name" /> <br>
            <br>
        </div>
        <div class="form-group" align="center" >
        <label class="control-label col-sm-2" for="lname" ><b>Last Name:</b><em ></em></label> <br>
                <div class="col-sm-8" align="center" >            
            <input type="text" name="lname" size="50" id="last name="" " required="true" class="form-control" value="Enter last name" /> <br>
            <br>
        </div>
 
        </div>
        <br>
        <div class="form-group" align="center">
        <label class="control-label col-sm-2" for="studID" ><b>Student ID Number :</b><em ></em></label>
        <br>
        <div class="col-sm-8" align="center" >            
            <input type="text" name="instID" size="50" id="student id="" required="true" class="form-control" value="Enter index number" />
          <br>
                   
      
        </div>
        <br>
        <div class="form-group" align="center">
        <label class="control-label col-sm-2" for="certnum" ><b>Certificate Number :</b><em ></em></label>
        <br>
                  
            <input type="text" name="certID" size="50" id="cert id="" required="true" class="form-control" value="Enter certificate number" /> 
        </div><br>
        <div class="form-group" align="center">
        <label class="control-label col-sm-2" for="mailID" ><b>E-mail Address</b><em >:</em></label>
        <div class="col-sm-6" align="center" >            
            <input type="text" name="email" size="50" id="E-mail Address="" " required="true" class="form-control" value="Enter email address" /> 
        </div>
        <br>
        <div class="form-group" align="center">
        <label class="control-label col-sm-2" for="phone" ><b>Telephone Number :</b><em ></em></label>
        <div class="col-sm-6" align="center" >            
            <input type="text" name="phone" size="50"  id="Telephone Number" required="true" class="form-control" value="Enter phone number" /> <br> <br>
        </div>
        <div class="col-sm-6" align="center" > 
        <label class="control-label col-sm-2" for="department" ><b>Faculty / Department :</b><em ></em></label> 
        </div>          
        <input type="text" name="faculty" size="50" id="Faculty / Department="" " required="true" class="form-control" value="Enter Faculty / Department" /> 
        </div>
        <br> 
         <div class="col-sm-6" align="center" >  
         <label class="control-label col-sm-2" for="course" ><b>Course Title :</b><em ></em></label>
         </div>
            <input type="combo" name="course" size="50" id="Course title="" " required="true" class="form-control" value="Enter course title" /> 
        </div>
        <br>
         <div class="col-sm-6" align="center" > 
        <label class="control-label col-sm-2" for="phone" ><b>Course type :</b><em ></em></label>
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
          </select>
          </div><br>
             <div class="col-sm-6" align="center" >  
         <label class="control-label col-sm-2" for="gradclass" ><b>Graduating class :</b><em ></em></label>
       <select>
              <option>Select Graduating Class</option>
              <option>First Class Honours</option>
              <option>Second Class (Upper Division)</option>
              <option>Second Class (Lower Division)</option>
              <option>Third Class </option>
              <option>Pass</option>
              <option>Fail</option>
              <option>Distinction</option>
        
      </select>
     </div><br>
                    <div class="input-group">
                            <span class="input-group-addon"><b> Date of entry</b></span>
                            <input class="form-control" type="date"/>
                     </div><b><br>
                     <div class="input-group">
                            <span class="input-group-addon">Date of completion</span>
                            <input class="form-control" type="date"/>
                     </div><b><br>
                     <form action="upload.php" method="post" enctype="multipart/form-data">
   Student's Picture: <input type="File" name="Picture" id="image" /><br/><br/>
   <br>
  
   Upload Certificate: <input type="File" name="Picture" id="image" /><br/><br/>
   <input type="submit" value="Submit" name="submit">
   </form>
                      <br>
  
       Already registered?<a href='{!! url('user_reg'); !!}' style="color:green"> Click here to add a user</a>       
              <i><br><br>
              OR
              
    <br><br>  
       <a href='{!! url('user_login'); !!}' style="color:green">Click here to login</a>       
              <i>
        <H4 align="center" style="color:red;">Welcome to CERTIFIER</title></H4>
        </i>
        <h6 align="center" style="color:red">Copyright@2017</h6>
</form>
                     
     <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                
    <div class="ml-12">
  <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">

 
 
         
        </body>
        
</html>