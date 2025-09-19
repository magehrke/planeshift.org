/*
 * This file shows the canvas (maps) for the maps
 * of Yliakum of the Game Planeshift.
 */

// Does the site support Canvas?
function supports_canvas() {
    return !!document.createElement("canvas").getContext;
}

jQuery(function ($) {
    // Just do something, if the site supports canvas
    if (supports_canvas()) {
        // A link should be underlined, when hovered.
        // Yes, we do have this in our .css file
        // but it gets deleted, when we change the
        // text-decoration for the .show files, so here it
        // is again.
        $(".show").hover(
            function () {
                $(this).css("text-decoration", "underline");
            },
            function () {
                $(this).css("text-decoration", "none");
            }
        );

        // If the user clicks somewhere, where no Names or Links
        // are, then the site should just show the map without
        // a pin.
        $("body").click(function (e) {
            if (
                $(e.target).attr("class") != "show" &&
                $(e.target).attr("id") != "plotit" &&
                $(e.target).attr("id") != "toplot"
            ) {
                $(".show").css("font-weight", "normal");
                window.location = "#plain";
            }
        });
        // When the user clicks the "Go" button of the "Plot a point" section.
        $("#plotit").click(function () {
            window.location = "#plot=" + $("#toplot").val();
        });
        // When the user uses presses Enter in the "Plot a point" section.
        $("#toplot").keypress(function (e) {
            if (e.which == "13") {
                // .which returns tbe button/key which has been pressed
                window.location = "#plot=" + $("#toplot").val();
            }
        });

        window.onhashchange = addMap;
        addMap();
    }

    $(".selectLayer").click(function (e) {
        e.preventDefault();
        k = parseInt($(this).data("which"));
        if ($(this).hasClass("selected") && hiddenLayers.length < layers - 1) {
            // We want to prevent, that only the background is shown
            // The background has k == 1 because its the layer which
            // has to be drawn first.
            if (
                !(
                    k !== 1 &&
                    hiddenLayers.length === layers - 2 &&
                    $.inArray(1, hiddenLayers) === -1
                )
            ) {
                $(this).removeClass("selected");
                if ($.inArray(k, hiddenLayers) === -1) {
                    hiddenLayers.push(k);
                }
            }
        } else {
            $(this).addClass("selected");
            if ($.inArray(k, hiddenLayers) !== -1) {
                hiddenLayers = $.grep(hiddenLayers, function (a) {
                    return a != k;
                });
            }
        }
        addMap();
        return false;
    });
});

var mapWidth, mapHeight;

var done = false;
var numberDone = 0;

function addMap() {
    done = false;
    numberDone = 0;
    var canvas = document.getElementById("myCanvas");
    var context = canvas.getContext("2d");
    /*
    var width  = canvas.width;
    var height = canvas.height;
    */
    context.clearRect(0, 0, canvas.width, canvas.height);
    if (layers === 1) {
        var img = new Image();
        img.addEventListener(
            "load",
            function () {
                var width = canvas.width;
                mapWidth = width;
                var factor = width / img.width;
                var height = Math.round(img.height * factor);
                mapHeight = height;
                context.drawImage(this, 0, 0, width, height);
                done = true;
            },
            false
        );
        img.src = map;
    } else {
        for (var i = 1; i <= layers; i++) {
            if ($.inArray(i, hiddenLayers) === -1) {
                var img = new Image();
                img.src = map + "_" + i + ".png";
                img.addEventListener(
                    "load",
                    function () {
                        nowDrawing = this.src.substr(-5, 1); // returns i, -5 = from the end with length 1
                        callAddLayer(this, img, context, nowDrawing);
                    },
                    false
                );
            }
        }
    }
    whenDone();
}

function whenDone() {
    if (!done) {
        setTimeout(function () {
            whenDone();
        }, 20);
    } else {
        autoSelect();
    }
}

