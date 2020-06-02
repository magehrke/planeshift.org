<!doctype html>
<html>
<head>
    <title>Contributors</title>

    <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>

    <link href="/styles/contributors.css" type="text/css" rel="stylesheet" />

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

                    <div class="contributors_content_main_div">
                      <h1>Contributors</h1>


                      <h3>Website Owner:</h3>
                      <ul><li>Hurwar Eruera</li></ul>


                      <h3>Devs:</h3>
                      <ul>
                        <li>Haviland</li>
                        <li>Zif</li>
                      </ul>

                      <h3>Contributors:</h3>
                      <ul>
                        <li>Menille</li>
                        <li>Lorit Heady</li>
                        <li>Dudu and Lele</li>
                        <li>Kohinor</li>
                        <li>Eatuck</li>
                        <li>Yoken</li>
                        <li>Lingwelli</li>
                      </ul>

                      <p>
                        If you want to help improve this website, please write
                        us an e-mail, contact us in Game or via the Discord
                        server. There is always something to do! Currently, we
                        organize our tasks via trello. Have a look at the
                        <a href="https://trello.com/b/vvooryWE/planeshift">page</a>
                        if you are interested.
                      </p>

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
