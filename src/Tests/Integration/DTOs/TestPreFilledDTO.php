<?php

namespace Formable\Tests\Integration\DTOs;

use Formable\Definition\Formable;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class TestPreFilledDTO
{
    /**
     * @var TestMoneyDTO
     *
     * @Formable(name="money", class=TestMoneyDTO::class)
     */
    public $money;

    /**
     * @var \DateTime
     *
     * @Formable(name="date", dataType=DateTimeType::class)
     */
    public $date;
}
