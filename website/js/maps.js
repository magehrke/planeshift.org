/* 
 * This file shows the canvas (maps) for the maps
 * of Yliakum from the Game Planeshift.
 */

// Does the site support Canvas?
function supports_canvas() {
    return !!document.createElement("canvas").getContext;
}

jQuery(function($) {
    // Just do something, if the site supports canvas
    if (supports_canvas()) {

        // A link should be underlined, when hovered.
        // Yes, we do have this in our .css file
        // but it gets deleted, when we change the
        // text-decoration for the .show files, so here it
        // is again.
        $(".show").hover(function() {
            $(this).css("text-decoration", "underline");
        }, function() {
            $(this).css("text-decoration", "none");
        });

        // If the user clicks on an element with "show",
        // this element shall be bold and all other
        // "show"-elements not.
        $(".show").click(function(e) {
            $(".show").css("color", '#99CCFF');
            $(this).css("color", '#cc8400');
        });



        // If the user clicks somewhere, where no Names or Links
        // are, then the site should just show the map without
        // a pin.
        $("body").click(function(e) {
            if (($(e.target).attr("class") != "show") && ($(e.target).attr("id") != "plotit") && ($(e.target).attr("id") != "toplot")) {
                $(".show").css("font-weight", "normal");
                window.location = "#plain";
            }
        });
        // When the user clicks the "Go" button of the "Plot a point" section.
        $("#plotit").click(function() {
            window.location = "#plot=" + $("#toplot").val();
        });
        // When the user uses presses Enter in the "Plot a point" section.
        $("#toplot").keypress(function(e) {
            if (e.which == "13") { // .which returns tbe button/key which has been pressed
                window.location = "#plot=" + $("#toplot").val();
            }
        });

        window.onhashchange = addMap;
        addMap();
    };

    $(".selectLayer").click(function(e){
        e.preventDefault();
        k = parseInt($(this).data("which"));
        if (($(this).hasClass("selected")) && (hiddenLayers.length < (layers - 1))) {
            // We want to prevent, that only the background is shown
            // The background has k == 1 because its the layer which
            // has to be drawn first.
            if(! (k !== 1 && hiddenLayers.length === (layers -2) && ($.inArray(1, hiddenLayers) === -1))) {
                $(this).removeClass("selected");
                if (($.inArray(k, hiddenLayers) === -1)) {
                    hiddenLayers.push(k);
                }
            }
        } else {
            $(this).addClass("selected");
            if (($.inArray(k, hiddenLayers) !== -1)) {
                hiddenLayers = $.grep(hiddenLayers, function(a) {
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

function addMap () {
    done = false;
    numberDone = 0;
    var canvas = document.getElementById("myCanvas");
    var context = canvas.getContext("2d");
    context.clearRect (0, 0, 1024, 768);
    if (layers === 1) {
        var img = new Image();
        img.addEventListener("load", function () {
            var width = 1000;
            mapWidth = width;
            var factor = (width / img.width);
            var height = Math.round(img.height * factor);
            mapHeight = height;
            context.drawImage(this, 0, 0, width, height);
            done = true;
        }, false);
        img.src = map;
    } else {
        for (var i = 1; i <= layers; i++) {
            if ($.inArray(i, hiddenLayers) === -1) {
                var img = new Image();
                img.src = map + "_" + i + ".png";
                img.addEventListener("load", function () {
                    nowDrawing = this.src.substr(-5, 1); // returns i, -5 = from the end with length 1
                    callAddLayer(this, img, context, nowDrawing);
                }, false);
            }
        }
    }
    whenDone();
}

function whenDone () {
    if (!done) {
        setTimeout(function () {
            whenDone();
        }, 20);
    } else {
        autoSelect();
    }
}

function callAddLayer (image, img, context, nowDrawing) {
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
    }
    else {
        setTimeout(function() {
            callAddLayer(image, img, context, nowDrawing);
        }, 100);
    }
}

function addLayer (image, img, context) {
    var width = 1000;
    mapWidth = width;
    var factor = (width / img.width);
    var height = Math.round(img.height * factor);
    mapHeight = height;
    context.drawImage(image, 0, 0, width, height);
    numberDone++;
    if (numberDone == layers - hiddenLayers.length) {
        done = true;
    }
}



function autoSelect () {
    // Hide the details section
    // If an npc/location is selected, it will be reset in the function
    document.getElementById("details_wrapper").style.display = 'none';

    hash = location.hash.substr(1);
    elements = document.getElementsByClassName("show");
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.color = "#99CCFF";

    }
    if (elem = document.getElementById("pin_" + hash)) {
        where = elem.getAttribute("data-where").split(",");
        for (i in where) {
            addPin(where[i].trim());
        }

        // If the npc walks around, we want to add some points
        if(elem.hasAttribute("data-walking")) {
            walking = elem.getAttribute("data-walking").split(",");
            for(i in walking) {
                addDot(walking[i].trim());
            }
        }

        elem.style.color = "#cc8400";

        // The details for the npc (picture, quests, etc.)
        addDetails(hash);
    } else if (hash != "plain") {
        where = hash.replace(/[^0-9\ \.,-]/g, "").split(", ");
        $("#toplot").attr("value", where);
        for (i in where) {
            addPin(where[i]);
        }
    }
}

function addPin (pos) {
    var elem = document.getElementById("myCanvas");
    var context = elem.getContext("2d");
    var posArr = pos.split(" ");
    var timeString = "";
    if(posArr.length == 4) {
        timeString = posArr[3];
        posArr.splice(3,3);
    }
    var pix = postopix(posArr);

    var img = new Image();
    img.addEventListener("load", function () {
        context.drawImage(this, pix[0] - 8, pix[1] - 32);
        if(!timeString == "") {
            context.font = "bold 15px Arial";
            var metrics = context.measureText(timeString);
            var timeStringWidth = Math.round(metrics.width+0.5);

            context.fillStyle = "white"
            context.fillRect(pix[0]-timeStringWidth/2-2, pix[1]-49, timeStringWidth+4, 15);
            context.stroke();

            context.fillStyle = "black";
            context.textAlign = "center";
            context.fillText(timeString, pix[0], pix[1] - 36);
        }
    }, false);
    img.src = "/images/maps/pindown.png";
}

function addDot (pos) {
    var elem = document.getElementById("myCanvas");
    var context = elem.getContext("2d");
    var posArr = pos.split(" ");
    var pix = postopix(posArr);

    var img = new Image();
    img.addEventListener("load", function () {
        context.drawImage(this, pix[0] - 10, pix[1] - 8);
    }, false);
    img.src = "/images/maps/reddot.png";
}

function postopix (posArr) {
    var ret = new Array();

    if (rot === false) {
        ret[0] = Math.round(parseInt((posArr[2] * 100) + offsetX) / scale);
        ret[1] = Math.round(parseInt((posArr[0] * 100) + offsetY) / scale);
    } else if (rot === "cw") {
        ret[0] = mapWidth - Math.round(parseInt((posArr[0] * 100) + offsetX) / scale);
        ret[1] = Math.round(parseInt((posArr[2] * 100) + offsetY) / scale);
    } else if (rot === "ccw") {
        ret[0] = Math.round(parseInt((posArr[0] * 100) + offsetX) / scale);
        ret[1] = mapHeight - Math.round(parseInt((posArr[2] * 100) + offsetY) / scale);
    }
    return ret;
}


function addDetails (npcLocName) {
    addNpcLocPicture(npcLocName);
}

function addNpcLocPicture(npcLocName) {
    var det_canvas = document.getElementById("details_canvas");
    var context = det_canvas.getContext("2d");

    var img = new Image();
    img.addEventListener("load", function () {
        context.drawImage(this, 0, 0);
        document.getElementById("details_wrapper").style.display = 'block';
    }, false);
    img.src = "/images/npcs_locations/".concat(npcLocName).concat(".jpg").toLowerCase();
}
