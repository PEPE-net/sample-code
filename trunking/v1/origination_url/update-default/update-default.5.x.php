<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once '/path/to/vendor/autoload.php';

use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/console
$sid    = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
$token  = "your_auth_token";
$twilio = new Client($sid, $token);

$origination_url = $twilio->trunking->v1->trunks("TRXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                        ->originationUrls("OUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                        ->update(array("weight" => 1));

print($origination_url->friendlyName);