<?php

return [
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
    ], // PostgreSQL
];