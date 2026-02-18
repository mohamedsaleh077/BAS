<?php

if ($_SERVER['HTTP_HOST'] === "api.basuyandsell.com"){
    echo 'Welcome to API';
} else {
    echo 'Hi user!';
}
echo "<br>";
echo $_SERVER['HTTP_HOST'];