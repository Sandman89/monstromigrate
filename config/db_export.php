<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=217.28.220.246;dbname=monstrotest',
    'username' => 'monstrotestuser',
    'password' => 'pP5cU9hVpP5cU9hV8q8q',
    'charset' => 'utf8',
    'schemaMap' => [
        'pgsql' => [
            'class' => 'yii\db\pgsql\Schema',
            'defaultSchema' => 'public' //specify your schema here, public is the default schema
        ]
    ], // PostgreSQL
];