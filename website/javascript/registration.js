"use strict";

(function() {
    var numDoors = 0;

    window.onload = function() {
        setupDropDownMenus();
    };

    function setupDropDownMenus() {
        /****************************Gender*/
        var Genderajax = new XMLHttpRequest();

        Genderajax.onload = function() {
            console.log(this.responseText);
            var response = JSON.parse(this.response);
            for (var i = 0; i < response.length; i++) {

                var newOption = document.createElement("option");
                newOption.value= response[i].GenderName + "";
                newOption.innerHTML = response[i].GenderName + "";

                document.getElementById("GenderSelection").appendChild(newOption);

            }
        };

        Genderajax.open("GET", "getGender.php", true);
        Genderajax.send(null);
        /****************************Country*/
        var Countryajax = new XMLHttpRequest();

        Countryajax.onload = function() {
            console.log(this.responseText);
            var response = JSON.parse(this.response);
            for (var i = 0; i < response.length; i++) {

                var newOption = document.createElement("option");
                newOption.value= response[i].CountryName + "";
                newOption.innerHTML = response[i].CountryName + "";

                document.getElementById("CountrySelection").appendChild(newOption);

            }
        };

        Countryajax.open("GET", "getCountry.php", true);
        Countryajax.send(null);
        /****************************Language*/
        var LanguageAjax = new XMLHttpRequest();

        LanguageAjax.onload = function() {
            console.log(this.responseText);
            var response = JSON.parse(this.response);
            for (var i = 0; i < response.length; i++) {

                var newOption = document.createElement("option");
                newOption.value= response[i].JargonName + "";
                newOption.innerHTML = response[i].JargonName + "";

                document.getElementById("LanguageSelection").appendChild(newOption);

            }
        };

        LanguageAjax.open("GET", "getLanguage.php", true);
        LanguageAjax.send(null);



    }




}());



