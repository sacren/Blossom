<?php

declare(strict_types=1);

namespace App\Blossom;

class ArrayAndObject
{
    private string $str;

    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->str = '{"a":1,"b":2,"c":3}';
    }

    /**
     * Convert string to array.
     *
     * @return array
     */
    public function toArray(): array
    {
        return json_decode($this->str, true);
    }

    /**
     * Convert string to object.
     *
     * @return object
     */
    public function toObject(): object
    {
        return json_decode($this->str);
    }
}
