<?php
/**
 * Created by PhpStorm.
 * User: lucagiacalone
 * Date: 14/07/15
 * Time: 17:53
 */

namespace Formable\Tests\Integration\DTOs;

use Formable\Definition\Formable;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class TestNoPropertyNameDTO
{
    /**
     * @var
     *
     * @Formable(dataType=TextType::class, options={})
     */
    public $name;
}