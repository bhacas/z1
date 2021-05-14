<?php
declare(strict_types=1);

namespace App\ViewModel;

/**
 * Class Item
 * @package App\ViewModel
 */
class Item
{

    /**
     * Item constructor.
     * @param int $id
     * @param string $name
     * @param int $amount
     */
    public function __construct(
        protected int $id,
        protected string $name,
        protected int $amount
    ) {}

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

}