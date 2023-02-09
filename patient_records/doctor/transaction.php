<?php
$amount = '1'; //Amount to transact
$phonenuber = '07XXXXXXXX'; // Phone number paying start with 07
$Account_no = 'Kitui Referral'; // Enter account number optional
$url = 'https://tinypesa.com/api/v1/express/initialize';
$data = array(
    'amount' => $amount,
    'msisdn' => $phonenuber,
    'account_no' => $Account_no
);
$headers = array(
    'Content-Type: application/x-www-form-urlencoded',
    'ApiKey: 3xGAHrUhQ6E' // Replace with your api key
);
$info = http_build_query($data);
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $info);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$resp = curl_exec($curl);
if ($resp === false) {
    echo "CURL ERROR: " . curl_error($curl);
}
$msg_resp = json_decode($resp);

if ($msg_resp ->success == 'true') {
    echo "WAIT FOR NEVEREST STK POP UP";
}
?>