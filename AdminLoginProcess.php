<?php

session_start();

if(isSet($_POST['username']) && isSet($_POST['password'])) {

    // username and password sent from Form
    $username=$_POST['username'];
    $password=$_POST['password'];


    $url = 'http://192.168.0.7:8080/citytiffins/adminlogin/'.$username.'/'.$password;

    $curlSessionForVendorLogin = curl_init();
    curl_setopt($curlSessionForVendorLogin,CURLOPT_URL,$url);
    curl_setopt($curlSessionForVendorLogin,CURLOPT_RETURNTRANSFER,true);
    //curl_setopt($ch,CURLOPT_HEADER, false);

    $resultForLogin = curl_exec($curlSessionForVendorLogin);
    $resultCode = curl_getinfo($curlSessionForVendorLogin, CURLINFO_HTTP_CODE);

    echo $resultForLogin;
}
