"use strict";

(function() {
    var numDoors = 0;

    window.onload = function() {
        setupDropDownMenu();
    };

    function setupDropDownMenu() {
        var ajax = new XMLHttpRequest();

        ajax.onload = function() {
            DoorSelect.innerHTML = this.responseText;
        };

        ajax.open("GET", "getGender.php", true);
        ajax.send(null);

        console.log(ajax);




    }


}());



