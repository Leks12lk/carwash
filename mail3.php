<?php

$recepient = "wascher.mco@gmail.com";
$sitename = "Пантограф";
$formname = "3";


$username = trim($_GET["username3"]);
$phone = trim($_GET["phone3"]);

$pagetitle = "Новое сообщение с сайта \"$sitename\" Форма $formname";
$message = "Имя: $username \nТелефон: $phone";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

