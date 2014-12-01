<?php
/*
session_start();

if(empty($_SESSION['login_user']))
    header('Location: AdminLogin.php');
*/?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Vendor Registration</title>
    <meta name="viewport" content="width=device-width">
    <link href="css/styleAddTiffinCenter.css" rel="stylesheet">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://www.json.org/json2.js"></script>

</head>

<div class="container">

    <div class="span12">
        <h1>Tiffin Center Add Form</h1>
    </div>

    <div class="row-fluid">
        <div class="span6 offset6">
            <div id="maincontent" class="span8">

                <form id="registration-form" class="form-horizontal" name="myForm" action="AddTiffinCenterProcess.php" method="post">

                    <br/>

                    <div class="form-control-group">
                        <label class="control-label" for="name">Name of the Vendor</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" name="name" id="name">
                        </div>
                    </div>

                    <div class="form-control-group">
                        <label class="control-label" for="name">Location</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" name="location" id="location">
                        </div>
                    </div>

                    <div class="form-control-group">
                        <label class="control-label" for="message">Address of Vendor</label>
                        <div class="controls">
                            <textarea class="input-xlarge" name="address" id="address" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-control-group">
                        <label class="control-label" for="name">Contact</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" name="contact" id="contact">
                        </div>
                    </div>

                    <div class="form-control-group">
                        <label class="control-label" for="name">Cuisine</label>
                        <div class="controls">
                            <textarea class="input-xlarge" name="cuisine" id="cuisine" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-control-group">
                        <label class="control-label" for="name">Timings:</label>
                        <div class="controls">
                            <input type="text" class="input-small" name="lunch" id="lunchTime" value="Lunch">
                            <br><br>
                            <input type="text" class="input-small " name="lunch" id="dinnerTime" value="Dinner"><br>
                        </div>
                    </div>

                    <div class="form-control-group">
                        <label class="control-label" for="message">Days of Availability</label>
                        <div class="controls">
                            <label><input id="monday" class="checkbox" type="checkbox" name="monday" style="margin-top: -1px;margin-right: 5px">Monday</label>
                            <label><input id="tuesday" class="checkbox" type="checkbox" name="tuesday" style="margin-top: -1px;margin-right: 5px">Tuesday</label>
                            <label><input id="wednesday" class="checkbox" type="checkbox" name="wednesday" style="margin-top: -1px;margin-right: 5px">Wednesday</label>
                            <label><input id="thursday" class="checkbox" type="checkbox" name="thursday" style="margin-top: -1px;margin-right: 5px">Thursday</label>
                            <label><input id="friday" class="checkbox" type="checkbox" name="friday" style="margin-top: -1px;margin-right: 5px">Friday</label>
                            <label><input id="saturday" class="checkbox" type="checkbox" name="saturday" style="margin-top: -1px;margin-right: 5px">Saturday</label>
                            <label><input id="sunday" class="checkbox" type="checkbox" name="sunday" style="margin-top: -1px;margin-right: 5px">Sunday</label>
                        </div>
                    </div>

                    <div class="form-control-group">
                        <label class="control-label" for="message"> Please agree to our policy</label>
                        <div class="controls">
                            <input id="agree" class="checkbox" type="checkbox" name="agree">
                        </div>
                    </div>



                    <button type="submit" class="btn btn-success btn-large">Register</button>
                    <button type="reset" class="btn btn-success btn-large">Cancel</button>


                </form>

            </div>
            <!-- .span -->
        </div>
        <!-- .row -->

    </div>
    <!-- .container -->

    <script src="js/jquery-1.7.1.min.js"></script>

    <script src="js/jquery.validate.js"></script>

    <script src="js/scriptFormVendor.js"></script>

</html>
