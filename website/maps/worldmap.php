<!doctype html>
<html>
<head>
    <title>Worldmap</title>

    <?php include ( $_SERVER['DOCUMENT_ROOT']."/html_header.php" ); ?>

    <link href="/styles/maps.css" type="text/css" rel="stylesheet" />

	<script>
        var     map = "/images/maps/worldmap.png",

                precision_x = 1000  // unreal use really huge values
                precision_y = 1000
                reverse_x = false   // x-values are not reversed
                reverse_y = true    // y-values are going from -1000(top) to -100(bottom)
                pos_x_start = -800  // the world map starts at X = -800.000
                pos_y_start = -1000 // the world map starts at Y = -1.000.000
                scale_x = 1.0, //0.61,
                scale_y = 1.0, //0.63,
                offset_x = 5, //826,
                offset_y = 15, //1005,
                layers = 1,
                rot = false,
                swap_xy = false,
                hiddenLayers = [];
    </script>

    <!-- Library for JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- script for displaying the canvas (uses JQuery) -->
    <script src="/js/maps_unreal.js"></script>

</head>

<!-- BODY -->
<body>

<!-- include Header and Navigation -->
<?php
    include ( $_SERVER['DOCUMENT_ROOT']."/header_and_navigation.php" );
?>

    <table class="maps_main_table">
        <!-- Section of the map -->
        <tr>
            <td class="map_section">
                <h1>Worldmap</h1>
                <div id="myWrapper">
                    <canvas id="myCanvas" width="1600" height="950">
                        Your browser does not support canvas.
                    </canvas>
                </div>
                <div id="details_wrapper">
                    <canvas id="details_canvas" width="720" height="530" >
                        Your browser does not support canvas.
                    </canvas>
                </div>
            </td>
            <!-- Section of the npcs names -->
            <td class="info_section">
                <?php
                $area = "World";
                include( $_SERVER['DOCUMENT_ROOT']."/includes/maps_extract_info_psu.inc.php");
                ?>
            </td>
        </tr>
    </table>

<?php include ( $_SERVER['DOCUMENT_ROOT']."/footer.php" ); ?>

</body>
</html>
