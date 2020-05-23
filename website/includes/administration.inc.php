<?php

$path = $_SERVER['DOCUMENT_ROOT'];
$path1 = $path . "/includes/db_connect.php";

include_once $path1;

$output_msg = "";

// For psl_members table
if(isset($_POST['authenticate_1'])) {

	// Get the ID's of the users
	$psl_members_query = "SELECT id, authenticated FROM psl_members";
    $get_psl_members = $mysqli->query($psl_members_query) or die(mysql_error());
    

    // Check if the data have correct values
    $correct_values = true;
    $reg_ex = "/[01]/";

	while($psl_members = $get_psl_members->fetch_array()) {
		if(! preg_match($reg_ex, $_POST['authenticate_' . $psl_members['id']])) {
			$correct_values = false;
			break;
		} 
	}
	// get some counter to create a proper output message
	$authentication_affected_rows = 0;
	$deletion_affected_rows = 0;


	// If the values are correct, insert into the psl_members table

	if($correct_values) {

		// Get the ID's of the users
		$psl_members_query = "SELECT id, authenticated FROM psl_members";
	    $get_psl_members = $mysqli->query($psl_members_query) or die(mysql_error());

		while($psl_members = $get_psl_members->fetch_array()) {

			$id_curr_psl_member = $psl_members['id'];

			/* BEGIN: Section: Delete users */
			// We look if the checkbox for deleting the user has been activated
			if($_POST['delete_' . $psl_members['id']] == 'delete_this_user') {
				$mem_delete_query = "DELETE FROM psl_members WHERE id = " . $id_curr_psl_member . ";";

				$mysqli->query($mem_delete_query) or die(mysql_error());
				$deletion_affected_rows += 1;
			}
			/* END: Section: Delete users */

			// if the user is not being deleted, we look if the authenticate value has been changed
			elseif($psl_members['authenticated'] != $_POST['authenticate_' . $id_curr_psl_member]) {

				$mem_update_query = "UPDATE psl_members 
				SET authenticated = " . $_POST['authenticate_' . $id_curr_psl_member] . 
				" WHERE id = " . $id_curr_psl_member . ";";

	   			$mysqli->query($mem_update_query) or die(mysql_error());

				$authentication_affected_rows += 1;
			}

			//IMPORTANT: Delete the variables, so if you change anything after you pressed one
			//time the submit button and then you press it again, you might have still the old
			//variables.
			
			//we delete the $_POST Variable of the authentication of the current user
			$_POST['authenticate_' . $id_curr_psl_member] = "";
			//we delete the $_POST Variable of the delition of the current user
			$_POST['delete_' . $id_curr_psl_member] = "";


		}

		$output_msg .= "<p>" . $authentication_affected_rows . " Authenticated values changed.<br>";
		$output_msg .= $deletion_affected_rows . " users have been deleted.</p>";
	} else {
		$output_msg .= "<p>Invalid values. Please only insert 0 (false) or 1 (true) into the authenticated fields.</p>";
	} 
}
