<?php declare(strict_types=1);

namespace Madkom\OpenTracing\Api\TagType;

use Madkom\OpenTracing\Api\Tag;

/**
 * Class StringTag
 * @package Madkom\OpenTracing\Api\TagType
 * @author  Dariusz Gafka <d.gafka@madkom.pl>
 */
class StringTag implements Tag
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
     * StringTag constructor.
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
}