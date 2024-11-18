<?php
declare(strict_types=1);

namespace App\Blossom;

class Transaction
{
    private string $description;

    /**
     * Transaction constructor.
     *
     * @param private float $amount
     * @param string $description
     */
    public function __construct(
        private float $amount, // amount property promoted
        string $description
    ) {
        $this->description = $description;
    }

    /**
     * Transaction destructor
     */
    public function __destruct()
    {
        echo 'Destruct: ' . $this->description . '<br>';
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

    /**
     * Add tax
     *
     * @param float $rate
     * @return $this
     */
    public function addTax(float $rate): Transaction
    {
        $this->amount += $this->amount * $rate / 100;

        return $this;
    }

    /**
     * Apply discount
     *
     * @param float $rate
     * @return $this
     */
    public function applyDiscount(float $rate): Transaction
    {
        $this->amount -= $this->amount * $rate / 100;

        return $this;
    }
}
