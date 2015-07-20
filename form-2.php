<?php
$to = "heliogracie@mail.ru";
$successPage = "index.html";

$name = $_POST['name'];
$from = $_POST['email'];
$subject = 'Акция с сайта Gentle Dental';
$phone1 = $_POST['phone1'];
$phone2 = $_POST['phone2'];
$phone3 = $_POST['phone3'];

$name = stripslashes($name);
$from = stripslashes($from);
$phone1 = stripslashes($phone1);
$phone2 = stripslashes($phone2);
$phone3 = stripslashes($phone3);
$phoneNumber = $phone1 . $phone2 . $phone3;
$message = "Имя: $name <br /> Email: $from <br />Номер: $phoneNumber";
$headers = array
(
    'Content-Type: text/html; charset="UTF-8";',
    'From: ' . $from,
    'Reply-To: ' . $from,
    'Return-Path: ' . $from,
);

if (empty($name) || empty($from) || empty($phone1) || empty($phone2) || empty($phone3)){
    print "Поля не должны быть пустыми.<br>Пожалуйста заполните все поля.";
}
elseif (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$from)) {
    print "Вы ввели неверный адрес электронной почты.";
}
else {
    mail($to, $subject, $message, implode("\r\n", $headers));
    header("Location: $successPage");
}
?>