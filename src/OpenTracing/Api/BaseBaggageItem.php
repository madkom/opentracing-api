<?php declare(strict_types=1);

namespace Madkom\OpenTracing\Api;

/**
 * Interface BaseBaggeItem
 * @package Madkom\OpenTracing\Api
 * @author  Dariusz Gafka <d.gafka@madkom.pl>
 * @link http://opentracing.io/spec/#baggage
 */
interface BaseBaggageItem
{

    /**
     * @return string
     */
    public function key() : string;

    /**
     * @return string
     */
    public function value() : string;

    /**
     * @return bool
     */
    public function isEmpty() : bool;
    
}