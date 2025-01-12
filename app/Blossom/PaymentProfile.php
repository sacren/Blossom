<?php

namespace App\Blossom;

class PaymentProfile
{
    /**
     * PaymentProfile constructor.
     *
     * @property $id The unique identifier for the payment profile
     */
    public function __construct(
        public $id = null,
    ) {
        $this->id = rand();
    }
}
