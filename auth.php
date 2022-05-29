<?php
session_start();
if (isset($_POST['registration'])) {
    $ch = curl_init();
    $query = array(
        "email" => $_POST['email'],
        "firstname" => $_POST['firstname'],
        "lastname" => $_POST['lastname'],
        "password" => $_POST['password'],
        "password2" => $_POST['password2'],
        "username" => $_POST['username'],
    );
    curl_setopt($ch, CURLOPT_URL, 'https://icircles.app/api/register');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($query));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $result = json_decode($response);

    if (isset($result->user_id) && $result->status) {
        $query1 = array(
            "microsite_id" => $_SESSION['ms_id'],
            "user_id" => $result->user_id,
            "speciality" => $_POST['speciality'],
            "about_member" => $_POST['about_member'],
            "comments" => $_POST['comments'],
            "home_address" => $_POST['home_address'],
            "office_address" => $_POST['office_address'],
            "faculty_affiliation" => $_POST['faculty_affiliation'],
            "phone" => $_POST['phone'],
            "medical_school" => $_POST['medical_school'],
            "state_license" => $_POST['state_license'],
            
        );
        curl_setopt($ch, CURLOPT_URL, 'https://icircles.app/api/convension/sponsor_registration/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($query1));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $res = json_decode($response);
        return;
    }
    echo json_encode($result);
}
