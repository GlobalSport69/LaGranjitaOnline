<?php
    $today = date('Y-m-d');
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://api.caribeapuesta.com/loteries/results3?since='{$today}'&product=1"); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($ch, CURLOPT_HEADER, 0); 
    $json = curl_exec($ch); 
    curl_close($ch);
?>