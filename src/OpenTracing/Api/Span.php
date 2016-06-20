<?php declare(strict_types=1);

namespace Madkom\OpenTracing\Api;

/**
 * Interface Span
 * A Span represents a logical unit of work in the system that has a start time and a duration.
 * <p> Spans may be nested and ordered to model parent-child and causal relationships.
 * @package Madkom\OpenTracing\Api
 * @author  Dariusz Gafka <d.gafka@madkom.pl>
 * @link http://opentracing.io/spec/#the-span-interface
 */
interface Span
{
    /**
     * Sets the end timestamp and records this span
     *
     * <p> This should be last call made to any span instance, and to do otherwise leads to
     * undefined behaviour.
     *
     * @return void
     */
    public function finish();

    /**
     * Sets key:value tag on this
     *
     * @param Tag $tag
     *
     * @return void
     */
    public function setTag(Tag $tag);

    /**
     * @param string $eventName
     * @param array  $payload
     *
     * @return void
     */
    public function log(string $eventName, array $payload);

    /**
     * @param string $eventName
     * @param array  $payload
     * @param float  $timestampMicroSeconds
     *
     * @return void
     */
    public function logInPast(string $eventName, array $payload, float $timestampMicroSeconds);

    /**
     * @param BaseBaggageItem $baggageItem
     */
    public function setBaggageItem(BaseBaggageItem $baggageItem);

    /**
     * Returns Madkom\OpenTracing\Api\Baggage\BaggageItem, if found.
     *
     * <p>Returns Madkom\OpenTracing\Api\Baggage\EmptyBaggageItem, if item not found.
     *
     * @param string $key
     *
     * @return BaseBaggageItem
     */
    public function getBaggageItem(string $key) : BaseBaggageItem;

    /**
     * Retyrbs Tracer that have created this span
     *
     * @return Tracer
     */
    public function getTracer() : Tracer;
}