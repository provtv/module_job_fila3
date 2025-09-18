<?php

declare(strict_types=1);

return [
    'facebook' => [
        'client_id' => env('FACEBOOK_CLIENT_ID'),
        'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
<<<<<<< HEAD
        'redirect' => env('FACEBOOK_REDIRECT_URL'),
=======
        'redirect' => env('FACEBOOK_REDIRECT_URI'),
>>>>>>> 688d0704 (first)
    ],
    'twitter' => [
        'client_id' => env('TWITTER_CLIENT_ID'),
        'client_secret' => env('TWITTER_CLIENT_SECRET'),
<<<<<<< HEAD
        'redirect' => env('TWITTER_REDIRECT_URL'),
=======
        'redirect' => env('TWITTER_REDIRECT_URI'),
>>>>>>> 688d0704 (first)
    ],
    'instagram' => [
        'client_id' => env('INSTAGRAM_KEY'),
        'client_secret' => env('INSTAGRAM_SECRET'),
        'redirect' => env('INSTAGRAM_REDIRECT_URI'),
    ],
    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
<<<<<<< HEAD
        'redirect' => env('GOOGLE_REDIRECT_URL'),
    ],
    'netfun' => [
        'token' => env('NETFUN_TOKEN'),
    ],
    'newsapi' => [
        'app_key' => env('NEWSAPI_APP_KEY'),
=======
        'redirect' => env('GOOGLE_REDIRECT_URI'),
    ],

    'netfun' => [
        'token' => env('NETFUN_TOKEN'),
    ],
    'telegram-bot-api' => [
        'token' => env('TELEGRAM_BOT_TOKEN', 'YOUR BOT TOKEN HERE'),
        'bot_url' => env('TELEGRAM_BOT_URL'),
        'webhook' => env('TELEGRAM_BOT_WEBHOOK'),
>>>>>>> 688d0704 (first)
    ],
];
