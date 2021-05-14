<?php
declare(strict_types=1);

namespace App\Serializer\Normalizer;

use App\ViewModel\Item;
use Symfony\Component\Serializer\Exception\CircularReferenceException;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Exception\LogicException;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ItemNormalizer implements NormalizerInterface
{

    public function normalize($object, string $format = null, array $context = [])
    {
        return [
            'id' => $object->getId(),
            'name' => $object->getName(),
            'amount' => $object->getAmount()
        ];
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof Item;
    }
}