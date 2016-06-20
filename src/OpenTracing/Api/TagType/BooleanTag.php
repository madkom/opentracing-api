<?php declare(strict_types=1);

namespace Madkom\OpenTracing\Api\TagType;

use Madkom\OpenTracing\Api\Tag;

/**
 * Class BooleanTag
 * @package Madkom\OpenTracing\Api\TagType
 * @author  Dariusz Gafka <d.gafka@madkom.pl>
 */
class BooleanTag implements Tag
{
    /**
     * @var string
     */
    private $key;
    /**
     * @var bool
     */
    private $value;

    /**
     * BooleanTag constructor.
     *
     * @param string $key
     * @param bool   $value
     */
    public function __construct(string $key, bool $value)
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
     * @return bool
     */
    public function value() : bool
    {
        return $this->value;
    }
}