function callAddLayer(image, img, context, nowDrawing) {
    var noOfLayers = layers - hiddenLayers.length;
    var toDraw = [];
    j = 0;
    for (var i = 1; i <= layers; i++) {
        if ($.inArray(i, hiddenLayers) === -1) {
            toDraw[i] = j;
            j++;
        }
    }
    if (toDraw[nowDrawing] == numberDone) {
        addLayer(image, img, context);
    } else {
        setTimeout(function () {
            callAddLayer(image, img, context, nowDrawing);
        }, 100);
    }
}

function addLayer(image, img, context) {
    var canvas = document.getElementById("myCanvas");
    var width = canvas.width;
    mapWidth = width;
    var factor = width / img.width;
    var height = Math.round(img.height * factor);
    mapHeight = height;
    context.drawImage(image, 0, 0, width, height);
    numberDone++;
    if (numberDone == layers - hiddenLayers.length) {
        done = true;
    }
}

function autoSelect() {
    // Hide the details section
    // If an npc/location is selected, it will be reset in the function
    document.getElementById("details_wrapper").style.display = "none";

    hash = location.hash.substr(1);
    elements = document.getElementsByClassName("show");
    for (var i = 0; i < elements.length; i++) {
        // Put all NPCs back to their normal color and font style
        elements[i].style.color = "var(--color-link)";
        elements[i].style.fontWeight = "normal";
    }
    if ((elem = document.getElementById("pin_" + hash))) {
        where = elem.getAttribute("data-where").split(",");
        for (i in where) {
            addPin(where[i].trim());
        }

        // If the npc walks around, we want to add some points
        if (elem.hasAttribute("data-walking")) {
            walking = elem.getAttribute("data-walking").split(",");
            for (i in walking) {
                addDot(walking[i].trim());
            }
        }

        // Change color and font style for the selected npc
        elem.style.color = "var(--color-link-selected)";
        elem.style.fontWeight = "bold";

        // The details for the npc (picture, quests, etc.)
        addDetails(hash);

        // This will be executed if we use the "plot a point" entry
    } else if (hash != "plain") {
        // replace the %20 with spaces
        // some browser replace space with %20 so we change it back
        hash = hash.replace(/%20/g, " ");

        // Delete everything, except numbers space point comma and dash
        // Additionally split at comma
        where = hash.replace(/[^0-9\ \.,-]/g, "").split(", ");

        $("#toplot").attr("value", where);
        for (i in where) {
            addPin(where[i]);
        }
    }
}

function pinpoint_pos ( id )
{
    if ( (elem = document.getElementById(id)) )
    {
        addMap();
        where = elem.getAttribute("data-where").split(",");
        for (i in where) {
            addPin(where[i].trim());
            $('#toplot').val ( where[i].trim() );
        }

        // If the npc walks around, we want to add some points
        if (elem.hasAttribute("data-walking")) {
            walking = elem.getAttribute("data-walking").split(",");
            for (i in walking) {
                addDot(walking[i].trim());
            }
        }

        // Change color and font style for the selected npc
//        elem.style.color = "var(--color-link-selected)";
//        elem.style.fontWeight = "bold";

        // The details for the npc (picture, quests, etc.)
        addDetails(hash);

        // This will be executed if we use the "plot a point" entry
    }
}

function addPin(pos) {
    var elem = document.getElementById("myCanvas");
    var context = elem.getContext("2d");
    var posArr = pos.split(" ");
    var timeString = "";
    if (posArr.length == 4) {
        timeString = posArr[3];
        posArr.splice(3, 3);
    }
    var pix = postopix(posArr);
    if ( pix == false)
        return;

    var img = new Image();
    img.addEventListener(
        "load",
        function () {
            context.drawImage(this, pix[0] - 8, pix[1] - 32);
            if (!timeString == "") {
                context.font = "bold 15px Arial";
                var metrics = context.measureText(timeString);
                var timeStringWidth = Math.round(metrics.width + 0.5);

                context.fillStyle = "white";
                context.fillRect(
                    pix[0] - timeStringWidth / 2 - 2,
                    pix[1] - 49,
                    timeStringWidth + 4,
                    15
                );
                context.stroke();

                context.fillStyle = "black";
                context.textAlign = "center";
                context.fillText(timeString, pix[0], pix[1] - 36);
            }
        },
        false
    );
    img.src = "/images/maps/pindown.png";
}

