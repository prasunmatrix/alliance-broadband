<?php
require_once './vendor/autoload.php';
require_once './class-db.php';
  
define('GOOGLE_CLIENT_ID', '5666103032-lsqqqi5qb47oj5ikei15ep2au7tr4rq7.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', 'WyvEGqAdeRKtY_DehQf5hRar');
  
$config = [
    'callback' => 'https://alliancebroadband.co.in/alliance-spreadsheet/callback.php',
    'keys'     => [
                    'id' => GOOGLE_CLIENT_ID,
                    'secret' => GOOGLE_CLIENT_SECRET
                ],
    'scope'    => 'https://www.googleapis.com/auth/spreadsheets',
    'authorize_url_parameters' => [
            'approval_prompt' => 'force', // to pass only when you need to acquire a new refresh token.
            'access_type' => 'offline'
    ]
];
  
$adapter = new Hybridauth\Provider\Google( $config );