<?php

$recepient = "wascher.mco@gmail.com";
$sitename = "Пантограф";
$formname = "4";


$username = trim($_GET["username4"]);
$phone = trim($_GET["phone4"]);

$pagetitle = "Новое сообщение с сайта \"$sitename\" Форма $formname";
$message = "Имя: $username \nТелефон: $phone";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

