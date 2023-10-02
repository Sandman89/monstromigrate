<p align="center">
    <h1 align="center">Перекачка профилей для Monstro</h1>
    <br>
</p>

Сделано на основе Yii2 фреймворка с простым коносльным экншом. Да это не лучший способ решения подобных задач, не хватило времени для более элегантного снятия нужного дампа.

Установка
------------

1. Ставим пакет в нужную вам папку. 

2. Обновляем архив через composer из корня папки

~~~
composer update
~~~


Важные файлы для изменения конфигов
-------------------

      monstromigrate/config/db_import.php   Настройки подключения к бд откуда перекачиваем профили
      monstromigrate/config/db_export.php   Настройки подключения к бд куда перекачиваем профили
      monstromigrate/commands/MonstroController.php        Экшн который делаем весь процесс. Можно поправить его, там настройки селекта какие профили брать ( из какой party и т.д.)

переходим в файл monstromigrate/config/db_import.php - здесь будут:

```php
 [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=185.154.195.69;dbname=default_db',
    'username' => 'gen_user',
    'password' => 'kXIF+*m3[W<2!o',
    'charset' => 'utf8',
    'schemaMap' => [
        'pgsql' => [
            'class' => 'yii\db\pgsql\Schema',
            'defaultSchema' => 'public' //specify your schema here, public is the default schema
        ]
    ], 
];
```
меняем host
меняем dbname
меняем username
меняем password

### переходим monstromigrate/commands/MonstroController.php

Тут ActiveRecord Yii2 

Меняем в выражении where нужные нам параметры. В данном примере стоит party = 'group2' и domaincount > 200

Можно закоментировать строку с удалением профиля в исходной таблице.


Запуск
-------------------

запускаем из корня php yii monstro

~~~
php yii monstro
~~~

или можно засунить в кронтаб раз в сутки в определенное время

~~~
/usr/bin/php /путь/до/пакета/monstromigrate/yii monstro
~~~
