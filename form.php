<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    <title>Про мене</title>
</head>
<body>
<header>
    <nav>
        <ul class="menu">
            <li><a href="/">Головна</a></li>
            <li><a href="about.html">Про мене</a></li>
            <li><a href="contact.html">Контакти</a></li>
        </ul>
    </nav>

</header>
<section class="content">
    <h1>Ваше повідомлення</h1>
<?php
$name = $_GET['user'];
$email = $_GET['email'];
$text = $_GET['text'] ? $_GET['text']:'Ви не залишили повідомлення';

?>
    <p>Ваше імя - <?php echo $name; ?></p>
    <p>Ваш email - <?php echo $email; ?></p>
    <p>Текст- <?php echo $text; ?></p>
</section>



</body>
</html>



