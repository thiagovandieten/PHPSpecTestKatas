<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MovieSpec extends ObjectBehavior
{
    function Let()
    {
        $this->beConstructedWith('Back to the Future');
        $this->shouldHaveType('Movie');
    }

    function it_can_be_rated()
    {
        $this->setRating(5);

        $this->getRating()->shouldBe(5);
    }

    public function its_rating_should_not_exceed_five()
    {
        $this->shouldThrow('InvalidArgumentException')->duringsetRating(8);
    }

    public function it_can_be_marked_as_watched()
    {
        $this->watch();

        $this->shouldBeWatched();
    }

    public function it_can_fetch_the_title_of_the_movie()
    {
        $this->getTitle()->shouldBe('Back to the Future');
    }
}
