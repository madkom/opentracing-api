<?php

namespace spec\Madkom\OpenTracing\Api\Baggage;

use Madkom\OpenTracing\Api\Baggage\EmptyBaggageItem;
use Madkom\OpenTracing\Api\BaseBaggageItem;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class EmptyBaggageItemSpec
 * @package spec\Madkom\OpenTracing\Api
 * @author  Dariusz Gafka <d.gafka@madkom.pl>
 * @mixin EmptyBaggageItem
 */
class EmptyBaggageItemSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith();
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(BaseBaggageItem::class);
    }

    public function it_should_return_values_it_was_constructed_with()
    {
        $this->key()->shouldReturn('');
        $this->value()->shouldReturn('');
        $this->isEmpty()->shouldReturn(true);
    }
}
