<?php declare(strict_types=1);

namespace Madkom\OpenTracing\Api\Baggage;

use Madkom\OpenTracing\Api\BaseBaggageItem;

/**
 * Class EmptyBaggageItem
 * @package Madkom\OpenTracing\Api
 * @author  Dariusz Gafka <d.gafka@madkom.pl>
 * @link http://opentracing.io/spec/#baggage
 */
class EmptyBaggageItem implements BaseBaggageItem
{
    /**
     * @inheritdoc
     */
    public function key() : string
    {
        return '';
    }

    /**
     * @inheritdoc
     */
    public function value() : string
    {
        return '';
    }

    /**
     * @inheritdoc
     */
    public function isEmpty() : bool
    {
        return true;
    }
}
