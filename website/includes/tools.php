<?php

function dump ( $var, $title="" )
{
	if ( $title != "" )
		print $title."<br>\n";
	print "<pre>";
	var_dump ($var);
	print "<pre>";
}

// $fn is an array of expected _POST values
// All _POST values present in $fn will be assigned to $pval
// All values expected but not present in _POST will be assigned an empty string
// All values present in _POST but are not expected are ignored
// This function ensures:
// - all expected values are set in $pval
// - all unexpected values are ignored
// 
// Example:
// $fn = array
// (
// 		'expect_post_1',
// 		'expect_post_2'
// );
// $pval = array ();
// post2pval ($fn,$pval);
// if ($pval['expect_post_1'])
// 		do_something_magical($pval);
function post2pval ($fn, &$pval)
{
	foreach ( $fn as $key )
	{
		// read _POST
		if ( array_key_exists ($key, $_POST) )
		{
			if (! is_array($_POST[$key]))
				$pval[$key]  = trim ($_POST[$key]);
			else
				$pval[$key]  = $_POST[$key];
		}
		// read _GET
		else if ( array_key_exists ($key, $_GET) )
		{
			if (! is_array($_GET[$key]))
				$pval[$key]  = trim ($_GET[$key]);
			else
				$pval[$key]  = $_GET[$key];
		}
		else
		{
				$pval[$key]  = "";
		}
	}
} // post2pval()

function connect_db ()
{
	$ini = parse_ini_file($_SERVER['DOCUMENT_ROOT'].'../config_planeshift.ini');
	$mysqli = new mysqli (
		$ini['db_url'],
		$ini['db_user'],
		$ini['db_pass'],
		$ini['db_name']
	);
	if ($mysqli->connect_errno)
	{
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}
	return $mysqli;
}

function print_header ( $title = "", $css = "" )
{
	?>
	<!doctype html>
	<html>
	<head>
		<title><?php print $title; ?></title>

		<?php
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/html_header.php";
		include($path);

		if ( $css == "" )
			print "<link href='/styles/table.css' type='text/css' rel='stylesheet' />";
		else
			print "<link href='/styles/$css' type='text/css' rel='stylesheet' />";

		?>

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
				</div>
				<!-- content section -->
				<div id="content_main_container">
				<br>
	<?php
}

function print_footer ()
{
	?>
				</div>

				<!-- include Footer -->
				<?php
				$path = $_SERVER['DOCUMENT_ROOT'];
				$path .= "/footer.php";
				include($path);
				?>
			</td>
		</tr>
	</table>

	</body>
	</html>
	<?php
}

?>
