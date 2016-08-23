<?php
/**
 * Created by PhpStorm.
 * User: toretto
 * Date: 25/05/15
 * Time: 17:03
 */

namespace spec\Formable\Generator;

use Formable\Definition\Formable;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class TestDTO
{
    /**
     * @var
     *
     * @Formable(name="name", dataType=TextType::class, options={})
     */
    public $name;
}
