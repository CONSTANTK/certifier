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
i{
  color:blue;
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
                    <b>Welcome To CERTFIER</b></h6>
                    <i>Please Login Here!!!</i><br><br>

<div class="input-group">
                        <span class="input-group-addon" >Username</span>
                        <input class="form-control" type="text" autofocus/>
                        
                    </div><br>  
                    <div class="input-group">
                        <span class="input-group-addon">Password</span>
                        <input class="form-control" type="password"/>
                        
                    </div><br>  
                    
                    <div class="input-group">
                            
                     </div><br>
                     <a href="entry form.html"><img src="login.png" height="60"></a><br/>
                     <a class="activ" href='{!! url('register'); !!}' style="color:red">Click here to register</a>
                      <div class="panel  panel-header" >
                          <i>
                          <div class=" panel panel-heading" style="font-color:red;" font-color="color:red" align="center"><h5 style=" font-size:17px;">Welcome to CERTFIER<br>Copyright@2017 </h5></div>
                          </i>
</form>
   </div>
   </div>

</form>
</body>

</html>
