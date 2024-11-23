<?php

declare(strict_types=1);

namespace App\Blossom\Paddle;

use DateTime;

class Transaction
{
    /**
     * Transaction constructor in Paddle.
     */
    public function __construct()
    {
        // object(App\Blossom\Paddle\CustomerProfile)#297 (0) { }
        var_dump(new CustomerProfile());
        echo '<br>';
        var_dump(new DateTime());
        echo '<br>';
        var_dump(explode(',', 'Hi, Paddle!')); // string(8) "Exploded"
        echo '<br>';
    }
}

/**
 * Function in local namespace.
 *
 * @param string $delimiter
 * @param string $string
 * @return string
 */
function explode(string $delimiter, string $string): string
{
    return 'Exploded';
}
