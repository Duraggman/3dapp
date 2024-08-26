$(document).ready(function () {
    var wireClicked = 0;
    //Ajax get data from data.json
    $.getJSON('model/data.json', function (data) {

        // Find the buttons
        var fBtn = document.getElementById("b-front");
        var bBtn = document.getElementById("b-back");
        var lBtn = document.getElementById("b-left");
        var rBtn = document.getElementById("b-right");
        var oBtn = document.getElementById('b-off');
        var wBtn = document.getElementById('b-wire');

        // Function to set the viewpoint
        function setViewpoint(viewpoint) {
            var viewpoint = document.getElementById(viewpoint);
            viewpoint.setAttribute('bind', 'true');
        }

        function wireframe() {
            var e = document.getElementById('model-s');
            e.runtime.togglePoints(true);
            e.runtime.togglePoints(true);
        }

        // Add event listeners to the buttons
        fBtn.addEventListener("click", function () {
            setViewpoint("model__cam-front");
        });

        bBtn.addEventListener("click", function () {
            setViewpoint('model__cam-back');
        });

        lBtn.addEventListener("click", function () {
            setViewpoint('model__cam-left');
        });

        rBtn.addEventListener("click", function () {
            setViewpoint('model__cam-right');
        });

        oBtn.addEventListener("click", function () {
            if (document.getElementById('switcher').getAttribute('whichChoice') == '-1') {
                oBtn.textContent = "Off";
                document.getElementById('switcher').setAttribute('whichChoice', '0');
            }
            else {
                oBtn.textContent = "On";
                document.getElementById('switcher').setAttribute('whichChoice', '-1');
            }
        });

        wBtn.addEventListener("click", function () {
            wireClicked++;
            wireframe();
            if (wireClicked == 0) {
                wBtn.textContent = "#A9A9A9";
                wBtn.style.backgroundColor = "red";
            }
            else if (wireClicked == 1) {
                wBtn.textContent = "Wireframe";
                wBtn.style.backgroundColor = "blue";
            }
            else if (wireClicked == 2) {
                wBtn.style.backgroundColor = "green";
                wireClicked = 0;
            }
        });

    });
});

