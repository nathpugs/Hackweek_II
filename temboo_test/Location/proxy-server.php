<?php
// Require the core Temboo PHP SDK and required libraries
require_once('php-sdk/temboo.php');

// Instantiate the session and Choreo
$session = new Temboo_Session('nathpugs', 'myFirstApp', 'cbfsszYpcz9A2kEaabbHDR8KDmAsqEBI');
$geocodeByAddressChoreo = new Google_Geocoding_GeocodeByAddress($session);

// Act as a proxy on behalf of the JavaScript SDK
$tembooProxy = new Temboo_Proxy();

// Add Choreo proxy with an ID matching that specified by the JS SDK client
$tembooProxy->addChoreo('jsGeocodeByAddress', $geocodeByAddressChoreo);

// Set default input values
$tembooProxy->allowUserInputs('jsGeocodeByAddress', 'Address');

// Execute the Choreo
echo $tembooProxy->execute($_POST['temboo_proxy']);
?>
