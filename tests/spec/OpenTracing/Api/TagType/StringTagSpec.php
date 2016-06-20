<?php

namespace spec\Madkom\OpenTracing\Api\TagType;

use Madkom\OpenTracing\Api\Tag;
use Madkom\OpenTracing\Api\TagType\StringTag;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class StringTagSpec
 * @package spec\Madkom\OpenTracing\Api\TagType
 * @author  Dariusz Gafka <d.gafka@madkom.pl>
 * @mixin StringTag
 */
class StringTagSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('somestring', 'value');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Tag::class);
    }

    function it_should_return_values_it_was_constructed_with()
    {
        $this->key()->shouldReturn('somestring');
        $this->value()->shouldReturn('value');
    }
}
