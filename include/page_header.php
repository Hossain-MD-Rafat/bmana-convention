<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMANA - CONVENTION</title>
    <link rel="shortcut icon" href="images/bmana.png" type="image/png">
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>  

<?php 
    session_start();
    $ch =  curl_init();
    curl_setopt($ch,CURLOPT_URL,'https://icircles.app/api/convension/home/168');
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($ch);
    $result = json_decode($response);
    curl_close($ch);

    $main_nav = $result->data->main_nav;
    $ms_id = $result->data->ms_id;
    $_SESSION['ms_id']=$ms_id;
?>



 <!--          Header Part strat
        *****************************************-->
        <header>
             <div class="headerPartTwo d-lg-block d-none">
                  <div class="container-fluid">
                       <div class="row">
                            <div class="col-lg-12">
                              <div class="headerPartTwo_wrapper">
                                 <div class="sideBar_wrapper">
                                      <div class="sideBar_contain">
                                           <div class="logo text-center">
                                                <img src="images/bmana.png" alt="">
                                           </div>
                                           <div class="nav_list">
                                             <ul>
                                             <li><a href="index.php"> <span><i class=""></i></span> Home</a></li>
                                            <?php foreach ($main_nav as $key => $item) { ?>
                                                <li><a href=<?= "page.php?id=" . $item->id ?>> <span><i class=""></i></span> <?= $item->menu_name ?>
                                                        <?php if (count($item->sub_nav) > 0) { ?>
                                                            <span class="droppper"><i class="fa-solid fa-caret-down"></i></span>
                                                        <?php } ?>
                                                    </a>
                                                    <?php if (count($item->sub_nav) > 0) { ?>
                                                        <ul class="sub_down">
                                                            <?php
                                                            foreach ($item->sub_nav as $key => $sub_nav) {
                                                            ?>
                                                                <li><a href="page.php?id=<?= $sub_nav->id ?>"><?= $sub_nav->menu_name ?></a></li>
                                                            <?php } ?>
                                                        </ul>
                                                    <?php } ?>
                                                </li>
                                            <?php } ?>
                                            <li><a href="contact.php"> <span><i class=""></i></span> Contact Us</a></li>
                                             </ul>
                                        </div>
                                           <div class="header_search">
                                                <form action="#">
                                                     <input class="form_control" type="text" placeholder="Search">
                                                     <i class="fa-solid fa-magnifying-glass"></i>
                                                </form>
                                           </div>
                                      </div>
                                </div>
                            </div>
                         </div>
                     </div>
                 </div>
             </div>
   </header>
<!--          Header Part End
     *****************************************-->

<!--     Mobile NAv OffCanva Part Start
     *****************************************-->
     <section>
          <div class="mob_header d-lg-none d-block">
               <div class="container">
                    <div class="row">
                         <div class="col-lg-12">
                               <div class="mobNAv_btn">
                                   <a href="#" class="moble_navbar d-block d-lg-none nav_toggol" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight2"> <i class="fa-solid fa-bars"></i></a>
                               </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>
     <section>
        <div class="navbar_toggoler">
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight2" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <img src="images/bmana.png" alt="">
                    <h5 id="offcanvasRightLabel">
                    </h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="nav_list">
                        <div class="dropdown">
                            <a href="index.php">Home</a>
                        </div>
                    </div>
                    <?php foreach ($main_nav as $key => $item) { ?>
                        <div class="nav_list">
                            <div class="dropdown">
                                <a href="#" class=<?= "js-link" . $key; ?>>
                                    <?= $item->menu_name ?>
                                    <?php if (count($item->sub_nav) > 0) { ?>
                                        <i class="fa fa-chevron-down"></i>
                                    <?php } ?>
                                </a>
                                <?php if (count($item->sub_nav) > 0) { ?>
                                    <ul class=<?= "js-dropdown-list" . $key; ?>>
                                        <?php foreach ($item->sub_nav as $key => $sub_nav) { ?>
                                            <li><a href=<?= "page.php?id=" . $sub_nav->id ?>><?= $sub_nav->menu_name ?></a></li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="nav_list">
                        <div class="dropdown">
                            <a href="contact.php">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--       Mobile NAv OffCanva end Start
     *****************************************-->

    
<!--          SideNAvbar Part Start
     *****************************************-->
        <section>
          <div class="sideBar d-lg-block d-none">
               <div class="container">
                    <div class="sideBar_wrapper">
                          <div class="sideBar_contain">
                               <div class="logo text-center">
                                    <img src="images/bmana.png" alt="">
                               </div>
                               <div class="nav_list">
                                   <ul>
                                   <li><a href="index.php"> <span><i class=""></i></span> Home</a></li>
                                            <?php foreach ($main_nav as $key => $item) { ?>
                                                <li><a href=<?= "page.php?id=" . $item->id ?>> <span><i class=""></i></span> <?= $item->menu_name ?>
                                                        <?php if (count($item->sub_nav) > 0) { ?>
                                                            <span class="droppper"><i class="fa-solid fa-caret-down"></i></span>
                                                        <?php } ?>
                                                    </a>
                                                    <?php if (count($item->sub_nav) > 0) { ?>
                                                        <ul class="sub_down">
                                                            <?php
                                                            foreach ($item->sub_nav as $key => $sub_nav) {
                                                            ?>
                                                                <li><a href="page.php?id=<?= $sub_nav->id ?>"><?= $sub_nav->menu_name ?></a></li>
                                                            <?php } ?>
                                                        </ul>
                                                    <?php } ?>
                                                </li>
                                            <?php } ?>
                                            <li><a href="contact.php"> <span><i class=""></i></span> Contact Us</a></li>
                                   </ul>
                              </div>
                          </div>
                    </div>
               </div>
          </div>
        </section>
<!--        SideNAvbar Part End
     *****************************************-->