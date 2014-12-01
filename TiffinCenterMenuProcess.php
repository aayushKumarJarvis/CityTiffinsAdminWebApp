<?php
/*
 *  Code for sending the data for the Tiffin Vendor's Menu to DB
 */

session_start();

// Generating Key Value Pair for the veg items lunch north indian
$arrayOfVegItemLunchNorth = array();
$arrayOfVegItemPriceLunchNorth = array();
$keyValuePairForVegLunchNorth = array();

for($i = 0; $i < count($_POST['vegItemLunchNorth']); $i++) {

    $arrayOfVegItemLunchNorth[$i] = $_POST['vegItemLunchNorth'][$i];
    $arrayOfVegItemPriceLunchNorth[$i] = $_POST['vegItemPriceLunchNorth'][$i];
}

$keyValuePairForVegLunchNorth = array_combine($arrayOfVegItemLunchNorth,$arrayOfVegItemPriceLunchNorth);

// Generating key value pairs for the non veg items lunch north indian
$arrayOfNonVegItemLunchNorth = array();
$arrayOfNonVegItemPriceLunchNorth = array();
$keyValuePairForNonVegLunchNorth = array();

for($i = 0; $i < count($_POST['nonVegItemLunchNorth']); $i++) {

    $arrayOfNonVegItemLunchNorth[$i] = $_POST['nonVegItemLunchNorth'][$i];
    $arrayOfNonVegItemPriceLunchNorth[$i] = $_POST['nonVegItemPriceLunchNorth'][$i];
}

$keyValuePairForNonVegLunchNorth = array_combine($arrayOfNonVegItemLunchNorth, $arrayOfNonVegItemPriceLunchNorth);

//Generating key value pairs for the veg items lunch south
$arrayOfVegItemLunchSouth = array();
$arrayOfVegItemPriceLunchSouth = array();
$keyValuePairForVegLunchSouth = array();

for($i = 0; $i < count($_POST['vegItemLunchSouth']); $i++) {

    $arrayOfVegItemLunchSouth[$i] = $_POST['vegItemLunchSouth'][$i];
    $arrayOfVegItemPriceLunchSouth[$i] = $_POST['vegItemPriceLunchSouth'][$i];
}

$keyValuePairForVegLunchSouth = array_combine($arrayOfVegItemLunchSouth, $arrayOfVegItemPriceLunchSouth);

//Generating key value pairs for the non veg items lunch south
$arrayOfNonVegItemLunchSouth = array();
$arrayOfNonVegItemPriceLunchSouth = array();
$keyValuePairForNonVegLunchSouth = array();

for($i = 0; $i < count($_POST['nonVegItemLunchSouth']); $i++) {

    $arrayOfNonVegItemLunchSouth[$i] = $_POST['nonVegItemLunchSouth'][$i];
    $arrayOfNonVegItemPriceLunchSouth = $_POST['nonVegItemPriceLunchSouth'][$i];
}

$keyValuePairForNonVegLunchSouth = array_combine($arrayOfNonVegItemLunchSouth, $arrayOfNonVegItemPriceLunchSouth);

//Generating key value pairs for the veg items dinner north
$arrayOfVegItemDinnerNorth = array();
$arrayOfVegItemPriceDinnerNorth = array();
$keyValuePairForVegDinnerNorth = array();

for($i = 0; $i < count($_POST['vegItemDinnerNorth']); $i++) {

    $arrayOfVegItemDinnerNorth[$i] = $_POST['vegItemDinnerNorth'][$i];
    $arrayOfVegItemPriceDinnerNorth[$i] = $_POST['vegItemPriceDinnerNorth'][$i];
}

$keyValuePairForVegDinnerNorth = array_combine($arrayOfVegItemDinnerNorth, $arrayOfVegItemPriceDinnerNorth);

//Generating key value pairs for the non veg items dinner north
$arrayOfNonVegItemDinnerNorth = array();
$arrayOfNonVegItemPriceDinnerNorth = array();
$keyValuePairForNonVegDinnerNorth = array();

