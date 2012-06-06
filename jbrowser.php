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

/* Browser play */
jimport('joomla.application.web');
$browser = new JApplicationWebClient();

echo '<label>[user-agent]:</label>' . $browser->__get('userAgent') . '<br/>';
echo '<label>[version]: </label>' . $browser->__get('browserVersion') . '<br/>';
echo '<label>[system and browser information]: </label>' . $browser->__get('browser') . '<br/>';
echo '<label>[platform]:</label>' . $browser->__get('platform') . '<br/>';
echo '<label>[platform details]:</label>' . $browser->__get('engine')  . '<br/>';
echo '<label>[extensions]:</label>' . '-' . '<br/>';
echo '<label>[are we robots?]: </label>' . 'no more in JApplicationWebClient' . '<br/>';

echo '<br/><br/>';

jimport('joomla.environment.browser');
$browser = new JBrowser('Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.168 Safari/535.19');

echo '<label>[user-agent]:</label>' . $browser->getAgentString() . '<br/>';
echo '<label>[version]: </label>' . $browser->getVersion() . '<br/>';
echo '<label>[system and browser information]: </label>' . $browser->getBrowser() . '<br/>';
echo '<label>[platform]:</label>' . $browser->getPlatform() . '<br/>';
echo '<label>[platform details]:</label>' . '-' . '<br/>';
echo '<label>[extensions]:</label>' . '-' . '<br/>';
if ($browser->isRobot())
	echo '<label>[are we robots?]: </label>' . 'yes' . '<br/>';
else
	echo '<label>[are we robots?]: </label>' . 'no' . '<br/>';

echo '<br/><br/>';

?>

<a href="index.php">Back</a>

</html>

