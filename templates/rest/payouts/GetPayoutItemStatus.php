<?php

require_once('../../../autoload.php');
require_once('../../../includes/config.php');

$configArray = array(
    'ClientID' => $rest_client_id,
    'ClientSecret' => $rest_client_secret
);

$PayPal = new angelleye\PayPal\rest\payouts\PayoutsAPI($configArray);

//## Payout Item ID you get when you create Mass payment single/batch.

$payoutItemId='';                  //The ID of the Payout Item for which to show details.

$returnArray = $PayPal->get_payout_item_status($payoutItemId);
echo "<pre>";
var_dump($returnArray);
?>