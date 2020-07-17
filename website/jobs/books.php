<?php

include ( $_SERVER['DOCUMENT_ROOT'] . "/includes/tools.php" );

function print_link ( $to, $name )
{
	$self = $_SERVER['PHP_SELF'].$to;
	?>
	<a href="<?php print $self; ?>"><?php print $name; ?></a>
	<?php
}

function quest_to_file ( $quest )
{
	$questname = $quest;
	while ( ( $pos = strpos ($questname, " ") ) )
	{
		$questname[$pos] = '-';
	}
	return $questname;
}

function print_link_to_quest ( $quest )
{
	print "<a href=\"/quests/details/".quest_to_file ( $quest );
	print ".php\">".$quest."</a>\n";
}

function print_link_to_recipes ( $book )
{
	print "<a href=\"/jobs/recipes.php?book=".$book;
	print "\">".$book."</a>\n";
	
}

function show_books ( $pval )
{
	global $mysqli;

	$q = "
		SELECT
			*
		FROM
			crafting_books
		ORDER BY
			name
	";
	$books = $mysqli->query ($q);
	?>
	<table class='main_table sortable hovableTable'>
		<tr>
			<th>Book</th>
			<th>Quest</th>
		</tr>
	<?php
	while ( $book = $books->fetch_assoc() )
	{
			?>
			<tr>
				<td><?php print_link_to_recipes ($book['name']); ?></td>
				<td><?php print_link_to_quest ($book['quest']); ?></td>
			</tr>
		<?php
	}
	?>
	</table>
	<?php
}

$mysqli = connect_db ();
print_header ("Crafting Books");
show_books ( $pval );
print_footer ();
?>
