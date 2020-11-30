<?php 

//url aquispe
define('URL_SITIO', 'http://localhost/paypal/');

require 'paypal/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AVhoS7RkWBqwDCfysfFkp52r-5bGQM59O13oo8_ESB3EV_3TXnDSfefyz4vGU0rOJjQehUrdMW2-Gtm8',     // ClientID
        'EEPoDr-fg44B7jtnb5Q1Zmd_Qb4FyyBYDyfD7bZpJpTl1ljdpDGGVKVv6BE4hBUuih1m5vcOkzjvT-ll'      // ClientSecret
    )
);

