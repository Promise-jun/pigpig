<?php
    header("Access-Control-Allow-Origin:*");
    //乱码
    header('Content-type:text/html;charset=utf-8');

    //可以通过$_GET['id']去获取url里的参数
    @$id=$_GET['id']?$_GET['id']:0;
    @$page=$_GET['page']?$_GET['page']:1;
    @$rows=$_GET['rows']?$_GET['rows']:12;

    $ch = curl_init();
    $url = 'http://apis.baidu.com/tngou/ask/list?id='.$id.'&page='.$page.'&rows='.$rows;
    $header = array(
        'apikey: 5a759eeaf0bb3079efc6ea5f0c3c35c6',
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);

    echo $res;
?>