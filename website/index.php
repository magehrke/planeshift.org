<!doctype html>
<html>
<head>
	<title>Planeshift.org</title>
    

    <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>

    <link href="/styles/index.css" type="text/css" rel="stylesheet">

    <!-- SLIDESHOW CODE BEGIN (if wanted) -->
        <!-- include jQuery library -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
        <!-- include Cycle plugin -->
        <script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.slideshow').cycle({
                    fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
                    pause: true, // pause on hover
                    random: true // show pics in random order
                });
            });
        </script>
    <!-- SLIDESHOW CODE END (if wanted) -->

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
					<table id="index_main_table">
                    	<tr>
                    		<td>
                            	<p>This is an unofficial website for the MMORPG PlaneShift.<br>
                                The official game website is located at <a href="http://www.planeshift.it/">planeshift.it</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td>   
                                <a href="/home.php"> 
                                    <img class="index_welcome_logo" src="/images/guildlogo-500px.png">
                                    <!--<div class="slideshow">
                                        <img class="index_welcome_pic" src="/images/welcome_pictures/snow-in-hydlaa.jpg">
                                        <img class="index_welcome_pic" src="/images/welcome_pictures/snow-in-hydlaa-2.jpg">
                                        <img class="index_welcome_pic" src="/images/welcome_pictures/snow-in-hydlaa-3.jpg">
                                        <img class="index_welcome_pic" src="/images/welcome_pictures/snow-in-hydlaa-4.jpg">
                                        <img class="index_welcome_pic" src="/images/welcome_pictures/snow-in-hydlaa-5.jpg">

                                    </div>-->
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                
                                <p>Feel free to have a look around.<br>
                                If you have any feedback, please let us now.</p>
                            </td>
                    	</tr>

                    	<tr>
                    		<td>
                    			<!-- <img class="index_welcome_pic" src="/images/site-welcome-picture.jpg" alt="Kingdom of Valour Groupphoto in the Guildhose."> -->
                    		</td>
                    	</tr>
                        <tr>
                            <td>
                                <!-- <img class="index_welcome_pic" src="/images/guildhouse-2017-01.png"> -->
                            </td>
                        </tr>
                    </table>
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