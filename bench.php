<?php

if (!isset($argv[1]) || !in_array($argv[1], ['extract', 'foreach'])) {
	echo "Usage: php {$argv[0]} (extract|foreach)\n";
	exit;
}

include(__DIR__ . '/data.php');

$t0 = microtime(1);

if ($argv[1] == 'extract') {
	include(__DIR__ . '/extract.php');
} else {
	include(__DIR__ . '/foreach.php');
}

echo microtime(1) - $t0, "\n";


