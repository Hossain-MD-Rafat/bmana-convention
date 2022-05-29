<?php
require_once('payment.php');

$stripePayment = new Payment();

session_start();
if (isset($_SESSION['sponsor'])) {
    $user = $_SESSION['sponsor'];
    $payment = $stripePayment->retrieveCheckout($user['id']);

    if (isset($payment->payment_status) && $payment->payment_status == 'paid' && $payment->client_reference_id == $user['ref_id']) {
        $ch = curl_init();
        $query = array(
            "payment_status" => $payment->payment_status == 'paid' ? 1 : 0
        );

        curl_setopt($ch, CURLOPT_URL, 'https://icircles.app/api/convension/update_payment_sponsored/' . $user['insert_id']);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($query));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($response);
        if ($result->status == 1) {
            unset($_SESSION['sponsor']);
            header('Location: thankyou.php');
        }
    }
}
if (isset($_SESSION['exhibit'])) {
    $user = $_SESSION['exhibit'];
    $payment = $stripePayment->retrieveCheckout($user['id']);

    if (isset($payment->payment_status) && $payment->payment_status == 'paid' && $payment->client_reference_id == $user['ref_id']) {
        $ch = curl_init();
        $query = array(
            "payment_status" => $payment->payment_status == 'paid' ? 1 : 0
        );

        curl_setopt($ch, CURLOPT_URL, 'https://icircles.app/api/convension/update_payment_exibitor/' . $user['insert_id']);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($query));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($response);
        if ($result->status == 1) {
            unset($_SESSION['sponsor']);
            header('Location: thankyou.php');
        }
    }
}
if (isset($_SESSION['attendee'])) {
    $user = $_SESSION['attendee'];
    $payment = $stripePayment->retrieveCheckout($user['id']);

    if (isset($payment->payment_status) && $payment->payment_status == 'paid' && $payment->client_reference_id == $user['ref_id']) {
        $ch = curl_init();
        $query = array(
            "payment_status" => $payment->payment_status == 'paid' ? 1 : 0
        );
        curl_setopt($ch, CURLOPT_URL, 'https://icircles.app/api/convension/update_payment_attendee/' . $user['insert_id']);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($query));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($response);
        if ($result->status == 1) {
            unset($_SESSION['sponsor']);
            header('Location: thankyou.php');
        }
    }
}