for($i = 0; $i < count($_POST['nonVegItemDinnerNorth']); $i++) {

    $arrayOfNonVegItemDinnerNorth[$i] = $_POST['nonVegItemDinnerNorth'][$i];
    $arrayOfNonVegItemPriceDinnerNorth[$i] = $_POST['nonVegItemPriceDinnerNorth'][$i];
}

$keyValuePairForNonVegDinnerNorth = array_combine($arrayOfNonVegItemDinnerNorth, $arrayOfNonVegItemPriceDinnerNorth);

//Generating key value pairs for veg items dinner south indian
$arrayOfVegItemDinnerSouth = array();
$arrayOfVegItemPriceDinnerSouth = array();
$keyValuePairForVegDinnerSouth = array();

for($i = 0; $i < count($_POST['vegItemDinnerSouth']); $i++) {

    $arrayOfVegItemDinnerSouth[$i] = $_POST['vegItemDinnerSouth'][$i];
    $arrayOfVegItemPriceDinnerSouth[$i] = $_POST['vegItemPriceDinnerSouth'][$i];
}

$keyValuePairForVegDinnerSouth = array_combine($arrayOfVegItemDinnerSouth, $arrayOfVegItemPriceDinnerSouth);

//Generating key value pairs for non veg items dinner south
$arrayOfNonVegItemDinnerSouth = array();
$arrayOfNonVegItemPriceDinnerSouth = array();
$keyValuePairForNonVegDinnerSouth = array();

for($i = 0; $i < count($_POST['nonVegItemDinnerSouth']); $i++) {

    $arrayOfNonVegItemDinnerSouth[$i] = $_POST['nonVegItemDinnerSouth'][$i];
    $arrayOfNonVegItemPriceDinnerSouth[$i] = $_POST['nonVegItemPriceDinnerSouth'][$i];
}

$keyValuePairForNonVegDinnerSouth = array_combine($arrayOfNonVegItemDinnerSouth, $arrayOfNonVegItemPriceDinnerSouth);


// Combining the associative arrays generated into a common array and sending it in JSON format through a curl request
$combinedArrayForJSONObject = array (

    "lunch" => array(
        "northIndian" => array(
            "veg" => $keyValuePairForVegLunchNorth,
            "nonVeg" => $keyValuePairForNonVegLunchNorth
        ),
        "southIndian" => array(
            "veg" => $keyValuePairForVegLunchSouth,
            "nonVeg" => $keyValuePairForNonVegLunchSouth
        )
    ),
    "dinner" => array(
        "northIndian" => array(
            "veg" => $keyValuePairForVegDinnerNorth,
            "nonVeg" => $keyValuePairForNonVegDinnerNorth
        ),
        "southIndian" => array(
            "veg" => $keyValuePairForVegDinnerSouth,
            "nonVeg" => $keyValuePairForNonVegDinnerSouth
        )
    )
);

// cURL session for sending data as post request
    $dataString = json_encode($combinedArrayForJSONObject);
    $curlSessionForTiffinCenterMenu = curl_init('');

    curl_setopt($curlSessionForTiffinCenterMenu, CURLOPT_CUSTOMREQUEST,"POST");
    curl_setopt($curlSessionForTiffinCenterMenu, CURLOPT_POSTFIELDS, $dataString);
    curl_setopt($curlSessionForTiffinCenterMenu, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($curlSessionForTiffinCenterMenu, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($curlSessionForTiffinCenterMenu, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($dataString))
    );

    $resultForJSON = curl_exec($curlSessionForTiffinCenterMenu);
    $resultCode = curl_getinfo($curlSessionForTiffinCenterMenu, CURLINFO_HTTP_CODE);

    $decodedResponse = json_decode($resultForJSON);

    if($decodedResponse == 1) {
        header('TiffinCenterRegistered.php');
    }
    else {
        header('TiffinCenterNotRegistered.php');
    }
