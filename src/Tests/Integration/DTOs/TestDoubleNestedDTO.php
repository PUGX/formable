<?php

namespace Formable\Tests\Integration\DTOs;

use Formable\Definition\Formable;

class TestDoubleNestedDTO
{
    /**
     * @var
     *
     * @Formable(name="nestedDTO", class=TestNestedDTO::class)
     */
    public $nestedDTO;
}
