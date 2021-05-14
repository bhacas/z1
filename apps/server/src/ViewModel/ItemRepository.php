<?php


namespace App\ViewModel;


interface ItemRepository
{

    public function getItemsInStock();

    public function getItemsOutOfStock();

    public function getItemsWithAmountGreaterThan(int $amount);

}