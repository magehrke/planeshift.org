<?php
//
// Check all recipes in the recipe database
// Check for double entries
// Check for syntax errors
//
// written by Haviland Tenouri
//

include ( $_SERVER['DOCUMENT_ROOT'] . "/includes/tools.php" );

function item_can_be_looted ( $name )
{
	global $mysqli;
	$q = "SELECT mob FROM loot WHERE loot='$name'";
	$r = $mysqli->query ($q);
	if ( $r->num_rows == 0 )
		return FALSE;
	return TRUE;
}

function item_can_be_harvested ( $name )
{
	global $mysqli;
	$q = "SELECT * FROM mapsItems WHERE name='$name'";
	$r = $mysqli->query ($q);
	if ( $r->num_rows == 0 )
		return FALSE;
	return TRUE;
}

function item_can_be_bought ( $name )
{
	global $mysqli;
	$q = "SELECT * FROM items WHERE name='$name'";
	$r = $mysqli->query ($q);
	if ( $r->num_rows == 0 )
		return FALSE;
	return TRUE;
}

function resolve_recipe ( $id, $recipe_name, & $ids, $id_only )
{
	global $mysqli;

	$q = "
		SELECT * FROM recipes WHERE
		name=\"".$recipe_name."\"
	";
	if ( ( $id != "" ) && ( $id_only == true ) )
	{
		$q .= " AND id='$id'";
	}
	$q .= "
		ORDER BY name
	";
	$recipe = $mysqli->query ($q);
	if ( $recipe->num_rows == 0 )
	{
		print "-- $recipe_name ($id): no recipe found!<br>\n";
		// print "# q: $q<br>\n";
		return FALSE;
	}
	while ( $r = $recipe->fetch_assoc() )
	{
		$ingredients = explode (",", $r['ingredient']);
		$count = 0;
		$ing   = "";
		$id = $r['id'];
		if ( in_array ( $id, $ids ) )
			return TRUE; // Already resolved
		$ids[] = $id;
		foreach ($ingredients as $i)
		{
			$prep = trim ($i);
			$pos1 = strpos ( $prep, " " );			$type	= substr ( $prep, 0, $pos1 );		$pos1++;
			$pos2 = strpos ( $prep, " ", $pos1 );	$amount = substr ( $prep, $pos1, $pos2 - $pos1 );	$pos2++;
			$name   = str_replace ( "'", "&apos;", substr ( $prep, $pos2 ) );
			if ( ! is_numeric ( $amount ) )
			{
				print "-- $recipe_name: syntax error: '".$prep."'!<br>\n";
				return FALSE;
			}
			if ( $type == "C" )	// crafted
			{
				if ( ! resolve_recipe ( 0, $name, $ids, false ) )
				{
					print "|-- $recipe_name did not resolve!<br>\n";
					return FALSE;
				}
			}
			else if ( $type == "H" )	// harvested
			{
				if ( ! item_can_be_harvested ( $name ) )
				{
					print "-- $name can not be harvested!<br>\n";
					return FALSE;
				}
			}
			else if ( $type == "B" )	// Buy from merchant
			{
				if ( ! item_can_be_bought ( $name ) )
				{
					print "-- $name can not be bought!<br>\n";
					return FALSE;
				}
			}
			else if ( $type == "M" )	// mined
			{
				if ( ! item_can_be_harvested ( $name ) )
				{
					print "-- $name can not be mined!<br>\n";
					return FALSE;
				}
			}
			else if ( $type == "L" )	// Looted
			{
				if ( ! item_can_be_looted ( $name ) )
				{
					print "-- $name can not be looted!<br>\n";
					return FALSE;
				}
			}
			else	// unknown type
			{
				print "-- <mark>$name</mark> syntax error: unkown type<br>\n";
			}
		}
	}
	return TRUE;
}

function check_recipes ()
{
	global $mysqli;

	$q = "SELECT * FROM recipes";
	$preps = $mysqli->query ($q);
	$ids = array ();
	while ( $p = $preps->fetch_assoc() )
	{
		$name = str_replace ( "'", "&apos;", $p['name'] );
		if ( $name == "" )
			continue;
		if ( ! resolve_recipe ( $p['id'], $name, $ids, true ) )
			print "^ <mark>".$p['name']."</mark>(".$p['id']."): did not resolve!<br>\n";
	}
}

function check_books ()
{
	global $mysqli;

	$q = "SELECT * FROM crafting_books";
	$books = $mysqli->query ($q);
	while ( $b = $books->fetch_assoc() )
	{
		$book_name = str_replace ( "'", "&apos;", $b['name'] );
		$q = "SELECT * FROM recipes WHERE book like '%$book_name%'";
		$preps = $mysqli->query ($q);
		if ( $preps->num_rows == 0 )
		{
			print "! <mark>".$book_name."</mark>: has no recipes!<br>\n";
			continue;
		}
		$ids = array ();
		while ( $p = $preps->fetch_assoc() )
		{
			$name = str_replace ( "'", "&apos;", $p['name'] );
			if ( ! resolve_recipe ( $p['id'], $name, $ids, true ) )
				print "^ <mark>".$p['name']."</mark>(".$p['id']."): did not resolve!<br>\n";
		}
	}
}

$mysqli = connect_db ();
print_header ("Check Recipes", "" );
check_recipes ();
check_books ();
print_footer ();
?>
