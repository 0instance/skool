<?php
require_once 'auth.php';

header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($_GET['p']).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
readfile($_GET['p']);