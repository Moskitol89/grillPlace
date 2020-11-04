<?php
$reserveName = $_POST["reserve-name"];
$reserveTel = $_POST["reserve-tel"];
$reserveText = $_POST["reserve-text"];
$reserveDate = $_POST["reserve-date"];
$reserveTime = $_POST["reserve-time"];
$reserveNumber = $_POST["reserve-count"];


$reserveName = htmlspecialchars($reserveName);
$reserveTel = htmlspecialchars($reserveTel);
$reserveText = htmlspecialchars($reserveText);
$reserveDate = htmlspecialchars($reserveDate);
$reserveTime = htmlspecialchars($reserveTime);
$reserveNumber = htmlspecialchars($reserveNumber);

$reserveName = urldecode($reserveName);
$reserveTel = urldecode($reserveTel);
$reserveText = urldecode($reserveText);
$reserveDate = urldecode($reserveDate);
$reserveTime = urldecode($reserveTime);
$reserveNumber = urldecode($reserveNumber);

$reserveName = trim($reserveName);
$reserveTel = trim($reserveTel);
$reserveText = trim($reserveText);
$reserveDate = trim($reserveDate);
$reserveTime = trim($reserveTime);
$reserveNumber = trim($reserveNumber);

mail("abdula.myausovich@mail.ru", "Grill-place reserve form", "Name: ".$reserveName.
 "\r\nTel: ".$reserveTel. "\r\nText: ".$reserveText.
 "\r\nDate: " .$reserveDate. "\r\nTime: " .$reserveTime. "\r\nClients number: " .$reserveNumber);
?>