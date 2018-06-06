<?php

$curl = curl_init("http://localhost/WEB-32018/buesnis/json_posts.json");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($curl);
curl_close($curl);
echo $data;