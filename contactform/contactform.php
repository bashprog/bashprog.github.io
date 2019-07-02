<?php
    header("Access-Control-Allow-Origin: *");
    $val = $_POST;
    echo json_encode($val);
?>