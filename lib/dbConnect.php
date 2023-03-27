<?php
/** setting **/
define('BASEURL' , 'http://localhost/shop');
define('BASEPATH', dirname(__FILE__) . '/');
define('PATH_URL', 'http://localhost/shop');
define('PATH_URL_IMG', PATH_URL.'/public/upload/images/');
define('PATH_URL_IMG_PRODUCT', PATH_URL. '/public/upload/product/');

$ketnoi['Server']['name'] = 'localhost:3306';
$ketnoi['Database']['dbname'] = 'shop';
$ketnoi['Database']['username'] = 'root';
$ketnoi['Database']['password'] = 'admin';
@mysql_connect(
    "{$ketnoi['Server']['name']}",
    "{$ketnoi['Database']['username']}",
    "{$ketnoi['Database']['password']}")
or
die("Can not connect database");
@mysql_select_db(
    "{$ketnoi['Database']['dbname']}")
or
die("Can not connect database");
mysql_query("SET NAMES utf8");