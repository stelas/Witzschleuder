<?php

/**
 * Flachwitzesammlung von Philipp Weißmann, GPL-3.0 License
 * https://github.com/derphilipp/Flachwitze
 */

header('Content-Type: text/plain');
if ($f = file(__DIR__ . '/flachwitze.txt')) {
	if (($c = count($f)) > 1) {
		$r = mt_rand(0, $c - 1);
		echo $f[$r];
	}
}

?>
