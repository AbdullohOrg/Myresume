<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */
$_POST = array_map(function($var){
return htmlspecialchars($var, ENT_QUOTES);
}, $_POST);
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$file =  $_POST['file'];
$feed = $_POST['text'];
$male = $_POST['a'];
$location = $_POST['s'];
$world = $_POST['v'];
$token = "1997902113:AAEtPEDkTnQkK0fliYl_tKLtL5YxqajqP-s";
$chat_id = "-492218021";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email: ' => $email,
  'Пол: ' => $male,
  'Location: ' => $location,
  'Страна: ' => $world,
  // 'Файл: ' => $file,
  'Oтзыв: ' => $feed,
  
);
$email_from = 'travelingboy17org@gmail.com';//<== update the email address
$email_subject = "Zlg - Сообщение с формы";
$email_body = "Имя: $name.\n". "Номер телефона: $phone \n".
    "Сообщение: $text \n". "Документ: $file \n".
    
$to = "travelingboy17org@gmail.com";//<== update the email address
$headers = "From: $email_from \r\n";
mail($to,"=?UTF-8?B?".base64_encode($email_subject)."?=",$email_body,$headers);
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>