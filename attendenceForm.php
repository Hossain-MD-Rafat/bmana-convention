<?php include("./include/fixedHeader.php"); ?>

<!-- Form 1 -->

<section>
  <div class="form-2">
    <div class="container">
      <div class="form_main">
        <div style="border-bottom: 1px solid #7777; padding:30px 0;">
          <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
              <div class="form_info">
                <div class="logo">
                  <img src="images/bmana.png" alt="">
                </div>
                <div class="text_item">
                  <h6>41st Annual Convention</h6>
                  <h5>New York LaGuardia Airport Marriott/Terrace On The Park</h5>
                  <h4>June 30-July 3, 2022</h4>
                  <h3>Bangladesh Medical Association Of North America</h3>
                </div>
                <div class="logo">
                  <img src="images/bmana.png" alt="">
                </div>
              </div>
            </div>
            <div class="col-lg-1"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-8">
            <div class="form_body">
              <h5>Registration Form</h5>
              <form method="POST" action="attendenceReg.php">
                <div class="row">
                  <div class="col-lg-6 d-flex justify-content-between ">
                    <label for="input"> First Name </label>
                    <input type="text" name="first_name" class="form_control " placeholder="First Name" required>
                  </div>
                  <div class="col-lg-6 d-flex justify-content-between ">
                    <label for="input"> Last Name </label>
                    <input type="text" name="last_name" class="form_control " placeholder="Last Name" required>
                  </div>
                  <div class="col-lg-12 d-flex justify-content-between mt-3">
                    <label for="input"> Address :</label>
                    <input type="text" name="address" class="form_control w-85 " placeholder="Address" required>
                  </div>
                  <div class="col-lg-4 d-flex justify-content-between mt-3">
                    <label for="input"> City :</label>
                    <input type="text" name="city" class="form_control " placeholder="City" required>
                  </div>
                  <div class="col-lg-4 d-flex justify-content-between mt-3">
                    <label for="input"> State :</label>
                    <input type="text" name="state" class="form_control " placeholder="State" required>
                  </div>
                  <div class="col-lg-4 d-flex justify-content-between mt-3">
                    <label for="input"> Zip :</label>
                    <input type="text" name="zip" class="form_control " placeholder="Zip" required>
                  </div>
                  <div class="col-lg-12 mt-3 d-flex justify-content-between">
                    <label for="input" name="telephone" style="font-weight:700;"> Telephone -:</label>
                  </div>
                  <div class="col-lg-4 mt-1 d-flex justify-content-between">
                    <label for="input"> Cell :</label>
                    <input type="text" name="cell" class="form_control" placeholder="Cell" required>
                  </div>
                  <div class="col-lg-4 mt-1 d-flex justify-content-between">
                    <label for="input"> Home :</label>
                    <input type="text" name="home" class="form_control" placeholder="Home" required>
                  </div>
                  <div class="col-lg-4 mt-1 d-flex justify-content-between">
                    <label for="input"> Office :</label>
                    <input type="text" name="office" class="form_control" placeholder="Office" required>
                  </div>
                  <div class="col-lg-12 mt-3 d-flex justify-content-between mb-3">
                    <label for="input"> E-mail :</label>
                    <input type="text" name="email" class="form_control w-85" placeholder="Email" required>
                  </div>
                  <div class="col-lg-6 mt-4 mb-4 d-flex align-items-center">
                    <input name="registration" value="120" class="checked cheque" type="radio" required>
                    <label class="p-none" for="registration"><b> Registration - Life & Active Members<span>($120.00)</span></b></label>
                  </div>
                  <div class="col-lg-6 mt-4 mb-4 d-flex align-items-center">
                    <input name="registration" value="0" class="checked cheque" type="radio" required style="width: 8%;">
                    <label class="p-none" for="registration"><b> Registration - Associate Member
                        & Physicians who are not in career path <span>(waived)</span></b></label>
                  </div>
                  <div class="col-lg-6 mt-4 d-flex align-items-center ">
                    <input name="membership" value="400" class="checked cheque" type="radio" required>
                    <label class="p-none" for="400"><b> New Life Membership <span>($400 .00)</span></b></label>
                  </div>
                  <div class="col-lg-6 mt-4 d-flex align-items-center">
                    <input name="membership" value="0" class="checked cheque" type="radio" required>
                    <label class="p-none" for="0"><b> Existing Life Members <span>(00 .00)</span></b></label>
                  </div>
                  <div class="col-lg-6 mt-4 d-flex align-items-center">
                    <input name="membership" value="50" class="checked cheque" type="radio" required>
                    <label class="p-none" for="50"><b> Active Membership <span>($50 .00/yr)</span></b></label>
                  </div>
                  <div class="col-lg-6 mt-4 d-flex align-items-center">
                    <input name="membership" value="25" class="checked cheque" type="radio" required>
                    <label class="p-none" for="25"><b> Associate Membership <span>($25 .00/yr)</span> </b></label>
                  </div>


                  <div class="row mt-5">
                    <div class="col-lg-6">
                      <h4>July 1, 2022</h4>
                      <label for="100">
                        <input name="dinner_cruse" value="100" class="checked cheque" type="radio">
                        <b> Dinner Cruise <span class="memberSpan">$100/person</span></b>
                        <ul>
                          <p class="memberListDescription">(Life & Active Members and their
                            SPOUSE/GUEST/CHILDREN ( 6 & UP)</p>
                        </ul>
                      </label>
                      <label for="50"> <input name="dinner_cruse" value="50" class="checked cheque" type="radio">
                        <b> Dinner Cruise <span class="memberSpan">$50/person</span></b>
                        <ul>
                          <p class="memberListDescription">(Associate Member/Physicians who are not in
                            career path & their family members,
                            childrens 6 and up)</p>
                        </ul>
                      </label>
                    </div>
                    <div class="col-lg-6">
                      <h4>July 2, 2022</h4>
                      <label for="banquet_dinner130"> <input name="banquet_dinner" value="130" class="checked cheque" type="radio">
                        <b> Banquet Dinner <span class="memberSpan">$130/person</span></b>
                        <ul>
                          <p class="memberListDescription"> (Life & Active Members) SPOUSE/GUEST/CHILDREN ( 12 & UP) and Children (5-11) Eating with parent</p>
                        </ul>
                      </label>
                      <label for="banquet_dinner75"> <input name="banquet_dinner" value="75" class="checked cheque" type="radio">
                        <b> Banquet Dinner <span class="memberSpan">$75/person</span> </b>
                        <ul>
                          <p class="memberListDescription">(Associate Member/
                            Physicians who are not in career path & their
                            Family members, childrens 12 and up)</p>
                        </ul>
                      </label>
                      <label for="banquet_dinner30"> <input name="banquet_dinner" value="30" class="checked cheque" type="radio">
                        <b> Kids Dinner (5-11) in separate room <span class="memberSpan">$30/person</span> </b>
                      </label>
                    </div>
                    <div class="col-lg-6">
                      <h4>July 3, 2022</h4>
                      <label for="picnic40"> <input name="picnic" value="40" class="checked cheque" type="radio" required>
                        <b> Picnic (July 3, 2022)
                          All Adults and Children 12 and up <span class="memberSpan">$40/person</span></b>
                      </label>
                    </div>
                  </div>



                  <div id="guest-container"></div>

                  <input value="$0.00" readonly="readonly" type="text" name="total" class="d-none" />
                  <div class="save_btn">
                    <a href="javascript:void(0);" class="guestAdd" onclick="duplicate()">Add Guest</a>
                    <h2>Total = $<span id="total">0</span></h2>
                  </div>


                  <div class="top_table">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="table_item">
                          <h5> <input name="payment_method" class="cheque" type="checkbox" value="1" checked> Online Payment</h5>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="table_item">
                          <h5> <input name="payment_method" class="cheque" type="checkbox" value="0"> Offline Payment</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="continue_btn text-center mt-3">
                    <button class="btn btn-dark" type="submit" id="SubmitForm" name="attendence_register" value="true"> <img src="images/logo.png" alt="" height="15%" width="15%">
                      Register Now</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-2"></div>
      </div>
    </div>
  </div>
  </div>
</section>
<?php include("./include/footer.php"); ?>


<script src="js/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/attendence.js"></script>
<script>
  let count = 0;
  var original = document.getElementById('duplicater');

  function duplicate() {
    let hs = `<div id="duplicater" class="guest_form mt-5">
                      <h3 id="guestNumber">Guest :- ${count+1}</h3>
                      <div class="row">
                        <div class="col-lg-4">
                          <label for="input"> Name :</label>
                          <input type="text" name="guest_name[]" class="form_control" placeholder="Guest Name" required>
                          <label for="input" class="mt-3"> Email :</label>
                          <input type="text" name="guest_email[]" class="form_control" placeholder="Guest Emali" required>
                        </div>
                        <div class="col-lg-8">
                          <h4>July 1, 2022</h4>
                          <label for="100"> <input name="guest_dinner_cruse[${count}]" value="100" class="checked cheque" type="radio">
                            <b> Dinner Cruise <span>$100/person</span></b>
                            <ul>
                              <p class="memberListDescription">(Life & Active Members and their
                                SPOUSE/GUEST/CHILDREN ( 6 & UP)</p>
                            </ul>
                          </label>
                          <label for="50"> <input name="guest_dinner_cruse[${count}]" value="50" class="checked cheque" type="radio">
                            <b> Dinner Cruise <span>$50/person</span></b>
                            <ul>
                              <p class="memberListDescription">(Associate Member/Physicians who are not in
                                career path & their family members,
                                childrens 6 and up)</p>
                            </ul>
                          </label>

                          <h4 class="mt-3">July 2, 2022</h4>
                          <label for="130"> <input name="guest_banquet_dinner[${count}]" value="130" class="checked cheque" type="radio">
                            <b> Banquet Dinner <span>$130/person</span></b>
                            <ul>
                              <p class="memberListDescription"> (Life & Active Members) SPOUSE/GUEST/CHILDREN ( 12 & UP) and </p>
                              <p class="memberListDescription"> Children (5-11) Eating with parent</p>
                            </ul>
                          </label>
                          <label for="75"> <input name="guest_banquet_dinner[${count}]" value="75" class="checked cheque" type="radio">
                            <b> Banquet Dinner <span>$75/person</span> </b>
                            <ul>
                              <p class="memberListDescription">(Associate Member/
                                Physicians who are not in career path & their
                                Family members, childrens 12 and up)</p>
                            </ul>
                          </label>
                          <label for="30"> <input name="guest_banquet_dinner[${count}]" value="30" class="checked cheque" type="radio">
                            <b> Kids Dinner (5-11) in separate room <span>$30/person</span> </b>
                          </label>
                          <h4 class="mt-3">July 3, 2022</h4>
                          <label for="40"> <input name="guest_picnic[${count}]" value="40" class="checked cheque" type="radio">
                            <b> Picnic (July 3, 2022)
                              All Adults and Children 12 and up <span>$40/person</span></b>
                          </label>
                        </div>
                      </div>
                    </div>`;
    count++;
    $('#guest-container').append(hs);
  }
</script>

<!-- Get fields values -->
<script>
  $(document).on("change", "input[type=radio]", function() {
    var total = 0;
    $("input[type=radio]:checked").each(function() {
      if (isNaN($(this).val())) {
        total = total;
      } else
        total += parseFloat($(this).val());
    });
    $("#total").text(total);
  });
</script>