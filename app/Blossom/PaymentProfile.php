<?php

namespace App\Blossom;

class PaymentProfile
{
    /**
     * PaymentProfile constructor.
     *
     * @property int $id The unique identifier for the payment profile
     */
    public function __construct(
        public int $id = 0,
    ) {
        $this->id = rand();
    }
}
