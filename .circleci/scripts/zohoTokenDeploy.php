<?php

use zcrmsdk\oauth\utility\ZohoOAuthTokens;
use zcrmsdk\oauth\ZohoOAuth;

include_once __DIR__ . '/../../vendor/autoload.php';

$logDirectory = getenv('APPLICATION_LOG_FILE_PATH');
$tokenDirectory = getenv('TOKEN_PERSISTENCE_PATH');

$zohoClient = new \Wabel\Zoho\CRM\ZohoClient( [
    'client_id' => getenv('CLIENT_ID'),
    'client_secret' => getenv('CLIENT_SECRET'),
    'redirect_uri' => getenv('REDIRECT_URI'),
    'currentUserEmail' => getenv('CURRENT_USER_EMAIL'),
    'applicationLogFilePath' => $logDirectory,
    'apiBaseUrl' => '',
    'apiVersion' => '',
    'access_type' => '',
    'accounts_url' => 'https://accounts.zoho.com',
    'persistence_handler_class' =>  getenv('PERSISTENCE_HANDLER_CLASS'),
    'token_persistence_path' => $tokenDirectory
], getenv('ZOHO_TIMEZONE'));


$zohoClient->initCLient();
$hackGenerateToken = new ZohoOAuthTokens();
$hackGenerateToken->setRefreshToken(getenv('ZOHO_REFRESH_TOKEN'));
$hackGenerateToken->setAccessToken(getenv('ZOHO_ACCESS_TOKEN'));
$hackGenerateToken->setExpiryTime(getenv('ZOHO_EXPIRE_TIME'));
$hackGenerateToken->setUserEmailId(getenv('ZOHO_USER_EMAIL_ID'));
ZohoOAuth::getPersistenceHandlerInstance()->saveOAuthData($hackGenerateToken);