<html>

<head>

	<title>Environment Subpackage - JResponse</title>
	<style>
		label{
			float: left;
			width: 200px;
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

/* Response play */
jimport('joomla.environment.response');

JResponse::setHeader('header1','header1 body');
JResponse::setHeader('header2','header2 body');
echo '<label>Headers:</label>';
print_r(JResponse::getHeaders());
echo '<br/>';

JResponse::setBody(' Body ');
JResponse::prependBody('Prepend');
JResponse::appendBody('Append');
echo '<label>Body:</label>';
print_r(JResponse::getBody());
echo '<br/>';

echo JResponse::toString();

?>

<br/><br/>
<a href="index.php">Back</a>

</html>

