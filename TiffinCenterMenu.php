<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Welcome to City Tiffins</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/styleTffinCenterMenu.css">
    <script src="js/TiffinCenterMenu.js" type="text/javascript"></script>
</head>
    <body>
        <h1>Vendor Menu Form</h1>

        <div id="northIndian">
            <h2>Lunch</h2>
            <form method="POST" action="TiffinCenterMenuProcess.php">
            <div id="submenu">
            <h3>North Indian<h3>

                <p id="veg">Vegetarian:</p>
                <div id="dynamicInputForVegLunchNorth">
                    Item <input type="text" class="input-large" name="vegItemLunchNorth[]" id="vegItemLunchNorth">
                    Price <input type="text" class="input-small" name="vegItemPriceLunchNorth[]" id="vegItemPriceLunchNorth"><br>
                </div>
                <input class="btn btn-primary" value="Add Veg Item" type="button" onClick="addInputForVegItemLunchNorthIndian('dynamicInputForVegLunchNorth');"
                    style="margin-left: 10px">
                <br><br>
                <p id="nonveg">Non Vegetarian:</p>
                <div id="dynamicInputForNonVegNorth">
                    Item <input type="text" class="input-large" name="nonVegItemLunchNorth[]" id="nonVegItemLunchNorth">
                    Price <input type="text" class="input-small" name="nonVegItemPriceLunchNorth[]" id="nonVegItemPriceLunchNorth"><br>
                </div>
                <input class="btn btn-primary" value="Add Non Veg Item" type="button" onClick="addInputForNonVegItemLunchNorthIndian('dynamicInputForNonVegNorth');"
                    style="margin-left: 10px">
            </div>
            <br><br>
                <div id="submenu">
                    <h3>South Indian<h3>

                            <p id="veg">Vegetarian:</p>
                            <div id="dynamicInputForVegLunchSouth">
                                Item <input type="text" class="input-large" name="vegItemLunchSouth[]" id="vegItemLunchSouth">
                                Price <input type="text" class="input-small" name="vegItemPriceLunchSouth[]" id="vegItemPriceLunchSouth"><br>
                            </div>
                            <input class="btn btn-primary" value="Add Veg Item" type="button" onClick="addInputForVegItemLunchSouthIndian('dynamicInputForVegLunchSouth');"
                                   style="margin-left: 10px">
                            <br><br>
                            <p id="nonveg">Non Vegetarian:</p>
                            <div id="dynamicInputForNonVeg">
                                Item <input type="text" class="input-large" name="nonVegItemLunchSouth[]" id="nonVegItemLunchSouth">
                                Price <input type="text" class="input-small" name="nonVegItemPriceLunchSouth[]" id="nonVegItemPriceLunchSouth"><br>
                            </div>
                            <input class="btn btn-primary" value="Add Non Veg Item" type="button" onClick="addInputForNonVegItemLunchSouthIndian('dynamicInputForNonVeg');"
                                   style="margin-left: 10px">
                </div>

                <h2>Dinner</h2>
                <div id="submenu">
                    <h3>North Indian<h3>

                            <p id="veg">Vegetarian:</p>
                            <div id="dynamicInputForVegDinnerNorth">
                                Item <input type="text" class="input-large" name="vegItemDinnerNorth[]" id="vegItemForDinnerNorth">
                                Price <input type="text" class="input-small" name="vegItemPriceDinnerNorth[]" id="vegItemPriceDinnerNorth"><br>
                            </div>
                            <input class="btn btn-primary" value="Add Veg Item" type="button" onClick="addInputForVegItemDinnerNorthIndian('dynamicInputForVegDinnerNorth');"
                                   style="margin-left: 10px">
                            <br><br>
                            <p id="nonveg">Non Vegetarian:</p>
                            <div id="dynamicInputForNonVegDinnerNorth">
                                Item <input type="text" class="input-large" name="nonVegItemDinnerNorth[]" id="nonVegItemDinnerNorth">
                                Price <input type="text" class="input-small" name="nonVegItemPriceDinnerNorth[]" id="nonVegItemPriceDinnerNorth"><br>
                            </div>
                            <input class="btn btn-primary" value="Add Non Veg Item" type="button" onClick="addInputForNonVegItemDinnerNorthIndian('dynamicInputForNonVegDinnerNorth');"
                                   style="margin-left: 10px">
                </div>
                <br><br>
                <div id="submenu">
                    <h3>South Indian<h3>

                            <p id="veg">Vegetarian:</p>
                            <div id="dynamicInputForVegDinnerSouth">
                                Item <input type="text" class="input-large" name="vegItemDinnerSouth[]" id="vegItemDinnerSouth">
                                Price <input type="text" class="input-small" name="vegItemPriceDinnerSouth[]" id="vegItemPriceDinnerSouth"><br>
                            </div>
                            <input class="btn btn-primary" value="Add Veg Item" type="button" onClick="addInputForVegItemDinnerSouthIndian('dynamicInputForVegDinnerSouth');"
                                   style="margin-left: 10px">
                            <br><br>
                            <p id="nonveg">Non Vegetarian:</p>
                            <div id="dynamicInputForNonVegDinnerSouth">
                                Item <input type="text" class="input-large" name="nonVegItemDinnerSouth[]" id="nonVegItemDinnerSouth">
                                Price <input type="text" class="input-small" name="nonVegItemPriceDinnerSouth[]" id="nonVegItemPriceDinnerSouth"><br>
                            </div>
                            <input class="btn btn-primary" value="Add Non Veg Item" type="button" onClick="addInputForNonVegItemDinnerSouthIndian('dynamicInputForNonVegDinnerSouth');"
                                   style="margin-left: 10px">
                </div>

            </form>

        </div>


    </body>
</html>
