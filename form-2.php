<?php
$to = "clinic@g-dental.ru";
$from = "clinic@g-dental.ru";
$successPage = "index.html";

$name = $_POST['name'];
$email = $_POST['email'];
$subject = 'Отзыв с сайта Gentle Dental';
$phone1 = $_POST['phone1'];
$phone2 = $_POST['phone2'];
$phone3 = $_POST['phone3'];
$info = $_POST['info'];

$name = stripslashes($name);
$email = stripslashes($email);
$info = stripslashes($info);
$phone1 = stripslashes($phone1);
$phone2 = stripslashes($phone2);
$phone3 = stripslashes($phone3);
$phoneNumber = $phone1 . $phone2 . $phone3;
$message = "Имя: $name <br /> Email: $email <br />Номер: $phoneNumber <br />Отзыв: $info";
$headers = array
(
    'Content-Type: text/html; charset="UTF-8";',
    'From: ' . $from,
    'Reply-To: ' . $from,
    'Return-Path: ' . $from,
);

if (empty($name) || empty($email) || empty($info)){
    print "Поля не должны быть пустыми.<br>Пожалуйста заполните все поля.";
}
elseif (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
    print "Вы ввели неверный адрес электронной почты.";
}
else {
    mail($to, $subject, $message, implode("\r\n", $headers));
    header("Location: $successPage");
}
?>