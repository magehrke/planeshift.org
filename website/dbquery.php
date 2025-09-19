<?php

// simple interface to query the database
// not linked anywhere, as it is not intented for public use

$path = $_SERVER['DOCUMENT_ROOT'];
$path = $path . "/includes/db_connect.php";
include $path;

function no_table_query ( $q )
{
	global $mysqli;

 	$r = $mysqli->query ( $q );
	if ( $r )
	{
		print "<br>Query OK<br>\n";
		return;
	}
	
}

function table_query ( $q )
{
	global $mysqli;
	$r = $mysqli->query ( $q );
    if ($r == FALSE)
	{
        print "ERROR:<br>\n";
		print "<BR>".$mysqli->error."<BR>\n";
		return;
	}
	print "<br><br>\n";
	print "<table class='main_table hovableTable'>\n";
		print "<tr>\n";
			$vals = "<tr>";
			$l = $r->fetch_assoc ();
			//foreach ( $l as $n => $k, $v ) )
			foreach ( $l as $k => $v )
			{
				print "<th>$k</th>\n";
				$vals .= "<td>$v</td>";
			}
			$vals .= "</tr>";
		print "</tr>\n";
		print "$vals\n";
		while ( $l = $r->fetch_assoc () )
		{
			print "<tr>\n";
			//foreach ( $l as $n => $k, $v ) )
			foreach ( $l as $k => $v )
			{
				//print "<th>$k</th>\n";
				print "<td>$v</td>\n";
			}
			print "</tr>\n";
		}
	print "</table>\n";
}

function do_query ()
{
	$q = stripcslashes ( $_POST['query'] );
	if((strncmp ($q, "select", 6) == 0)
	|| (strncmp ($q, "SELECT", 6) == 0)
	|| (strncmp ($q, "desc", 4) == 0)
	|| (strncmp ($q, "DESC", 4) == 0)
	|| (strncmp ($q, "show", 4) == 0)
	|| (strncmp ($q, "SHOW", 4) == 0))
	{
			table_query ( $q );
	}
	else
	{
			no_table_query ( $q );
	};
}

?>

<!doctype html>
<html>
	<head>
		<title>DB Query</title>
		<?php
		$path = $_SERVER['DOCUMENT_ROOT'];
		$path .= "/html_header.php";
		include($path);
		?>
		<link href="/styles/table.css" type="text/css" rel="stylesheet" />
		<script src="/js/sorttable.js"></script>
	</head>
	<body>

	<br><br>
	<fieldset>
	<form method="post">
		<br><br>Query:<br>
		<?php $q = stripcslashes ( $_POST['query'] ); ?>
		<textarea cols="60" rows="20"
         name="query"><?php print $q; ?></textarea><br>
		<input name="go" type="submit" value="execute">
	</form>
	</fieldset>
	<?php
	if ($_POST['go'] == "execute" )
		do_query ()
	?>
	</body>
</html>
