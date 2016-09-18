# PHP-Template
A simple use template for php

##项目结构：

* index.php：主文件，要调用的文件。
* templates.inc.php：模板配置文件。
* cache：目录：存放静态缓存文件。
* config：目录：配置文件，模板引擎的系统变量。
    *   profile.xml：用于模板引擎中的系统变量。
* includes：目录：核心文件
    *  Parser.class.php：解析类，用于解析模板文件中的变量，将模板中的变量转换为php代码。
    *  Template.class.php：模板类，提供调用的方法，注入变量，显示模板文件。
* templates：目录：存放模板文件。
* templates_c：目录：存放编译文件，通过解析类解析后的文件，其中的代码，是html与php代码结合，相当于平时的混写PHP文件。

![img](https://github.com/PlayApple/PHP-Template/blob/master/tree.png)
