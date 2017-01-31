<?php

include 'getItems.php';
$result = RetrieveItems("https://catalog-madriddemo.mybluemix.net/items");
if (isset(json_decode($result)->errno)) {
    http_response_code(500);
}
echo $result;

?>

