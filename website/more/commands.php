<!doctype html>
<html>
<head>
    <title>Commands</title>
    
    <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>
    
    <link href="/styles/commands.css" type="text/css" rel="stylesheet" />
    
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
                    if (login_check($mysqli) == true) : 
                ?>
                
                <!-- Content section -->
                <div id="content_main_container">

                    <div id="commands_content_main_div">

                        <h2>Some useful commands</h2>

                        - alle Befehle unter /show help

                        <h3>/study</h3>

                        If you have opened a book, you can type this command to get a new more readable window with the content of the book. Additionally you are able to search for keywords inside the study window.

                        <h3>Pets</h3>  
                            <li>/pet 1, summon oder /pet summon 1</li>
                            <li>/target "petname"</li>
                            <li>/mount</li>
                            <li>/unmount</li>
                            <li>/pet dismiss</li>

Charakcter:
- sitzen: /sit
- stehen: /stand
- running: shift and ctrl
- sneak: adjust in help, at the  'k'

Items:
- /target next item
- /target nearest item
- /pickup

Brightness:
- /brightness increase
- /brightness decrease
- /brightness reset

/die
/unstick


                    </div>
                </div>

                <!-- if user is not logged in -->            
                <?php 
                    else : 
                        $path = $_SERVER['DOCUMENT_ROOT'];
                        $path .= "/includes/psl_login_redirect.php";
                        include($path);

                    endif; 
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