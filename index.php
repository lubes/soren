<?php include("inc_header.php");?>
<body class="soren_west">
<header>
    <div class="container">
        <a class="brand" href=""></a>
        <nav class="nav-primary">
            <ul class="list-unstyled">
                <li><a rel="relativeanchor" href="#about">ABOUT</a></li>
                <li><a rel="relativeanchor" href="#contact">CONTACT</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="intro doc inview-item">
    <div class="section-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                    <div class="section-entry smaller">
                        <h1>We exist to create authentic human engagement, evoke the joy of living, and play a significant role in<br>
                            <a href="#" data-toggle="modal" data-target="#definitionModal" class="large-link">The Age of Experience<sup>®</sup></a></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-5 col-lg-3">
                    <div class="section-entry section-link">
                        <h5><a href="http://sorenwest.studio" target="_blank">STUDIO</a></h5>
                        <h6>We develop and produce original experiential programs and content.</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-5 col-lg-3">
                    <div class="section-entry section-link">
                        <h5><a href="http://sorenwest.agency" target="_blank">AGENCY</a></h5>
                        <h6>We offer access to the best creative talent in entertainment and brand communications.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="s_mark p_el sec_1" data-scroll="-10"><img src="<?php echo $uri_link;?>/assets/images/huge_mark.svg" class="img-fluid" /></div>
</section>

<section class="about doc" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                <div class="section-entry section-img">
                    <figure class="soren-img">
                        <img src="<?php echo $uri_link;?>/assets/images/sketch.jpg" class="img-fluid" />
                    </figure>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                <div class="section-entry about-desc">
                    <h1 class="heading">Soren West</h1>
                    <p>Soren West is a consultant and executive producer advising brands, creatives, and producers of live events for entertainment and experiential marketing.</p>
                    <p>His 20+ years of experience include work with the biggest names in touring entertainment and brands such as Turner, Viacom, A&E, CBS, iHeart Media, Live
                    Nation, AEG, the NFL, Nike, and several icons of Silicon Valley.</p>
                    <p>Through 2016, Soren served as CEO of ATOMIC, a live events business, where he drove that company’s growth in offices across the globe. As an executive producer under the ATOMIC banner, West oversaw large projects for major brands, festivals, television, and sporting events.</p>
                    <p>He was a founding partner of Beame Lighting (originally Atomic Lighting,) which was sold to 4Wall in 2016, and a founding contributor to Rock Lititz.</p>
                    <p class="bold">“I believe we are on the precipice of a new era in entertainment driven by creative talent, empowered by new technologies. As the film industry was one hundred years ago, so we are today in the age of experience.”</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact doc inview-item" id="contact">
    <div class="section-wrap last">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-5 col-lg-7">
                    <div class="section-entry smaller">
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
                        <a href="http://sorenwest.studio" class="link" target="_blank">sorenwest.studio</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <div class="section-entry section-link">
                        <a href="http://sorenwest.agency" class="link" target="_blank">sorenwest.agency</a>
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
