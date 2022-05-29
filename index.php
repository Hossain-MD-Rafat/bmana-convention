<?php include("./include/header.php"); ?>

<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://icircles.app/api/convension/home/168');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$result = json_decode($response);
curl_close($ch);

$ms_id = $result->data->ms_id;
$front_section = $result->data->front_sections;
$news = $result->data->news;
$foot_nav = $result->data->foot_nav;
$sponsors = $result->data->sponsors;
$main_nav = $result->data->main_nav;
$no_position = $result->data->no_position;
$ms_info = $result->data->ms_info;
$sliders = $result->data->sliders;
$_SESSION['ms_id'] = $ms_id;
//$_SESSION['user_id'] = $user_id;

?>
`

<!--          Banner Part Start
        *****************************************-->
   <section>
     <div class="banner_main">
            <div class="banner_slider">
            <video  autoplay muted loop id="myVideo">`
          <source src="./images/icfai.mp4" type="video/mp4">
          </video>
            </div>
          <div class="container">
               <div class="banner_wrapper">
                     <div class="row">    `
                           <div class="col-lg-10">
                             <div class="banner_wrap text-center">
                               <div class="banner_text">
                                    <h4>Welcome to <span>New York</span></h4>
                                    <h5>BMANA CONVENTION 2022</h5>
                              </div>
                              <div class="register_btn">
                                   <a href="#registration">Register Now</a>
                              </div>
                              <div class="offer">
                                <ul>
                                  <li class="demo1Bg"><h5 id="demo1"></h5></li>
                                  <li class="demo2Bg"><h5 id="demo2"></h5></li>
                                  <li class="demo3Bg"><h5  id="demo3"></h5></li>
                                  <li class="demo4Bg"><h5 id="demo4"></h5></li> 
                                </ul> 
                              </div>
                           </div>
                       </div>
                    </div>
               </div>
          </div>
     </div>
   </section>
<!--          BAanner Part End
     *****************************************-->

<!--          News  Part Start
     *****************************************-->
     <section>
          <div class="news">
               <div class="container">
                    <div class="row">
                         <div class="col-lg-12 text-center">
                              <div class="section_header">
                                   <span>Latest News</span>
                            </div>
                         </div>
                    </div>
                    <div class="news_wrapper">
                         <div class="row">

                         <?php foreach (array_slice($news, 0,1) as $key => $item) { ?>
                              <div class="col-lg-7">
                                   <div class="news_wrap">
                                        <img src="./images/news1.jpg" alt="" class="left_img">
                                        <div class="newsImg_overly">
                                             <div class="img_inner">
                                                  <h4><?= $item->news_headline ?></h4>
                                                  <h5><?= substr(strip_tags($item->news_body),0,150); ?> ...</h5>
                                                  <h6><?= $item->date ?></h6>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         <?php } ?>

                              <div class="col-lg-5">
                               <?php foreach (array_slice($news, 1,3) as $key => $item) { ?>
                                   <div class="news_wrap mb-3">
                                        <img src="./images/news2.jpg" alt="" class="right_img">
                                        <div class="newsImg_overly">
                                             <div class="img_inner">
                                                  <h4><?= $item->news_headline ?></h4>
                                                  <h5><?= substr(strip_tags($item->news_body),0,100); ?> ...</h5>
                                                  <h6><?= $item->date ?></h6>
                                             </div>
                                          </div>
                                        </div>
                                      
                                   <?php } ?>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>
<!--          News Part End
     *****************************************-->
<!--          Look Back  Part Start
     *****************************************-->  
     <section>
          <div class="lookBack">
               <div class="container">
                    <div class="row">
                         <div class="col-lg-12 text-center">
                              <div class="section_header">
                                   <span>Look Back</span>
                            </div>
                         </div>
                    </div>
               </div>
               <div class="lookBack_wrapper">
                     <div class="container">
                         <div class="row">
                              <div class="col-lg-8">
                                   <div class="back_wrap">
                                        <img src="./images/back.jpg" alt="">
                                          <div class="back_overly">
                                               <div class="back_icon">
                                                 <a href="#"> <i class="fa-solid fa-circle-play"></i></a>
                                               </div>
                                          </div>
                                   </div> 
                              </div>
                              <div class="col-lg-4">
                                   <div class="text_item">
                                   <h4>Lorem ipsum dolor sit ame</h4>
                                   <h5>november 27 2021</h5>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus viverra maecenas accumsan lacus vel facilisis. et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus viverra maecenas accumsan lacus vel facilisis. </p>
                                   </div>
                              </div>
                         </div>
                     </div>
               </div>
          </div>
     </section>      
<!--          Look Back  Part End
     *****************************************--> 
<!--           Registration  Part start
     *****************************************--> 
<section id="registration">
     <div class="registration">
           <div class="container">
               <div class="row">
                    <div class="col-lg-12 text-center">
                         <div class="section_header">
                              <span>Registration</span>
                       </div>
                    </div>
               </div>
                <div class="registration_wrapper">
                    <div class="row">
                         <div class="col-sm-6 col-md-4 col-lg-3">
                              <div class="registration_wrap">
                                   <i class="fa-solid fa-user"></i>
                                   <h5> Attendence Registration</h5>
                                   <a href="attendenceForm.php" target="_blank"><button type="button" class="btn btn-dark" data-bs-toggle="modal"   data-bs-target="#attendenceModal" data-bs-whatever="@mdo">Register Now</button></a>
                              </div>
                         </div>
                         <div class="col-sm-6 col-md-4 col-lg-3">
                              <div class="registration_wrap">
                                   <i class="fa-solid fa-hand-holding-hand"></i>
                                   <h5> Sponser  Registration</h5>
                                   <button type="button" class="btn btn-dark" data-bs-toggle="modal"   data-bs-target="#attendenceModal2" data-bs-whatever="@mdo">Register Now</button>
                              </div>
                         </div>
                         <div class="col-sm-6 col-md-4 col-lg-3">
                              <div class="registration_wrap">
                                   <i class="fa-solid fa-registered"></i>
                                   <h5> Exhibitor Registration </h5>
                                   <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#attendenceModal3" data-bs-whatever="@mdo">Register Now</button>
                              </div>
                         </div>
                         <div class="col-sm-6 col-md-4 col-lg-3">
                              <div class="registration_wrap">
                          <i class="fa-solid fa-hotel"></i>
                                   <h5> Hotel <br> Reservation</h5>
                                  <a href="https://www.marriott.com/event-reservations/reservation-link.mi?app=resvlink&id=1651176183920&key=GRP" target="_blank"> <button type="button" class="btn btn-dark" >Book Now</button></a>
                              </div>
                         </div>
                    </div>
                </div>
           </div>
     </div>
</section>


<!--           Sponsor  Part Start
     *****************************************--> 
<section>
     <div class="sponsor">
          <div class="container">
               <div class="row">
                    <div class="col-lg-12 text-center">
                         <div class="section_header">
                              <span>CONVENTION SPONSORS</span>
                       </div>
                    </div>
               </div>
               <div class="sponsor_wrapper">
                    <div class="row mt-5">

                    <?php foreach ($sponsors as $key => $item) { ?>

                         <div class="col-sm-6 col-md-4 col-lg-3 text-center">
                              <div class="sponsor_wrap">
                              <!-- <span><?= $item->sponsor_name ?></span> -->

                              <img src="<?= "https://icircles.app/"."/". $item->sponsor_logo ?>" alt="">
                              </div>
                         </div>
                                      
                         <?php } ?>

                    </div>
               </div>
          </div>
     </div>
</section>
<!--           Sponsor  Part End
     *****************************************--> 
<!--           Mena bazar  Part Start
     *****************************************--> 
<section>
     <div class="menabazar">
          <div class="container">
               <div class="row">
                    <div class="col-lg-12 text-center">
                         <div class="section_header">
                              <span>MEENA  BAZAR</span>
                       </div>
                    </div>
               </div>
               <div class="meanbazar_wrapper">
                   <div class="p_text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                   </div>
                    <div class="row mt-5">
                         <div class="col-md-6 col-lg-3">
                              <div class="bazar_card">
                                    <div class="card_img">
                                         <img src="images/news1.jpg" alt="">
                                    </div>
                                    <div class="card_text text-center">
                                         <h4>Sari Collection</h4>
                                         <p>Lorem ipsum dolor sit amet,adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                         <a href="#">Reed More</a>
                                    </div>
                              </div>
                         </div>
                         <div class="col-md-6 col-lg-3">
                              <div class="bazar_card">
                                    <div class="card_img">
                                         <img src="images/news2.jpg" alt="">
                                    </div>
                                    <div class="card_text text-center">
                                         <h4>Panjabi Collection</h4>
                                         <p>Lorem ipsum dolor sit amet,adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                         <a href="#">Reed More</a>
                                    </div>
                              </div>
                         </div>
                         <div class="col-md-6 col-lg-3">
                              <div class="bazar_card">
                                    <div class="card_img">
                                         <img src="images/news3.jpg" alt="">
                                    </div>
                                    <div class="card_text text-center">
                                         <h4>Churi Collection</h4>
                                         <p>Lorem ipsum dolor sit amet,adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                         <a href="#">Reed More</a>
                                    </div>
                              </div>
                         </div>
                         <div class="col-md-6 col-lg-3">
                              <div class="bazar_card">
                                    <div class="card_img">
                                         <img src="images/news2.jpg" alt="">
                                    </div>
                                    <div class="card_text text-center">
                                         <h4>Matier Hari Collection</h4>
                                         <p>Lorem ipsum dolor sit amet,adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                         <a href="#">Reed More</a>
                                    </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>

<!--           Mena bazar  Part End
     *****************************************-->
<!--           Picnic  Part Start
     *****************************************--> 
<section>
     <div class="picnic">
          <div class="container">
               <div class="row">
                    <div class="col-lg-12 text-center">
                         <div class="section_header">
                              <span>BMANA Picnic</span>
                       </div>
                    </div>
               </div>
               <div class="p_text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                    <h5>November 3, 2022 — 13 BMANA Picnic Ideas</h5>
                   </div>
               <div class="picnic_wrapper">
                    <div class="row">
                         <div class="col-md-6 col-lg-4">
                              <div class="picnic_card">
                                   <img src="images/picnic1.png" alt="">
                                   <h4>Brakfast Items </h4>
                                   <h5> Peas pulao with carrot raita Moong dal khichdi Lemon rice.</h5>
                              </div>
                          </div>
                         <div class="col-md-6 col-lg-4">
                             <div class="picnic_card">
                                  <img src="images/picnic1.png" alt="">
                                  <h4>Lunch Items </h4>
                                  <h5> Peas pulao with carrot raita Moong dal khichdi Lemon rice.</h5>
                             </div>
                         </div>
                         <div class="col-md-6 col-lg-4">
                              <div class="picnic_card">
                                   <img class="pt-3" src="images/picnic2.png" alt="">
                                   <h4>Dinner Items </h4>
                                   <h5> Peas pulao with carrot raita  Moo Moong dal khichdi Lemon rice.</h5>
                              </div>
                          </div>
                    </div>
                    <div class="row">
                         <div class="col-lg-12 text-center">
                            <div class="picnic_btn">
                              <a href="#">Join Us In Picnic</a>
                            </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>   
<!--           Picnic  Part End
     *****************************************--> 
<!--          Convention Part Start
     *****************************************--> 
<section>
     <div class="convention">
          <div class="container">
               <div class="row">
                    <div class="col-lg-12 text-center">
                         <div class="section_header">
                              <span>CONVENTION 2022</span>
                       </div>
                    </div>
               </div>
               <div class="convention_wrapper">
                    <div class="row">
                         <div class="col-lg-12">
                              <div class="convention_img">
                                   <img src="images/convention.jpg" alt="">
                                   <div class="convention_overly">
                                        <div class="play">
                                             <i class="fa-solid fa-circle-play"></i>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div> 
                    <div class="conventionImgSection">
                         <div class="row">
                              <div class="col-md-6 col-lg-4">
                                   <div class="conventionImg_wrap">
                                        <img src="images/con1.jpg" alt="">
                                   </div>
                              </div>
                              <div class="col-md-6 col-lg-4">
                                   <div class="conventionImg_wrap">
                                        <img src="images/con2.jpg" alt="">
                                   </div>
                              </div>
                              <div class="col-md-6 col-lg-4">
                                   <div class="conventionImg_wrap">
                                        <img src="images/con3.jpg" alt="">
                                   </div>
                              </div>
                              <div class="col-md-6 col-lg-6">
                                   <div class="conventionImg_wrap">
                                        <img src="images/con4.jpg" alt="">
                                   </div>
                              </div>
                              <div class="col-md-6 col-lg-6">
                                   <div class="conventionImg_wrap">
                                        <img src="images/con5.jpg" alt="">
                                   </div>
                              </div>
                         </div>
                    </div>     
               </div>
          </div>
     </div>
</section>
<!--           Convention  Part End
     *****************************************--> 

<!--           Discussion  Part Start
     *****************************************--> 
<section>
     <div class="discussion">
          <div class="container">
               <div class="row">
                    <div class="col-lg-12 text-center">
                         <div class="section_header">
                              <span>Discussion Board</span>
                       </div>
                    </div>
               </div>
               <div class="discussion_wrapper">
                  <div class="row">
                   <div class="col-lg-1"></div>
                   <div class="col-lg-10">
                        <div class="discussion_review">
                             <div class="review_profile">
                                  <div class="profile_img">
                                       <img src="images/profileMAn.png" alt="">
                                  </div>
                                  <div class="profile_info">
                                       <h4>Lorem ipsum</h4>
                                       <h5>november 27 2021</h5>
                                  </div>
                             </div>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat id et aliquam dolores praesentium nisi non repellendus atque corrupti, nam dignissimos accusantium reiciendis maxime esse aspernatur temporibus ipsam totam! Necessitatibus voluptatum eaque obcaecati ullam velit dignissimos? Impedit asperiores cupiditate doloremque, ipsa debitis ad ea sed provident iusto quo exercitationem qui? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima pariatur cum iusto voluptas excepturi officiis rerum aliquam velit deleniti recusandae.</p>
                             <div class="social_icon">
                                  <ul>
                                       <li><a href="#"><span><i class="fa-solid fa-heart"></i></span> like</a></li>
                                       <li><a href="#"><span><i class="fa-solid fa-share"></i></span> Reply</a></li>
                                  </ul>
                             </div>
                        </div>
                   </div>
                   <div class="col-lg-1"></div>

                  </div>
               </div>

               <div class="discussion_form">
                    <div class="row align-items-center">
                         <div class="col-lg-2">
                              <div class="form_img">
                                   <img src="images/profileMAn.png" alt="">
                              </div>
                         </div>
                          <div class="col-lg-10">
                                <form action="#">
                                   <textarea class="form_control" placeholder="Place Your Comment" ></textarea>
                                </form>
                          </div>
                    </div>
                    <div class="row">
                         <div class="col-lg-12">
                              <div class="post_btn">
                                   <a href="#">Post</a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>
<!--           Discussion  Part End
     *****************************************--> 
<?php include('./include/footer.php'); ?>