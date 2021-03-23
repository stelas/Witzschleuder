<?php

/**
 * Flachwitzesammlung von Philipp Weißmann, GPL-3.0 License
 * https://github.com/derphilipp/Flachwitze
 */

header('Content-Type: text/plain');
if ($s = file_get_contents(__DIR__ . '/flachwitze.txt')) {
	$a = explode("\n", $s);
	if (($c = count($a)) > 1)
		echo $a[mt_rand(0, $c - 1)] . "\n";
}

?>
