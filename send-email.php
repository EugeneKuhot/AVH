<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Почтовый ящик, на который отправляются данные формы
    $to = "eugenekuhot@gmail.com";

    // Тема письма
    $subject = "New Form Submission";

    // Текст письма
    $message = "Name: $name\nEmail: $email\nPhone: $phone";

    // Отправка письма
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>
