
var counterForVegLunchNorthIndian, counterForNonVegLunchNorthIndian, counterForVegDinnerNorthIndian, counterForNonVegDinnerNorth
    ,counterForVegLunchSouthIndian, counterForNonVegLunchSouthIndian, counterForVegDinnerSouthIndian, counterForNonVegDinnerSouthIndian = 1;
var limit = 10;

function addInputForVegItemLunchNorthIndian(divName) {

    if (counterForVegLunchNorthIndian == limit)  {
        alert("You have reached the limit of adding " + counterForVegLunchNorthIndian + " inputs");
    }
    else {
        var newdiv = document.createElement('div');
        newdiv.innerHTML = "Item "+" <input type='text' name='vegItemLunchNorth[]' class='input-large'> " +
                           "Price "+" <input type='text' name='vegItemPriceLunchNorth[]' class='input-small'>"+"<br>";
        document.getElementById(divName).appendChild(newdiv);
        counterForVegLunchNorthIndian++;
    }
}

function addInputForNonVegItemLunchNorthIndian(divName) {

    if(counterForNonVegLunchNorthIndian == limit) {
        alert("You have reached the limit of adding " + counterForNonVegLunchNorthIndian + " inputs");
    }
    else {
        var newdiv = document.createElement('div');
        newdiv.innerHTML = "Item "+" <input type='text' name='nonVegItemLunchNorth[]' class='input-large'> " +
                           "Price "+" <input type='text' name='nonVegItemPriceLunchNorth[]' class='input-small'>"+"<br>";
        document.getElementById(divName).appendChild(newdiv);
        counterForNonVegLunchNorthIndian++;
    }
}

function addInputForVegItemDinnerNorthIndian(divName) {

    if (counterForVegDinnerNorthIndian == limit)  {
        alert("You have reached the limit of adding " + counterForVegDinnerNorthIndian + " inputs");
    }
    else {
        var newdiv = document.createElement('div');
        newdiv.innerHTML = "Item "+" <input type='text' name='vegItemDinnerNorth[]' class='input-large'> " +
        "Price "+" <input type='text' name='vegItemPriceDinnerNorth[]' class='input-small'>"+"<br>";
        document.getElementById(divName).appendChild(newdiv);
        counterForVegDinnerNorthIndian++;
    }
}

function addInputForNonVegItemDinnerNorthIndian(divName) {

    if (counterForNonVegDinnerNorth == limit)  {
        alert("You have reached the limit of adding " + counterForNonVegDinnerNorth + " inputs");
    }
    else {
        var newdiv = document.createElement('div');
        newdiv.innerHTML = "Item "+" <input type='text' name='nonVegItemDinnerNorth[]' class='input-large'> " +
        "Price "+" <input type='text' name='nonVegItemPriceDinnerNorth[]' class='input-small'>"+"<br>";
        document.getElementById(divName).appendChild(newdiv);
        counterForNonVegDinnerNorth++;
    }
}

function addInputForVegItemLunchSouthIndian(divName) {

    if (counterForVegLunchSouthIndian == limit)  {
        alert("You have reached the limit of adding " + counterForVegLunchSouthIndian + " inputs");
    }
    else {
        var newdiv = document.createElement('div');
        newdiv.innerHTML = "Item "+" <input type='text' name='vegItemLunchSouth[]' class='input-large'> " +
                           "Price "+" <input type='text' name='vegItemPriceLunchSouth[]' class='input-small'>"+"<br>";
        document.getElementById(divName).appendChild(newdiv);
        counterForNonVegDinnerNorth++;
    }
}

function addInputForNonVegItemLunchSouthIndian(divName) {

    if (counterForNonVegLunchSouthIndian == limit)  {
        alert("You have reached the limit of adding " + counterForNonVegLunchSouthIndian + " inputs");
    }
    else {
        var newdiv = document.createElement('div');
        newdiv.innerHTML = "Item "+" <input type='text' name='nonVegItemLunchSouth[]' class='input-large'> " +
                           "Price "+" <input type='text' name='nonVegItemPriceLunchSouth[]' class='input-small'>"+"<br>";
        document.getElementById(divName).appendChild(newdiv);
        counterForNonVegLunchSouthIndian++;
    }
}

function addInputForVegItemDinnerSouthIndian(divName) {

    if (counterForVegDinnerSouthIndian == limit)  {
        alert("You have reached the limit of adding " + counterForVegDinnerSouthIndian + " inputs");
    }
    else {
        var newdiv = document.createElement('div');
        newdiv.innerHTML = "Item "+" <input type='text' name='vegItemDinnerSouth[]' class='input-large'> " +
                           "Price "+" <input type='text' name='vegItemPriceDinnerSouth[]' class='input-small'>"+"<br>";
        document.getElementById(divName).appendChild(newdiv);
        counterForVegDinnerSouthIndian++;
    }
}

function addInputForNonVegItemDinnerSouthIndian(divName) {

    if (counterForNonVegDinnerSouthIndian == limit)  {
        alert("You have reached the limit of adding " + counterForNonVegDinnerSouthIndian + " inputs");
    }
    else {
        var newdiv = document.createElement('div');
        newdiv.innerHTML = "Item "+" <input type='text' name='nonVegItemDinnerSouth[]' class='input-large'> " +
                           "Price "+" <input type='text' name='nonVegItemPriceDinnerSouth[]' class='input-small'>"+"<br>";
        document.getElementById(divName).appendChild(newdiv);
        counterForNonVegDinnerSouthIndian++;
    }
}


