<?php

declare(strict_types=1);

namespace BusFactor\JsonSchema\Model;

class Schema
{
    public function __construct(public readonly Type $type)
    {
    }
}
