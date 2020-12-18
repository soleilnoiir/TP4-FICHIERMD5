<?php 

$salt = "10503";
for($i = 1; $i < 101; $i++){
    $generatedtoken = md5('$salt' . $i);
    echo $generatedtoken;
    echo "<br>";
}
