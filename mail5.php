<?php

$recepient = "wascher.mco@gmail.com";
$sitename = "Пантограф";
$formname = "Купить";


$username = trim($_GET["username5"]);
$phone = trim($_GET["phone5"]);
$buy = trim($_GET["pantograph"]);

$pagetitle = "Новое сообщение с сайта \"$sitename\" Форма $formname";
$message = "Имя: $username \nТелефон: $phone \nПантограф: $buy";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

