<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TaxiSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Taxi');
    }

    function it_drives()
    {
        $this->drive();
        $this->getEarnings()[0]->shouldBe(5.00);
    }
}
