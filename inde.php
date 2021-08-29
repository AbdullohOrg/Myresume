<!DOCTYPE html>
<html lang="ru_RU">
  <head>
    <meta charset="utf-8"/>
    <title>Форма с отправкой данных в Телеграм</title>
    <meta name='author' content="Дмитрий Давыдов" />
    <meta name='copyright' content="https://smartlanding.biz/otpravka-dannyx-formy-v-telegram.html" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div class="contact-form__wrapper">
      <form id="form-contact" method="POST" class="contact-form" autocomplete="off" enctype="multipart/form-data">
        <p class="contact-form__title">Закажите обратный звонок и наш консультант свяжется с вами</p>
        <p class="contact-form__message"></p>
          <div class="contact-form__input-wrapper contact-form__input-wrapper_name">
            <input name="name" type="text" class="contact-form__input contact-form__input_name" tabindex="0" placeholder="Введите ваше имя">
          </div>
          <div class="contact-form__input-wrapper contact-form__input-wrapper_phone">
          <input name="phone" type="tel" class="contact-form__input contact-form__input_phone" tabindex="0" placeholder="Введите ваш телефон">
          </div>
          <div class="contact-form__input-wrapper">
            <input type="file" name="file" id="contact-form__input_file" class="contact-form__input contact-form__input_file">
            <label for="contact-form__input_file" class="contact-form__file-button">
                <span class="contact-form__file-text">Выберите файл</span>
            </label>
          </div>
          <input name="theme" type="hidden" class="contact-form__input contact-form__input_theme"  value="Заявка с сайта">
          <button type="submit" class="contact-form__button">Отправить</button>
      </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/telegramform/js/telegramform.js"></script>
    <script>
        let inputs = document.querySelectorAll('.contact-form__input_file');
        Array.prototype.forEach.call(inputs, function (input) {
          let label = input.nextElementSibling,
            labelVal = label.querySelector('.contact-form__file-text').innerText;
      
          input.addEventListener('change', function (e) {
            let countFiles = '';
            if (this.files && this.files.length >= 1)
              countFiles = this.files.length;
      
            if (countFiles)
              label.querySelector('.contact-form__file-text').innerText = 'Выбрано файлов: ' + countFiles;
            else
              label.querySelector('.contact-form__file-text').innerText = labelVal;
          });
        });
    </script>
    

  </body>
</html>