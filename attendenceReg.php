<?php
session_start();
require_once('payment.php');

$stripePayment = new Payment();

if (isset($_POST['attendence_register'])) {
    $query = array(
        "microsite_id" => $_SESSION['ms_id'],
        "firstname" => $_POST['first_name'],
        "lastname" => $_POST['last_name'],
        "address" => $_POST['address'],
        "city" => $_POST['city'],
        "state" => $_POST['state'],
        "zip" => $_POST['zip'],
        "cell" => $_POST['cell'],
        "cell_home" => $_POST['home'],
        "office" => $_POST['office'],
        "email" => $_POST['email'],
        "memberships" => '',
        "services" => '',
        "guest_name" => '',
        "guest_email" => '',
        "taken_services" => '',
    );
    $ch = curl_init();
    $amount = 0;
    if ($_POST['registration']) {
        switch ($_POST['registration']) {
            case '0':
                $query['registration'] = 0;
                break;
            case '120':
                $query['registration'] = 1;
                $amount += 120;
                break;
            default:
                break;
        }
    }
    if ($_POST['membership']) {
        switch ($_POST['membership']) {
            case '0':
                $query['memberships'] = 0;
                break;
            case '400':
                $query['memberships'] = 1;
                $amount += 400;
                break;
            case '50':
                $query['memberships'] = 2;
                $amount += 50;
                break;
            case '25':
                $query['memberships'] = 3;
                $amount += 25;
                break;
            default:
                break;
        }
    }
    if ($_POST['dinner_cruse']) {
        switch ($_POST['dinner_cruse']) {
            case '100':
                $query['services'] = $query['services'] ? $query['services'] . ',1' : '1';
                $amount += 100;
                break;
            case '50':
                $query['services'] = $query['services'] ? $query['services'] . ',2' : '2';
                $amount += 50;
                break;
            default:
                break;
        }
    }
    if ($_POST['banquet_dinner']) {
        switch ($_POST['banquet_dinner']) {
            case '130':
                $query['services'] = $query['services'] ? $query['services'] . ',3' : '3';
                $amount += 130;
                break;
            case '75':
                $query['services'] = $query['services'] ? $query['services'] . ',4' : '4';
                $amount += 75;
                break;
            case '30':
                $query['services'] = $query['services'] ? $query['services'] . ',5' : '5';
                $amount += 30;
                break;
            default:
                break;
        }
    }
    if ($_POST['picnic']) {
        switch ($_POST['picnic']) {
            case '40':
                $query['services'] = $query['services'] ? $query['services'] . ',6' : '6';
                $amount += 40;
                break;
            default:
                break;
        }
    }
    $taken_services = [];
    if (isset($_POST['guest_name']) && count($_POST['guest_name']) > 0) {
        foreach ($_POST['guest_name'] as $key => $value) {
            $taken_services[$key] = '';
            $query['guest_name'] = $query['guest_name'] ? $query['guest_name'] . ',' . $value : $value;
            if (isset($_POST['guest_dinner_cruse'][$key])) {
                switch ($_POST['guest_dinner_cruse'][$key]) {
                    case '100':
                        $taken_services[$key] = $taken_services[$key] ? $taken_services[$key] . ',1' : '1';
                        $amount += 100;
                        break;
                    case '50':
                        $taken_services[$key] = $taken_services[$key] ? $taken_services[$key] . ',2' : '2';
                        $amount += 50;
                        break;
                    default:
                        break;
                }
            }
            if (isset($_POST['guest_banquet_dinner'][$key])) {
                switch ($_POST['guest_banquet_dinner'][$key]) {
                    case '130':
                        $taken_services[$key] = $taken_services[$key] ? $taken_services[$key] . ',3' : '3';
                        $amount += 130;
                        break;
                    case '75':
                        $taken_services[$key] = $taken_services[$key] ? $taken_services[$key] . ',4' : '4';
                        $amount += 75;
                        break;
                    case '30':
                        $taken_services[$key] = $taken_services[$key] ? $taken_services[$key] . ',5' : '5';
                        $amount += 30;
                        break;
                    default:
                        break;
                }
            }
            if (isset($_POST['guest_picnic'][$key])) {
                switch ($_POST['guest_picnic'][$key]) {
                    case '40':
                        $taken_services[$key] = $taken_services[$key] ? $taken_services[$key] . ',6' : '6';
                        $amount += 40;
                        break;
                    default:
                        break;
                }
            }
        }
    }
    if (isset($_POST['guest_email']) && count($_POST['guest_email']) > 0) {
        foreach ($_POST['guest_email'] as $key => $value) {
            $query['guest_email'] = $query['guest_email'] ? $query['guest_email'] . ',' . $value : $value;
        }
    }
    $query['taken_services'] = json_encode($taken_services);
    $query['amount'] = $amount;
    curl_setopt($ch, CURLOPT_URL, 'https://icircles.app/api/convension/attendee_registration/');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($query));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $res = json_decode($response);
    curl_close($ch);
    $id = strtotime("now");
    if ($res->status && $_POST['payment_method'] == '1') {
        try {
            $checkout = $stripePayment->checkout($id, $_POST['email'], $_POST['first_name'] . ' ' . $_POST['last_name'], $amount, "http://localhost/bmana-convention/success.php", "http://localhost/bmana-convention/cancel.php");
            $attendee = array(
                "id" => $checkout->id,
                "ref_id" => $id,
                "insert_id" => $res->insert_id
            );
            $_SESSION['attendee'] = $attendee;
            header('Location: ' . $checkout->url);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    } else {
        header('Location: index.php');
    }
}
