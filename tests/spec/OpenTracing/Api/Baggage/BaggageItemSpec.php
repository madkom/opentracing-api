<?php

namespace spec\Madkom\OpenTracing\Api\Baggage;

use Madkom\OpenTracing\Api\Baggage\BaggageItem;
use Madkom\OpenTracing\Api\BaseBaggageItem;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class BaggageItemSpec
 * @package spec\Madkom\OpenTracing\Api
 * @author  Dariusz Gafka <d.gafka@madkom.pl>
 * @mixin BaggageItem
 */
class BaggageItemSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('key', 'value');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(BaseBaggageItem::class);
    }

    function it_should_return_values_it_was_constructed_with()
    {
        $this->key()->shouldReturn('key');
        $this->value()->shouldReturn('value');
        $this->isEmpty()->shouldReturn(false);
    }
}
