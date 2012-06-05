<html>

<head>

	<title>Environment Subpackage - JBrowser</title>
	<style>
		label{
			float: left;
			width: 300px;
		}
	</style>

</head>

<?php

// Bootstrap the application.
$path = getenv('WEBSERVICE_HOME');
if ($path)
{
	require_once $path . '/bootstrap.php';
}
else
{
	require_once realpath(__DIR__ . '/bootstrap.php');
}

/* URI play */
jimport('joomla.environment.uri');


?>

<a href="index.php">Back</a>

</html>

