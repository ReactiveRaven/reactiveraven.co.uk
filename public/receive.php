<?php

$postdata = file_get_contents("php://input");

file_put_contents("output.txt", "testing", FILE_APPEND);

file_put_contents("output.txt", var_export($postdata, true), FILE_APPEND);
file_put_contents("output.txt", var_export($_POST, true), FILE_APPEND);
file_put_contents("output.txt", var_export($_SERVER, true), FILE_APPEND);
