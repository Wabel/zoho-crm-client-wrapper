Wabel's Zoho-CRM Client Wrapper [![CircleCI](https://circleci.com/gh/rbergDrox/zoho-crm-client-wrapper/tree/ci/tests.svg?style=svg)](https://circleci.com/gh/rbergDrox/zoho-crm-client-wrapper/tree/ci/tests)
====================

It's a migration and extraction from [zoho-crm-orm](https://github.com/Wabel/zoho-crm-orm/tree/1.2) for using the API v2 

What is this?
-------------

This project is a PHP wrapper for  ZOHO CRM Client ([zcrm-php-sdk](https://github.com/zoho/zcrm-php-sdk)). Use this connector to access ZohoCRM data from your PHP application.

Initialize the client?
-------------------------------------

Targetting the correct Zoho API
-------------------------------

Out of the box, the client will point to the `https://crm.zoho.com/crm/private` endpoint.
If your endpoint is different (some users are pointing to `https://crm.zoho.eu/crm/private`), you can
use the third parameter of the `Client` constructor:

```php
$zohoClient = new ZohoClient([
    'client_id' => 'xxxxxxxxxxxxxxxxxxxxxx',
    'client_secret' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
    'redirect_uri' => 'http://xxxxxxxxx.com/bakcxxxx',
    'currentUserEmail' => 'xxxxx@test.fr',
    'applicationLogFilePath' => '/xxx/xxx/',
    'apiBaseUrl' => '',
    'apiVersion' => '',
    'access_type' => '',
    'accounts_url' => '', // Need this one during token generation.
    'persistence_handler_class' => '',
    'token_persistence_path' => ''
], 'Europe/Paris');
```  

Zoho CRM Commands
-------------------------------------
The project also comes with a Symfony Command.

The command's constructor takes `ZohoClient` as a parameter.

Usage:

```sh
# Command to generate access token
$ console zohocrm:client generate-access-token xxxxxxx
```

Setting up unit tests
---------------------

Interested in contributing? You can easily set up the unit tests environment:
Read how to change the client configuration - read [Configuration](https://github.com/zoho/zcrm-php-sdk)
- copy the `phpunit.xml.dist` file into `phpunit.xml`
- change the stored environment variable `CLIENT_ID`
- change the stored environment variable `CLIENT_SECRET`
- change the stored environment variable `REDIRECT_URI`
- change the stored environment variable `CURRENT_USER_EMAIL`
- change the stored environment variable `APPLICATION_LOG_FILE_PATH`
- change the stored environment variable `PERSISTENCE_HANDLER_CLASS`
- change the stored environment variable `TOKEN_PERSISTENCE_PATH`
- change the stored environment variable `USERID_TEST`
- change the stored environment variable `ZOHO_TIMEZONE`
- change the stored environment variable `DEAL_STATUS`
- change the stored environment variable `CAMPAIGN_TYPE`
- change the stored environment variable `FILEPATH_TEST_UPLOAD`
