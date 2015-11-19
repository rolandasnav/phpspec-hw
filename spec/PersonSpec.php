<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Laundry;
use Cleaner;

class PersonSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Person');
    }

    function let()
    {
        $this->beConstructedWith('jonas','jonaitis');
    }

    function it_sets_persons_dirty_clothes()
    {
        $this->setDirtyClothes(array('shorts','pants'));
    }

    function it_sends_clothes_to_cleaners(Cleaner $cleaner)
    {
        $this->sendToClean($cleaner);
    }



}
