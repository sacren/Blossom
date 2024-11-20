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
        private ?PaymentProfile $paymentProfile = null,
    ) { }

    /**
     * Get payment profile
     *
     * @return PaymentProfile|null
     */
    public function getPaymentProfile(): ?PaymentProfile
    {
        return $this->paymentProfile;
    }
}
