<?php
var_dump(filemtime('order.php'));
clearstatcache();
if (is_file('index.html')){
    echo 111;
    require_once 'index.html';
}else{
    echo 222;
    require_once 'one.php';
}