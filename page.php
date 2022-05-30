<?php include("./include/fixedHeader.php"); ?>
<?php
session_start();

$ms_id = $_SESSION['ms_id'];
$page_id = isset($_GET['id']) && !is_null($_GET['id']) ? $_GET['id'] : '';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://icircles.app/api/convension/page/' . $ms_id . "/" . $page_id);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$result = json_decode($response);
curl_close($ch);

?>

<!-- Sub Page About Part Start -->

<section>
     <div class="subPage_About">
          <div class="container">
               <div class="row">
                    <div class="col-lg-12">
                         <div class="section_header">
                              <h4><?= $result->data[0]->page_title ?></h4>
                         </div>
                    </div>
               </div>
               <div class="aboutMain_wrapper">
                    <div class="row">
                         <div class="col-lg-12">
                              <div class="about_img">
                                   <img src="<?= "https://icircles.app/uploads/content/" . $ms_id . "/" . $result->data[0]->featured_image ?>" alt="">
                              </div>
                              <div class="aboutMain_text">
                                  <?= $result->data[0]->body_content ?>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>



<!-- Sub Page About Part End -->
<?php include("./include/footer.php"); ?>