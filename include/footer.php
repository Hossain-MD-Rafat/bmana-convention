<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://icircles.app/api/medicalassociation/home/166');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$result = json_decode($response);
curl_close($ch);
$foot_nav = $result->data->foot_nav;
$ms_info = $result->data->ms_info;
?>



<!--         Modal-2
     *****************************************-->
<section id="modal_1">
     <div class="row">
          <div class="col-12 col-lg-12">
               <div class="modal fade" id="attendenceModal2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                         <div class="modal-content">
                              <div class="modal-header">
                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                   <div class="header_info">
                                        <img src="images/bmana.png" alt="">
                                        <h5>Bangladesh Medical Association of North America</h5>
                                        <h5>Sponsor Registration Form</h5>
                                   </div>
                                   <!-- nab Tab -->
                                   <div class="signUp_body">
                                        <div class="signUp_form">
                                             <form method="POST" action="sponsorReg.php">
                                                  <div class="row">
                                                       <div class="col-md-6">

                                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                                 <div class="accordion-item">
                                                                      <h2 class="accordion-header" id="flush-headingOne">

                                                                           <button class="accordion-button collapsed labelTitle" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                                <input class="form-check-input m-3 " type="radio" name="sponsor_type" id="inlineRadio1" value="1">
                                                                                Platinum Sponsor ($10,000)
                                                                           </button>
                                                                      </h2>
                                                                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                           <div class="accordion-body">
                                                                                <ul class="accordianBodyList">
                                                                                     <li>Complimentary Hotel Accommodation for 3 nights</li>
                                                                                     <li>Banquet Dinner for four (Includes Free Registration for One)</li>
                                                                                     <li>Complimentary breakfast for two</li>
                                                                                     <li>Preferred seating choice in the Banquet Dinner</li>
                                                                                     <li>River Cruise and Dinner for two</li>
                                                                                     <li>Complimentary full-page Ad in the Souvenir</li>
                                                                                     <li>Complimentary parking for 3 days. </li>
                                                                                     <li>Special Recognition</li>
                                                                                </ul>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                            </div>


                                                       </div>
                                                       <div class="col-md-6">
                                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                                 <div class="accordion-item">
                                                                      <h2 class="accordion-header" id="flush-headingOne">

                                                                           <button class="accordion-button collapsed labelTitle" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                                <input class="form-check-input m-3 " type="radio" name="sponsor_type" id="inlineRadio1" value="2">
                                                                                Gold Sponsor ($2,500)
                                                                           </button>
                                                                      </h2>
                                                                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                           <div class="accordion-body">
                                                                                <ul class="accordianBodyList">
                                                                                     <li>Complimentary Hotel Accommodation for 3 nights</li>
                                                                                     <li>Banquet Dinner for two (Includes Free Registration for One)</li>
                                                                                     <li>Preferred seating choice in the Banquet Dinner</li>
                                                                                     <li>River Cruise and Dinner for two</li>
                                                                                     <li>Complimentary half-page Ad in the Souvenir</li>
                                                                                     <li>Complimentary parking for 3 days. </li>
                                                                                     <li>Special Recognition</li>
                                                                                </ul>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                                 <div class="accordion-item">
                                                                      <h2 class="accordion-header" id="flush-headingOne">

                                                                           <button class="accordion-button collapsed labelTitle" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                                <input class="form-check-input m-3 " type="radio" name="sponsor_type" id="inlineRadio1" value="3">
                                                                                Diamond Sponsor ($5,000)
                                                                           </button>
                                                                      </h2>
                                                                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                           <div class="accordion-body">
                                                                                <ul class="accordianBodyList">
                                                                                     <li>Complimentary Hotel Accommodation for 3 nights</li>
                                                                                     <li>Banquet Dinner for three (Includes Free Registration for One)</li>
                                                                                     <li>Preferred seating choice in the Banquet Dinner</li>
                                                                                     <li>River Cruise and Dinner for two</li>
                                                                                     <li>Complimentary half-page Ad in the Souvenir</li>
                                                                                     <li>Complimentary parking for 3 days. </li>
                                                                                     <li>Special Recognition</li>
                                                                                </ul>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                            </div>

                                                       </div>
                                                       <div class="col-md-6">
                                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                                 <div class="accordion-item">
                                                                      <h2 class="accordion-header" id="flush-headingOne">

                                                                           <button class="accordion-button collapsed labelTitle" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                                <input class="form-check-input m-3 " type="radio" name="sponsor_type" id="inlineRadio1" value="4">
                                                                                Silver Sponsor ($1,200)
                                                                           </button>
                                                                      </h2>
                                                                      <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                           <div class="accordion-body">
                                                                                <ul class="accordianBodyList">
                                                                                     <li>Complimentary Hotel Accommodation for 1 night</li>
                                                                                     <li>Banquet Dinner for two (Includes Free Registration for One)</li>
                                                                                     <li>Preferred seating choice in the Banquet Dinner</li>
                                                                                     ` <li>River Cruise and Dinner for two</li>
                                                                                     <li>Complimentary half-page Ad in the Souvenir</li>
                                                                                     <li>Special Recognition</li>
                                                                                </ul>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                                 <div class="accordion-item">
                                                                      <h2 class="accordion-header" id="flush-headingOne">

                                                                           <button class="accordion-button collapsed labelTitle" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                                <input class="form-check-input m-3" type="radio" name="sponsor_type" id="inlineRadio1" value="5">
                                                                                Featured Sponsor ($15,000)
                                                                           </button>
                                                                      </h2>
                                                                      <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                           <div class="accordion-body">
                                                                                <ul class="accordianBodyList">
                                                                                     <li>Complimentary Hotel Accommodation for 3 nights</li>
                                                                                     <li>Banquet Dinner for five (Includes Free Registration for One)</li>
                                                                                     <li>Preferred seating choice in the Banquet Dinner</li>
                                                                                     <li>River Cruise and Dinner for two</li>
                                                                                     <li>Complimentary Breakfast for two</li>
                                                                                     <li>Complimentary full-page Ad in the Souvenir</li>
                                                                                     <li>Special Featured Presentation (i.e., business meetings with physicians)</li>
                                                                                     <li>Complimentary valet parking for 3 days</li>
                                                                                     <li>Special Recognition</li>
                                                                                </ul>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                            </div>

                                                       </div>
                                                  </div>

                                                  <div class="row">
                                                       <div class="col-md-12 form-group">
                                                            <input type="text" name="sponsor_name" class="form_control" placeholder="Sponsor/Company Name">
                                                       </div>
                                                       <div class="col-md-6 form-group float-left pr-3">
                                                            <input type="text" name="contact_person" class="form_control" placeholder="Contact Person">
                                                       </div>
                                                       <div class="col-md-6 form-group float-left">
                                                            <input type="text" name="contact_person_title" name="title" class="form_control" placeholder="Title">
                                                       </div>

                                                       <div class="col-md-12 form-group">
                                                            <input type="text" name="address" class="form_control" placeholder="Address">
                                                       </div>
                                                       <div class="col-md-4 form-group float-left pr-3">
                                                            <input type="text" name="city" class="form_control" placeholder="City">
                                                       </div>
                                                       <div class="col-md-4 form-group float-left pr-3">
                                                            <input type="text" name="state" class="form_control" placeholder="State">
                                                       </div>
                                                       <div class="col-md-4 form-group float-left">
                                                            <input type="text" name="zip" class="form_control" placeholder="ZIP">
                                                       </div>

                                                       <div class="col-md-6 form-group float-left pr-3">
                                                            <input type="text" name="phone" class="form_control" placeholder="Phone">
                                                       </div>
                                                       <div class=" col-md-6 form-group float-left">
                                                            <input type="text" name="fax" class="form_control" placeholder="Fax">
                                                       </div>

                                                       <div class="col-md-6 form-group float-left pr-3">
                                                            <input type="text" name="email" class="form_control" placeholder="Email">
                                                       </div>
                                                       <div class="col-md-6 form-group float-left">
                                                            <input type="text" name="website_url" class="form_control" placeholder="Website">
                                                       </div>

                                                       <div class="col-md-12 form-group">
                                                            <input type="text" name="sponsored_item" class="form_control" placeholder="Sponsored Items">
                                                       </div>

                                                       <div class="statement mt-3">
                                                            <ul>
                                                                 <li><a href="#">
                                                                           <input type="checkbox">
                                                                           To The Best of my knowledge, the information is the correct status of my professional activity.

                                                                      </a></li>
                                                                 <li><a href="#">
                                                                           <input type="checkbox">
                                                                           I agree to disclose above information's for BMANA membership registry & publication.
                                                                      </a></li>
                                                            </ul>
                                                       </div>

                                                       <div class="continue_btn text-center mt-3">
                                                            <button class="btn btn-dark" type="submit" id="SubmitForm" name="SubmitForm"> <img src="images/logo.png" alt="" height="15%" width="15%">
                                                                 Register Now</button>
                                                       </div>
                                                  </div>
                                             </form>
                                        </div>
                                   </div>


                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     </div>
     </div>
</section>

<!--         Modal-3
     *****************************************-->
<section id="modal_1">
     <div class="row">
          <div class="col-12 col-lg-12">
               <div class="modal fade" id="attendenceModal3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                         <div class="modal-content">
                              <div class="modal-header">
                                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">

                                   <div class="header_info">
                                        <img src="images/bmana.png" alt="">
                                        <h5>Bangladesh Medical Association of North America</h5>
                                        <h5>Exhibitor Registration Form</h5>
                                   </div>
                                   <!-- nab Tab -->
                                   <div class="signUp_body mt-5">
                                        <div class="signUp_form">
                                             <form method="POST" action="exhibitorReg.php">
                                                  <div class="row">
                                                       <div class="col-md-6 mb-3">
                                                            <div class="form-check">
                                                                 <input class="form-check-input" type="checkbox" name="display_type[]" value="1" id="flexCheckDefault">
                                                                 <label class="form-check-label labelTitle" for="flexCheckDefault">
                                                                      Back Cover $7,500
                                                                 </label>
                                                            </div>
                                                       </div>
                                                       <div class="col-md-6 mb-3">
                                                            <div class="form-check">
                                                                 <input class="form-check-input" type="checkbox" name="display_type[]" value="2" id="flexCheckDefault">
                                                                 <label class="form-check-label labelTitle" for="flexCheckDefault">
                                                                      Inner First Cover $5,000
                                                                 </label>
                                                            </div>
                                                       </div>
                                                       <div class="col-md-6 mb-3">
                                                            <div class="form-check">
                                                                 <input class="form-check-input" type="checkbox" name="display_type[]" value="3" id="flexCheckDefault">
                                                                 <label class="form-check-label labelTitle" for="flexCheckDefault">
                                                                      Inner Back Cover $5,000
                                                                 </label>
                                                            </div>
                                                       </div>
                                                       <div class="col-md-6 mb-3">
                                                            <div class="form-check">
                                                                 <input class="form-check-input" type="checkbox" name="display_type[]" value="4" id="flexCheckDefault">
                                                                 <label class="form-check-label labelTitle" for="flexCheckDefault">
                                                                      Full Page: $1,200
                                                                 </label>
                                                            </div>
                                                       </div>
                                                       <div class="col-md-6 mb-3">
                                                            <div class="form-check">
                                                                 <input class="form-check-input" type="checkbox" name="display_type[]" value="5" id="flexCheckDefault">
                                                                 <label class="form-check-label labelTitle" for="flexCheckDefault">
                                                                      Half Page: $700
                                                                 </label>
                                                            </div>
                                                       </div>
                                                       <div class="col-md-6 mb-3">
                                                            <div class="form-check">
                                                                 <input class="form-check-input" type="checkbox" name="display_type[]" value="6" id="flexCheckDefault">
                                                                 <label class="form-check-label labelTitle" for="flexCheckDefault">
                                                                      Quarter Page: $400
                                                                 </label>
                                                            </div>
                                                       </div>
                                                       <div class="col-md-6 mb-3">
                                                            <div class="form-check">
                                                                 <input class="form-check-input" type="checkbox" name="display_type[]" value="7" id="flexCheckDefault">
                                                                 <label class="form-check-label labelTitle" for="flexCheckDefault">
                                                                      Exhibit Booth: $1,500 for 2 days
                                                                 </label>
                                                            </div>
                                                       </div>
                                                  </div>

                                                  <div class="row">
                                                       <div class="col-md-12 form-group">
                                                            <input type="text" name="company_name" class="form_control" placeholder="Sponsor/Company Name" required>
                                                       </div>
                                                       <div class="col-md-6 form-group float-left pr-3">
                                                            <input type="text" name="contact_name" class="form_control" placeholder="Contact Person" required>
                                                       </div>
                                                       <div class="col-md-6 form-group float-left">
                                                            <input type="text" name="contact_title" name="title" class="form_control" placeholder="Title" required>
                                                       </div>

                                                       <div class="col-md-12 form-group">
                                                            <input type="text" name="address" class="form_control" placeholder="Address" required>
                                                       </div>
                                                       <div class="col-md-4 form-group float-left pr-3">
                                                            <input type="text" name="city" class="form_control" placeholder="City" required>
                                                       </div>
                                                       <div class="col-md-4 form-group float-left pr-3">
                                                            <input type="text" name="state" class="form_control" placeholder="State" required>
                                                       </div>
                                                       <div class="col-md-4 form-group float-left">
                                                            <input type="text" name="zip" class="form_control" placeholder="ZIP" required>
                                                       </div>

                                                       <div class="col-md-6 form-group float-left pr-3">
                                                            <input type="text" name="phone" class="form_control" placeholder="Phone" required>
                                                       </div>
                                                       <div class=" col-md-6 form-group float-left">
                                                            <input type="text" name="fax" class="form_control" placeholder="Fax" required>
                                                       </div>

                                                       <div class="col-md-6 mb-3 form-group float-left pr-3">
                                                            <input type="text" name="email" class="form_control" placeholder="Email" required>
                                                       </div>
                                                       <div class="col-md-6 mb-3 form-group float-left">
                                                            <input type="text" name="website" class="form_control" placeholder="Website" required>
                                                       </div>

                                                       <div class="statement mt-3">
                                                            <ul>
                                                                 <li><a href="#">
                                                                           <input type="checkbox">
                                                                           To The Best of my knowledge, the information is the correct status of my professional activity.

                                                                      </a></li>
                                                                 <li><a href="#">
                                                                           <input type="checkbox">
                                                                           I agree to disclose above information's for BMANA membership registry & publication.
                                                                      </a></li>
                                                            </ul>
                                                       </div>

                                                       <div class="continue_btn text-center mt-3">
                                                            <button class="btn btn-dark" type="submit" id="SubmitForm" name="SubmitForm"> <img src="images/logo.png" alt="" height="15%" width="15%">
                                                                 Register Now</button>
                                                       </div>
                                                  </div>
                                             </form>
                                        </div>
                                   </div>

                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     </div>
</section>


<!--          Copyright Part Start
     *****************************************-->
<section id="footer">
     <div class="copyright">
          <div class="container">
               <div class="copyright_wrapper">
                    <div class="row">
                         <div class="col-lg-7">
                              <h4>@copyright 2022. All Rights Reserved by iCircles USA Bangladesh Ltd.</h4>
                         </div>
                         <div class="col-lg-5 d-flex justify-content-end align-items-center">
                              <h4>
                                   <?php foreach ($foot_nav as $key => $item) { ?>
                                        <a href=<?= "page/?id=" . $item->id ?>><?= $item->menu_name ?></a>
                                   <?php } ?>
                              </h4>
                              <div class="icon">
                                   <ul>
                                        <?php if ($ms_info->fb_url) { ?>
                                             <li><a href=<?= $ms_info->fb_url ?>><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <?php } ?>
                                        <?php if ($ms_info->linkedin_url) { ?>
                                             <li><a href=<?= $ms_info->linkedin_url ?>><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <?php } ?>
                                        <?php if ($ms_info->twiter_url) { ?>
                                             <li><a href=<?= $ms_info->twiter_url ?>><i class="fa-brands fa-twitter"></i></a></li>
                                        <?php } ?>
                                   </ul>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>

<!--     Copyright Part End
     *****************************************-->


<!--     back to top Part Start
     *****************************************-->
<a href="#" class="backtotop"></a>
<!--     Back to top Part End
     *****************************************-->
<!--
         Javascript Script Linker Part
   --------------------------------------------------->
<script src="js/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script>
     function registration(e) {
          event.preventDefault();
          const data = new FormData(e);
          data.append('terms1', $('#terms1').is(':checked') ? 1 : 0);
          data.append('terms2', $('#terms2').is(':checked') ? 1 : 0);
          data.append('registration', 1);

          $.ajax({
               url: "sponsorAuth.php",
               method: 'post',
               processData: false,
               contentType: false,
               cache: false,
               data: data,
               success: function(res) {
                    res = JSON.parse(res);
                    if (res.status) {
                         $('#login-info').html('<span class="text-center text-success">Registration successfully completed. Please login here.</span>');
                         $('#login-info').removeClass('d-none');
                         $('#pills-home-tab').click();
                    } else {
                         $('#registration-info').html('<span class="text-center text-danger">Failed to register!</span>');
                         $('#registration-info').removeClass('d-none');
                         $(":input").val('');
                    }
               },
               error: function(res) {
                    console.log(res)
                    $('#registration-info').html('<span class="text-center text-danger">Failed to register!</span>')
                    $('#registration-info').removeClass('d-none');
                    $(":input").val('');
               }
          });
     }
</script>

</body>

</html>