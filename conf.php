<?php
$customerDBName = "dev_logique";
$mysqli = mysqli_connect('localhost','dev','jogja','dev_logique');
$jasper_path     = '/home/dev/public_html/static/logique-web/';

$base_url           = "http://logique-web.static.logique.co.id/";

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
