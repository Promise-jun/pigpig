<?php
    header("Access-Control-Allow-Origin:*");
    header('Content-type:text/html;charset=utf-8');

    $id = isset($_GET["id"])?$_GET["id"]:1;
    $ch = curl_init();
    $url = 'http://apis.baidu.com/tngou/drug/show?id='.$id;
    $header = array(
        'apikey: 1043a562ecfd7c5605b79f79891099c1',
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);

    echo $res;
?>