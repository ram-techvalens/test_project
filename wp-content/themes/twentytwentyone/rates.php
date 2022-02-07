<?php
/**
 * Template Name: Rates
 *
 * */


$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://api.easyship.com/v2/rates",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"origin_address\":{\"line_1\":\"Indore\",\"state\":\"Madhya Pradesh\",\"city\":\"Indore\",\"postal_code\":\"452001\"},\"destination_address\":{\"line_1\":\"Indore\",\"state\":\"Madhya Pradesh\",\"city\":\"Indore\",\"postal_code\":\"452001\",\"country_alpha2\":\"IN\"},\"incoterms\":\"DDU\",\"insurance\":{\"is_insured\":\"false\"},\"courier_selection\":{\"apply_shipping_rules\":\"true\"},\"shipping_settings\":{\"units\":{\"weight\":\"kg\",\"dimensions\":\"cm\"}},\"parcels\":[{\"total_actual_weight\":\"1.0\",\"box\":{\"slug\":\"ups-ups-25kg-box\",\"length\":50,\"width\":45,\"height\":34}}]}",
  CURLOPT_HTTPHEADER => [
    "Accept: text/plain",
    "Authorization: Bearer prod_y3gHG128DxyzDb+9itKs8HFBuEsmtznbEVpNU61VSbY=",
    "Content-Type: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>
<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
<a data-pin-do="buttonBookmark" data-pin-tall="true" href="https://www.pinterest.com/pin/create/button/"></a>