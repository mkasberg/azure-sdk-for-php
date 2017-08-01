<?php
namespace Microsoft\Rest\Internal\Path;

final class ConstPathPart extends PathPartAbstract
{
    /**
     * @param string $value
     */
    function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @var string
     */
    private $value;
}