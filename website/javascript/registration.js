"use strict";

(function() {
    var numDoors = 0;

    window.onload = function() {
        setupDropDownMenu();
    };

    function setupDropDownMenu() {
        var ajax = new XMLHttpRequest();

        ajax.onload = function() {
            console.log(this.responseText);
        };

        ajax.open("GET", "getGender.php", true);
        ajax.send(null);

        for (var i = 0; i < ajax.responseText.length; i++) {

            var newOption = document.createElement("option");
            newOption.value= ajax.responseText[i][0] + "";
            newOption.innerHTML = ajax.responseText[i][0] + "";

            document.getElementById("genderSelection").appendChild(newOption);

        }



    }




}());



