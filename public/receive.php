<?php

$postdata = file_get_contents("php://input");

file_put_contents("output.txt", var_export($postdata), FILE_APPEND);
file_put_contents("output.txt", var_export($_POST), FILE_APPEND);
file_put_contents("output.txt", var_export($_SERVER), FILE_APPEND);
