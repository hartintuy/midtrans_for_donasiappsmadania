<?php

$environment = false;
$api_url = $environment ?
'https://app.midtrans.com/snap/v1/transactions' : 'https://app.sandbox.midtrans.com/snap/v1/transactions';

$server_key = $environment ?
'Mid-server-M2FgFg5sdDA1AF_H_50-ChAa' : 'SB-Mid-server-noR8rOAjS-ciXlSZz6TkPmTu';

?>