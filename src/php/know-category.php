<?php
    header("Access-Control-Allow-Origin:*");
    header('Content-type:text/html;charset=utf-8');
    $ch = curl_init();
    $url = 'http://apis.baidu.com/tngou/lore/classify';
    $header = array(
        'apikey: f096da0053f19ee05a5adb0b28a64095',
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);

     echo $res;
?>