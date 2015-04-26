<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('mysqldump')) {
	function mysqldump($host, $user, $password, $database, $bin = 'mysqldump', $withData = true) {
		$tmpDir = rtrim(sys_get_temp_dir(), DIRECTORY_SEPARATOR);

		if (!is_writable($tmpDir)) {
			throw new Exception($tmpDir . ' is not writeable.');
		}

		$configFileName = $tmpDir . DIRECTORY_SEPARATOR . 'my.cnf.tmp';

		if (file_put_contents($configFileName, '') === false) {
			throw new Exception('Failed to write file: ' . $configFileName);
		}

		if (chmod($configFileName, 0600) === false) {
			throw new Exception('Failed to change ' . $configFileName . ' file mode to 0600.');
		}

		$configFileContent = '[mysqldump]' . PHP_EOL
			. 'host = "' . $host . '"' . PHP_EOL
			. 'user = "' . $user . '"' . PHP_EOL
			. 'password = "' . $password . '"';

		if (file_put_contents($configFileName, $configFileContent) === false) {
			throw new Exception('Failed to write file content: ' . $configFileName);
		}

		$command = $bin . ' --defaults-extra-file=' . $configFileName;

		if ($withData === false) {
			$command .= ' --no-data';
		}

		$command .= ' ' . $database;

		$output = array ();
		$return = null;

		exec($command, $output, $return);

		if (unlink(realpath($configFileName)) === false) {
			throw new Exception('Failed to remove file: ' . $configFileName);
		}

		if ($return != 0) {
			if ($return === null) {
				$displayReturn = 'null';
			} else {
				$displayReturn = $return;
			}

			throw new Exception('Program exited with [' . $displayReturn . '] exit code. Command: ' . $command);
		}

		return implode(PHP_EOL, $output);
	}
}

