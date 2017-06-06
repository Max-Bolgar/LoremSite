<?php

$recepient = "makc00766@gmail.com";
$sitename = "Lorem";

$name = trim($_GET["name"]);
$phone = trim($_GET["phone"]);
$email = trim($_GET["email"]);
$country = trim($_GET["country"]);
$textarea = trim($_GET["textarea"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nТелефон: $phone \nПочта: $email \nСтрана: $country \nТекст: $textarea";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset= utf-8 \n From: $recepient");