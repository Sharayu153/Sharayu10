<?php
 $servername="localhost";
 $username="root";
 $password="";
 $databasename="decor_db";

 $conn=mysqli_connect($servername,$username,$password,$databasename);
// now check the connection
 if(!$conn)
 {
 	die("Connection Failed:" . mysqli_connect_error());
 }

 if(isset($_POST['save']))
 {	
      $name = $_POST['name'];
      $mobile = $_POST['mobile'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $requirement = $_POST['requirement'];
	 $sql_query = "INSERT INTO `decor` (`name`, `mobile`, `email`,`address`, `requirement`) VALUES ('$name', '$mobile','$email', '$address', '$requirement');";

	 if (mysqli_query($conn, $sql_query)) 
 	 {
     		echo "Submited successfully !";
 } 
 	 else
      {
 		echo "Error " . $sql_query . mysqli_error($conn);
 	 }
 	 mysqli_close($conn);
  
 }

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Creating Rooms You Love To Live In</title>
<meta NAME="generator" CONTENT="editplus">
<meta NAME="author" CONTENT="">
<meta NAME="keywords" CONTENT="">
<meta NAME="description" CONTENT="">
<link rel="stylesheet" href="callie.css">
    <link rel="stylesheet" href="https://fontawesome.com/v4/icons.css">
    <!--AOS-->
    <link href="http://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="http://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!--AOS-->
    <script>
        function stickMenu(){
            var sticky=document.getElementsById("sticky");
            if(window.pageYOffset > 20){
                sticky.classList.add("sticky");
                sticky.classList.remove("menu-ul");
        }
        else{
            sticky.classList.remove("sticky");
        }
            }

        window.onscroll= function(){
        stickyMenu ();
    }
            </script>
            </head>
    
    <body>
        
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      body {
  background-color: rgb(241, 245, 247);
}
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }
    
    .topnav {
      overflow: hidden;
      background-color: #333;
    }
    
    .topnav a {
      float: right;
      color: #877474;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }
    
    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }
    
    .topnav a.active {
      background-color: #04AA6D;
      color: white;
    }
    
    .topnav-right {
      float: right;
    }
    
    div.gallery {
      border: 1px solid #ccc;
    }
    
    div.gallery:hover {
      border: 1px solid #dcdada;
    }
    
    div.gallery img {
      width: 100%;
      height: auto;
    }
    
    div.desc {
      padding: 15px;
      text-align: center;
    }
    
    * {
      box-sizing: border-box;
    }
    
    .responsive {
      padding: 0 6px;
      float: left;
      width: 24.99999%;
    }
    
    @media only screen and (max-width: 700px) {
      .responsive {
        width: 49.99999%;
        margin: 6px 0;
      }
    }
    
    @media only screen and (max-width: 500px) {
      .responsive {
        width: 100%;
      }
    }
    
    .clearfix:after {
      content: "";
      display: table;
      clear: both;
    }
    </style>
    
        <a href="https://www.w3schools.com"></a>
        <div class="top-background">
            <div class="menu" id="sticky">
                
                <ul class="menu-ul">
                    <li><img src="img/D1.jpeg" alt="SCP"></li>
                    <li><a href="annie.html">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Designs</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Appointment</a></li>
                </ul>
            </div>

            
            <style>
                h1 {
                  text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
                }
                </style>
            <div class="page-title">Creating Rooms You Love To Live In
                <div class="description">
                    let us make your home heaven
                </div>
            </div>
          </div>

        
        <!--About us block-->
        <style>
          body {
      margin: 20px;
      text-align: center;
    }
  
    h1 {
      color: green;
    }
  
    img {
      float: left;
      margin: 5px;
    }
  
    p {
      text-align: justify;
      font-size: 25px;
    }
        </style>
        <div class="page-blocks">
          <div class="title" data-aos="fade-right">
             <b>ABOUT US</b>
              </div>
             
              <p> </p>
              <h3 style="text-align: center">INTERIOR DESIGN & STYLING</h3>
              DECORAL Design transforms houses into homes.</br> We create customized furniture, window treatments, soft goods, cabinetry/casework design, color schemes and finishes. We also partner with many talented artisans that help bring our design concepts to life.

              DECORAL Design carefully layers textures and finishes with custom color and specific pieces to create personalized, inviting and livable spaces. No design project is the same. Putting the individual needs of each homeowner, their distinct tastes, budget and timeline as a top priority, every design will focus on how spaces will actually be used.
              
              When needed, Ciatti Design goes beyond the design studio and collaborates with a team of vendors, artists, contractors and speciality artisans to ensure the success of every project.
           </div>
           <h4 style="text-align: center"></h4>
           <div class="flex-block">
            <div class="why-us-flex-item" data-aos="fade-up">
                <div class="block-label">
                    10 Years of experience
                </div>
                <div class="block-description"> our expert designers are well trained and equipped with the major mordern designs tools and innovative ideas that help us provide you with awesome and unique interior decor plans that stand out.
            </div>
                </div>
                <div class="why-us-flex-item" data-aos="fade-up">
                    <div class="block-label">
                        100%
                    Successful process
                    </div>
                    <div class="block-description"> Every year comes with an opportunity for our experts to hand over a beautiful decor to our happy customers. with their love and support we are able to come over many succesful projects .
                </div>
                    </div>
                    <div class="why-us-flex-item" data-aos="fade-up">
                        <div class="block-label">
                            Our Team
                        </div>
                        <div class="block-description"> Our Team always try to do their best and with lots of afforts so that our customers have faith and trust on us. we stand for giving the best services out there...
                    </div>
                    </div>
                    <div class="why-us-flex-item" data-aos="fade-up">
                        <div class="block-label">
                          Finished Projects
                        </div>
                        <div class="block-number"> 
                            200+
                    </div>
                        </div>
                    
            </div>
        </div>

