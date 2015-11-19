<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Laundry;

class CleanerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Cleaner');
    }

    function it_cleans_persons_clothes(Laundry $clothes)
    {
        $this->cleanClothes($clothes)->shouldReturn($clothes);
    }
}
