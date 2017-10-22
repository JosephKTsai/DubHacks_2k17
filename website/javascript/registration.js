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
            var response = JSON.parse(this.response);
            for (var i = 0; i < response.length; i++) {

                var newOption = document.createElement("option");
                newOption.value= response[i].GenderName + "";
                newOption.innerHTML = response[i].GenderName + "";

                document.getElementById("genderSelection").appendChild(newOption);

            }
        };

        ajax.open("GET", "getGender.php", true);
        ajax.send(null);





    }




}());



