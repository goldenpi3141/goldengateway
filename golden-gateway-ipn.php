<?php
$data = $_POST;
// don't change verify url
$verify_url = 'https://main.moiraipay.com/api/v1/moirai/ipn_verify';

$data['seller'] = "0x6820f09A26256cAEde98eA4Cdc51618D27070245";
$data['amount'] = 0.55;


$post = http_build_query($data);
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $verify_url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
$answer = curl_exec($curl);
curl_close($curl);

if ($answer == 'VERIFIED'){
    // verify ok
    // Your source code
}else{
    //verify fails
}