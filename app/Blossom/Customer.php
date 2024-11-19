<?php

namespace App\Blossom;

use App\Blossom\PaymentProfile;

class Customer
{
    /**
     * Customer constructor.
     *
     * @param public PaymentProfile|null $paymentProfile
     */
    public function __construct(
        public ?PaymentProfile $paymentProfile = null,
    ) { }
}
