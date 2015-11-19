<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ClothesSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Clothes');
    }

    function it_removes_clothes()
    {
        $this->removeClothes();
        $this->getCleanClothes()->shouldBe(0);
        $this->getDirtyClothes()->shouldBe(0);
    }
}
