<?php

return [
<<<<<<< HEAD

    /*
     * Use this setting to enable the cookie consent dialog.
     */
    'enabled' => env('COOKIE_CONSENT_ENABLED', true),

    /*
     * The name of the cookie in which we store if the user
     * has agreed to accept the conditions.
     */
    'cookie_name' => 'laravel_cookie_consent',

    /*
     * Set the cookie duration in days.  Default is 365 * 20.
     */
    'cookie_lifetime' => 365 * 20,
];
=======
    'cookie_key' => '__cookie_consent',
    'cookie_value_analytics' => '2',
    'cookie_value_marketing' => '3',
    'cookie_value_both' => 'true',
    'cookie_value_none' => 'false',
    'cookie_expiration_days' => '365',
    'gtm_event' => 'cookie_refresh',
    'ignored_paths' => [],
    'policy_url_en' => env('COOKIE_POLICY_URL_EN', null),
    'policy_url_fr' => env('COOKIE_POLICY_URL_FR', null),
    'policy_url_nl' => env('COOKIE_POLICY_URL_NL', null),
];
>>>>>>> 688d0704 (first)
