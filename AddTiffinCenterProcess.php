<?php

session_start();

if(isSet($_POST['name']) && isSet($_POST['address']) && isSet($_POST['location'])) {

    $name = $_POST['name'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $contact = $_POST['contact'];
    $cuisine = $_POST['cuisine'];
    $lunchTime = $_POST['lunchTime'];
    $dinnerTime = $_POST['dinnerTime'];

    $monday = $_POST['monday'];
    $tuesday = $_POST['teusday'];
    $wednesday = $_POST['wednesday'];
    $thursday = $_POST['thursday'];
    $friday = $_POST['friday'];
    $saturday = $_POST['saturday'];
    $sunday = $_POST['sunday'];

    $combinedArrayForJSONObject = array(

        "name" => $name,
        "location" => $location,
        "address" => $address,
        "contact" => $contact,
        "cuisine" => $cuisine,
        "lunchTime" => $lunchTime,
        "dinnerTime" => $dinnerTime,

        "daysOfAvailability" => array(

            "monday" => $monday,
            "teusday" => $tuesday,
            "wednesday" => $wednesday,
            "thursday" => $thursday,
            "friday" => $friday,
            "saturday" => $saturday,
            "sunday" => $sunday
        ),
    );



    //echo "Form Details are : " . print_r($dataToBeSent); // To check that data has been recorded.


    // JSON Data to be sent to a URL.
    $dataString = json_encode($combinedArrayForJSONObject);
    $curlSessionForVendorForm = curl_init('http://192.168.0.7:8080/citytiffins/tiffincenter/add');

    curl_setopt($curlSessionForVendorForm, CURLOPT_CUSTOMREQUEST,"POST");
    curl_setopt($curlSessionForVendorForm, CURLOPT_POSTFIELDS, $dataString);
    curl_setopt($curlSessionForVendorForm, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($curlSessionForVendorForm, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($curlSessionForVendorForm, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($dataString))
    );

    $resultForJSON = curl_exec($curlSessionForVendorForm);
    $resultCode = curl_getinfo($curlSessionForVendorForm, CURLINFO_HTTP_CODE);

    $decodedResponse = json_decode($resultForJSON);

    if($decodedResponse == 1) {
        header('TiffinCenterRegistered.php');
    }
    else {
        header('TiffinCenterNotRegistered.php');
    }

}



