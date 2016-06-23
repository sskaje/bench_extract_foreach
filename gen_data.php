<?php

$alphabet = range('a', 'z');

$data = [];

foreach ($alphabet as $_v1) {
	foreach ($alphabet as $_v2) {
		foreach ($alphabet as $_v3) {
			$data[$_v1 . $_v2 . $_v3] = mt_rand();
		}
	}
}

$s = var_export($data, 1);

file_put_contents(__DIR__ . '/data.php', '<' . '?php $data=' . $s . ';');
