<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = $_POST['name'];
    $number = $_POST['number'];

    // Почтовые настройки
    $to = "dazai1317@mail.ru"; // Адрес, на который будет отправлено письмо
    $subject = "Новое сообщение с сайта";

    // Сообщение, которое отправится
    $message_content = "Имя: " . $name . "\n";
    $message_content .= "Номер: " . $number . "\n";

    // Заголовки письма
    $headers = "From: " . $number;

    // Отправляем письмо
    if (mail($to, $subject, $message_content, $headers)) {
        echo "Сообщение отправлено успешно!";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
}
?>
