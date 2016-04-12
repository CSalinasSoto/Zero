<?php

session_start();

var_dump($_SESSION['cart']);

$whereIn = implode(',',$_SESSION['cart']);

$sql = "
SELECT * FROM product
WHERE id IN ($whereIn)
";

echo $sql;

?>