<!--Our Design block-->
<div class="page-blocks">
  <div class="title" data-aos="fade-right">
      Our Designs
      </div>
      <style>
        * {
          box-sizing: border-box;
        }
        
        body {
          background-color: #fcf9f9;
          padding: 20px;
          font-family: Arial;
        }
        
        /* Center website */
        .main {
          max-width: 1000px;
          margin: auto;
        }
        
        h1 {
          font-size: 50px;
          word-break: break-all;
        }
        
        .row {
          margin: 10px -16px;
        }
        
        /* Add padding BETWEEN each column */
        .row,
        .row > .column {
          padding: 8px;
        }
        
        /* Create three equal columns that floats next to each other */
        .column {
          float: left;
          width: 33.33%;
          display: none; /* Hide all elements by default */
        }
        
        /* Clear floats after rows */ 
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        
        /* Content */
        .content {
          background-color: white;
          padding: 10px;
        }
        
        /* The "show" class is added to the filtered elements */
        .show {
          display: block;
        }
        
        /* Style the buttons */
        .btn {
          border: none;
          outline: none;
          padding: 12px 16px;
          background-color: rgb(241, 240, 240);
          cursor: pointer;
        }
        
        .btn:hover {
          background-color: #eee6e6;
        }
        
        .btn.active {
          background-color: #666;
          color: white;
        }
        </style>

        <!-- MAIN (Center website) -->
<div class="main">
  
  <div id="myBtnContainer">
    <button class="btn active" onclick="filterSelection('all')"> Show all</button>
    <button class="btn" onclick="filterSelection('living room')"> LIVING ROOM</button>
    <button class="btn" onclick="filterSelection('kitchen')"> KITCHEN</button>
    <button class="btn" onclick="filterSelection('dining room')"> DINING ROOM</button>
    <button class="btn" onclick="filterSelection('bedroom')"> BEDROOM</button>
    <button class="btn" onclick="filterSelection('washroom')">WASHROOM</button>
  </div>
  
  <!-- Portfolio Gallery Grid -->
  
<div class="design">
  <!--living-->
  <img src="img/5.jpg" data-aos="fade-up" style="width:200px;height:250px;"/>
  <img src="img/6.jpg" data-aos="fade-up" style="width:200px;height:250px;"/>
  <img src="img/7.jpg" data-aos="fade-up" style="width:200px;height:250px;"/>
  <img src="img/11.jpg" data-aos="fade-up" style="width:200px;height:250px;"/>
