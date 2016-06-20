<?php declare(strict_types=1);

namespace Madkom\OpenTracing\Api;

use Madkom\OpenTracing\Api\Exception\IllegalStateException;

/**
 * Interface
 * Tracer represents the potentially distributed, potentially concurrent data/execution path in a (potentially distributed, potentially concurrent) system.
 * <p> A Trace can be thought of as a tree of Spans
 * @package Madkom\OpenTracing\Api
 * @author  Dariusz Gafka <d.gafka@madkom.pl>
 * @link http://opentracing.io/spec/#the-tracer-interface
 */
interface Tracer
{

    /**
     * Create, start, and return a new Span with the given `operationName`.
     * An optional parent Span can be specified used to incorporate the newly-returned Span into an existing trace.
     *
     * <p>Example:
     * <pre>{
     *   Tracer tracer = ...
     *   Span feed = tracer->buildSpan("GetFeed")
     *      ->start();
     *   Span http = tracer->buildSpan("HandleHTTPRequest")
     *      ->withParent(feed)
     *      ->withTag("user_agent", req.UserAgent)
     *      ->withTag("lucky_number", 42)
     *      ->start();
     * }
     * </pre>
     *
     * @param string $operationName
     *
     * @return SpanBuilder
     */
    public function buildSpan(string $operationName) : SpanBuilder;

    /**
     *
     * @param Span    $span
     * @param Carrier $carrier a “carrier” object in which to inject that Span for cross-process propagation.
     *                         <pre> A “carrier” object is some sort of http or rpc envelope.</pre>
     *
     * @return void
     * @throws IllegalStateException Attempting to inject to a carrier that has been registered/configured to this Tracer will result in exception
     */
    public function inject(Span $span, Carrier $carrier);

    /**
     * Returns a SpanBuilder provided
     * <pre>
     * a “carrier” object from which to extract identifying information needed by the new Span instance.
     * </pre>
     * <pre>
     * If the carrier object has no such span stored within it, a new Span is created.
     * </pre>
     * <pre>
     * Unless there’s an error, it returns a SpanBuilder.
     * </pre>
     * <pre>
     * The Span generated from the builder can be used in the host process like any other.
     * </pre>
     *
     * @param Carrier $carrier
     *
     * @return SpanBuilder
     * @throws IllegalStateException If the span serialized state is invalid (corrupt, wrong version, etc) inside the carrier this will result in exception
     *                               <pre>If the span serialized state is invalid (corrupt, wrong version, etc) inside the carrier this will result in a exception</pre>
     */
    public function join(Carrier $carrier) : SpanBuilder;
}