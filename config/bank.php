<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Bank Details
    |--------------------------------------------------------------------------
    |
    | Set in app .env file and displayed on custom invoice template
    |
    */

    'sort_code' => env('SORT_CODE', 'Not given'),
    'account_number' => env('ACCOUNT_NUMBER', 'Not given')

);
