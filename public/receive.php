<?php

$postdata = file_get_contents("php://input");

file_put_contents("output.txt", var_export($postdata), FILE_APPEND);
