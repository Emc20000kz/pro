<?php
function api($data)
{
    $proxyauth = 'bqblfndo:m3i4ftzj7lts';
    $post_fields = $data;
    $proxy = array("209.127.191.180:9279", "45.94.47.108:8152", "45.95.99.20:7580", "45.95.96.132:8691");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://auth.roblox.com/v2/login");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
    curl_setopt($ch, CURLOPT_PROXY, $proxy[rand(0, 3)]);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "-d: " . $post_fields,
        "Content-Type: application/json;charset=UTF-8"
    ));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($ch);
    return $result;
}
