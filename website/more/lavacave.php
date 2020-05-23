<!doctype html>
<html>
<head>
	<title>Lava Cave</title>

	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>

	<link href="/styles/lavacave.css" type="text/css" rel="stylesheet" />

</head>

<!-- BODY -->
<body>

<table align="center">
	<tr>
    	<td>
        	<div id="root_site_container">

            	<!-- include Header and Navigation -->
				<?php
					$path = $_SERVER['DOCUMENT_ROOT'];
					$path .= "/header_and_navigation.php";
                    include($path);
                ?>

                <!-- Content section -->
                <div id="content_main_container">

                    <div id="lavacave_content_main_div">

                        <h2>Lava Cave Exit</h2>

                        <p>This will hopefully get you out of the lava cave. <br>
                        Just follow the instructions on the picture and the table.</p>

                        <img src='/images/lava-cave-exit.jpg' />

                        <table class="lavacave_table_rockmoves">
                            <tr>
                                <th>Rock</th><th>Lever Up</th><th>Lever Down</th>
                            </tr>

                            <tr>
                                <td>1</td><td>1</td><td>5</td>
                            </tr>
                            <tr>
                                <td>2</td><td></td><td>10</td>
                            </tr>
                            <tr>
                                <td>3</td><td>7</td><td>6</td>
                            </tr>
                            <tr>
                                <td>4</td><td>2</td><td>9</td>
                            </tr>
                            <tr>
                                <td>5</td><td></td><td></td>
                            </tr>
                            <tr>
                                <td>6</td><td>8</td><td>3</td>
                            </tr>
                            <tr>
                                <td>7</td><td></td><td></td>
                            </tr>
                        </table>

												<img src='/images/lava-cave.png' />

                    </div>
				</div>

                <!-- include Footer -->
				<?php
					$path = $_SERVER['DOCUMENT_ROOT'];
					$path .= "/footer.php";
                    include($path);
                ?>
            </div>
        </td>
    </tr>
</table>

</body>
</html>
