<?php

// $fn is an array of expected _POST values
// All _POST values present in $fn will be assigned to $pval
// All values expected but not present in _POST will be assigned an empty string
// All values present in _POST but are not expected are ignored
// This function ensures:
// - all expected values are set in $pval
// - all unexpected values are ignored
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
		// _POST auslesen
		if ( array_key_exists ($key, $_POST) )
		{
			if (! is_array($_POST[$key]))
				$pval[$key]  = htmlentities (trim ($_POST[$key]), ENT_QUOTES, "UTF-8");
			else
				$pval[$key]  = $_POST[$key];
		}
		else
		{
				$pval[$key]  = "";
		}
	}
} // post2pval()

?>
