<?php

/**
 * This class has been generated by dagger-php-sdk. DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dagger;

/**
 * Expected return type of an execution
 */
enum ReturnType: string
{
    /** A successful execution (exit code 0) */
    case SUCCESS = 'SUCCESS';

    /** A failed execution (exit codes 1-127) */
    case FAILURE = 'FAILURE';

    /** Any execution (exit codes 0-127) */
    case ANY = 'ANY';
}
