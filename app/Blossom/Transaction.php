<?php
declare(strict_types=1);

namespace App\Blossom;

class Transaction
{
    public float $amount;
    public string $description;

    /**
     * Transaction constructor.
     *
     * @param float $amount
     * @param string $description
     */
    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
    }
}
