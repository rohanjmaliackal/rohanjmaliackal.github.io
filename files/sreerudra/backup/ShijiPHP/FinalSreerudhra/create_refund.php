<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/refunds/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:d82016f839e13cd0a79afc0ef5b288b3",
                  "X-Auth-Token:3827881f669c11e8dad8a023fd1108c2"));
$payload = Array(
    'payment_id' => 'MOJO5a06005J21512197',
    'type' => 'QFL',
    'body' => "Customer isn't satisfied with the quality"
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

echo $response;

?>


{
   "refund": {
        "id": "C5c0751269",
        "payment_id": "MOJO5a06005J21512197",
        "status": "Refunded",
        "type": "QFL",
        "body": "Customer isn't satisfied with the quality",
        "refund_amount": "2500.00",
        "total_amount": "2500.00",
        "created_at": "2015-12-07T11:01:37.640Z"
    },
    "success": true
}