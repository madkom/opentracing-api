<?php declare(strict_types=1);

namespace Madkom\OpenTracing\Api;

/**
 * Interface SpanBuilder
 * @package Madkom\OpenTracing\Api
 * @author  Dariusz Gafka <d.gafka@madkom.pl>
 */
interface SpanBuilder
{

    /**
     * Specify operation name
     *
     * @param string $operationName
     *
     * @return SpanBuilder
     */
    public function withOperationName(string $operationName) : SpanBuilder;

    /**
     * Specify parent Span
     *
     * @param Span $span
     *
     * @return SpanBuilder
     */
    public function withParent(Span $span) : SpanBuilder;

    /**
     * @param Tag $tag
     *
     * @return SpanBuilder
     */
    public function withTag(Tag $tag) : SpanBuilder;

    /**
     * @param float $microseconds
     *
     * @return SpanBuilder
     */
    public function withStarTimestamp(float $microseconds) : SpanBuilder;

    /**
     * Returns the started Span
     *
     * @return Span
     */
    public function start() : Span;
}