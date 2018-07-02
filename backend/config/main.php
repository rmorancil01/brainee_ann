<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'topics' => [
            'class' => 'backend\modules\topics\Topics',
        ],
		'announcements' => [
            'class' => 'backend\modules\announcements\Announcements',
        ],
        'about' => [
            'class' => 'backend\modules\abouts\About',
        ],
        'events' => [
            'class' => 'backend\modules\events\Events',
        ],
        'geolocation' => [
            'class' => 'backend\modules\geolocation\Geolocation',
        ],
        'socialmedia' => [
            'class' => 'backend\modules\socialmedia\Socialmedia',
        ],
        'contactus' => [
            'class' => 'backend\modules\contactus\Contactus',
        ],
        'braineeabouts' => [
            'class' => 'backend\modules\braineeabouts\Braineeabouts',
        ],
        'schools' => [
            'class' => 'backend\modules\schools\Schools',
        ],

    ],
    'components' => [
        'db' => [
        'class' => '\yii\db\Connection',
        'dsn' => 'mysql:host=127.0.0.1;dbname=brainee_announcement',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
    ],
    
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];
