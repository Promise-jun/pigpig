
<?php
     header("Access-Control-Allow-Origin:*");
    //乱码
    header('Content-type:text/html;charset=utf-8');
    @$id = isset($_GET["id"])?$_GET["id"]:1;
    @$page = isset($_GET["page"])?$_GET["page"]:1;
    @$rows = isset($_GET["rows"])?$_GET["rows"]:12;
    $ch = curl_init();
    $url = 'http://apis.baidu.com/tngou/book/list?id='.$id.'&page='.$page.'&rows='.$rows;
    $header = array(
        'apikey: ad94d3cd50af402c0635628b37f8414e',
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);
    echo $res;
?>

