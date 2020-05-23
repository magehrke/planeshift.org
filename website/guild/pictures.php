<!doctype html>
<html>
<head>
	<title>Pictures</title>
    
	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>
    
	<link href="/styles/pictures.css" type="text/css" rel="stylesheet" />
    
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

                <!-- check if user is logged in -->
                <?php 
                    # if (login_check($mysqli) == true) : 
                ?>
                
                <!-- Content section -->
                <div id="content_main_container">

                    <fieldset>
                    <legend>Our sparkling Leader Menille</legend>
                        <img src='/images/pictures/our_sparkling_leader_menille.jpg' />
                    </fieldset>

                    <fieldset>
                    <legend>Having fun with Aearthas</legend>
                        <img src='/images/pictures/having_fun_with_aearthas.jpg' />
                    </fieldset>
				</div>


                <!-- if user is not logged in -->            
                <?php 
                    # else : 
                    #    $path = $_SERVER['DOCUMENT_ROOT'];
                    #    $path .= "/includes/psl_login_redirect.php";
                    #    include($path);

                    # endif; 
                ?>
                
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