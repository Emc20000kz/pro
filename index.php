<?php
include('function.php');
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $data = file_get_contents('php://input');
    echo api($data);
} else {
    echo "{\"errors\":[{\"code\":0,\"message\":\"The requested resource does not support http method 'GET'.\"}]}";
}
