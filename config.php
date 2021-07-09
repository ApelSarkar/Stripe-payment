<?php
require_once 'vendor/autoload.php';
$Publishable_key = 'pk_test_51JAy9oEOH2QAlGRbCa3kcNSpM5mKxpbsfggiJVpqGZV2nUkwLSiA389X63il9Zk042P9giH0Qvzu1fWr078kgyL700xXifsD3X';

$Secret_key = 'sk_test_51JAy9oEOH2QAlGRbhzldH71Z8mltYdus2sEiYIyIowEHHMFBPg0IHhTLCz7270FlD7VMHvfAn76JnE2yOAEf5kyO004oMmAG1d';

\Stripe\Stripe::setApiKey($Secret_key);
