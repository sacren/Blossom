<?php

declare(strict_types=1);

namespace App\Blossom;

use App\Blossom\Customer;

class Transaction
{
    /**
     * Transaction constructor.
     *
     * @param private float $amount
     * @param string $description
     */
    public function __construct(
        private float $amount, // amount property promoted
        private ?string $description = null, // promote description with default null
        private ?Customer $customer = null,
    ) { }

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
     * Get the customer
     *
     * @return Customer|null
     */
    public function getCustomer(): ?Customer
    {
        return $this->customer;
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
