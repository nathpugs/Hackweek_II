<?php
// Require the core Temboo PHP SDK and required libraries
require_once('php-sdk/temboo.php');

// Instantiate the session and Choreo
$session = new Temboo_Session('nathpugs', 'myFirstApp', 'cbfsszYpcz9A2kEaabbHDR8KDmAsqEBI');
$getTemperatureChoreo = new Yahoo_Weather_GetTemperature($session);

// Act as a proxy on behalf of the JavaScript SDK
$tembooProxy = new Temboo_Proxy();

// Add Choreo proxy with an ID matching that specified by the JS SDK client
$tembooProxy->addChoreo('jsGetTemperature', $getTemperatureChoreo);

// Set default input values
$tembooProxy->allowUserInputs('jsGetTemperature', 'Address')->allowUserInputs('jsGetTemperature', 'Units');

// Execute the Choreo
echo $tembooProxy->execute($_POST['temboo_proxy']);
?>