<!--kitchen-->
  <img src="img/52.jpg" data-aos="fade-up" style="width:200px;height:250px;"/>
  <img src="img/53.jpg" data-aos="fade-up" style="width:200px;height:250px;"/>
  <img src="img/55.jpg" data-aos="fade-up" style="width:200px;height:250px;"/>
  <img src="img/57.jpg" data-aos="fade-up" style="width:200px;height:250px;"/>
  <!--dining-->
  <img src="img/25.jpg" data-aos="fade-up" style="width:200px;height:250px;"/>
  <img src="img/27.jpg" data-aos="fade-up" style="width:200px;height:250px;"/>
  <img src="img/29.jpg" data-aos="fade-up" style="width:200px;height:250px;"/>
  <img src="img/31.jpg" data-aos="fade-up" style="width:200px;height:250px;"/>
 
   <!--bedroom-->
   <img src="img/13.jpg" data-aos="fade-up" style="width:200px;height:250px;"/>
   <img src="img/15.jpg" data-aos="fade-up" style="width:200px;height:250px;"/>
   <img src="img/16.jpg" data-aos="fade-up" style="width:200px;height:250px;"/>
   <img src="img/21.jpg" data-aos="fade-up" style="width:200px;height:250px;"/>
    <!--bathroom-->
    <img src="img/32.jpg" data-aos="fade-up" style="width:200px;height:250px;"/>
    <img src="img/34.jpg" data-aos="fade-up" style="width:200px;height:250px;"/>
    <img src="img/36.jpg" data-aos="fade-up" style="width:200px;height:250px;"/>
    <img src="img/37.jpg" data-aos="fade-up" style="width:200px;height:250px;"/>
</div>
<button class="more-designs-btn" data-aos="fade-up"> More Designs></button>
</div>


<!--Services block-->
<div class="page-blocks">
  <div class="title" data-aos="zoom-in">
      SERVICES
</div>
<div class="col-lg-6 col-md-6 col-12"></div>
<img src="img/49.jpg"  width="450px" height="350"></br>
<p> 
  

       <h3>How it works</br>
  We have nurtured strong personal relationships by working with some of the greatest names in the global interior design industry, and we built our experience on constant innovation during the process. Our expertise works through our high-view process:</br>
  
  1. Tell us all about your dream home. We’ll get to work on bringing it to life</br>
  2. You send us your interior design  project, ideas and specifications.</br>
  3. with all your suggestion our designer will blow your mind with inspo and ideas for transforming your space.</br>
  4.Tell us which design ideas you vibe with, and we’ll add all the beautiful finishing touches.</br>
  5.We take up to 3 business days to work through it.</br>
  6. Shop items from your design in one place, and we'll take care of the logistics. It's that simple..</br>
  7. We provide a complete and detailed product specification to make it real.</br></h3>
  </div>
  </div>
  
<!--Appointment block-->
<div class="page-blocks">
    <div class="title" data-aos="zoom-in">
        Appointment
</div>
<div class="flex-block">
    <div class="appointment-flex-item" data-aos="fade-right">
        <div class="appointment-img">
            <div class="appointment-text">
                Make An Appointment Today
            </div>
        </div>
    </div>
    </div>
<div class="appointment-flex-item" data-aos="fade-left">
    <div class="appointment-form">
    <form action="new.php" method="POST">
    <div class="appointment-form">
        <h1>MAKE APPOINTMENT</h1>
        <label for="name">Name:</label>
        <input type="text" placeholder="Name" name="name"/><br/>
        <label for="mobile">Mobile:</label>
        <input type="text" placeholder="Mobile" name="mobile"/><br/>
        <label for="email">Email:</label>
        <input type="text" placeholder="Email" name="email"/><br/>
        <label for="address">Address:</label>
        <input type="text" placeholder="Address" name="address"/><br/>
        <label for="requiremaent">Requirement:</label>
        <textarea type="text" placeholder="Requirement"name="requirement"></textarea><br/></br>
        <input name="save" type="submit" value="submit" id="submit">
            </div>
    
    </div>
</div>
    </div>
<!--footer block-->

<div class="footer">
    <div class="locations">
        <div>HYDERABAD LOCATION<br/>
            <div class="address">Street: 15-6-372,g-11, Begum Bazar<br/>Hyderabad</br>India<br/>call:987645323</div>
    </div>
</div>
    <div class="locations">
        <div>MUMBAI<br/>
            <div class="address">5/7, Vora Building, Sindhi Lane, C.p.tank<br/>Mumbai</br>India<br/>call:7786535458</div>
    </div>
</div>
    
    <div class="social-media-icons">
        <i class="fa fa-facebook" aria-hidden="true"></i>
        <i class="fa fa-twitter-square" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-twitter-square" aria-hidden="true"></i>
        <i class="fa fa-whatsapp" aria-hidden="true"></i>
</div>
</div>
<div class="copyrights"><i class="fa fa-copyright" aria-hidden="true"></i>All rights reserved</div>

</body>
        </html>


        <script>
            AOS.init({
                duration:1400,
            });
        </script>
