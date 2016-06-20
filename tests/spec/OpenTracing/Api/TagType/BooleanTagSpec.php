<?php

namespace spec\Madkom\OpenTracing\Api\TagType;

use Madkom\OpenTracing\Api\Tag;
use Madkom\OpenTracing\Api\TagType\BooleanTag;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class BooleanTagSpec
 * @package spec\Madkom\OpenTracing\Api\TagType
 * @author  Dariusz Gafka <d.gafka@madkom.pl>
 * @mixin BooleanTag
 */
class BooleanTagSpec extends ObjectBehavior
{

    function let()
    {
        $this->beConstructedWith('key', true);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Tag::class);
    }

    function it_should_return_values_it_was_constructed_with()
    {
        $this->key()->shouldReturn('key');
        $this->value()->shouldReturn(true);
    }
}
