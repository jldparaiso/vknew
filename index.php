<?php include "./partials/header.php";?>



  <body>
    <div id="parallax-container">
      <div class="parallax-image container-fluid" style="background: #0c0c0c;"></div>
      <div class="parallax-image container-fluid" style="background: url(./images/parallax-layer-3.png);"></div>
      <div class="parallax-image container-fluid" style="background: url(./images/parallax-layer-2.png);"></div>
      <div class="parallax-image container-fluid" style="background: url(./images/parallax-layer-1.png);"></div>

      <div class="header">

        <a class="logo" href="index.php" title="Villains Kitchen"><img src="./images/vk-logo.png" width="51" height="39" alt="Villain's Kitchen"/></a>
        <input type="checkbox" id="chk">
        <label for="chk" class="show-menu-btn">
          | MENU |
        </label>

        <ul class="menu">
          <li id="closeMenu"><label for="chk" class="hide-menu-btn" style="font-family: 'Open Sans', sans-serif; font-weight: 300;">
            Close <i class="fas fa-times text-white"></i>
          </label></li>
          <li><a href="index.php#our-work">Work</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="about.php#services">Services</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div id="home" class="container">
        <div class="hero-text">
          <h1 style="font-size: 60px; line-height: normal;"><span style="font-size: 34px; font-family: 'NorwesterRegular';">WE CREATE</span>
          INTUITIVE &<br />
          IMMERSIVE<br />
          EXPERIENCES<br /></h1>
          <p id="intro">Villains Kitchen is an independent design & development consultancy based in Los Angeles. Our focus has always been the work, the people who create it, and the people we create it for.</p>
          <p id="intro">We are a friendly bunch. Why don't you step inside?</p>
        </div>
        <div class="featured-container">
          <div class="featured-label font-weight-bold font-italic">featured...</div>
          <div class="featured"><img src="./images/featured-1.jpg" /></div>
          <div class="featured"><img src="./images/featured-2.jpg" /></div>
          <div class="featured"><img src="./images/featured-3.jpg" /></div>
        </div>
        <div class="row" style="">
          <div class="col-md-12"><a class="button" href="#our-work" style="font-family: 'AGaramondPro-BoldItalic';"><img src="./images/btn-white.png"></a></div>
        </div>
      </div>
    </div>


    <div id="our-work" class="container-fluid m-0 p-0" >
      <div class="container">
        <div class="col-md-4 mx-auto title pt-4">
          <h2 style="font-size: 85px;">Our Work</h2>
          <div class="separator"></div>
          <p id="intro">Villains Kitchen is led by strategy, influenced by design, and inspired by technology.</p>
        </div>
        <div class="col-md-10 mx-auto works pb-4">
          <div class="row">

            <div class="thumb-box col-md-6">
              <a data-toggle="modal" data-target="#myModal1">
              <img class="thumb-img" src="./images/thumb1.jpg" data-toggle="modal" data-target="#myModal1"/>
              <div class="overlay">
                <div class="plus"><img src="./images/pluscontrol.png"></div>
              </div>
            </a>
            </div>

            <div class="thumb-box col-md-6">
              <a data-toggle="modal" data-target="#myModal2">
              <img class="thumb-img" src="./images/thumb2.jpg" data-toggle="modal" data-target="#myModal2"/>
              <div class="overlay">
                <div class="plus"><img src="./images/pluscontrol.png"></div>
              </div>
            </a>
            </div>

            <div class="thumb-box col-md-6">
              <img class="thumb-img" src="./images/thumb3.jpg" />
              <div class="overlay">
                <div class="plus"><img src="./images/pluscontrol.png"></div>
              </div>
            </div>

            <div class="thumb-box col-md-6">
              <img class="thumb-img" src="./images/thumb4.jpg" />
              <div class="overlay">
                <div class="plus"><img src="./images/pluscontrol.png"></div>
              </div>
            </div>

            <div class="thumb-box col-md-6">
              <img class="thumb-img" src="./images/thumb5.jpg" />
              <div class="overlay">
                <div class="plus"><img src="./images/pluscontrol.png"></div>
              </div>
            </div>

            <div class="thumb-box col-md-6">
              <img class="thumb-img" src="./images/thumb6.jpg" />
              <div class="overlay">
                <div class="plus"><img src="./images/pluscontrol.png"></div>
              </div>
            </div>

            <div class="thumb-box col-md-6">
              <img class="thumb-img" src="./images/thumb7.jpg" />
              <div class="overlay">
                <div class="plus"><img src="./images/pluscontrol.png"></div>
              </div>
            </div>

            <div class="thumb-box col-md-6">
              <img class="thumb-img" src="./images/thumb8.jpg" />
              <div class="overlay">
                <div class="plus"><img src="./images/pluscontrol.png"></div>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>


          
<?php include "./partials/modal.php";?>
<?php include "./partials/footer.php";?>



