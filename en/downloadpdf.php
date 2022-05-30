<?php
 header('Content-disposition: attachment; filename=Company_Profile_-_EN-Version.pdf');
 header('Content-type: application/pdf');
 readfile('download/Company_Profile_-_EN-Version.pdf');
 ?>