<?php

namespace Formable\Tests\Integration\DTOs;

use Formable\Definition\Formable;

class TestExtraFieldDTO
{
    public $id;

    /**
     * @var \DateTime
     *
     * @Formable(name="date", dataType="datetime")
     */
    public $date;
}
