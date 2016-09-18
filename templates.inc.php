<?php
    //创建网站根目录常量
    define('ROOT_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
    //模板文件目录
    define('TPL_DIR', ROOT_PATH . 'templates' . DIRECTORY_SEPARATOR);
    //编译文件目录
    define('TPL_C_DIR', ROOT_PATH . 'templates_c' . DIRECTORY_SEPARATOR);
    //缓存目录
    define('CACHE', ROOT_PATH . 'cache' . DIRECTORY_SEPARATOR);
    //是否开启缓存
    define('IS_CACHE', true);
    IS_CACHE ? ob_start() : NULL;
     
    //引入模板类
    require ROOT_PATH . 'includes' . DIRECTORY_SEPARATOR . 'Template.class.php';
?>