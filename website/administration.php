<?php    
    $path = $_SERVER['DOCUMENT_ROOT'];
    include_once $path . 'includes/administration.inc.php';
?>

<!doctype html>
<html>
<head>
	<title>Administration</title>
    
	<?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/html_header.php";
        include($path);
    ?>
    
    <link href="/styles/administration.css" type="text/css" rel="stylesheet" />

    <!-- script for sorting tables -->
    <script src="/js/sorttable.js"></script>
    
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



                <!-- check if user is logged in AND if he is an admin-->
                <?php 
 

                	$check_admin_query = "SELECT admin FROM psl_members WHERE id = '" . $_SESSION['user_id'] . "' LIMIT 1";
    				$get_check_admin = $mysqli->query($check_admin_query) or die(mysql_error());
    				$check_admin = $get_check_admin->fetch_assoc();

    				if ( (login_check($mysqli) == true) && ($check_admin['admin'] == 1) ) :

                ?>

                
                <!-- Content section -->
                <div id="content_main_container">

                    <?php
	                    if (!empty($output_msg)) {
	                        echo $output_msg;
	                    }
                    ?>

                    <form method="post" name="administration_users_form" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>">

                    <fieldset class="admin_fieldset">
                    	<legend>User Informations</legend>
                
                    	<table class="administration_table sortable hovableTable">
                    		<tr>
                    			<th>ID</th>
                                <th>Username</th>
                                <th>E-Mail</th>
                                <th>Authenticated</th>
                                <th>Admin</th>
                                <th>Delete</th>
                    		</tr>

                            <?php

                                $members_query = "SELECT DISTINCT id, username, email, authenticated, admin FROM psl_members";
                                $get_members = $mysqli->query($members_query) or die(mysql_error());          
                                
                                
                                while($members = $get_members->fetch_array()) {

                                    echo "<tr>";
                                        echo "<td>" . $members["id"] . "</td>";
                                        echo "<td>" . $members["username"] . "</td>";
                                        echo "<td>" . $members["email"] . "</td>";
                                        echo "<td>";
                                        	
                                        	echo "<input type='text' name='authenticate_" 
                                            . $members["id"] 
                                            . "' value='" 
                                            . $members["authenticated"] 
                                            . "'/>";

                                        echo "</td>";
                                        echo "<td>" . $members["admin"] . "</td>";

                                        echo "<td>" 
                                        . "<input type='checkbox' name='delete_"
                                        . $members["id"]
                                        . "' value='delete_this_user'/>" 
                                        . "</td>";
                                    echo "</tr>";
                                
                                }
                            ?>
                        </table>

                        <div class="button_area">
                        	<input class="admin_buttons" type="reset" value="Cancel"/>
                        	<input class="admin_buttons" type="submit" 
                            value="Save" onClick="confirmDeletion(event)"/>
                        </div>

					</fieldset>
                    </form>
                    
                </div>


               <!-- if user is not logged in -->            
               <?php 
                   else : 
                        $path = $_SERVER['DOCUMENT_ROOT'];
                        $path .= "/includes/administration_redirect.php";
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

<!-- JAVA SCRIPT BEGIN -->

<script type="text/javascript">
    function confirmDeletion(e) {
        var name = document.getElementsByName("authenticate_1")[0].value;
        var nam1 = document.getElementsByName("delete_1")[0].value;


        //create a dictionary which will include all the users in the database
        var psl_members_ids = {

            <?php
                // Get the ID's and usernames of the users in the database
                $psl_members_query = "SELECT username, id FROM psl_members";
                $get_psl_members = $mysqli->query($psl_members_query) or die(mysql_error());

                $psl_members = $get_psl_members->fetch_array();
                echo $psl_members['username'];
                echo ":";
                echo $psl_members['id'];

                while($psl_members = $get_psl_members->fetch_array()) {
                    echo ',';
                    echo $psl_members['username'];
                    echo ":";
                    echo $psl_members['id'];
                }

            ?>
        }


        //now extract only the names of the users, which are selected for deletion
        var psl_members_for_del_names = [];
        for(name in psl_members_ids) {
            var id = psl_members_ids[name]; 
            //we are checking, if the checkbox of any users are ticked
            if(document.getElementsByName("delete_" + id)[0].checked) {
                psl_members_for_del_names.push(name);
            }
        }

        // Create a confirmation text string for the pop up window
        var conf_text = "";

        for(var i = 0; i < psl_members_for_del_names.length; i++) {

            if(i == 0) {
                conf_text += "";
            } else if(i != psl_members_for_del_names.length - 1) {
                conf_text += ", ";
            } else if(i == psl_members_for_del_names.length - 1) {
                conf_text += " and ";
            }

            conf_text += psl_members_for_del_names[i];
        };

        //Just pop up a dialog window, if some people are selected for deletion
        if(psl_members_for_del_names.length != 0) {
            //Here is the confirmation dialog window!
            if(!confirm('Are you sure you want to delete the user(s) ' + conf_text + '?')) {
                e.preventDefault();
            }
        }
    };
</script>


