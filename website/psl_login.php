<?php
include_once 'includes/db_connect.php';
include_once 'includes/psl_functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
    <head>
		<title>Login</title>

		<?php
        	$path = $_SERVER['DOCUMENT_ROOT'];
        	$path .= "/html_header.php";
        	include($path);
    	?>

    	<link href="/styles/psl_login.css" type="text/css" rel="stylesheet" />

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

		                <div id="psl_login_main_container">

		                	<h2>Login</h2>

			                <!-- include Login Form -->
							<?php
					        if (isset($_GET['error'])) {
					            echo '<p class="error">Error Logging In!</p>';
					        }
					        ?> 
					        <form action="/includes/psl_process_login.php" method="post" name="login_form"
					        		>                      
					            Email: <input 	type="text" 
					            				name="email" 
			            						onkeydown="if (event.keyCode == 13) { formhash(this.form, this.form.password); }"/>
					            Password: <input type="password" 
					                             name="password" 
					                             id="password"
					                             onkeydown="if (event.keyCode == 13) { formhash(this.form, this.form.password); }"/>
					            <input type="button" 
					                   value="Login" 
					                   onclick="formhash(this.form, this.form.password);" /> 
					        </form>
					        <p>If you don't have a login, please <a href="/psl_register.php">register</a></p>
					        <p>If you are done, please <a href="/includes/psl_logout.php">log out</a>.</p>
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