<?php

    header("Access-Control-Allow-Origin:*");
    //乱码
    header('Content-type:text/html;charset=utf-8');
    $ch = curl_init();
    $url = 'http://apis.baidu.com/tngou/food/classify?id=0';
    $header = array(
        'apikey: caca2f5b1f032ed5af52e9cef45e5689',
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);

    echo $res;
?>