<?php
$customerDBName = "dev_logique";
$mysqli = mysqli_connect('localhost','dev','jogja','dev_logique');

$base_url           = "http://logique-web.static.logique.co.id/";

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
