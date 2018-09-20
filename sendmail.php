<?php
session_start();

require 'functions.php';

if (isset($_POST['name'], $_POST['phone'])) {

	$subject = 'Новая заявка от Sidra'; // Subject of your email
	$to = 'fard40@mail.ru issayev.adilet@gmail.com';  //Recipient's E-mail

	$name = clear_data($_POST['name']);
	$phone = clear_data($_POST['phone']);

    $notifications = validate($_POST, [
        'name' => 'length-min:2|length-max:80',
        'phone' => 'required|length-min:5|length-max:40',
    ]);

    if (count($notifications) > 0)
    {
        $_SESSION['notifications'] = $notifications;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        die();
    }

	$message = '<b>Имя : ' . $name . "</b><br>";
	$message .= '<b>Номер : ' . $phone . "</b><br>";
    $message .= "<b>Дата: " . date('Y-m-d') . "</b><br>";
    $message .= "<b>Время: " . date('G:i') . "</b>";

    $headers = "From: info@sidra.kz \r\n" .
               "MIME-Version: 1.1" . "\r\n" . 
               "Content-type: text/html; charset=UTF-8" . "\r\n";

	if (mail($to, $subject, $message, $headers)) {

        $_SESSION['status'] = 'alert-success';
        $_SESSION['message'] = 'Ваша заявка принято. Спасибо!';
	}
	else {

        $_SESSION['status'] = 'alert-danger';
        $_SESSION['message'] = 'Произошла ошибка!';
	}

    header('Location: '.$_SERVER['HTTP_REFERER']);
    exit();
}
