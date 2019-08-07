<?php include "./partials/header.php";?>


<body style="background-color: #fff;">
    
    <div class="header" style="background-color: #fff;">

        <a class="logo" href="index.php" title="Villains Kitchen"><img src="./images/vk-logo.png" width="51" height="39" alt="Villain's Kitchen" style="filter:invert(100%);" /></a>
        <input type="checkbox" id="chk">
        <label for="chk" class="show-menu-btn" style="color:black;">
          | MENU |
        </label>

        <ul class="menu">
          <li><a href="#our-work">Work</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Contact</a></li>
          <li id="closeMenu"><label for="chk" class="hide-menu-btn" style="font-family: 'Open Sans', sans-serif; font-weight: 300;">
            Close <i class="fas fa-times"></i>
          </label></li>
        </ul>
      </div>

    <div id="about" class="container-fluid m-0">
    <div id="about-cont1" class="container mt-5 border border-0 py-0">
      <div class="row">
        <div class="col-3 mt-5">
          <h1 style="font-family: 'NorwesterRegular'; font-size: 85px; line-height: 1; font-weight: bold; color: #000;">WHO WE ARE</h1>
        </div>
        <div class="col-3"></div>
        <div class="col-6 mt-5">
          <p class="lead" style="font-family: 'Open Sans', sans-serif; font-size: 35px; font-weight:400; color: black;">VillainsKitchen is an independently owned creative agency founded in 2015 and currently located in Los Angeles. </p>

          <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: black;">A multi-disciplined set of Creatives and Technologists who create ideas for our clients. Our work often blends mixtures of ideas and craft wrapped around extremely engaging stories that deliver results. We are the stewards of a new way of thinking. A diverse team who share an obsession with consumer understanding, the power of ideas and its craft.</p>

          <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: black;">We are fans of everything we touch build lasting relationship with our clients, and the happiest when we're immersed in creating great work with incredible partners.
          </p>
          
        </div>
      </div>
    </div>   
    </div>
    
      

    <div id="abt-img" class="text-center" style="background-color: transparent; position: relative; top: 400px;">
      		<img id="about-img" class="img-fluid" src="./images/about-img.png">
      	</div>

      <div class="container-fluid p-0" style="background:#000;  position: relative; top: 400px;">
      <div id="about-contents" class="container pb-5" >
        <div class="col-3 pl-5 text-white">
          <h1 style="font-family: 'NorwesterRegular'; font-size: 85px; line-height: 1; font-weight: bold;">WHAT WE DO</h1>
        </div>
        <div class="row px-3">
          <div class="col-4 p-5">
            <p class="lead" style="font-family: 'Open Sans', sans-serif; font-size: 35px; color: #ff0000;">Design</p>
            <p class="text-white" style="font-family: 'Open Sans', sans-serif; font-size: 16px; font-weight:300;">The heart and soul of our offering. We put a lot of passion and effort to deliver outstanding projects which will please your eyes.</p>
            <ul class="text-white pl-3"  style="font-family: 'Open Sans', sans-serif; font-size: 16px; font-weight:300;">
              <li>Website Design</li>
              <li>Mobile Design</li>
              <li>User Experience/Interface (UX + UI)</li>
              <li>Identity & Branding</li>
              <li>Social Content</li>
              <li>Posters & Illustrations</li>
              <li>Packaging</li>
              <li>Keyart</li>
              <li>Video Production & Editing</li>
              <li>Motion Graphics & Animation</li>
            </ul>
            
          </div>
          <div class="col-4 p-5">
            <p class="lead" style="font-family: 'Open Sans', sans-serif; font-size: 35px; color: #ff0000;">Technology</p>
            <p class="text-white" style="font-family: 'Open Sans', sans-serif; font-size: 16px; font-weight: 300;">Our technology team represents a wide array of backgrounds and is dedicated to unlocking the creative freedom of our UX and Design teams. Our server-side development team is well versed in a variety of commercial and open-source platforms and evaluates and selects the best tool to meet current and future needs.</p>
            <ul class="text-white pl-3"  style="font-family: 'Open Sans', sans-serif; font-size: 16px; font-weight: 300;">
              <li>Web & Mobile Development</li>
              <li>Systems Integration</li>
              <li>eCommerce</li>
              <li>Search Engine Optimization</li>
              <li>Solution Architecture</li>
              <li>Posters & Illustrations</li>
              <li>Prototyping</li>
              <li>Application Development</li>
            </ul>
            
          </div>
          <div class="col-4 p-5">
            <p class="lead" style="font-family: 'Open Sans', sans-serif; font-size: 35px; color: #ff0000;">Strategy</p>
            <p class="text-white" style="font-family: 'Open Sans', sans-serif; font-size: 16px; font-weight: 300;">Every effort begins with an assessment of the challenge to ensure that the agency and key stakeholders are aligned with regards to objectives and definitions of program success. 
            </p>
            <ul class="text-white pl-3"  style="font-family: 'Open Sans', sans-serif; font-size: 16px; font-weight: 300;">
              <li>Customer Experience Strategy</li>
              <li>Digital Transformation</li>
              <li>Brand Strategy</li>
              <li>e-Commerce</li>
              <li>Digital Identity</li>
              <li>Technical Strategy</li>
            </ul>
            
          </div>
        </div>

        <div class="col-4 pl-5 pt-5 text-white">
          <h1 style="font-family: 'NorwesterRegular'; font-size: 85px; line-height: 1; font-weight: bold;">BRANDS & CLIENTS</h1>
        </div>

        <div class="container-fluid text-center px-5">
            <img class="pt-5 img-fluid" src="./images/about-logos.png" style="max-width: 100%;">
        </div>
        
      </div>
   
</div>



    <div class="footer py-5 mt-0" style="background:#000; position: relative; top: 400px;">
      <div class="row">
        <div class="col-md-12 py-5">
          <img src="./images/vk-logo.png" width="22" alt="Villains Kitchen" />
          <p class="copyright">&copy; 2019 Villains Kitchen LLC. All rights reserved.</p>
        </div>
      </div>
    </div>
  </body>

