<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$color = $_POST['color'];
$size = $_POST['size'];
$comment = $_POST['comment'];
$token = "5221635268:AAEPRmf-w3qpIJhKXW7JARyQPA4quU7d_gE";
$chat_id = "-725031655";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Цвет' => $color,
  'Размер' => $size,
  'Модель:' => $comment
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram && $sendToTelegram2) {
  header('Location: thanks.html');
} else {
  echo "Error";
}
?>