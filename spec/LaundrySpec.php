<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Writer;

class LaundrySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Laundry');
    }

    function it_cleans_clothes()
    {
        $this->cleanClothes();
        $this->getClothes()->getDirtyClothes()->shouldBe(0);
    }

    function it_counts_clothes()
    {
        $this->getClothes()->setCleanClothes(5);
        $this->getClothes()->setDirtyClothes(6);
        $this->countClothes()->shouldBe(11);
    }

// Unsuccessful mock

//    function it_outputs_information(Writer $writer)
//    {
//        $writer->writeText("Hi, there are 0 clean closes and 0 dirty clothes in the laundry.")->shouldBeCalled();
//        $this->getInformation("Hi", $writer);
//    }
}
