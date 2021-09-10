@extends('front.layout.app')


@section('content')

<header>
 <meta https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css>
  <meta https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js>
  <meta https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css>
  <meta https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js>


</header>
    <style type="text/css">

body {
    background: #eee
}

#regForm {
    background-color: #ffffff;
    margin: 0px auto;
    font-family: Raleway;
    padding: 40px;
    border-radius: 10px
}

h1 {
    text-align: center
}

input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa
}

input.invalid {
    background-color: #ffdddd
}

.tab {
    display: none
}

button {
    background-color: #4CAF50;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Raleway;
    cursor: pointer
}



button:hover {
    opacity: 0.8
}

#prevBtn {
    background-color: #bbbbbb
}

.step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5
}

.step.active {
    opacity: 1
}

.step.finish {
    background-color: #4CAF50
}

.all-steps {
    text-align: center;
    margin-top: 30px;
    margin-bottom: 30px
}

.thanks-message {
    display: none
}

 </style>

 <script type="text/javascript">
var currentTab = 0;
document.addEventListener("DOMContentLoaded", function(event) {


showTab(currentTab);

});

function showTab(n) {
var x = document.getElementsByClassName("tab");
x[n].style.display = "block";
if (n == 0) {
document.getElementById("prevBtn").style.display = "none";
} else {
document.getElementById("prevBtn").style.display = "inline";
}
if (n == (x.length - 1)) {
document.getElementById("nextBtn").innerHTML = "Submit";
} else {
document.getElementById("nextBtn").innerHTML = "Next";
}
fixStepIndicator(n)
}

function nextPrev(n) {
var x = document.getElementsByClassName("tab");
if (n == 1 && !validateForm()) return false;
x[currentTab].style.display = "none";
currentTab = currentTab + n;
if (currentTab >= x.length) {
// document.getElementById("regForm").submit();
// return false;
//alert("sdf");
document.getElementById("nextprevious").style.display = "none";
document.getElementById("all-steps").style.display = "none";
document.getElementById("register").style.display = "none";
document.getElementById("text-message").style.display = "block";




}
showTab(currentTab);
}

function validateForm() {
var x, y, i, valid = true;
x = document.getElementsByClassName("tab");
y = x[currentTab].getElementsByTagName("input");
for (i = 0; i < y.length; i++) { if (y[i].value=="" ) { y[i].className +=" invalid" ; valid=false; } } if (valid) { document.getElementsByClassName("step")[currentTab].className +=" finish" ; } return valid; } function fixStepIndicator(n) { var i, x=document.getElementsByClassName("step"); for (i=0; i < x.length; i++) { x[i].className=x[i].className.replace(" active", "" ); } x[n].className +=" active" ; }
 </script>


      
      <!-- MultiStep Form -->
 <section class="vh-100 gradient-custom">
   <div class="container py-5 h-100">
   <div class="row d-flex justify-content-center align-items-center h-100">
   
     <div class="card bg-dark text-white" style="border-radius: 1rem;" >

<div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
            <form id="regForm">
                <h1 id="register" style="color:black">Add Certificate</h1>
                <div class="all-steps" id="all-steps"> <span class="step"></span> <span class="step"></span> <span class="step"></span> <span class="step"></span> </div>
                <div class="tab">
                    <p>First name<input placeholder="Enter First name..." oninput="this.className = ''" name="fname"></p>
                    <p>Last name<input placeholder="Enter Last name..." oninput="this.className = ''" name="lname"></p>
                     <p>Other names<input placeholder="Enter Other names..." oninput="this.className = ''" name="oname" required="False"></p>
                     

                </div>
                <div class="tab">
                    <p>Date of Entry<input placeholder="Date of Entry..." type="date"  oninput="this.className = ''" name="edate"></p>
                    <p>Date of Completion<input placeholder="Date of Completion..." type="date"  oninput="this.className = ''" name="cdate"></p>
                    <p>Institution ID<input placeholder="Enter Institution ID" oninput="this.className = ''" name="instid"></p>
                    <p>Institution Name<input placeholder="Enter Institution Name" oninput="this.className = ''" name="instname"></p>
                </div>
                <div class="tab">
                    <p>Student ID / Index Number<input placeholder="Enter Student ID or Index number..." oninput="this.className = ''" name="stud-id"></p>
                    <p>Certificate Number<input placeholder="Enter Certificate Number..." oninput="this.className = ''" name="certnum"></p>
                </div>
                <div class="tab">

                   
                   <p>Upload Certificate: <input type="File" name="Picture" id="image" /></p><br/><br/>
                    
                    
                </div>
                 
                <div class="thanks-message text-center" id="text-message"> <img src="ok.jpg" width="100" class="mb-4">
                    <h3>Bravo! <br>Your Certificate has been successfully saved!!<br> Thank you for using CERTIFIER!!!</h3> 
                     <div class="form-group mt-3">
                            
                        </div>   
               
                <a href="{{route('front.addcert')}}"><button type="submit"   class="button button-contactForm boxed-btn" style="background-color:green" color="white">Add another certificate</a></button><br/>
                <p>OR </p>
                <a href="{{route('front.certveri')}}"><button type="submit"   class="button button-contactForm boxed-btn" style="background-color:green" color="white">Verify certificate</a></button>
              
                </div>
              
                </div>

                 
                <div style="overflow:auto;" id="nextprevious">
                    <div style="float:right;"> <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button> <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button> </div>
               
                </div><br>

            </form>

            <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>
              </div>
              <p class="mb-0" style="color:white">Have an account already? <a href="{{route('front.login')}}" class="text-white-50 fw-bold">Login Here</a></p>
            </div>
              </div>

        </div>
    </div>
</div>
</div>
</div>
</div>

</section>
@stop
