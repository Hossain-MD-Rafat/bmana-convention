<link rel="shortcut icon" href="images/bmana.png" type="image/png">
<!-- -------------PDF GENERATEOR --------------- -->
<style>
    .btn-primary {
        cursor: pointer;
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.1.223/styles/kendo.common.min.css" />
<script src="https://kendo.cdn.telerik.com/2017.1.223/js/jszip.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2017.1.223/js/kendo.all.min.js"></script>

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>

<!-- <div id="example">
    <div class="box wide hidden-on-narrow">
    </div> -->


<div class="page-container hidden-on-narrow">
    <div class="pdf-page size-a4">
        <page size="A4">

            <!-- PDF CONTENT START -->
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h1>Information</h1>
                        <strong><?= date("m/d/Y"); ?></strong>
                        <span class="float-right">
                            <button class="btn btn-primary" id="pdf-generate">Download</button>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-sm-6">
                                <?php
                                session_start();
                                if (isset($_SESSION['pdfData'])) {
                                    $data = $_SESSION['pdfData'];
                                } else {
                                    exit;
                                }
                                $services = explode(',', $data['services']);
                                $taken_services = !is_null($data['taken_services']) ? json_decode($data['taken_services']) : '';
                                $iter = 0;
                                $curr_amount = 0;
                                $total_amount = 0;
                                ?>
                                <div>
                                    <strong><?= isset($data['firstname']) && isset($data['lastname']) ? $data['firstname'] . ' ' . $data['lastname'] : ''  ?></strong>
                                </div>
                                <div><small>City : <?= isset($data['city']) ? $data['city'] : ''  ?></small></div>
                                <div><small>State : <?= isset($data['state']) ? $data['state'] : ''  ?></small></div>
                                <div><small>Zip : <?= isset($data['zip']) ? $data['zip'] : ''  ?></small></div>
                                <div><small>Address : <?= isset($data['address']) ? $data['address'] : ''  ?></small></div>
                                <div><small>Cell : <?= isset($data['cell']) ? $data['cell'] : ''  ?></small></div>
                                <div><small>Email : <?= isset($data['email']) ? $data['email'] : ''  ?></small></div>
                            </div>
                        </div>
                        <div class="table-responsive-sm  table-bordered">
                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                        <th class="center">#</th>
                                        <th>Item Details</th>
                                        <th class="right">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="center"><?= ++$iter ?></td>
                                        <td class="left strong">
                                            <?php
                                            switch ($data['registration']) {
                                                case '1':
                                                    echo "Registration - Life & Active Members";
                                                    $curr_amount = 120;
                                                    $total_amount += $curr_amount;
                                                    break;
                                                case '0':
                                                    echo "Registration - Associate Member & Physicians who are not in career path";
                                                    $curr_amount = 0;
                                                    $total_amount += $curr_amount;
                                                    break;
                                                default:
                                                    break;
                                            }
                                            ?>
                                        </td>
                                        <td class="right">$<?= $curr_amount ?></td>
                                    </tr>
                                    <tr>
                                        <td class="center"><?= ++$iter ?></td>
                                        <td class="left strong">
                                            <?php
                                            switch ($data['memberships']) {
                                                case '0':
                                                    echo "Existing Life Members";
                                                    $curr_amount = 0;
                                                    $total_amount += $curr_amount;
                                                    break;
                                                case '1':
                                                    echo "New Life Membership";
                                                    $curr_amount = 400;
                                                    $total_amount += $curr_amount;
                                                    break;
                                                case '2':
                                                    echo "Active Membership";
                                                    $curr_amount = 50;
                                                    $total_amount += $curr_amount;
                                                    break;
                                                case '3':
                                                    echo "Associate Membership";
                                                    $curr_amount = 25;
                                                    $total_amount += $curr_amount;
                                                    break;
                                                default:
                                                    break;
                                            }
                                            ?>
                                        </td>
                                        <td class="right">$<?= $curr_amount ?></td>
                                    </tr>
                                    <?php foreach ($services as $key => $value) { ?>
                                        <tr>
                                            <td class="center"><?= ++$iter ?></td>
                                            <td class="left strong">
                                                <?php
                                                switch ($value) {
                                                    case '1':
                                                        echo "Dinner Cruise $100/person
                                                        (Life & Active Members and their SPOUSE/GUEST/CHILDREN ( 6 & UP)";
                                                        $curr_amount = 100;
                                                        $total_amount += $curr_amount;
                                                        break;
                                                    case '2':
                                                        echo "Dinner Cruise $50/person
                                                        (Associate Member/Physicians who are not in career path & their family members, childrens 6 and up)";
                                                        $curr_amount = 50;
                                                        $total_amount += $curr_amount;
                                                        break;
                                                    case '3':
                                                        echo "Banquet Dinner $130/person
                                                        (Life & Active Members) SPOUSE/GUEST/CHILDREN ( 12 & UP) and Children (5-11) Eating with parent";
                                                        $curr_amount = 130;
                                                        $total_amount += $curr_amount;
                                                        break;
                                                    case '4':
                                                        echo "Banquet Dinner $75/person
                                                        (Associate Member/ Physicians who are not in career path & their Family members, childrens 12 and up)";
                                                        $curr_amount = 75;
                                                        $total_amount += $curr_amount;
                                                        break;
                                                    case '5':
                                                        echo "Kids Dinner (5-11) in separate room $30/person";
                                                        $curr_amount = 30;
                                                        $total_amount += $curr_amount;
                                                        break;
                                                    case '6':
                                                        echo "Picnic (July 3, 2022) All Adults and Children 12 and up $40/person";
                                                        $curr_amount = 40;
                                                        $total_amount += $curr_amount;
                                                        break;
                                                    default:
                                                        break;
                                                }
                                                ?>
                                            </td>
                                            <td class="right">$<?= $curr_amount ?></td>
                                        </tr>
                                    <?php } ?>
                                    <?php
                                    if ($taken_services) {
                                        foreach ($taken_services as $key => $service) {
                                            $service = explode(',', $service); ?>
                                            <?php foreach ($service as $key => $value) { ?>
                                                <tr>
                                                    <td class="center"><?= ++$iter ?></td>
                                                    <td class="left strong">
                                                        <?php
                                                        switch ($value) {
                                                            case '1':
                                                                echo "Dinner Cruise $100/person
                                                        (Life & Active Members and their SPOUSE/GUEST/CHILDREN ( 6 & UP)";
                                                                $curr_amount = 100;
                                                                $total_amount += $curr_amount;
                                                                break;
                                                            case '2':
                                                                echo "Dinner Cruise $50/person
                                                        (Associate Member/Physicians who are not in career path & their family members, childrens 6 and up)";
                                                                $curr_amount = 50;
                                                                $total_amount += $curr_amount;
                                                                break;
                                                            case '3':
                                                                echo "Banquet Dinner $130/person
                                                        (Life & Active Members) SPOUSE/GUEST/CHILDREN ( 12 & UP) and Children (5-11) Eating with parent";
                                                                $curr_amount = 130;
                                                                $total_amount += $curr_amount;
                                                                break;
                                                            case '4':
                                                                echo "Banquet Dinner $75/person
                                                        (Associate Member/ Physicians who are not in career path & their Family members, childrens 12 and up)";
                                                                $curr_amount = 75;
                                                                $total_amount += $curr_amount;
                                                                break;
                                                            case '5':
                                                                echo "Kids Dinner (5-11) in separate room $30/person";
                                                                $curr_amount = 30;
                                                                $total_amount += $curr_amount;
                                                                break;
                                                            case '6':
                                                                echo "Picnic (July 3, 2022) All Adults and Children 12 and up $40/person";
                                                                $curr_amount = 40;
                                                                $total_amount += $curr_amount;
                                                                break;
                                                            default:
                                                                break;
                                                        }
                                                        ?>
                                                    </td>
                                                    <td class="right">$<?= $curr_amount ?></td>
                                                </tr>
                                            <?php } ?>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-5">
                            </div>
                            <div class="col-lg-4 col-sm-5 ml-auto">
                                <table class="table  table-bordered">
                                    <tbody>
                                        <tr>
                                            <td class="left">
                                                <strong>Total</strong>
                                            </td>
                                            <td class="right">
                                                <strong>$<?= $total_amount ?></strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PDF CONTENT END -->
        </page>
    </div>
</div>

<script>
    function getPDF(selector) {
        kendo.drawing.drawDOM($(selector)).then(function(group) {
            kendo.drawing.pdf.saveAs(group, 'report.pdf');
        });
    }
</script>
<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Montserrat', sans-serif;
    }

    page[size="A4"] {
        width: 790px;
        height: 1000px;
    }

    page {
        background: white;
        display: block;
        margin: 0 auto;
    }

    .pdf-page {
        font-family: "DejaVu Sans", "Arial", sans-serif;
    }
</style>


<script type="text/javascript">
    $('#pdf-generate').click(function() {
        getPDF('.pdf-page');
    })
</script>