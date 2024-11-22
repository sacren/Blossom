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
    }
}
