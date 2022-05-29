<?php
session_start();
require_once('payment.php');

$stripePayment = new Payment();

if (isset($_POST)) {
    $ch = curl_init();
    $amount = 0;
    switch ($_POST['sponsor_type']) {
        case '1':
            $amount = 10000;
            break;
        case '2':
            $amount = 2500;
            break;
        case '3':
            $amount = 5000;
            break;
        case '4':
            $amount = 1200;
            break;
        case '5':
            $amount = 15000;
            break;
        default:
            $amount = 10000;
            break;
    }
    $query1 = array(
        "microsite_id" => $_SESSION['ms_id'],
        "user_id" => $_SESSION['user_id'],
        "sponsor_name" => $_POST['sponsor_name'],
        "website_url" => $_POST['website_url'],
        "sponsor_type" => $_POST['sponsor_type'],
        "contact_person" => $_POST['contact_person'],
        "contact_person_title" => $_POST['contact_person_title'],
        "address" => $_POST['address'],
        "city" => $_POST['city'],
        "zip" => $_POST['zip'],
        "phone" => $_POST['phone'],
        "fax" => $_POST['fax'],
        "email" => $_POST['email'],
        "sponsored_item" => $_POST['sponsored_item'],
        "state" => $_POST['state'],
        "amount" => $amount,

    );
    curl_setopt($ch, CURLOPT_URL, 'https://icircles.app/api/convension/sponsor_registration/');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($query1));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $res = json_decode($response);
    curl_close($ch);
    $id = strtotime("now");
    if ($res->status && $_POST['payment_method'] == '1') {
        try {
            $checkout = $stripePayment->checkout($id, $_POST['email'], $_POST['sponsor_name'], $amount, "http://localhost/bmana-convention/success.php", "http://localhost/bmana-convention/cancel.php");
            $sponsor = array(
                "id" => $checkout->id,
                "ref_id" => $id,
                "insert_id" => $res->insert_id
            );
            $_SESSION['sponsor'] = $sponsor;
            header('Location: ' . $checkout->url);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    } else {
        header('Location: index.php');
    }
}
