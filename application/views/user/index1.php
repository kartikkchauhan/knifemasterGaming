<?php
	include('header.php');
?>
     <!-- HOME -->
     
     <section id="home" data-stellar-background-ratio="0.5">
          <div class="overlay" id="overlayClass"></div>

          <div class="container">
               <div class="row">
                    <?php
                         if ($this->session->flashdata('message')) 
                         {
                        ?>
                        <p class="alert alert-danger text-center" style="color: black; font-weight: bold; font-size: 20px" ><?= $this->session->flashdata('message') ?></p>
                        <?php
                         }
                        ?>
                    <div class="col-md-6 col-sm-12">
                         <div class="home-info">
                              <h1>We make Your Beautiful Dreams Come true.</h1>
							  <h1>On a Road To Become India's no.1 eSports Platform.</h1>
                              <a href="#" data-toggle="modal" data-target="#modal-form" class="btn section-btn smoothScroll">Create Your Team</a>
                              <span>
                                   Email US: support@knifemastergaming.in
                                   <small>For any inquiry</small>
                              </span>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="home-video">
                              <div class="embed-responsive embed-responsive-16by9">
                                   <iframe src="https://www.youtube.com/embed/QeaZ1yIKnOs" frameborder="0" allowfullscreen></iframe>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>

     
     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row d-inline">

                    <div class="col-md-5 col-sm-6">
                         <div class="about-info">
                              <div class="section-title">
                                   <h2>Let us introduce</h2>
                                   <span class="line-bar">...</span>
                              </div>
                              <p>Knifemaster Gaming Is The Youtube Channel Started By The Two Members Of Team 5Digits Gaming Abhishek Chauhan And kartik Chauhan Our In-game Names are Sparrow and Dragon.</p>
                              <p>Later We Decided To Create Owr Own Gaming Community So That We can Support The New And Struggling Teams. We Created The Community And Named It Underdog eSports In Which We Are Curently Supporting New PUBG Mobile Teams To Make Carrier In This Evolving eSports World.</p>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="about-info skill-thumb">
							<div class="section-title">
                                   <h2>PUBG Mobile</h2>
                                   <span class="line-bar">...</span>
                              </div>
                              <strong>Total Teams</strong>
                                   <span class="pull-right">120</span>
                                        <div class="progress">
                                             <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                        </div>

                              <strong>Tier 1 Teams</strong>
                                   <span class="pull-right">16</span>
                                        <div class="progress">
                                             <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                        </div>

                              <strong>Tier 2 teams</strong>
                                   <span class="pull-right">16</span>
                                        <div class="progress">
                                             <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                        </div>

                              <strong>Total Customs Created</strong>
                                   <span class="pull-right">204</span>
                                        <div class="progress">
                                             <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="204" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                        </div>

                         </div>
                    </div>
					
					<div class="col-md-4 col-sm-12">
						<div class="section-title">
						   <h2>CEO / Managers</h2>
						   <span class="line-bar">...</span>
						</div>
						<div class="col-md-6 col-sm-12">
							
							 <div class="about-image text-center">
								  <img src="<?= BASE_URL; ?>images/dragon.jpg" class="img-responsive" alt="Abhisheak Chauhan">
								  <h4>Abhisheak 'Dragon' Chauhan</h4>
							 </div>
						</div>
						<div class="col-md-6 col-sm-12">
							 <div class="about-image text-center">
								  <img src="<?= BASE_URL; ?>images/sparrow.jpg" class="img-responsive" alt="Kartik Chauhan">
								  <h4>Kartik 'Sparrow' Chauhan</h4>
							 </div>
						</div>
					</div>
                    
               </div>
          </div>
     </section>


  
     <!-- WORK -->
     <section id="squads" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Top Squads</h2>
                              <span class="line-bar">...</span>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="<?= BASE_URL; ?>images/1.jpg" class="image-popup">
                                   <img src="<?= BASE_URL; ?>images/1.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <h3>Team Rowdy</h3>
                                        <small>From India</small>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="<?= BASE_URL; ?>images/2.jpg" class="image-popup">
                                   <img src="<?= BASE_URL; ?>images/2.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <h3>Team Flank & Dye</h3>
                                        <small>From India</small>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="<?= BASE_URL; ?>images/3.jpg" class="image-popup">
                                   <img src="<?= BASE_URL; ?>images/3.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <h3>Core Clan</h3>
                                        <small>From India</small>
                                   </div>
                              </a>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <!-- WORK THUMB -->
                         <div class="work-thumb">
                              <a href="<?= BASE_URL; ?>images/4.jpg" class="image-popup">
                                   <img src="<?= BASE_URL; ?>images/4.jpg" class="img-responsive" alt="Work">

                                   <div class="work-info">
                                        <h3>Team SHELD Official</h3>
                                        <small>From India</small>
                                   </div>
                              </a>
                         </div>
                    </div>

               </div>
          </div>
     </section>

    

     
<?php
	include('footer.php');
?>