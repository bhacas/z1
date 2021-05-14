<?php
declare(strict_types=1);


namespace App\ViewModel;


class ItemRepositoryImpl implements ItemRepository
{

    public function __construct(
        private \App\Repository\ItemRepository $itemRepository
    ) {}

    public function getItemsInStock()
    {
        $items = $this->itemRepository->findByAmountGtZero();
        $out = [];

        foreach ($items as $item) {
            $out[] = new Item($item->getId(), $item->getName(), $item->getAmount());
        }

        return $out;
    }

    public function getItemsOutOfStock()
    {
        // TODO: Implement getItemsOutOfStock() method.
    }

    public function getItemsWithAmountGreaterThan(int $amount)
    {
        // TODO: Implement getItemsWithAmountGreaterThan() method.
    }
}