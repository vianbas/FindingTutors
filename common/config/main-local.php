<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
          'dsn' => 'mysql:host=ap-cdbr-azure-east-c.cloudapp.net;dbname=batak',
//            'dsn' => 'mysql:host=localhost;dbname=findtutor',
//            'username' => 'root',
//           'password' => '',           
            'username' => 'ba18dc2bb1a798',
            'password' => 'd4693502',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
