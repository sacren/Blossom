<?php
declare(strict_types=1);

namespace App\Blossom;

class Transaction
{
    private float $amount;
    private string $description;

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

    /**
     * Get the amount
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * Get the description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}
