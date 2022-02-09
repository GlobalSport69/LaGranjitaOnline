<?php

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://api.caribeapuesta.com/loteries/results3?since=2022-02-07&product=1'); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($ch, CURLOPT_HEADER, 0); 
    $json = curl_exec($ch); 
    curl_close($ch);
?>