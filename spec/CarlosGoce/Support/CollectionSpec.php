<?php

namespace spec\CarlosGoce\Support;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CollectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('CarlosGoce\Support\Collection');
    }

    function it_should_add_items()
    {
        $this->shouldHaveCount(0);

        $this->add(new \stdClass());

        $this->shouldHaveCount(1);
    }

    function it_should_add_multiple_items_at_once()
    {
        $this->shouldHaveCount(0);

        $this->addMultiple(new \stdClass(), new \stdClass(), new \stdClass());

        $this->shouldHaveCount(3);
    }

    function it_should_throw_an_exception_when_mutiple_items_receive_0_elements()
    {
        $this->shouldThrow('CarlosGoce\Support\Exception\NoItemsException')->duringAddMultiple();
    }

}
