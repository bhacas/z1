<?php

namespace App\Controller;

use App\ViewModel\ItemRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class ItemController extends AbstractController
{

    public function __construct(private ItemRepository $itemRepository)
    {
    }

    /**
     * @Route("/items", name="items")
     */
    public function index(): Response
    {
        $items = $this->itemRepository->getItemsInStock();

        return $this->json($items);
    }
}
