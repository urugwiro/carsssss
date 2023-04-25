<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome.min.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.js"></script>
    <title>Document</title>
    <style>
        nav ul li
        {
            padding-left: 50px;
        }

        body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
    width: 100%;
    
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  

  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
 
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }

  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }

  #section_img
  {
    margin-bottom: 20px;
    cursor: pointer;
    
  }
    </style>
</head>
<body>
<!-- A vertical navbar -->
<nav  style="opacity: 0.6; backdrop-filter:blur(200px); " class="navbar navbar-expand-sm bg-light justify-content-center  fixed-top">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#pricing">Pricing</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#demo">Demo</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#order">Order Your Car</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#about">About Us</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#contact">Contact</a>
    </li>
  </ul>

</nav>

<div class="jumbotron  justify-content-center bg-dark">
<div style="background: #444; background-color: #000; " id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li> 

    </ul>
    <div class="carousel-inner ">
        <div  class="carousel-item active">
            <img     style="width: 89em; height: 30em; opacity: calc(0.3);" src="map.jpg">
            <div class="carousel-caption"> 

                <big><h1 style=" color: aqua;">KENDY CARS CAMPANY</big>
                <h1>Online car selling <br>garanted cars with low price.<br/>
                <h3>Starting From $20,000 You Start The Road</h3>
            </div>
        </div>
    
     
    </div>
</div>
</div>









<!-- Container (Pricing Section) -->
<div id="pricing" class="jumbotron bg-white">
  <div class="text-center">
    <h2>Pricing</h2>
    <h4>Choose a payment plan that works for you</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Weekely</h1>
        </div>
        <div class="panel-body">
          <p><strong>$2500</strong> euro</p>
          <p><strong>$5000</strong> pound</p>
          <p><strong>2500$</strong> Dollor</p>
          <p><strong>$2000</strong> rwf</p>
          <p><strong>Endless</strong>shilings</p>
        </div>
        <div class="panel-footer">
          <h3>$12000</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Monthly</h1>
        </div>
        <div class="panel-body">
          <p><strong>$3000</strong>euro</p>
          <p><strong>$2900</strong> paund</p>
          <p><strong>$10,000</strong> Dollor</p>
          <p><strong>$75000</strong> rwf</p>
          <p><strong>Endless</strong>shilings </p>
        </div>
        <div class="panel-footer">
          <h3>$22900</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Annualy</h1>
        </div>
        <div class="panel-body">
          <p><strong>$40,000</strong> euro</p>
          <p><strong>$55000</strong> paund</p>
          <p><strong>$30,000</strong> Dollor</p>
          <p><strong>15000</strong> rwf</p>
          <p><strong>Endless</strong> shilings</p>
        </div>
        <div class="panel-footer">
          <h3>$14500</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>    
  </div>
</div>






      
<div id="demo" class="jumbotron bg-white">
    <center><h1 style="color: coral;">Store Demostration</h1></center>
    <div class="row">
        <div style="margin-left: 47px; margin-top: 120px; border-radius: 10px;" class="col">
           <a href="audi.php"> <img  style="border-radius: 10px; width: 280px; cursor: pointer;"  src="audi.jpg" alt="" srcset=""></a>
            <center><h5>AUDI<br/><h6>rorce A37<br />$300,000</h6></h5></center>
        </div>
        <div style="margin-left: 47px; margin-top: 120px; border-radius: 10px;" class="col">
        <a href="bmw.php"><img  style="border-radius: 10px; width: 280px; cursor: pointer;" src="bmw.jpg" alt="" srcset=""></a>
        <center><h5>B.M.W(british moto warks)<br/><h6>A37 crory<br />$500,000</h6></h5></center>
        </div>
        <div style="margin-left: 47px; margin-top: 120px; border-radius: 10px;" class="col">
        <a href="cadillac.php"><img  style="border-radius: 10px; width: 280px; cursor: pointer;" src="cadillac.jpg" alt="" srcset=""></a>
        <center><h5>CADILLAC<br/><h6>cadillac  black poison<br />$3000,000</h6></h5></center>
        </div>
        <div style="margin-left: 47px; margin-top: 120px; border-radius: 10px;" class="col">
        <a href="ford.php"><img style="border-radius: 10px;  width: 280px; cursor: pointer;"  src="ford.jpg" alt="" srcset=""></a>
        <center><h5>FORD<br/><h6>all star<br />$100,000</h6></h5></center>
        </div>
        <div style="margin-left: 47px; margin-top: 120px; border-radius: 10px;" class="col">
        <a href="lambo.php"><img style="border-radius: 10px;  width: 280px; cursor: pointer;"  src="lambo.jpg" alt="" srcset=""></a>
        <center><h5>LAMBORGIN<br/><h6>urus 17kr<br />$1500,000</h6></h5></center>
        </div>
        <div style="margin-left: 47px; margin-top: 120px; border-radius: 10px;" class="col">
       <a href="rolls.php"> <img style="border-radius: 10px;  width: 280px; cursor: pointer;"  src="rolls.jpg" alt="" srcset=""></a>
        <center><h5>ROSE ROYCE<br/><h6>GHOST<br />$2500,000</h6></h5></center>
        </div>
        <div style="margin-left: 47px; margin-top: 120px; border-radius: 10px;" class="col">
        <a href="suv.php"><img style="border-radius: 10px;  width: 280px; cursor: pointer;"  src="suv.jpg" alt="" srcset=""></a>
        <center><h5>S.U.V<br/><h6>(amercan queen)<br />$200,000</h6></h5></center>
        </div>
        <div style="margin-left: 47px; margin-top: 120px; border-radius: 10px;" class="col">
        <a href="toyota.php"><img style="border-radius: 10px;  width: 280px; cursor: pointer;"  src="toyota.jpg" alt="" srcset=""></a>
        <center><h5>TOYOTA<br/><h6>L4,V8<br />$15000</h6></h5></center>
        </div>
        <div style="margin-left: 47px; margin-top: 120px; border-radius: 10px;" class="col">
        <a href="mercedes.php"><img style="border-radius: 10px;  width: 280px; cursor: pointer;"  src="mercedes benz/IMG_8651.PNG" alt="" srcset=""></a>
        <center><h5>MARCIDES BENZ<br/><h6>brabus<br />$500,000</h6></h5></center>
        </div>
    </div>
