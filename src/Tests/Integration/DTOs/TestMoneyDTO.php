<?php

namespace Formable\Tests\Integration\DTOs;

use Formable\Definition\Formable;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class TestMoneyDTO
{
    /**
     * @var String
     *
     * @Formable(name="currency", dataType=TextType::class)
     */
    public $currency;

    /**
     * @var Integer
     *
     * @Formable(name="value", dataType=IntegerType::class)
     */
    public $value;
}
