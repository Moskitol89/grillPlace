<?php
$mailName = $_POST["mail-name"];
$mailEmail = $_POST["mail-email"];
$mailTel = $_POST["mail-tel"];
$mailText = $_POST["mail-text"];

$mailName = htmlspecialchars($mailName);
$mailEmail = htmlspecialchars($mailEmail);
$mailTel = htmlspecialchars($mailTel);
$mailText = htmlspecialchars($mailText);

$mailName = urldecode($mailName);
$mailEmail = urldecode($mailEmail);
$mailTel = urldecode($mailTel);
$mailText = urldecode($mailText);

$mailName = trim($mailName);
$mailEmail = trim($mailEmail);
$mailTel = trim($mailTel);
$mailText = trim($mailText);

mail("abdula.myausovich@mail.ru", "Grill-place footer form", "Name: ".$mailName."\r\nE-mail: ".$mailEmail."\r\nTel: ".$mailTel."\r\nText: ".$mailText);
?>