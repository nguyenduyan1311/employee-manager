<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $action = $_POST['actions'];
    echo "__> ".$action . " <__";
}