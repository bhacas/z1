<?php

namespace App\Repository;

use App\Entity\Item;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Interface ItemRepository
 * @package App\Repository
 */
interface ItemRepository
{
    /**
     * @return ArrayCollection|Item[]
     */
    public function findByAmountZero();

    /**
     * @return ArrayCollection|Item[]
     */
    public function findByAmountGtZero();

    /**
     * @param $amount
     * @return ArrayCollection|Item[]
     */
    public function findByAmountGt($amount);
}