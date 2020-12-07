<?php

declare(strict_types=1);

namespace Jerowork\RouteAttributeProvider\Api;

interface RequestMethod
{
    public const GET     = 'GET';
    public const POST    = 'POST';
    public const PUT     = 'PUT';
    public const PATCH   = 'PATCH';
    public const DELETE  = 'DELETE';
    public const OPTIONS = 'OPTIONS';
}
