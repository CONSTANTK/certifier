<!DOCTYPE html>
<html lang="en">
<head> 
 <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

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

label{
  font-size: 20px;
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
</head>
 <div form class="col-sm-8" align="center" value=>
<body >
<div class="panel panel-default">

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

    <div class="panel panel-header">
                    <div class="panel panel-heading" align="center" ><h6 style="font-size:20px">  
                    <b>Welcome To CERTI FIER</b></h6>

<h5  align="center" style="color:blue;" style="font-size:20px"><b>INSTITUTION REGISTRATION</b></h5>


<div class="form-group" align="center" >
        <label class="control-label col-sm-2" for="instname" ><b>Name of Institution:</b><em ></em></label> <br>
                <div class="col-sm-8" align="center" >            
            <input type="text" name="fname" size="50" id="inst name="" " required="true" class="form-control" value="Enter name of institution" autofocus/> <br>
            <br>
        </div>
 
        </div>
        <br>
        <div class="form-group" align="center">
        <label class="control-label col-sm-2" for="insID" ><b>Institution ID :</b><em ></em></label>
        <br>
        <div class="col-sm-8" align="center" >            
            <input type="text" name="instID" size="50" id="Institution id="
            required="true" class="form-control" value="Enter institution ID" /> 
        </div>
        <br>
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
        <div class="form-group" align="center">
        <label class="control-label col-sm-2" for="usrName" ><b>Username:</b><em ></em></label>
        <div class="col-sm-6" align="center" >            
            <input type="text" name="phone" size="50" id="Username" required="true" class="form-control" value="Select username" /> <br> <br>
        </div>
          <div class="form-group" align="center">
        <label class="control-label col-sm-2" for="pswd" ><b>Password:</b><em ></em></label>
        <div class="col-sm-6" align="center" >            
            <input type="password" name="pswd" size="50" style="color:blue" id="Password" required="true" class="form-control"/> <br>
  <br>
  <label class="control-label col-sm-2" for="pswd" ><b>Confirm Password:</b><em ></em></label>
  <div class="col-sm-6" align="center" >            
            <input type="password" name="phone" size="50" style="color:blue" id="Password" required="true" class="form-control"/> <br>
  </div>
  <div <a href="#" data-toggle="tooltip" title="Click to Register!"></DIV>
    <div class="form-group"> 
    <B>
    <br>

        <div class="col-sm-offset-6 col-sm-10" align="center">  
      <input  name="button"  style="color:GREEN"  type="Submit" size="40" font-style="bold" size="40" value="REGISTER" onClick="" <br><br><br>  
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
   </div>
   </div>

</form>
</body>

</html>
