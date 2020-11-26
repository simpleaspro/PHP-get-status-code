<?php


    $url = 'https://jsonplaceholder.typicode.com/comments';

    $param = 'postId=1';

    $fullUrl = $url.'?'.$param;
    $curlHanlder = curl_init();
    curl_setopt($curlHanlder, CURLOPT_URL, $fullUrl);
    curl_setopt($curlHanlder, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($curlHanlder);
    $http_status_code = curl_getinfo($curlHanlder, CURLINFO_HTTP_CODE);
    echo 'data : '. $data;
    echo '<br> Status code : '. $http_status_code;
    curl_close($curlHanlder);

?>