</div>

<div id="order" class="jumbotron bg-white">
    <center><h2>Order Your Favolite car with your favorite color</h2></center>
   <form action="">
   <div class="form-group">
        <label for="firstname">Firts Name</label>
        <input style="color: white;" type="text" class="form-control bg-dark" name="Fname" placeholder="Firt Name">
    </div>

    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input style="color: white;" type="text" name="Lname" id="" class="form-control bg-dark" placeholder="Last Name">
    </div>

    
    <div class="form-group">
        <label for="lastname">Email Address</label>
        <input style="color: white;" type="text" name="Lname" id="" class="form-control bg-dark" placeholder="email@gmail.com">
    </div>

    
    <div class="form-group">
        <label for="lastname">Phone Number</label>
        <input style="color: white;" type="text" name="Lname" id="" class="form-control bg-dark" placeholder="+250 783183517">
    </div>

    
    <div class="form-group ">
        <label for="lastname">Car Name</label>
        <input style="color: white;" type="text" name="Lname" id="" class="form-control bg-dark" placeholder="Benz Mercedes">
    </div>

    <button class="btn btn-success" type="submit">Submit</button>
   </form>
</div>





<!-- Container (About Section) -->
<div id="about" class="jumbotron bg-white">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Company Page</h2><br>
      <h4>our campany has good services and goals to achieve and we are so proud of our self and we wish to make our customer happy.</h4><br>
      <p>welcome to our campany we have so much to give and show you if you trust us .</p>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="jumbotron bg-white">
  <div class="row">
    <div class="col-sm-4">
      <div class="row vertical">
        <div   class="col-md-6">
          <img id="section_img" src=""width="150px" alt="" srcset="">
          <img id="section_img" src=""width="150px" alt="" srcset="">
        </div>
        <div  class="col-md-6">
          <img id="section_img" src="IMG_8687.JPG" width="150px" alt="" srcset="">
          <img id="section_img" src="IMG_8740.JPG" width="150px" alt="" srcset="">
        </div>
        <div  class="col-md-6">
          <img id="section_img" IMG_8705.JPG srcIMG_8688.JPG150px width="150px" alt="" srcset="">
        </div>
        <div id="section_img" class="col-md-6">
          <img id="section_img" src="IMG_8754.JPG" width="150px" alt="" srcset="">
        </div>
        <div class="col-md-6">
          <img id="section_img" src="IMG_8708.JPG" width="150px" alt="" srcset="">
        </div>
        <div  class="col-md-6">
          <img id="section_img" src="rolls.jpg" width="150px" alt="" srcset="">
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> our mission is to provide good services to our customers  </h4>                          
      <p><strong>VISION:</strong> Our vision is to take our company to another level </p>
    </div>
  </div>
</div>



<!-- Container (Portfolio Section) -->
<div id="portfolio" class="jumbotron text-center bg-grey">
  <h2>Portifolio</h2><br>
  <h4>What we have created</h4>

  
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot,loyal,</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<!-- Container (Contact Section) -->

  <h2 id="contact" class="text-center">CONTACT</h2>
  <div class=" row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>LOS ANGELOS,CALFORNIA, US</p>
      <p><span class="glyphicon glyphicon-phone"></span>+250 786409475,+1 236686868</p>
      <p><span class="glyphicon glyphicon-envelope"></span>murwanashyakauluat12@gmail.com</p>
    </div>
   
</div>

<!-- Image of location/map -->
<img src="map.jpg" class="jumbotron bg-white" style="width:100%">




</body>
</html>