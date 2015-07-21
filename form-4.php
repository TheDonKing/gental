<?php
$to = "clinic@g-dental.ru";
$from = "clinic@g-dental.ru";
$successPage = "index.html";

$subject = 'Акция бесплатные услуги с сайта Gentle Dental';
$phoneNumber = $_POST['phoneNumber'];

$phoneNumber = stripslashes($phoneNumber);
$message = "Номер: $phoneNumber";
$headers = array
(
    'Content-Type: text/html; charset="UTF-8";',
    'From: ' . $from,
    'Reply-To: ' . $from,
    'Return-Path: ' . $from,
);

if (empty($phoneNumber)){
    print "Поля не должны быть пустыми.<br>Пожалуйста заполните все поля.";
}
else {
    mail($to, $subject, $message, implode("\r\n", $headers));
    header("Location: $successPage");
}
?>