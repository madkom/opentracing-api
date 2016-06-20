<?php

namespace spec\Madkom\OpenTracing\Api\Exception;

use Madkom\OpenTracing\Api\Exception\IllegalStateException;
use Madkom\OpenTracing\Api\OpenTracingException;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Class IllegalStateExceptionSpec
 * @package spec\Madkom\OpenTracing\Api\Exception
 * @author  Dariusz Gafka <d.gafka@madkom.pl>
 * @mixin IllegalStateException
 */
class IllegalStateExceptionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(OpenTracingException::class);
    }
}
