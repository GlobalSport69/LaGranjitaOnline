<?php
    $url = "https://api.telegram.org/bot5812920613:AAHXBgIYmzTor6zKB4P-ptoSAf0LtFtTsVI/sendMessage";
    //var_dump($_POST['text']);exit;
    $data = array(
        'chat_id' => 5812920613,
        'message' => '<message>'
    );
    $options = array(
        'http' => array(
            'method' => 'POST',
            'header' => 'Content-Type: application/x-www-form-urlencoded',
            'content' => http_build_query($data)
        )
    );
    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
