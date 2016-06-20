<?php declare(strict_types=1);

namespace Madkom\OpenTracing\Api;

/**
 * Interface Tag - Base interface for specific tags
 * @package Madkom\OpenTracing\Api
 * @author  Dariusz Gafka <d.gafka@madkom.pl>
 * @link http://opentracing.io/spec/#tags
 */
interface Tag
{

    /**
     * @return string
     */
    public function key() : string;

    /**
     * @return string|boolean|float
     */
    public function value();
    
}