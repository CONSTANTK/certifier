<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Senyam</title>

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
    <div class="panel panel-heading" align="center"><h6 style="font-size:20px"><b>  
                    Welcome To CERTFIER</b></h6>
      <div class="input-group">
      <span class="input-group-addon">Services Options</span>
      <select>
      <option>Select service</option>
      <option>Educational</option>
      <option>Business</option>
      <option>Birth and Death</option>
      <option>DVLA</option>
       </select>
       </div>
    <br><br>
    <ul>
      <li> 
            <a class="activ" href='{!! url('payment'); !!}'>Services</a>
            </li>
      <li> 
      <a href="#Educational">Educational</a>
      </li>
      <li> 
      <a href="#Business">Business</a>
      </li>
      <li> 
      <a href="#BirthAndDeath">Birth and Death </a>
      </li>
      <li> 
      <a href="#DVLA">DVLA</a>
      </li>
    </ul>

    <div class="panel panel-header">
    <H6 align="center" style="color:red;" >Welcome to CERTIFIER</title></H6>
        </i>
        <h5 align="center" style="color:red">Copyright@2017</h5>
</form>
                     
     <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                
    <div class="ml-12">
  <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">

 
 
         
        </body>
        
</html>