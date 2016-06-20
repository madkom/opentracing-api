<?php declare(strict_types=1);

namespace Madkom\OpenTracing\Api\TagType;

use Madkom\OpenTracing\Api\Tag;

/**
 * Class NumberTag
 * @package Madkom\OpenTracing\Api\TagType
 * @author  Dariusz Gafka <d.gafka@madkom.pl>
 */
class IntegerTag implements Tag
{
    /**
     * @var string
     */
    private $key;
    /**
     * @var int
     */
    private $value;

    /**
     * NumericTag constructor.
     *
     * @param string $key
     * @param int    $value
     */
    public function __construct(string $key, int $value)
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
     * @return int
     */
    public function value() : int
    {
        return $this->value;
    }
}
