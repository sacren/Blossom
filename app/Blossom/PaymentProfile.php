<?php

namespace App\Blossom;

class PaymentProfile
{
    /**
     * PaymentProfile constructor.
     *
     * @param public int $id
     */
    public function __construct(
        public int $id = rand(),
    ) { }
}
