<!DOCTYPE html>
<!--
Copyright (C) 2013 peredur.net

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<html>
    <head>
        <title>Registration Success</title>

        <?php
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/html_header.php";
            include($path);
        ?>

        <link href="/styles/psl_register_success.css" type="text/css" rel="stylesheet" />

    </head>
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

                        <div id="register_success_main_container">

                            <!-- include message -->
    				        <h2>Registration successful!</h2>
    				        <p>After an admin has authenticated you, please go back to the <a href="psl_login.php">login page</a> and log in.</p>
                            <p>To speed up your authentication, feel free to write to <a href="mailto:planeshift@online.de">planeshift@online.de</a> or ask in Game.</p>

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
