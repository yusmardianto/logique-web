<?php
$customerDBName = "dev_logique";
$mysqli = mysqli_connect('localhost','dev','jogja','dev_logique');

$base_url           = "http://logique-web.static.logique.co.id/";
$secret = "6LcuHywUAAAAAEfJ-sZem8CzGVYIUMcxoT0jRhtW";
$sitekey = "6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp";

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
