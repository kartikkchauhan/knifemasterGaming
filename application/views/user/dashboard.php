<?php
     include('header.php');
?>

     <!-- BLOG HEADER -->
     <section id="blog-header" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
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
                    <div class="col-md-offset-1 col-md-5 col-sm-12">
                         <h2>Welcome <?= $info['name'];?>,<br><br>We welcome you to play pactice scrims for Underdog community.</h2>
                         <p style="color: white">NOTE *We recommend you to read rules and regulation before starting.* <a href="#rulesregulation" style="color: white"><b>Rules & Regulation</b></a></p>
                    </div>
                    
               </div>
          </div>
     </section>

     <section id="play" class="text-left" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Play Scrims</h2>
                              <span class="line-bar">...</span>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-6" id="div">
                         <!-- WORK THUMB -->
                         <h2>Register For Underdog Scrim #1</h2>
                         <div class="work-thumb">
                              <h4 id="regMsg1" class="alert alert-danger">Registration are closed.</h4>
                              <h4>Timings</h4>
                              <p>Registration Start : 05:00 PM (IST) <br>Registration End : 07:00 PM (IST)<br> Room Id & Password : 09:45 PM (IST) <br>Match Start At : 10:05 PM (IST)</p>
                              <h4>Total Slots : 24</h4>
                              <h4>Slots Left : <?= $chartInfo1['slots_left'] ?></h4>
                              <?php
                                   if ($regInfo1=="yes") 
                                   {
                                        # code...
                              ?>
                                   <h4 class="alert alert-success">You have already registered for today's tournament.</h4>

                                   <?php
                                        if ($idPass1['res']=="false") {
                                             # code...
                                   ?>
                                        <p><b><?=$idPass1['msg']?></b></p>
                                   <?php
                                        }
                                        else 
                                        {
                                             # code...
                                        foreach ($idPass1['result'] as $key) {
                                             # code...
                                       
                                   ?>
                                        <p>
                                        <b>Room ID :</b><?=$key['room_id']?><br>
                                        <b>Password:</b><?=$key['password']?></br>
                                   </p>
                                   <?php
                                        }
                                        }
                                   ?>
                                   
                              <?php
                                   }
                                   else
                                   {
                              ?>
                              <form action="<?= BASE_URL ?>users/scrim1" method="post" id="scrim1">
                                   <input type="text" class="form-control" name="teamName" placeholder="Enter Your Team Name" value="<?= $info['teamName'] ?>" required>
                                   <input type="submit" style="width: 150px; margin-top: 20px; height: 50px;" class="form-control btn btn-primary" name="submit" value="Register">
                              </form>
                              <?php
                                   }
                              ?>
                              <h4>Join Community (Underdog Scrim #1)</h4>
                              <p>Whatsapp :  <a href="https://chat.whatsapp.com/IgC8MvklpBj9HpscZ3aX4o" target="_blank" style="color: green;"> <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></a>
                              <br>

                              Instagram : <a href="https://www.instagram.com/knife_master_gaming/" target="_blank" style="color: rgb(131,58,180);"><i class="fa fa-instagram fa-2x"></i></a>
                              <br>
                              Youtube : <a href="https://www.youtube.com/channel/UCNRW3JjfEmGW0W9_R1WnElQ" style="color: rgb(253,29,29);" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
                              </p>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- WORK THUMB -->
                         <h2>Register For Underdog Scrim #2</h2>
                         <div class="work-thumb">
                              <h4 id="regMsg2"  class="alert alert-danger">Registration are closed now.</h4>
                              <h4>Timings</h4>
                              <p>Registration Start : 05:00 PM (IST) <br>Registration End : 07:00 PM (IST)<br> Room Id & Password : 10:45 PM (IST) <br>Match Start At : 11:05 PM (IST)</p>
                              <h4>Total Slots : 24</h4>
                              <h4>Slots Left : <?= $chartInfo2['slots_left'] ?></h4>
                              <?php
                                   if ($regInfo2=="yes") 
                                   {
                                        # code...
                              ?>
                                   <h4  class="alert alert-success">You have already registered for today's tournament</h4>
                                   <?php
                                        if ($idPass2['res']=="false") {
                                             # code...
                                   ?>
                                        <p><b><?=$idPass2['msg']?></b></p>
                                   <?php
                                        }
                                        else 
                                        {
                                             # code...

                                        foreach ($idPass2['result'] as $key) {
                                             # code...
                                        

                                   ?>
                                        <p>
                                        <b>Room ID :</b><?=$key['room_id']?><br>
                                        <b>Password:</b><?=$key['password']?></br>
                                   </p>
                                   <?php
                                        }
                                        }
                                   ?>
                              <?php
                                   }
                                   else
                                   {
                              ?>
                              <form action="<?= BASE_URL ?>users/scrim2" method="post" id="scrim2">
                                   <input type="text" class="form-control" name="teamName" placeholder="Enter Your Team Name" value="<?= $info['teamName'] ?>" required>
                                   <input type="submit" style="width: 150px; margin-top: 20px; height: 50px;" class="form-control btn btn-primary" name="submit" value="Register">
                              </form>
                              <?php
                                   }
                              ?>
                              <h4>Join Community (Underdog Scrim #2)</h4>
                              <p>Whatsapp :  <a href="https://chat.whatsapp.com/IgoxL4pKua020nMZhDBf0M" target="_blank" style="color: green;"> <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></a> 
                              <br>

                              Instagram : <a href="https://www.instagram.com/knife_master_gaming/" target="_blank" style="color: rgb(131,58,180);"><i class="fa fa-instagram fa-2x"></i></a>
                              <br>
                              Youtube : <a href="https://www.youtube.com/channel/UCNRW3JjfEmGW0W9_R1WnElQ" style="color: rgb(253,29,29);" target="_blank"><i class="fa fa-youtube fa-2x"></i></a>
                              </p>
                              
                         </div>
                    </div>

               </div>
          </div>
     </section>

     <section id="slotchart" class="text-left" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Slots Chart</h2>
                              <span class="line-bar">...</span>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- WORK THUMB -->
                         <h2>Slots For Underdog Scrim #1</h2>
                         <div class="work-thumb" id="slots1">
                              <?php
                                   if ($slotList1['res']=='false') {
                                        # code...
                              ?>
                                   <h4  class="alert alert-danger"><?= $slotList1['msg'] ?></h4>
                              <?php
                                   }
                                   else
                                   {


                              ?>
                              <table border="1" style="width: 100%" class="text-center">
                                   <tr>
                                        <th class="text-center">
                                             Team Name
                                        </th>
                                        <th class="text-center">
                                             Slots
                                        </th>
                                   </tr>
                                   <?php foreach ($slotList1['result'] as $key): ?>
                                        
                                   
                                   <tr>
                                        <td class="text-center">
                                             <?= $key['team_name'] ?>
                                        </td>
                                        <td class="text-center">
                                             <?= $key['slots'] ?>
                                        </td>
                                   </tr>

                                   <?php endforeach ?>
                              </table>
                              <?php
                                   }
                              ?>
                         </div>
                         <h4 id="chartMsg1">Slots chart will unlock after 05:00 PM (ISD).</h4>
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- WORK THUMB -->
                         <h2>Slots For Scrim #2</h2>
                         <div class="work-thumb" id="slots2">
                              <?php
                                   if ($slotList2['res']=='false') {
                                        # code...
                              ?>
                                   <h4  class="alert alert-danger"><?= $slotList2['msg'] ?></h4>
                              <?php
                                   }
                                   else
                                   {


                              ?>
                              <table border="1" style="width: 100%" class="text-center">
                                   <tr>
                                        <th class="text-center">
                                             Team Name
                                        </th>
                                        <th class="text-center">
                                             Slots
                                        </th>
                                   </tr>

                                   <?php foreach ($slotList2['result'] as $key): ?>
                                        
                                   
                                   <tr>
                                        <td class="text-center">
                                             <?= $key['team_name'] ?>
                                        </td>
                                        <td class="text-center">
                                             <?= $key['slots'] ?>
                                        </td>
                                   </tr>

                                   <?php endforeach ?>

                              </table>
                              <?php
                                   }
                              ?>
                         </div>
                         <h4 id="chartMsg2">Slots chart will unlock after 05:00 PM (ISD).</h4>
                    </div>

               </div>
          </div>
     </section>
     <!-- Rules & Regulation -->
     <section id="rulesregulation" class="text-left" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row d-inline">

                    <div class="col-md-12 col-sm-6">
                         <div class="about-info">
                              <div class="section-title">
                                   <h2>Rules & Regulation</h2>
                                   <span class="line-bar">...</span>
                              </div>
                              <p><b>1. </b>Slots are not reserved for any team you have to register daily to play scrims.</p>
                              <p><b>2. </b>These scrims are practice scrims.</p>
                              <p><b>3. </b>Room id and password is shared with only that member who has registerd the team. Your will receive Room ID Passwprd in your email or after signing in into knifemaster gaming.</p>
                              <p><b>4. </b>Teams can't Backoff after registration.</p>
                              <p><b>5. </b>If you found any bug in our website please dont forget to contact us.</p>
                              <p><b>6. </b>If anyone caught using hacks or doing cheating, the whole team has to pay ₹(Rupee)1000 otherwise we have to take some legal action against that team.</p>
                              <p><b>7. </b>Dont waste slots. If any team register a slot and failed to join has to pay the panelty of ₹(Rupee)2000 after 3 warning in a row. </p>
                              <p><b>8. </b>Please Support us and we will support your team to get good achivements. </p>
                              <p><b>9. </b>Please don't share ID Password of room with anyone. </p>
                              <p><b>10. </b>Teams will be promoted on the basis of team performance. </p>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>

<?php
     include('footer.php');
?>

<script>
     $(document).ready(function() {

          var dt = new Date();
          var time = dt.getHours();
          var s_time=17;
          var e_time=19;
          if ((time >= s_time) && (time < e_time) ) 
          {
               $('#regMsg1').hide();
               $('#regMsg2').hide();
               $('#scrim1').show();
               $('#scrim2').show();

               
          }
          else
          {
               $('#scrim1').hide();
               $('#scrim2').hide();
          }

          var s1_time=17;
          var e1_time=24;

          if ((time >= s1_time) && (time < e1_time) ) 
          {
               $('#chartMsg1').hide();
               $('#chartMsg2').hide();
               $('#slots1').show();
               $('#slots2').show();
          }
          else
          {
               $('#slots1').hide();
               $('#slots2').hide();
          }

          

          
     });
</script>