<!doctype html>
<html>
<head>
    <title>Bosses</title>
    
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
                <!-- Content section -->
                <div id="content_main_container">

                    <div id="commands_content_main_div">

                        Introduction of Bosses:

                        Marangma: "A Creepy Sight" quest
                        One-Claw: Last One Standing



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