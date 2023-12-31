<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/onesignal/post/question/api',
        '/onesignal/report/question/api',
        '/onesignal/contact/api',
        '/onesignal/examcount/initiate/api',
        '/onesignal/examcount/complete/api',
    ];
}
