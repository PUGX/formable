<?php

namespace Formable\Tests\Integration\DTOs;

use Formable\Definition\Formable;

class TestNestedDTO
{
    /**
     * @var
     *
     * @Formable(name="moneyDTO", class=TestMoneyDTO::class)
     */
    public $moneyDTO;
}
