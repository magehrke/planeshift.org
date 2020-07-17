<?php
//
// List all recipes
// written by Haviland Tenouri
//

include ( $_SERVER['DOCUMENT_ROOT'] . "/includes/tools.php" );

$fn = array (
	'skill',	// list only recipes of this skill
	'book',		// list only recipes in this book
	'type',		// list all recipes
	'recipe'	// show recipe details
);
$pval = array ();
post2pval ( $fn, $pval );
if ( $pval['type'] == "" )
	$pval['type'] = "P";

function href ( $name, $url, $param )
{
	?>
	<a href="<?php print $url.$param; ?>"><?php print $name; ?></a>
	<?php
}

function add_url_param ( $url, $param )
{
	$u = $url;
	if ($u[0] == "?")
		$u.= "&".$param;
	else
		$u.= "?".$param;
	return $u;
}

function resolve_recipe ( $recipe_name )
{
	global $mysqli;

	$q = "
		SELECT * FROM recipes WHERE
		name=\"".$recipe_name."\"
	";
	$recipe = $mysqli->query ($q);
	if ( $recipe->num_rows == 0 )
	{
		print "<tr><td colspan='6'>";
		print "<span style='background-color: #FF5555'>";
		print "$recipe_name: no recipe found!";
//		print "<br>q: $q<br>error: ".$mysqli->error."<br>";
		print "</span>";
		print "</td></tr>\n";
		return;
	}
	while ( $r = $recipe->fetch_assoc() )
	{
		$ingredients = explode (",", $r['ingredient']);
		$count = 0;
		$ing   = "";
		foreach ($ingredients as $i)
		{
			$prep = trim ($i);
			if ( strlen ($prep) < 4 )
			{
				print "error in recipe!";
				return;
			}
			$type   = $prep[0];
			$amount = $prep[2];
			$name	= substr ( $prep, 4 );
			if ( $type == "C" )	// crafted
			{
				resolve_recipe ( str_replace ( "'", "&apos;", $name ) );
			}
			else if ( $type == "H" )	// harvested
			{
				$name = "<a href='/jobs/harvesting.php?plant=$name'>$name</a>";
			}
			else if ( $type == "B" )	// Buy from merchant
			{
				$name = "<a href='/items.php?item=$name'>$name</a>";
			}
			else if ( $type == "M" )	// mined
			{
				$name = "<a href='/jobs/mining.php?item=$name'>$name</a>";
			}
			/*
			 * no page for looting :/
			else if ( $type == "L" )	// Looted
			{
			}
			*/
			if ( $count )
			{
				$ing .= " +<br>";
			}
			$ing .= $name;
			$count++;
		}
		print "<tr>";
			print "<td>".$r['result']." ".$r['name']."</td>\n";
			print "<td>";
				print "$ing\n";
			print "</td>\n";
			print "<td>".str_replace ("+"," +<br>", $r['tool'])."</td>\n";
			print "<td>".$r['skill']."</td>\n";
			print "<td>".$r['level']."</td>\n";
			print "<td>".$r['book']."</td>\n";
		print "</tr>";
	}
}

function print_recipe ( $pval )
{
	global $mysqli;

	print "<h3>";
	print " | ";
	href ( "show all recipes", $_SERVER['PHP_SELF'], $param );
	print " | ";
	print "</h3>";
	$name = $pval['recipe'];
	print "<h3>$name</h3>\n";
	?>
	<table class='recipe_table hovableTable'>
		<tr>
			<th>Result</th>
			<th>Ingredient</th>
			<th>Use Tool</th>
			<th>Skill</th>
			<th>Level</th>
			<th>Book</th>
		</tr>
	<?php resolve_recipe ( str_replace ( "'", "&apos;", $name ) ); ?>
	</table>
	<?php

}

function show_recipes ( $pval )
{
	global $mysqli;

	$q = "
		SELECT DISTINCT skill FROM recipes
	";
	if ( $pval['skill'] != "" )
		$q .= "WHERE skill='".$pval['skill']."'";
	if ( $pval['book'] != "" )
		$q .= "WHERE book='".$pval['book']."'";
	$skills = $mysqli->query ($q);
	if ( $skills->num_rows == 0 )
	{
		print "no recipes found!<br><br>\n";
		return;
	}

	//
	// show recipes
	//
	$url = $_SERVER['PHP_SELF'];
	$param = "";
	if ( $pval['skill'] != "" )
		$param = add_url_param ( $param, "skill=".$pval['skill'] );
	if ( $pval['book'] != "" )
		$param = add_url_param ( $param, "book=".$pval['book'] );
	if ( $pval['type'] == "P" )
	{
		$param = add_url_param ( $param, "type=%" );
		$name = "show all recipes";
	}
	else
	{
		$name = "show only preparations";
	}
	print "<h3>";
	print " | ";
	href ( $name, $url, $param );
	print " | ";

	//
	// show skills
	//
	$param = "";
	if ( $pval['type'] != "P" )
		$param = add_url_param ( $param, "type=".$pval['type'] );
	if ( $pval['book'] != "" )
		$param = add_url_param ( $param, "book=".$pval['book'] );
	if ( $pval['skill'] != "" )
	{
		href ( "show all skills", $url, $param );
		print " | ";
		$param = add_url_param ( $url, "skill=".$pval['skill'] );
	}

	//
	// show books
	//
	$param = "";
	if ( $pval['type'] != "P" )
		$param = add_url_param ( $param, "type=".$pval['type'] );
	if ( $pval['skill'] != "" )
		$param = add_url_param ( $param, "skill=".$pval['skill'] );
	if ( $pval['book'] != "" )
	{
		href ( "show all books", $url, $param );
		print " | ";
	}
	print "</h3>";

	$param = "";
	if ( $pval['type'] != "P" )
		$param = add_url_param ( $param, "type=".$pval['type'] );
	while ( $s = $skills->fetch_assoc() )
	{
		$skill = $s['skill'];
		print "<h2>";
		href ( $skill, $url, "?skill=$skill" );
		print"</h2>\n";
		$q = "
			SELECT
				*
			FROM
				recipes
			WHERE
				skill='".$skill."'
				AND type LIKE '".$pval['type']."'
		";
		if ( $pval['book'] != "" )
		{
			$q .= "AND book='".$pval['book']."'";
		}
		$preps = $mysqli->query ($q);
		?>
		<table class='main_table sortable hovableTable'>
			<tr>
				<th>Name</th>
				<th>Level</th>
				<th>Book</th>
			</tr>
		<?php
		while ( $p = $preps->fetch_assoc() )
		{
			?>
			<tr>
				<td>
					<?php
					$name = $p['name'];
					href ( $name, $url, "?recipe=$name" );
					?>
				</td>
				<td><?php print $p['level']; ?></td>
				<td>
					<?php
					$book = $p['book'];
					$param = add_url_param ( $param, "book=".$p['book'] );
					href ( $book, $url, $param );
					?>
				</td>
			</tr>
			<?php
		}
		?>
		</table>
		<?php
	}
}

$mysqli = connect_db ();
print_header ("Recipes", "recipes.css" );
if ( $pval['recipe'] != "" )
	print_recipe ( $pval );
else
	show_recipes ( $pval );
print_footer ();
?>
