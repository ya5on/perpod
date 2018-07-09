<?php
 
$recepient = "spaunfrom@gmail.com";
$sitename = "perlpod.com.ua";
 
$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$email = trim($_POST["email"]);
$message = "Ім`я: $name \nТелефон: $phone \nE-mail: $email";
 
$pagetitle = "Нова заявка з сайту \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
