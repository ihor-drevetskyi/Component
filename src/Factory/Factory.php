<?php

namespace ComponentBundle\Factory;

/**
 * Class Factory
 * Creates resources based on theirs FQCN.
 * @package ComponentBundle\Factory
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
final class Factory implements FactoryInterface
{
    /**
     * @var string
     * @psalm-var class-string
     */
    protected string $class_name;

    /**
     * Factory constructor.
     * @param string $class_name
     */
    public function __construct(string $class_name)
    {
        $this->class_name = $class_name;
    }

    /**
     * @return object
     */
    public function createNew(): object
    {
        return new $this->class_name();
    }
}
