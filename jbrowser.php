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
jimport('joomla.environment.browser');
$browser = &JBrowser::getInstance();
$browserInfo = $browser->getBrowser();
$browserVersion = $browser->getVersion();

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

$browser = new JBrowser('Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)');

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

