### Get Started

1. git clone https://github.com/Antoshka007/php_dz5
2. composer install
3. bower install
4. создайте папку config в корне проекта с файлом main.php

Содержание файла main.php

```
<?php
return array(
    'captcha' => array(
        'google_recaptcha_secret'     => 'Секретный ключ',
        'google_recaptcha_public'     => 'Публичный ключ',
        'google_recaptcha_script_url' => 'https://www.google.com/recaptcha/api.js',
        'google_recaptcha_url_check'  => 'https://www.google.com/recaptcha/api/siteverify'
    ),
    'email' => array(
        'adminemail' => 'Ваш email',
        'adminname'  => 'Ваше имя - администратор сайта LoftShop',
        'adminpassword' => 'Ваш пароль от почты'
    )
);
?>
```