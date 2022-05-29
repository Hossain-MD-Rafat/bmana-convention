<?php
session_start();
require_once('payment.php');

$stripePayment = new Payment();


if (isset($_POST)) {
    $ch = curl_init();
    $amount = 0;
    foreach ($_POST['display_type'] as $item) {
        switch ($item) {
            case '1':
                $amount += 7500;
                break;
            case '2':
                $amount += 5000;
                break;
            case '3':
                $amount += 5000;
                break;
            case '4':
                $amount += 1200;
                break;
            case '5':
                $amount += 700;
                break;
            case '6':
                $amount += 400;
                break;
            case '7':
                $amount += 1500;
                break;
            default:
                break;
        }
    }
    $query1 = array(
        "microsite_id" => $_SESSION['ms_id'],
        "user_id" => $_SESSION['user_id'],
        "display_type" => $_POST['display_type'],
        "company_name" => $_POST['company_name'],
        "contact_name" => $_POST['contact_name'],
        "contact_title" => $_POST['contact_title'],
        "state" => $_POST['state'],
        "website" => $_POST['website'],
        "address" => $_POST['address'],
        "city" => $_POST['city'],
        "zip" => $_POST['zip'],
        "phone" => $_POST['phone'],
        "fax" => $_POST['fax'],
        "email" => $_POST['email'],
        "amount" => $amount

    );
    curl_setopt($ch, CURLOPT_URL, 'https://icircles.app/api/convension/exibitor_registration/');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($query1));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $res = json_decode($response);
    curl_close($ch);
    $id = strtotime("now");
    if ($res->status) {
        try {
            $checkout = $stripePayment->checkout($id, $_POST['email'], $_POST['company_name'], $amount, "http://localhost/bmana-convention/success.php", "http://localhost/bmana-convention/cancel.php");
            $exhibit = array(
                "id" => $checkout->id,
                "ref_id" => $id,
                "insert_id" => $res->insert_id
            );
            $_SESSION['exhibit'] = $exhibit;
            header('Location: ' . $checkout->url);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
