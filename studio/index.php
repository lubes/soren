<?php include("inc_header.php");?>
<body>
<header>
    <div class="container">
        <a class="brand" href=""></a>
        <nav class="nav-primary">
            <ul class="list-unstyled">
                <li><a rel="relativeanchor" href="#studio">STUDIO</a></li>
                <li><a rel="relativeanchor" href="#projects">PROJECTS</a></li>
                <li><a rel="relativeanchor" href="#contact">CONTACT</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="intro doc inview-item" id="soren" data-color="#f1f1f1">
    <div class="section-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                    <div class="section-entry">
                        <h1>We exist to create authentic human engagement, evoke the joy of living, and play a significant role in<br>
                            <a href="#" data-toggle="modal" data-target="#definitionModal" class="large-link">The Age of Experience<sup>®</sup></a></h1>
                    </div>
                </div>
            </div>
            <div class="section-entry" id="studio">
                <h1 class="heading">Studio</h1>
                <h2>We develop original entertainment properties and experiential programming that delight and engage audiences. We build partnerships with brands, investors, municipalities, real estate owners and promotors to bring developed projects to market.</h2>
            </div>
        </div>
    </div>
    <div class="s_mark p_el sec_1" data-scroll="10"><img src="<?php echo $uri_link;?>/assets/images/huge_mark.svg" class="img-fluid" /></div>
</section>

<section class="projects doc" id="projects"  data-color="#363636">
    <div class="section-wrap">
        <div class="container">
            <h1 class="heading">Projects</h1>
            <div class="row">
            <?php $movies = array ("Good Hustle", "High Attitude", "How About Now",  "Sensorium", " Dream Screen", "Thursday at<br>Noon", "Elephant Ride", "Jackalope<br>Hunter", "Sugar it's Eli");  
            foreach ( $movies as $title ){ ?>     
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="project">
                        <span>WINNER</span>
                        <h3 class="project-title"><?php echo $title;?></h3>
                        <a href="#" data-toggle="modal" data-target="#login">LOGIN</a>
                    </div>
                </div>                
            <?php } ?> 
            </div>

        </div>
</section>

<section class="contact doc inview-item" id="contact_sec" data-color="#f1f1f1">
    <div class="section-wrap last">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-5 col-lg-7">
                    <div class="section-entry smaller" id="contact">
                        <h1 class="heading">Contact</h1>
                        <ul class="contact-info list-unstyled">
                            <li><a href="mailto:hello@sorenwest.com">hello@sorenwest.com</a></li>
                            <li>310.387.7235</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <div class="section-entry section-link">
                        <a href="http://sorenwest.com" class="link" target="_blank">sorenwest.com</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <div class="section-entry section-link">
                        <a href="http://sorenwest.agency/" class="link" target="_blank">sorenwest.agency</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Soren West LLC</p>
        </div>
    </footer>
    <div class="s_mark p_el sec_2" data-scroll="-10"><img src="<?php echo $uri_link;?>/assets/images/huge_mark.svg" class="img-fluid" /></div>
</section>
        
<!-- Modal -->
<div class="modal loginModal" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <button type="button" class="close_modal" data-dismiss="modal" aria-label="Close">
          <img src="<?php echo $uri_link;?>/assets/images/close.svg" class="img-fluid" />
        </button>
      <div class="modal-body">
        <h3>Login</h3>
          <form class="faux-login">
          <input type="password" class="form-control" placeholder="enter password" />
              <div class="error_msg">Incorrect Password</div>
          <input type="submit" class="btn btn-primary" value="GO">
            </form>
      </div>
    </div>
  </div>
</div>
    
<!-- Definition Modal -->
<div class="modal fullModal" id="definitionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="container">
            <button type="button" class="close_modal" data-dismiss="modal" aria-label="Close">
                <img src="<?php echo $uri_link;?>/assets/images/close_light.svg" class="img-fluid" />
            </button>
            <div class="modal-body">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-11 offset-lg-1">
                    <h1>The Age of Experience<sup>®</sup></h1>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-9 offset-lg-2">
                    <div class="section-entry">
                        <p>Today collective experiences have revolutionary value. We are living in an age of heightened connectivity, and somehow, unprecedented isolation.</p>
                        <p class="bold">Your audience seeks meaningful moments above all.</p>
                        <p>This is a time of rich opportunity for experience chasers and experience creators as well as for brands and real estate holders. Expect new and compelling experiences - born of our need to gather and share, enabled by new technology and new approaches to storytelling craft. </p>
                        <p>This is The Age of Experience!</p>
                    </div>
                </div>
            </div>
            </div>         
        </div>
    </div>
  </div>
</div>

<?php include ("inc_footer.php");?>
