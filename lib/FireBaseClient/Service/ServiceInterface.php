<?php

namespace FireBaseClient\Service;

use Itav\Component\Serializer\Serializer;

/**
 * Interface ServiceInterface
 * @package FireBaseClient\Service
 */
interface ServiceInterface
{
    /**
     * ServiceInterface constructor.
     * @param Service $service
     * @param Serializer $serializer
     */
    function __construct(Service $service, Serializer $serializer);
}