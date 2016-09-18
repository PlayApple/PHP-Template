<?php
//设置输出编码格式
    header('Content-Type:text/html;charset="UTF-8"');
     
    //引入模板配置文件
    require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'templates.inc.php';
     
    //实例化模版类
    $template = new Templates();
     
    //注入变量
    $template->assign('title', '自定义模板引擎');
    $template->assign('content', '自定义模板引擎文件！');
     
    //调用display方法
    $template->display('index.tpl');
?>