function addDot(pos) {
    var elem = document.getElementById("myCanvas");
    var context = elem.getContext("2d");
    var posArr = pos.split(" ");
    var pix = postopix(posArr);
    if (pix == false)
        return;

    var img = new Image();
    img.addEventListener(
        "load",
        function () {
            context.drawImage(this, pix[0] - 10, pix[1] - 8);
        },
        false
    );
    img.src = "/images/maps/reddot.png";
}

function validate_int ( str ) {
    if ( parseInt (str) == NaN )
    {
        return false;
    }
    for (let i = 0; i < str.length; i++) {
        if ( ( (str[i] > '9') || (str[i] < '0') ) && (str[i] != '.') && (str[i] != '-') )
            return false;
    }
    return true;
}

/**
 *
 * @param {*} posArr - X and Y coordinates of the spot to mark
 * @returns false - if X or Y is invalid
 *
 * additonal parameters are set through global variables:
 *
 * swap_xy - bool : swap X and Y ccordinates
 * precision_x - float : scale of the map. E.g. 1:1000 => precision_x = 1000
 * precision_y - float : scale of the map. E.g. 1:1000 => precision_x = 1000
 * reverse_x - float: are the X coordinates reversed, i.e. ranging from 800 to -800 => true
 * reverse_y - float: are the Y coordinates reversed, i.e. ranging from 800 to -800 => true
 * pos_x_start - int : -800  // the world map starts at X = -800.000
 * pos_y_start - int : -1000 // the world map starts at Y = -1.000.000
 * offset_x - int : 26       // the image has a frame of 26 pixels  on the left
 * offset_y - int : 5        // the image has a frame of 5 pixels at the top
 * scale_x - float : 1       // ratio real image to displayed image on X-axis
 * scale_y - float : 1       // ratio real image to displayed image on Y-axis
 */

function postopix(posArr) {

    if (posArr.length < 2)
        return false;

    if ( validate_int (posArr[0]) == false )
    {
        alert ('Position is not a number!');
        return false;
    }
    if ( validate_int (posArr[1]) == false )
    {
        alert ('Position is not a number!');
        return false;
    }

    var ret = new Array();

    if (swap_xy === false) {
        x = posArr[0] / precision_x;
        y = posArr[1] / precision_y;
    } else {
        x = posArr[1] / precision_x;
        y = posArr[0] / precision_y;
    }

    if (reverse_x == true)
    {
        ret_x = -x;
        ret_y = (-pos_x_start) - ret_x;
    }
    else
    {
        ret_x = x - pos_x_start;
    }

    if (reverse_y == true)
    {
        ret_y = -y;
        ret_y = (-pos_y_start) - ret_y;
    }
    else
    {
        ret_y = y - pos_y_start
    }

    ret_x /= scale_x;
    ret_y /= scale_y;

    ret_x += offset_x;
    ret_y += offset_y;

    ret[0] = ret_x;
    ret[1] = ret_y;

    /*
    alert(
        "oX: " + posArr[0] +
        " oY: " + posArr[1] +
        " X: " + parseInt(x) +
        " Y: " + parseInt(y) +
        " ret_x: " + ret[0] +
        " ret_y: " + ret[1]
    );
    */
    return ret;
}

function addDetails(npcLocName) {
    addNpcLocPicture(npcLocName);
}

function addNpcLocPicture(npcLocName) {
    var det_canvas = document.getElementById("details_canvas");
    var context = det_canvas.getContext("2d");

    var img = new Image();
    img.addEventListener(
        "load",
        function () {
            context.drawImage(this, 0, 0);
            document.getElementById("details_wrapper").style.display = "block";
        },
        false
    );
    img.src = "/images/npcs_locations/"
        .concat(npcLocName)
        .concat(".jpg")
        .toLowerCase();
}
