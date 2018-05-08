<?php
ob_start();

require_once 'order.php';
file_put_contents('index.html',ob_get_contents());

