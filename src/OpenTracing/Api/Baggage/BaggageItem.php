<?php declare(strict_types=1);

namespace Madkom\OpenTracing\Api\Baggage;

use Madkom\OpenTracing\Api\BaseBaggageItem;

/**
 * Class BaggageItem
 * @package Madkom\OpenTracing\Api
 * @author  Dariusz Gafka <d.gafka@madkom.pl>
 * @link http://opentracing.io/spec/#baggage
 */
class BaggageItem implements BaseBaggageItem
{
    /**
     * @var string
     */
    private $key;
    /**
     * @var string
     */
    private $value;

    /**
     * BaggageItem constructor.
     *
     * @param string $key
     * @param string $value
     */
    public function __construct(string $key, string $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function key() : string
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function value() : string
    {
        return $this->value;
    }

    /**
     * @return bool
     */
    public function isEmpty() : bool
    {
        return false;
    }
}
