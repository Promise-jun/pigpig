<?php


    header("Access-Control-Allow-Origin:*");
    header('Content-type:text/html;charset=utf-8');
    $id = isset($_GET["id"])?$_GET["id"]:0;

    $ch = curl_init();
    $url = 'http://apis.baidu.com/tngou/info/show?id='.$id;
    $header = array(
        'apikey: 38d367dac33e4ff4bef61a501da3afd8',
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);

   echo $res;
?>