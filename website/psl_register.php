<?php
/**
 * Copyright (C) 2013 peredur.net
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

    $path = $_SERVER['DOCUMENT_ROOT'];
    $path1 = $path . 'includes/psl_register.inc.php';
    $path2 = $path . 'includes/psl_functions.php';

    include_once $path1;
    include_once $path2;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>

        <?php
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/html_header.php";
            include($path);
        ?>

        <link href="/styles/psl_register.css" type="text/css" rel="stylesheet" />

        <script type="text/JavaScript" src="/js/psl_sha512.js"></script> 
        <script type="text/JavaScript" src="/js/psl_forms.js"></script>
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


                        <div id="register_main_container">

                            <!-- Registration form to be output if the POST variables are not
                            set or if the registration script caused an error. -->
                            <h1>Registration</h1>

                                <?php
                                    if (!empty($error_msg)) {
                                        echo $error_msg;
                                    }
                                ?> 
                            
                            <ul>
                                <li>Usernames may contain only digits, upper and lower case letters and underscores</li>
                                <li>Emails must have a valid email format</li>
                                <li>Passwords must be at least 6 characters long</li>
                                <li>Passwords must contain
                                    <ul>
                                        <li>At least one upper case letter (A..Z)</li>
                                        <li>At least one lower case letter (a..z)</li>
                                        <li>At least one number (0..9)</li>
                                    </ul>
                                </li>
                                <li>Your password and confirmation must match exactly</li>
                            </ul>
                            <form method="post" name="registration_form" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>">
                                <table>
                                    <tr>
                                        <td>Username:</td> 
                                        <td><input  type='text' 
                                                    name='username' 
                                                    id='username' 
                                                    onkeydown="if (event.keyCode == 13) { regformhash(this.form,
                                                           this.form.username,
                                                           this.form.email,
                                                           this.form.password,
                                                           this.form.confirmpwd); }"/></td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td><input  type="text" 
                                                    name="email" 
                                                    id="email"
                                                    onkeydown="if (event.keyCode == 13) { regformhash(this.form,
                                                           this.form.username,
                                                           this.form.email,
                                                           this.form.password,
                                                           this.form.confirmpwd); }" /></td>
                                    </tr>
                                    <tr>
                                        <td>Password:</td> 
                                        <td><input  type="password"
                                                     name="password" 
                                                     id="password"
                                                     onkeydown="if (event.keyCode == 13) { regformhash(this.form,
                                                           this.form.username,
                                                           this.form.email,
                                                           this.form.password,
                                                           this.form.confirmpwd); }"/></td>
                                    </tr>
                                    <tr>
                                        <td>Confirm password:</td> 
                                        <td><input  type="password" 
                                                    name="confirmpwd" 
                                                    id="confirmpwd"
                                                    onkeydown="if (event.keyCode == 13) { regformhash(this.form,
                                                           this.form.username,
                                                           this.form.email,
                                                           this.form.password,
                                                           this.form.confirmpwd); }" /></td>
                                    </tr>
                                    <tr></tr>
                                    <tr>
                                        <td><input type="button" 
                                           value="Register" 
                                           onclick="return regformhash(this.form,
                                                           this.form.username,
                                                           this.form.email,
                                                           this.form.password,
                                                           this.form.confirmpwd);" /></td>
                                    </tr>
                                </table>
                            </form>
                            <p>Return to the <a href="psl_login.php">login page</a>.</p>

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
