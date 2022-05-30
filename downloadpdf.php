<?php
 header('Content-disposition: attachment; filename=Company_Profile_ID.pdf');
 header('Content-type: application/pdf');
 readfile('download/Company_Profile_ID.pdf');
 ?>