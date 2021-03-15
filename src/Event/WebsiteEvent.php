<?php

namespace ComponentBundle\Event;

use Symfony\Contracts\EventDispatcher\Event;

/**
 * Class WebsiteEvent
 * @package ComponentBundle\Event
 * @author Ihor Drevetskyi <ihor.drevetskyi@gmail.com>
 */
class WebsiteEvent extends Event
{
    /**
     * @var object
     */
    protected object $object;

    /**
     *
     */
    public const CREATE = 'entity.create';

    /**
     *
     */
    public const UPDATE = 'entity.update';

    /**
     *
     */
    public const DELETE = 'entity.delete';

    /**
     *
     */
    public const ERROR  = 'entity.error';

    /**
     * WebsiteEvent constructor.
     * @param object $object
     */
    public function __construct(object $object)
    {
        $this->object = $object;
    }

    /**
     * @return object
     */
    public function getObject(): object
    {
        return $this->object;
    }
}
