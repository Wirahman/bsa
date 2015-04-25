<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('mysqldump')) {
	function mysqldump($host, $user, $password, $database, $bin = 'mysqldump', $withData = true) {
		$command = $bin;

		if ($withData === false) {
			$command .= ' --no-data';
		}

		$command .= ' --host=' . $host
			. ' --user=' . $user
			. ' --password=' . $password
			. ' ' . $database;
		$output = array ();
		$return = null;

		exec($command, $output, $return);

		if ($return != 0) {
			throw new Exception('mysqldump exited with [' . $return . '] exit code.');
		}

		return implode(PHP_EOL, $output);
	}
}

